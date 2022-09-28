<div class="col-12 col-lg-2 px-0 vh-100">
    <div class="col-12 d-flex justify-content-between align-items-start">
        <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarLinks"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="card border-0">
            <div class="card-body">
                <div class="row align-items-center mb-2">
                    <div class="col-4">
                        <img src={{ asset('img/user.png') }} class="img-fluid rounded-start img-thumbnail" alt="User">
                    </div>
                    <div class="col-8">
                        <h5 class="card-title">Oleh Admin</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Admin</h6>
                    </div>
                </div>
                <a href="#" class="card-link">Налаштування</a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="flex-column collapse collapse-horizontal d-lg-flex" id="sidebarLinks">
            <div class="accordion accordion-flush" id="sidebar-links">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#products-body" aria-expanded="false">
                            Товари
                        </button>
                    </h2>
                    <div id="products-body" class="accordion-collapse collapse" data-bs-parent="#sidebar-links">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-2">
                                <a href="/admin/product" class="btn btn-outline-primary">Додати товар</a>
                                <a href="#" class="btn btn-outline-primary">Редагувати товар</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#brands-body" aria-expanded="false">
                            Бренди та категорії
                        </button>
                    </h2>
                    <div id="brands-body" class="accordion-collapse collapse" data-bs-parent="#sidebar-links">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-2">
                                <a href="#" class="btn btn-outline-primary">Додати бренд</a>
                                <a href="#" class="btn btn-outline-primary">Редагувати бренд</a>
                                <a href="#" class="btn btn-outline-primary">Додати категорію</a>
                                <a href="#" class="btn btn-outline-primary">Редагувати категорію</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
