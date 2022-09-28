<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>BS Admin</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <x-admin.sidebar />
            <div class="col-12 col-lg-10 px-0 position-relative">
                <x-admin.header />
                <div class="container">
                    <div class="row">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
