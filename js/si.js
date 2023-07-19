const form = document.getElementsByTagName("form")[0];
const email = document.getElementById("inputEmail");
const password = document.getElementById("inputPassword");

email.addEventListener("input", checkEmail);
password.addEventListener("input", checkPassword);

form.addEventListener("submit", (e) => {
    let x = checkEmail();
    let y = checkPassword();
    if (!(x && y)) {
        e.preventDefault();
    }
});

function checkEmail() {
    const emailValue = email.value.trim();
    let regular_expressions =
        /^[A-Za-z0-9](([a-zA-Z0-9,=\.!\-#|\$%\^&\*\+/\?_`\{\}~]+)*)@(?:[0-9a-zA-Z-]+\.)+[a-zA-Z]{2,9}$/;
    if (emailValue === "") {
        setErrorInput(email, "Email cannot be blank.");
        return false;
    } else {
        if (!regular_expressions.test(emailValue)) {
            setErrorInput(email, "Enter valid Email");
            return false;
        } else {
            setSuccessInput(email);
            return true;
        }
    }
}

function checkPassword() {
    const passwordValue = password.value.trim();

    if (passwordValue === "") {
        setErrorInput(password, "Password connot be blank.");
        return false;
    } else {
        setSuccessInput(password);
        return true;
    }
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
    let regular_expressions =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regular_expressions.test(String(email).toLocaleLowerCase());
}

function validatePassword(password) {
    let regular_expressions = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
    return regular_expressions.match(regular_expressions);
}