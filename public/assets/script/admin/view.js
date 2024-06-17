const categoryButton = document.getElementById('category-btn'),
    productButton = document.getElementById('product-btn'),
    categoryComponent = document.getElementById('category'),
    productComponent = document.getElementById('product');

categoryButton.addEventListener('click', function (event) {
    event.target.className += 'text-dark';
    productButton.className = 'btn text-light';
    categoryComponent.style.display = 'block';
    productComponent.style.display = 'none';
})

productButton.addEventListener('click', function (event) {
    event.target.className += 'text-dark';
    categoryButton.className = 'btn text-light';
    productComponent.style.display = 'block';
    categoryComponent.style.display = 'none';
});
