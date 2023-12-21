// Capturando el DIV alerta y mensaje
var alerta = document.getElementById("alerta");
var mensaje = document.getElementById("mensaje");

// Permitir sólo números en el imput
function isNumber(evt) {
    var charCode = evt.which ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode === 75)
        return false;

    return true;
}

function checkRut(rut) {
    if (rut.value.length <= 1) {
        alerta.classList.remove("alert-success", "alert-danger");

        alerta.classList.add("alert-info");
        mensaje.innerHTML =
            "Ingrese un RUT en el siguiente campo de texto para validar si es correcto o no";
    }

    // Obtiene el valor ingresado quitando puntos y guión.
    var valor = clean(rut.value);

    // Divide el valor ingresado en dígito verificador y resto del RUT.
    cuerpo = valor.slice(0, -1);
    dv = valor.slice(-1).toUpperCase();

    // Separa con un Guión el cuerpo del dígito verificador.
    rut.value = format(rut.value);

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if (cuerpo.length < 7) {
        rut.setCustomValidity("RUT Incompleto");
        alerta.classList.remove("alert-success", "alert-danger");
        alerta.classList.add("alert-info");
        mensaje.innerHTML =
            "Ingresó un RUT muy corto, el RUT debe ser mayor a 7 Dígitos. Ej: x.xxx.xxx-x";
        return false;
    }

    // Calcular Dígito Verificador "Método del Módulo 11"
    suma = 0;
    multiplo = 2;

    // Para cada dígito del Cuerpo
    for (i = 1; i <= cuerpo.length; i++) {
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if (multiplo < 7) {
            multiplo = multiplo + 1;
        } else {
            multiplo = 2;
        }
    }

    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    dv = dv == "K" ? 10 : dv;
    dv = dv == 0 ? 11 : dv;

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if (dvEsperado != dv) {
        rut.setCustomValidity("RUT Inválido");

        alerta.classList.remove("alert-info", "alert-success");
        alerta.classList.add("alert-danger");
        mensaje.innerHTML =
            "El RUT ingresado: " +
            rut.value +
            " Es <strong>INCORRECTO</strong>.";

        return (
            false,
            (document.getElementById("save").disabled = true),

            (document.getElementById("tipo_documento_id").disabled = true),
            (document.getElementById("fecha_ingreso").disabled = true),
            (document.getElementById("nombres").readOnly = true),
            (document.getElementById("apaterno").readOnly = true),
            (document.getElementById("amaterno").readOnly = true),
            (document.getElementById("fecha_nacimiento").disabled = true),
            (document.getElementById("sexo_id").disabled = true),
            (document.getElementById("nacionalidad_id").disabled = true),
            (document.getElementById("direccion").readOnly = true),
            (document.getElementById("comuna_id").disabled = true),
            (document.getElementById("correo").readOnly = true),
            (document.getElementById("fono").readOnly = true),
            (document.getElementById("titulo_profesional").readOnly = true),
            (document.getElementById("nivel_formacion_id1").disabled = true),
            (document.getElementById("fecha_titulo").disabled = true),
            (document.getElementById("casadeestudio").readOnly = true),
            (document.getElementById("pais_estudio_id").disabled = true),
            (document.getElementById("sedes_id").disabled = true),
            (document.getElementById("departamentos_id").disabled = true),
            (document.getElementById("cargo_principal_id").disabled = true),
            (document.getElementById("ano_intitucion").readOnly = true),
            (document.getElementById("categoria_id").disabled = true),
            (document.getElementById("estado_id").disabled = true),
            (document.getElementById("resultado_evaluacion").disabled = true),
            (document.getElementById("banco_id").disabled = true),
            (document.getElementById("tipo_cuenta_id").disabled = true),
            (document.getElementById("numero_cuenta").readOnly = true)
        );
    } else {
        rut.setCustomValidity("RUT Válido");

        alerta.classList.remove("d-none", "alert-danger");
        alerta.classList.add("alert-success");
        mensaje.innerHTML =
            "El RUT ingresado: " + rut.value + " Es <strong>CORRECTO</strong>.";

        return (
            true,
            (document.getElementById("save").disabled = false),
            (document.getElementById("tipo_documento_id").disabled = false),
            (document.getElementById("fecha_ingreso").disabled = false),
            (document.getElementById("nombres").readOnly = false),
            (document.getElementById("apaterno").readOnly = false),
            (document.getElementById("amaterno").readOnly = false),
            (document.getElementById("fecha_nacimiento").disabled = false),
            (document.getElementById("sexo_id").disabled = false),
            (document.getElementById("nacionalidad_id").disabled = false),
            (document.getElementById("direccion").readOnly = false),
            (document.getElementById("comuna_id").disabled = false),
            (document.getElementById("correo").readOnly = false),
            (document.getElementById("fono").readOnly = false),
            (document.getElementById("titulo_profesional").readOnly = false),
            (document.getElementById("nivel_formacion_id1").disabled = false),
            (document.getElementById("fecha_titulo").disabled = false),
            (document.getElementById("casadeestudio").readOnly = false),
            (document.getElementById("pais_estudio_id").disabled = false),
            (document.getElementById("sedes_id").disabled = false),
            (document.getElementById("departamentos_id").disabled = false),
            (document.getElementById("cargo_principal_id").disabled = false),
            (document.getElementById("ano_intitucion").readOnly = false),
            (document.getElementById("categoria_id").disabled = false),
            (document.getElementById("estado_id").disabled = false),
            (document.getElementById("resultado_evaluacion").disabled = false),
            (document.getElementById("banco_id").disabled = false),
            (document.getElementById("tipo_cuenta_id").disabled = false),
            (document.getElementById("numero_cuenta").readOnly = false)
        );
    }
}

function format(rut) {
    rut = clean(rut);

    var result = rut.slice(-4, -1) + "-" + rut.substr(rut.length - 1);
    for (var i = 4; i < rut.length; i += 3) {
        result = rut.slice(-3 - i, -i) + "." + result;
    }

                        /* formato "-" "."
                            var result = rut.slice(-4, -1) + "-" + rut.substr(rut.length - 1);
                            for (var i = 4; i < rut.length; i += 3) {
                                result = rut.slice(-3 - i, -i) + "." + result;
                            }
                        */
    return result;
}

function clean(rut) {
    return typeof rut === "string"
        ? rut.replace(/^0+|[^0-9kK]+/g, "").toUpperCase()
        : "";
}
