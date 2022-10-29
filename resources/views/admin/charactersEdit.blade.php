<x-admin.layout>
    <div class="col-12">
        <h2 class="my-2">Редагувати категорію / бренд</h2>
        <hr>
        <form action="{{ url('/admin/characters/edit/update') }}" method="POST">
            @csrf
            <div class="row justify-content-between">
                <div class="col-12 col-md-4">
                    <h6 class="my-1">Категорія</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Назва</th>
                                    <th>Ред.</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $type)
                                <tr>
                                    <th>{{$type->id}}</th>
                                    <td>
                                        <input type="text" class="form-control" value="{{$type->name}}"
                                            name="type-{{$type->id}}">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="type-id[]"
                                            value="{{$type->id}}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <h6 class="my-1">Бренд</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Назва</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                <tr>
                                    <th>{{$brand->id}}</th>
                                    <td>
                                        <input type="text" class="form-control" value="{{$brand->name}}"
                                            name="brand-{{$brand->id}}">
                                    </td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" name="brand-id[]"
                                            value="{{$brand->id}}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-success w-25" type="submit">Надіслати</button>
                </div>
            </div>
        </form>
    </div>
</x-admin.layout>
