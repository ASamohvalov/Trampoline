function addCategory(event) {
    if (event.target.value !== '') {
        document.getElementById('add-category-btn')
            .className = 'btn btn-light';
    } else {
        document.getElementById('add-category-btn')
            .className = 'btn btn-light disabled';
    }
}
