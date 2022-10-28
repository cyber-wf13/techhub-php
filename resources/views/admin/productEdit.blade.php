<x-admin.layout>
    <div class="col-12">
        <div class="col-12 my-3">
            <h2 class="my-2">Редагувати товар</h2>
            <hr>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Вибрати товар
                </button>
                <div class="dropdown-menu">
                    <form class="px-4 py-3" method="POST" action={{url('/admin/product/edit/search')}}>
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text">Артикул</span>
                            <input type="number" class="form-control" placeholder="Введіть артикул товару"
                                name="search-article">
                        </div>
                        <button type="submit" class="btn btn-primary">Пошук</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            @if ($product)
            <p class="lead">
                ID вибраного продукту: <b>{{$product->id}}</b>
            </p>
            @endif
            <x-admin.productForm url="/admin/product/edit/update/{{$product->id ?? ''}}" :brands="$brands"
                :types="$types" :hideDisabled="$product" :product="$product" />
        </div>
    </div>
</x-admin.layout>
