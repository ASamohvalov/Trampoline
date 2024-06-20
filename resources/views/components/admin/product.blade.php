<form action="{{ route('putProduct') }}" method="post" class="p-3 mt-4">
    @csrf

    <div class="mb-3">
        <div class="input-group mb-3 m-1">
            <span class="input-group-text" id="inputGroup-sizing-default">Название</span>
            <input type="text" class="form-control" aria-label="Sizing example input" name="new_product_name">
        </div>
        @error('name')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3 m-1">
            <span class="input-group-text" id="inputGroup-sizing-default">Цена</span>
            <input type="text" class="form-control" name="price">
        </div>
        @error('price')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        <div class="input-group m-1">
            <span class="input-group-text">Описание</span>
            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
        </div>
        @error('description')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror

        <label for="inputState" class="form-label">Категории</label>
        <select id="inputState" class="form-select" name="category">
            @foreach ($categories as $category)
                <option>{{ $category['name'] }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-light mt-3">Добавить продукт</button>

        @error('category')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        <span class="text-success fs-6">{{ session('add_success') }}</span>
    </div>
</form>

<form action="{{ route('removeProduct') }}" method="post" class="p-3 mb-4">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Удалить продукт</label>
        <div class="row">
            <div class="col-8">
                <input type="text" class="form-control" id="remove_name" placeholder="Название категории"
                    name="remove_name" onchange="removeCategory(event)">
            </div>
            <div class="col">
                <button class="btn btn-light disabled" type="submit" id="remove-category-btn">Удалить
                </button>
            </div>
        </div>
        @error('remove_name')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        <span class="text-success fs-6">{{ session('remove_success') }}</span>
    </div>
</form>
