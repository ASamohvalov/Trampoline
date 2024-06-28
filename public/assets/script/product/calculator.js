const numberOfHours = document.getElementById('number_of_hours'),
    resultPrice = document.getElementById('result_price');

numberOfHours.addEventListener('input', function (event) {
    const productPriceElement = document.getElementById('product_price');
    let discount = 0;
    if (event.target.value >= 3 && event.target.value <= 4) {
        discount = 5;
    } else if (event.target.value >= 5 && event.target.value <= 7) {
        discount = 10;
    } else if (event.target.value >= 8 && event.target.value <= 11) {
        discount = 15;
    } else if (event.target.value >= 12) {
        discount = 20;
    }

    resultPrice.value = event.target.value * productPriceElement.innerText * (1 - discount / 100); 
});
