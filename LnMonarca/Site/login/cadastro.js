const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

registerButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});


// Check Register Error
const form = document.querySelector('form')
const username = document.getElementById('username')
const usernameError = document.querySelector("#username-error")
const email = document.getElementById('email')
const emailError = document.querySelector("#email-error")
const password = document.getElementById('password')
const passwordError = document.querySelector("#password-error")

// Show input error message
function showError(input, message) {
    const formControl = input.parentElement
    formControl.className = 'form-control error'
    const small = formControl.querySelector('small')
    small.innerText = message
}

// Show success outline
function showSuccess(input) {
    const formControl = input.parentElement
    formControl.className = 'form-control success'
    const small = formControl.querySelector('small')
    small.innerText = ''
}

// Check email is valid
function checkEmail(email) {
    const emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
    return emailRegex.test(email);
}

email.addEventListener("input", function(){
    if (!checkEmail(email.value)) {
        emailError.textContent = "*Email não valido"
    }else {
        emailError.textContent = "";
    }
})

// Check length input user name
username.addEventListener("input", function(){
    if(username.value.length > 20){
        usernameError.textContent = "*Nome/Vulgo de usuário deve ter menos de 20 caracteres.";
    }else {
        usernameError.textContent = "";
    }
})

// Check length input password
password.addEventListener("input", function(){
    if (password.value.length < 8) {
        passwordError.textContent = "*A senha deve conter mais caracteres."
    }else if(password.value.length > 20){
        passwordError.textContent = "*A senha deve ter menos de 20 caracteres."
    }else {
        passwordError.textContent = "";
    }
})


// Check required fields
function checkRequired(inputArr) {
    let isRequired = false
    inputArr.forEach(function(input) {
        if (input.value.trim() === '') {
            showError(input, `*${getFieldName(input)} é necessário`)
            isRequired = true
        }else {
            showSuccess(input)
        }
    })

    return isRequired
}

// Get fieldname
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1)
}

// Event listeners
form.addEventListener('submit', function (e) {
    e.preventDefault()

    if (!checkRequired([username, email, password])) {
        // checkLength(username, 3, 15)
        // checkLength(password, 6, 25)
        // checkEmail(email)
    } 
})

// Check Login Error

let lgForm = document.querySelector('.form-lg')
let lgEmail = document.querySelector('.email-2')
let lgEmailError = document.querySelector(".email-error-2")
let lgPassword = document.querySelector('.password-2')
let lgPasswordError = document.querySelector(".password-error-2")

function showError2(input, message) {
    const formControl2 = input.parentElement
    formControl2.className = 'form-control2 error'
    const small2 = formControl2.querySelector('small')
    small2.innerText = message
}

function showSuccess2(input) {
    const formControl2 = input.parentElement
    formControl2.className = 'form-control2 success'
    const small2 = formControl2.querySelector('small')
    small2.innerText = '';
}

// Check email is valid
function checkEmail2(lgEmail) {
    const emailRegex2 = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
    return emailRegex2.test(lgEmail);
}

lgEmail.addEventListener("input", function(){
    if (!checkEmail2(lgEmail.value)) {
        lgEmailError.textContent = "*Email não é valido"
    }else {
        lgEmailError.textContent = "";
    }
})

// Check length input passwrod
lgPassword.addEventListener("input", function(){
    if (lgPassword.value.length < 8) {
        lgPasswordError.textContent = "*A senha deve conter mais caracteres."
    }else if (lgPassword.value.length > 20){
        lgPasswordError.textContent = "*A senha deve ter menos de 20 caracteres."
    }else {
        lgPasswordError.textContent = "";
    }
})

function checkRequiredLg(inputArr2) {
    let isRequiredLg = false
    inputArr2.forEach(function(input){
        if (input.value.trim() === '') {
            showError2(input, `*${getFieldNameLg(input)} Insira suas informações`)
            isRequiredLg = true
        }else {
            showSuccess2(input)
        }
    })

    return isRequiredLg
}

function getFieldNameLg(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1)
}

lgForm.addEventListener('submit', function (e){
    e.preventDefault()

    if (!checkRequiredLg([lgEmail, lgPassword])) {
        checkEmail2(lgEmail)
    }
})

// Efeito de Neve Caindo
const snowflakeContainer = document.createElement('div');
snowflakeContainer.classList.add('snow-container');
document.body.appendChild(snowflakeContainer);

function createSnowflake() {
const snowflake = document.createElement('div');
snowflake.classList.add('snowflake');
  snowflake.style.left = Math.random() * window.innerWidth + 'px';
  snowflake.style.animationDuration = Math.random() * 5 + 4 + 's';
snowflake.style.opacity = Math.random();
snowflakeContainer.appendChild(snowflake);

setTimeout(() => {
    snowflake.remove();
}, 10000);
}

function createSnowfall() {
setInterval(createSnowflake, 50);
}

// Iniciar a queda de neve
createSnowfall();