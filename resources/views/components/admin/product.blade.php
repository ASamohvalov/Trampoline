<form action="{{ route('putProduct') }}" method="post" class="p-3 mt-4" enctype="multipart/form-data">
    @csrf

    <div class="mb-3 m-1">
        <div class="row">
            <div class="col">
                <div class="input-group mb-3 m-1">
                    <span class="input-group-text" id="inputGroup-sizing-default">Название</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" name="new_product_name"
                        id="product_name">
                </div>
            </div>
            <div class="col">
                <div class="input-group mb-3 m-1">
                    <span class="input-group-text" id="inputGroup-sizing-default">Цена</span>
                    <input type="text" class="form-control" name="price" id="product_price">
                </div>
            </div>
            @error('name')
                <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-group m-1">
            <span class="input-group-text">Описание</span>
            <textarea class="form-control" aria-label="With textarea" name="description" id="product_description"></textarea>
        </div>

        <div class="mb-3 m-1">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>

        <div class="m-1">
            <label for="product_category" class="form-label">Выберете категорию</label>
            <select class="form-select" name="category" style="width: 200px" id="product_category">
                @foreach ($categories as $category)
                    <option>{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-light mt-3 m-1 disabled" id="new_product_btn">Добавить продукт</button>
        <span class="text-success fs-6">{{ session('add_success') }}</span>
        @error('new_product_name')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        @error('image')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
    </div>
</form>

<form action="{{ route('removeProduct') }}" method="post" class="p-3 mb-4">
    @csrf

    <div class="m-2">
        <label for="name" class="form-label">Удалить продукт</label>
        <div class="row">
            <div class="col">
                <select class="form-select" name="remove_product_name">
                    @foreach ($products as $product)
                        <option>{{ $product['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <button class="btn btn-light" type="submit" id="remove-category-btn">Удалить</button>
            </div>
        </div>
        <span class="text-success fs-6">{{ session('remove_success') }}</span>
    </div>
</form>
<script src="{{ asset('assets/script/admin/product.js') }}"></script>
