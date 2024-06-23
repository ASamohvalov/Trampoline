const name = document.getElementById('product_name'),
    price = document.getElementById('product_price'),
    description = document.getElementById('product_description'),
    btn = document.getElementById('new_product_btn'),
    size = document.getElementById('product_size'),
    consumption = document.getElementById('product_power_consumption'),
    capacity = document.getElementById('product_capacity'),
    installationTime = document.getElementById('product_installation_time');

let validator = {
    name: false,
    price: false,
    description: false,
    size: false,
    consumption: false,
    capacity: false,
    installationTime: false
};

function validateFields() {
    if (validator != {}) {
        for (key in validator) {
            if (!validator[key]) {
                btn.className = "btn btn-light mt-3 m-1 disabled";
                return;
            }
        }
        btn.className = "btn btn-light mt-3 m-1";
    }
}

name.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.name = true;
        validateFields();
    } else {
        validator.name = false;
    }
});

price.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9+ -]/g, '');
    event.target.value = event.target.value > 999999 ? Math.floor(event.target.value / 10) : event.target.value;
    if (event.target.value !== '') {
        validator.price = true;
        validateFields();
    } else {
        validator.price = false;
    }
});

description.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.description = true;
        validateFields();
    } else {
        validator.description = false;
    }
});

size.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.size = true;
        validateFields();
    } else {
        validator.size = false;
    }
});

consumption.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.consumption = true;
        validateFields();
    } else {
        validator.consumption = false;
    }
});

capacity.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.capacity = true;
        validateFields();
    } else {
        validator.capacity = false;
    }
});

installationTime.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.installationTime = true;
        validateFields();
    } else {
        validator.installationTime = false;
    }
});