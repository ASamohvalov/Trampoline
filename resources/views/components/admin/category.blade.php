<form action="{{ route('putCategory') }}" method="post" class="p-3 mt-4">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Добавить категорию</label>
        <div class="row">
            <div class="col-9">
                <input type="text" class="form-control" id="add_name"
                    placeholder="Название новой категории" name="add_name" onchange="addCategory(event)">
            </div>
            <div class="col">
                <button class="btn btn-light disabled" type="submit"
                    id="add-category-btn">Добавить</button>
            </div>
        </div>
        @error('add_name')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        <span class="text-success fs-6">{{ session('add_success') }}</span>
    </div>
</form>

<form action="{{ route('removeCategory') }}" method="post" class="p-3 mb-4">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Удалить категорию</label>
        <div class="row">
            <div class="col-9">
                <input type="text" class="form-control" id="remove_name" placeholder="Название категории"
                    name="remove_name" onchange="removeCategory(event)">
            </div>
            <div class="col">
                <button class="btn btn-light disabled" type="submit"
                    id="remove-category-btn">Удалить</button>
            </div>
        </div>
        @error('remove_name')
            <span class="text-danger fs-6">{{ $message }}</span>
        @enderror
        <span class="text-success fs-6">{{ session('remove_success') }}</span>
    </div>
</form>