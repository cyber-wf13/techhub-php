<x-admin.layout>
    <div class="col-12">
        <h2 class="my-2">Додати товар</h2>
        <hr>
        <x-admin.productForm url="/admin/product/store" :brands="$brands" :types="$types" :hideDisabled="true" />
    </div>
</x-admin.layout>
