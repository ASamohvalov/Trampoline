const address = document.getElementById('address'),
    rentalDate = document.getElementById('rental_date'),
    startTime = document.getElementById('start_time'),
    endTime = document.getElementById('end_time'),
    birthday = document.getElementById('birthday'),
    passportSeries = document.getElementById('passport_series'),
    passportId = document.getElementById('passport_id'),
    passportIssueDate = document.getElementById('passport_issue_date'),
    passportIssueBy = document.getElementById('passport_issue_by');

let validate = {
    address: false,
    rentalDate: false,
    time: false,
    birthday: false,
    passportSeries: false,
    passportId: false,
    passportIssueDate: false,
    passportIssueBy: false
};

function validateFields() {
    if (validate != {}) {
        const btn = document.getElementById('sub_btn');
        for (let key in validate) {
            if (!validate[key]) {
                btn.disabled = true;
                return;
            }
        }
        btn.disabled = false;
    }
}

rentalDate.addEventListener('input', function (event) {
    if (event.target.value) {
        const date = new Date(event.target.value);
        if (date.getTime() < Date.now()) {
            validate.rentalDate = false;
            event.target.classList.add('is-invalid');
        } else {
            validate.rentalDate = true;
            event.target.classList.remove('is-invalid');
        }
    } else {
        validate.rentalDate = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

startTime.addEventListener('input', function (event) {
    if (event.target.value) {
        let msg = document.getElementById('time-error-msg');
        if (endTime.value && startTime.value < endTime.value) {
            validate.time = true;
            event.target.classList.remove('is-invalid');
            msg.innerHTML = '';
        } else {
            validate.time = false;
            msg.innerHTML = 'время начала не может быть позже времени конца проката';
        }
    } else {
        validate.time = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

endTime.addEventListener('input', function (event) {
    if (event.target.value) {
        let msg = document.getElementById('time-error-msg');
        if (startTime.value && startTime.value < endTime.value) {
            validate.time = true;
            event.target.classList.remove('is-invalid');
            msg.innerHTML = '';
        } else {
            validate.time = false;
            msg.innerHTML = 'время начала не может быть позже времени конца проката';
        }
    } else {
        validate.time = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

address.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validate.address = true;
        event.target.classList.remove('is-invalid');
    } else {
        validate.address = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

birthday.addEventListener('input', function (event) {
    if (event.target.value) {
        validate.birthday = true;
        event.target.classList.remove('is-invalid');
    } else {
        validate.birthday = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

passportSeries.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
    event.target.value.length > 4 ?
        event.target.value = Math.floor(event.target.value / 10) :
        event.target.value;
    if (event.target.value !== '') {
        validate.passportSeries = true;
        event.target.classList.remove('is-invalid');
    } else {
        validate.passportSeries = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

passportId.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
    event.target.value.length > 8 ?
        event.target.value = Math.floor(event.target.value / 10) :
        event.target.value;
    if (event.target.value !== '') {
        validate.passportId = true;
        event.target.classList.remove('is-invalid');
    } else {
        validate.passportId = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});

passportIssueDate.addEventListener('input', function (event) {
    if (event.target.value) {
        validate.passportIssueDate = true;
        event.target.classList.remove('is-invalid');
    } else {
        validate.passportIssueDate = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});


passportIssueBy.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validate.passportIssueBy = true;
        event.target.classList.remove('is-invalid');
    } else {
        validate.passportIssueBy = false;
        event.target.classList.add('is-invalid');
    }
    validateFields();
});