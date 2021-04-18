function validateForm() {
    
    //document.getElementById("nameerror").innerHTML = "your name is ";

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmPassword").value;
    var radios = document.getElementsByName("gender");
    var birthday = document.getElementById("birthday").value;

    var length = radios.length;
    var flag = true;
    var ex;
    
    for (var i = 0; i < length; i++) {
        if (radios[i].checked) {
            gender = radios[i].value;

            break;
        }
    }

    if (
        name.length === 0 ||
        email.length === 0 ||
        password.length === 0 ||
        confirmPassword.length === 0 ||
        birthday.length === 0 ||
        gender.length === 0
    ) {
        alert("fill all fields");
        flag = false;
    } else {
        
        ex=/^[0-9a-zA-Z_' ]- @ # & */;
        if (name.length < 5) {
            document.getElementById("nameerror").innerHTML = "you must enter minimum 5 letter of your name";
            alert("name must be five characters or more");
            flag = false;
        } else if (!name.match(ex)) {
            document.getElementById("nameerror").innerHTML = "you can only use only a-z, A-Z, -, ', @, #, & and * those characters at name field";
            flag = false;
        } else {
            document.getElementById("nameerror").innerHTML = "your name is "+name;
            flag = false;
        }
        
        ex=/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if (!email.match(ex)) {
            document.getElementById("emailerror").innerHTML = "invalid email";
            flag = false;
        }
        
        ex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        if (password.length < 8) {
            document.getElementById("passworderror").innerHTML = "password must contain at least 8 characters";
            flag = false;
        } else if (!password.match(ex)) {
            document.getElementById("passworderror").innerHTML = "condition  not match";
            flag = false;
        }
        
        if (confirmpassword === password) {
            document.getElementById("confirmpassworderror").innerHTML = "you must match with password";
            flag = false;
        }
        
        if(!flag) {
            alert("Correct this form following error notes");
        }
    }

    return flag;
}