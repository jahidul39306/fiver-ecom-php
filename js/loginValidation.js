function isValid(){
    var valid = true;
    var username = document.forms["login-form"]["username"];
    var password = document.forms["login-form"]["password"];
    document.getElementById("usernameErr").innerHTML = "";
    document.getElementById("passwordErr").innerHTML = "";

    username.addEventListener('textInput', usernameVerify);
    password.addEventListener('textInput', passwordVerify);

    if(username.value === ""){
        valid = false;
        document.getElementById("usernameErr").innerHTML = "Please enter username";
    }
    if(password.value === ""){
        valid = false;
        document.getElementById("passwordErr").innerHTML = "Please enter password";
    }

    return valid;
}
function usernameVerify(){
    if(username.value.length >= 0){
        document.getElementById("usernameErr").innerHTML = "";
        return true;
    }
}
function passwordVerify(){
    if(password.value.length >= 0){
        document.getElementById("passwordErr").innerHTML = "";
        return true;
    }
}