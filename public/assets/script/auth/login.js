const data = {
    'login': document.getElementById('login'),
    'password': document.getElementById('password')
}

function activateButton() {
    let count = 0;
    for (let key in data) {
        if (data[key].value == '') {
            count++;
        }
    }

    let btn = document.getElementById('submit-btn');
    if (count === 0) {
        btn.className = 'btn btn-light';
    } else {
        btn.className = 'btn btn-light disabled';
    }
}

document.querySelector('.close').addEventListener('click', function() {
    this.parentNode.classList.remove('show');
});