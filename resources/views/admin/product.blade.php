<x-admin.layout>
    <div class="col-12">
        <x-admin.productForm url="/admin/product/store" :brands="$brands" :types="$types" :hideDisabled="true" />
    </div>
</x-admin.layout>
