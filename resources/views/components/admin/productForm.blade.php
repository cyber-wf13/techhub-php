@props(['hideDisabled' => false, 'url', 'brands', 'types', 'product' => null])

<form class="form my-3" action={{ url($url) }} method="POST">
    @csrf
    <div class="mb-3">
        <label for="product-name" class="form-label">Назва товару</label>
        <input type="text" class="form-control" id="product-name" name="product-name" placeholder="Введіть назву товару"
            {{$hideDisabled ? '' : 'disabled' }}
            value="{{old('product-name') || isset($product) ? $product->name: ''}}">
    </div>
    <div class="mb-3">
        <label for="product-article" class="form-label">Артикул</label>
        <input type="number" class="form-control" id="product-article" name="product-article"
            placeholder="Введіть артикул товару" {{$hideDisabled ? '' : 'disabled' }}
            value="{{old('product-article') || isset($product) ? $product->article: ''}}">
    </div>
    <div class="mb-3">
        <label for="product-price" class="form-label">Ціна товару</label>
        <input type="number" class="form-control" id="product-price" name="product-price"
            placeholder="Введіть ціну товару" {{$hideDisabled ? '' : 'disabled' }}
            value="{{old('product-price') || isset($product) ? $product->price: ''}}">
    </div>
    <div class="mb-3">
        <label for="product-count" class="form-label">Кількість товару</label>
        <input type="number" class="form-control" id="product-count" name="product-count"
            placeholder="Введіть кількість товару" {{$hideDisabled ? '' : 'disabled' }}
            value="{{old('product-count') || isset($product) ? $product->count: ''}}">
    </div>
    <div class="mb-3">
        <label for="product-descr" class="form-label">Опис товару</label>
        <textarea class="form-control" id="product-descr" rows="3" name="product-descr" {{$hideDisabled ? ''
            : 'disabled' }}>
            {{old('product-descr') || isset($product) ? $product->descr: ''}}</textarea>
    </div>
    <div class="mb-3">
        <select class="form-select" name="product-brand" {{$hideDisabled ? '' : 'disabled' }}>
            <option selected disabled>Виберіть марку товару</option>
            @foreach ($brands as $brand)
            <option value={{$brand->id}}>{{$brand->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <select class="form-select" name="product-type" {{$hideDisabled ? '' : 'disabled' }}>
            <option selected disabled>Виберіть тип товару</option>
            @foreach ($types as $type)
            <option value={{$type->id}}>{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Надіслати" {{$hideDisabled ? '' : 'disabled' }}>
    </div>
</form>
