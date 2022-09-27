<x-admin.layout>
    <div class="col-12">
        <form class="form my-3">
            <div class="mb-3">
                <label for="product-name" class="form-label">Назва товару</label>
                <input type="text" class="form-control" id="product-name" placeholder="Введіть назву товару">
            </div>
            <div class="mb-3">
                <label for="product-id" class="form-label">Артикул</label>
                <input type="number" class="form-control" id="product-id" placeholder="Введіть артикул товару">
            </div>
            <div class="mb-3">
                <label for="product-price" class="form-label">Ціна товару</label>
                <input type="number" class="form-control" id="product-price" placeholder="Введіть ціну товару">
            </div>
            <div class="mb-3">
                <label for="product-count" class="form-label">Кількість товару</label>
                <input type="number" class="form-control" id="product-count" placeholder="Введіть кількість товару">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Опис товару</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <select class="form-select">
                    <option selected>Виберіть марку товару</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select">
                    <option selected>Виберіть тип товару</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" value="Надіслати">
            </div>
        </form>
    </div>
</x-admin.layout>
