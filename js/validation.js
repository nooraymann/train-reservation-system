function validate_form(myform) {

    //Check first name & last name
    if (myform.firstName.value == "" || myform.lastName.value == "") {
        alert("First name and last name cannot be blank!");
        myform.firstName.focus();
        return false;
    }
    re = /^[A-Za-z]+$/;
    if(!re.test(myform.firstName.value)){
        alert("First name and last name must contain only letters");
        myform.firstName.focus();
        return false;
    }
    if(!re.test(myform.lastName.value)){
        alert("First name and last name must contain only letters");
        myform.lastName.focus();
        return false;
    }

    //Check username
    if (myform.username.value == "") {
        alert("Username cannot be blank!");
        myform.username.focus();
        return false;
    }
    //Check that the username only contain lowercase letters, underscore and numbers
    re = /^(?=[a-z_\d]*[a-z])[a-z_\d]{6,}$/;
    if (!re.test(myform.username.value)){
        alert("Invalid username {suggestion: maniw6");
        myform.username.focus();
        return false;
    }

    // Check e-mail address
    re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(myform.email.value)) {
        alert("Invalid email address");
        myform.email.focus();
        return false;
    }
    // Check password
    if (myform.password1.value != "" && myform.password1.value == myform.password2.value) {
        if (myform.password1.value.length < 6) {
            alert("Password must contain at least six characters!");
            myform.password1.focus();
            return false;
        }
        if (myform.password1.value == myform.username.value || myform.password1.value == "password") {
            alert("This is invalid password!");
            myform.password1.focus();
            return false;
        }
        re = /[0-9]/;
        if (!re.test(myform.password1.value)) {
            alert("password must contain at least one number (0-9)!");
            myform.password1.focus();
            return false;
        }
        re = /[a-z]/;
        if (!re.test(myform.password1.value)) {
            alert("password must contain at least one character (a-z)!");
            myform.password1.focus();
            return false;
        }
    } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        myform.password1.focus();
        return false;
    }
    
    //Check the phone number

    if(isNaN(myform.phoneNumber.value)) {
        alert("Phone number must contain numbers only!");
        myform.phoneNumber.focus();
        return false;
    }
    
    if (myform.phoneNumber.value.length != 11) {
        alert("Invalid phone number (Phone Number  must contain only 11 character)");
        myform.phoneNumber.focus();
        return false;
    }
    
    return true;
}