<!-- SIDEBARSTART -->
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="">
                <a href="{{route('dashboard.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Rumah</span>
                </a>
            </li>

            <li class="">
                <a href="#">
                    <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                    <span class="pcoded-mtext">Ruko</span>
                </a>
            </li>

            <li class="">
                <a href="{{route('tanah.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-square"></i></span>
                    <span class="pcoded-mtext">Tanah</span>
                </a>
            </li>

            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Akun</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="{{route('admin.index')}}">
                            <span class="pcoded-mtext">Admin</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('company.index')}}">
                            <span class="pcoded-mtext">Mitra</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="{{route('user.index')}}">
                            <span class="pcoded-mtext">Pelanggan</span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="#">
                            <span class="pcoded-mtext">Tukang</span>
                        </a>
                    </li>

                </ul>
            </li>

            <li class="">
                <a href="{{route('kategori.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Kategori</span>
                </a>
            </li>

            <li class="">
                <a href="{{route('area.index')}}">
                    <span class="pcoded-micon"><i class="feather icon-map-pin"></i></span>
                    <span class="pcoded-mtext">Area</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
<!-- SIDEBAREND -->
