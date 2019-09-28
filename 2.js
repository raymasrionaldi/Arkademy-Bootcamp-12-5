function is_username_valid(username) {
    var Regex = /^[a-zA-Z0]{6}$/
    return Regex.test(username) ;
}

function is_password_valid(password) {
    var Regex = /^[7]{1}(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{4,9}$/;
    return Regex.test(password) ;
}

//Username
console.log(is_username_valid("coba12"));
console.log(is_username_valid("devina"));
//Password
console.log(is_password_valid("p@ssW0rd9"));
console.log(is_password_valid("7Ark@demi"));
