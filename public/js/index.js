function validarSenha(input) {
    if (input.value !== document.getElementById("senha").value) {
        console.log('Senha não são iguais, favor repita!');
    } else {
        console.log('Senha ok');
    }
}

function validaCpf(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (String(strCPF) == "00000000000") {
        console.log("Valor invalido");
        return false;
    }

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(String(strCPF).substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(String(strCPF).substring(9, 10))) {
        console.log("Valor invalido");
        return false;
    }

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(String(strCPF).substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(String(strCPF).substring(10, 11))) {
        console.log("Valor invalido");
        return false;
    }
    console.log("Valor Ok");
    return true;
}

function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

    if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        document.getElementById("msgemail").innerHTML = "E-mail válido";
        alert("E-mail valido");
    }
    else {
        document.getElementById("msgemail").innerHTML = "<font color='red'>E-mail inválido </font>";
        alert("E-mail invalido");
    }
}