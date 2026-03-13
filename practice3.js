function verifyPassword() {
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;

    if (password1.length < 8 || password2.length < 8) {
        alert("Your password is too short!");
    }
    else if (password1 !== password2) {
        alert("Two passwords don't match!");
    }
    else {
        alert("Everything is OK!");
    }
}
