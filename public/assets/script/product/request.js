const address = document.getElementById('address'),
    birthday = document.getElementById('birthday'),
    passportSeries = document.getElementById('passport_series'),
    passportId = document.getElementById('passport_id'),
    passportIssueDate = document.getElementById('passport_issue_date'),
    passportIssueBy = document.getElementById('passport_issue_by');

let validate = {
    address: false,
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

address.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validate.address = true;
        event.className = 'form-control'; 
    } else {
        validate.address = false;
        event.className = 'form-control is-invalid'; 
    }
    validateFields();
});

birthday.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9. /]/g, '');
    if (event.target.value !== '') {
        validate.birthday = true;
    } else {
        validate.birthday = false;
    }
    validateFields();
});

passportSeries.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
    event.target.value.length > 4
        ? event.target.value = Math.floor(event.target.value / 10)
        : event.target.value;
    if (event.target.value !== '') {
        validate.passportSeries = true;
    } else {
        validate.passportSeries = false;
    }
    validateFields();
});

passportId.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
    event.target.value.length > 8
        ? event.target.value = Math.floor(event.target.value / 10)
        : event.target.value;
    if (event.target.value !== '') {
        validate.passportId = true;
    } else {
        validate.passportId = false;
    }
    validateFields();
});

passportIssueDate.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9. /]/g, '');
    if (event.target.value !== '') {
        validate.passportIssueDate = true;
    } else {
        validate.passportIssueDate = false;
    }
    validateFields();
});


passportIssueBy.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validate.passportIssueBy = true;
    } else {
        validate.passportIssueBy = false;
    }
    validateFields();
});
