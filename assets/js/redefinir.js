//REDEFINIR SENHA
function validarEmail(form) {
    const email = form.redefinir.value;
    if (email == "") {
        alert("Não esqueça de Digita seu Email")
    };
    emails = ["davi@gmail.com", "andressa@gmail.com", "raphael@gmail.com"];
    if (emails.includes(email)) {
        alert("Link para redefinir para o e-mail inserido")
    }
    else {
        alert("Email não cadastrado")
    }
}