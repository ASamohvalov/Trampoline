const data = {
    name: document.getElementById('name'),
    surname: document.getElementById('surname'),
    email: document.getElementById('email'),
    login: document.getElementById('login'),
    password: document.getElementById('password'),
    password_repeat: document.getElementById('password_repeat'),
    phone: document.getElementById('phone'),
};

let isPasswordEntered = false, isPasswordValid = false;

function activateButton() {
    let count = 0;
    for (let key in data) {
        if (data[key].value == '') {
            count++;
        }
    }
    !document.getElementById('checkbox').checked && count++;
    !isPasswordValid && count++; 

    let btn = document.getElementById('submit-btn');
    if (count === 0) {
        btn.className = 'btn btn-light';
    } else {
        btn.className = 'btn btn-light disabled';
    }
}

function validateName(event) {
    const input = event.target.value;
    const regex = /^[^\d]*$/;

    if (!regex.test(input)) {
        event.target.value = input.replace(/\d/g, '');
    }
}

function enterPassword(event) {
    isPasswordEntered = true;
    if (event.target.value.length < 6) {
        isPasswordValid = false;
        document.getElementById('password-error-msg').innerHTML = 'пароль должен быть не менее 6-ти символов';
    } else {
        isPasswordValid = true;
        document.getElementById('password-error-msg').innerHTML = '';
    }
}