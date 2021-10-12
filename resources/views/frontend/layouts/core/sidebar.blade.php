<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Danh sách cà phê</div>
                    <a class="nav-link collapsed" href="{{route('products.index')}}" data-bs-toggle="collapse"
                       data-bs-target="#collapseUsers"
                       aria-expanded="false" aria-controls="collapseUsers">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Danh mục cà phê
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUsers" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('products.index')}}">Danh mục sản phẩm</a>
                        </nav>
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('products.create')}}">Thêm sản phẩm</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
</div>

