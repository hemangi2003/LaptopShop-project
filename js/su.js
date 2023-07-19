const form = document.getElementsByTagName('form')[0];
const lastname = document.getElementById("lname");
const firstname = document.getElementById("fname");
const email = document.getElementById("inputEmail");
const password = document.getElementById("inputPassword");
const password2 = document.getElementById("inputcPassword");

form.addEventListener("submit", (e) => {
    let a = checkInputs();
    if (!a) {
        e.preventDefault();
    }
});

function checkInputs() {
    //Get the value the form field.
    const lastnameValue = lastname.value.trim(); //trim to delete blank space.
    const firstnameValue = firstname.value.trim(); //trim to delete blank space.
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    let error = true;

    if (lastnameValue === "") {
        setErrorInput(lastname, " lastname cannot be blank.");
        error = false;
    } else {
        setSuccessInput(lastname);
    }

    if (firstnameValue === "") {
        setErrorInput(firstname, " firstname cannot be blank.");
        error = false;
    } else {
        setSuccessInput(firstname);
    }

    //###################################
    if (emailValue === "") {
        setErrorInput(email, " Email cannot be blank.");
        error = false;

    } else {
        validateEmail(emailValue) && setSuccessInput(email);
    }

    //###################################
    if (passwordValue === "") {
        setErrorInput(password, " Password connot be blank.");
        error = false;

    } else {
        setSuccessInput(password) && validatePassword(passwordValue);
    }

    //###################################
    if (password2Value === "") {
        setErrorInput(password2, " Password connot be blank.");
        error = false;

    } else if (password2Value !== passwordValue) {
        setErrorInput(password2, " Password does not match.");
        error =
            false;
    } else {
        setSuccessInput(password2);
    }

    return error;
}

function setErrorInput(input, errorMessage) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    small.innerText = errorMessage;
    formControl.className = "form_control error";
}

function setSuccessInput(input) {
    const formControl = input.parentElement;
    formControl.className = "form_control success";
}

function validateEmail(email) {
    let regular_expressions = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regular_expressions.test(String(email).toLocaleLowerCase());
}

function validatePassword(password) {
    let regular_expressions = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
    return regular_expressions.match(regular_expressions);
}
