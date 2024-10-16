@extends('layouts.app')

@section('title', 'Stok Kartı')

@section('content')
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('layouts.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="theme-toggle">
                                <iconify-icon id="theme-icon" icon="ri:moon-fill"></iconify-icon>
                            </a>
                        </li>
                        <script>
                            document.getElementById('theme-toggle').addEventListener('click', function() {
                                const icon = document.getElementById('theme-icon');
                                if (icon.getAttribute('icon') === 'ri:moon-fill') {
                                    icon.setAttribute('icon', 'si:sun-fill');
                                } else {
                                    icon.setAttribute('icon', 'ri:moon-fill');
                                }
                            });
                        </script>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="body-wrapper-inner">
                <div class="container-fluid" style="background-color: white; border-radius: 30px;">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card" style="background-color: #f5f5f5;">
                                <form action="">
                                    <div class="px-4 py-3 border-bottom">
                                        <h4 class="card-title mb-0">Stok Kartı Girişi</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputText1" class="form-label col-sm-3 col-form-label">Barkod
                                                No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputText1"
                                                    placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputText2" class="form-label col-sm-3 col-form-label">Ürün
                                                Adı</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputText2"
                                                    placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label for="exampleInputText2"
                                                class="form-label col-sm-3 col-form-label">Birimi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="exampleInputText2"
                                                    placeholder="" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <div class="d-flex align-items-center gap-6">
                                                    <button class="btn btn-primary" type="submit">Stok Kartı
                                                        Oluştur</button>
                                                    <a href="/stock/cards" class="btn bg-danger-subtle text-danger">İptal
                                                        et</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive border rounded-1">
                                        <table class="table">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th>Barkod No</th>
                                                    <th>Ürün Adı</th>
                                                    <th>İşlem</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nigam</td>
                                                    <td><a href="" class="text-primary">Ekle</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
