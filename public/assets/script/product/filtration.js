let filterByName = function () {
    let input = document.getElementById('name_filter');
    input.addEventListener('keyup', function () {
        let filter = input.value.toLowerCase(),
            filterElements = document.querySelectorAll('.catalog_product');
        filterElements.forEach(item => {
            if (item.querySelector('.product-name').textContent.toLowerCase().includes(filter)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    });
};

let filterByCategory = function () {
    
}

filterByName();
