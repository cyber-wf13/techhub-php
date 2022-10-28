@props(['url'])

<form class="form my-3" action={{ url($url) }} method="POST">
    @csrf

    <div class="mb-3 d-flex align-items-start gap-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" name="type-check">
        </div>

        <div class="w-100">
            <label for="type-name" class="form-label">Назва типу</label>
            <input type="text" class="form-control" id="type-name" name="type-name"
                placeholder="Введіть назву категорії" value="{{old('product-name')}}">
        </div>
    </div>

    <div class="mb-3 d-flex align-items-start gap-2">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" name="brand-check">
        </div>

        <div class="w-100">
            <label for="brand-name" class="form-label">Назва бренду</label>
            <input type="text" class="form-control" id="brand-name" name="brand-name" placeholder="Введіть назву бренду"
                value="{{old('product-name')}}">
        </div>
    </div>

    <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Надіслати">
    </div>
</form>
