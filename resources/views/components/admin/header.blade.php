<header class="header px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src={{ asset('img/logo.svg') }} alt="Techhub" height="25" class="d-inline-block align-text-top">
                Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/admin">Головна</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" target="blank">Перейти до магазину</a>
                    </li>
                </ul>
                <div class="nav-item">
                    <a class="nav-link" href="#">Вихід</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="position-absolute top-0 start-0 end-0 p-2">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger width-100 fade show">
            {{$error}}
        </div>
        @endforeach
        @endif
        @if (session('success'))
        <div class="alert alert-success width-100 fade show">
            {{session('success')}}
        </div>
        @endif
    </div>
</header>
