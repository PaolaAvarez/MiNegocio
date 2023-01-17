<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="melody/images/faces/faces5.jpg" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Welcome Paola
                    </p>
                    <p class="designation">
                        Super Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a href="index-2.html" class="nav-link">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dasboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="pages/widgwts.html" class="nav-link">
                <i class="fa fa-puzzle-piece menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expander="true" aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title">Page Layouts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{route('productos.index')}}">Productos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="pages/layout/horizontal-menu.html">Menu</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation.html">
                <i class="far fa-file-alt menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>