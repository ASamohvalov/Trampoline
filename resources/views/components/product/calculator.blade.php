<div class="calculator-main-div mt-5">
    <span class="fs-2">Калькулятор расчета стоимости проката</span>
    <span style="display: none" id="product_price">{{ $product->price }}</span>
    <div class="row">
        <div class="col-3">
            <input type="number" class="form-control" style="width: 200px" placeholder="количество часов"
                id="number_of_hours">
        </div>
        <div class="col">
            <input type="text" class="form-control" style="width: 200px" placeholder="итоговая стоимость"
                id="result_price" readonly>
        </div>
    </div>
</div>

<script src="{{ asset('assets/script/product/calculator.js') }}"></script>
