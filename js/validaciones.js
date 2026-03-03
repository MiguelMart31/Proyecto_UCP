function validarFormulario() {
    const password = document.querySelector("input[name='password']").value;

    if (password.length < 6) {
        alert("La contraseña debe tener mínimo 6 caracteres");
        return false;
    }

    return true;
}
