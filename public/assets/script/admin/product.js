const name = document.getElementById('product_name'),
    price = document.getElementById('product_price'),
    description = document.getElementById('product_description'),
    btn = document.getElementById('new_product_btn');

let validator = {
    name: false,
    price: false,
    description: false
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
})

price.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/[^0-9+ -]/g, '');
    event.target.value = event.target.value > 999999 ? Math.floor(event.target.value / 10) : event.target.value;
    if (event.target.value !== '') {
        validator.price = true;
        validateFields();
    } else {
        validator.price = false;
    }
})

description.addEventListener('input', function (event) {
    if (event.target.value !== '') {
        validator.description = true;
        validateFields();
    } else {
        validator.description = false;
    }
})

