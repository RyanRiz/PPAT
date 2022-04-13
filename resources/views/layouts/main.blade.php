<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-PPAT | Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/vendors/materialdesignicons/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="navbar-brand">
                <a href="/">e-PPAT</a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>

            <li
                class="sidebar-item {{  ($title === "Dashboard") ? 'active' : '' }} ">
                <a href="/" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-title">Data</li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Customer</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{  ($title === "Input Customer") ? 'active' : '' }}">
                        <a href="/input-customer">Input Customer</a>
                    </li>
                    <li class="submenu-item {{  ($title === "Data Customer") ? 'active' : '' }}">
                        <a href="/data-customer">Data Customer</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Permohonan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{  ($title === "Input Permohonan") ? 'active' : '' }}">
                        <a href="/input-permohonan">Input Permohonan</a>
                    </li>
                    <li class="submenu-item {{  ($title === "Data Permohonan") ? 'active' : '' }}">
                        <a href="/data-permohonan">Data Permohonan</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-cart-fill"></i>
                    <span>Pengeluaran</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{  ($title === "Input Pengeluaran") ? 'active' : '' }}">
                        <a href="/input-pengeluaran">Input Pengeluaran</a>
                    </li>
                    <li class="submenu-item {{  ($title === "Data Pengeluaran") ? 'active' : '' }}">
                        <a href="/data-pengeluaran">Data Pengeluaran</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-fill"></i>
                    <span>Karyawan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{  ($title === "Input Karyawan") ? 'active' : '' }}">
                        <a href="/input-karyawan">Input Karyawan</a>
                    </li>
                    <li class="submenu-item {{  ($title === "Data Karyawan") ? 'active' : '' }}">
                        <a href="/data-karyawan">Data Karyawan</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-title">Tambahan</li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>User</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item {{  ($title === "Input User") ? 'active' : '' }}">
                        <a href="/input-user">Input User</a>
                    </li>
                    <li class="submenu-item {{  ($title === "Data User") ? 'active' : '' }}">
                        <a href="/data-user">Data User</a>
                    </li>
                </ul>
            </li>

    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class=''>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                            <p class="mb-0 text-sm text-success">Online</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="/assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                                    <li><a class="dropdown-item" href="{{ route('setting') }}"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit"><i class="icon-mid bi bi-box-arrow-right me-2"></i>Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">
                <div class="page-heading">
                    <h3>{{ $title }}</h3>
                </div>
                <div class="page-content">
                    @yield('main')
                </div>

                            {{-- <footer>
                                <div class="footer clearfix mb-0 text-muted">
                                    <div class="float-start">
                                        <p>2021 &copy; Mazer</p>
                                    </div>
                                    <div class="float-end">
                                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                                    </div>
                                </div>
                            </footer> --}}
                        </div>
                    </div>
            </div>

    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    @stack('scripts')

    <script src="/assets/js/pages/dashboard.js"></script>

    <script src="/assets/js/mazer.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("{{ session('warning') }}");
        @endif
      </script>

</body>

</html>
