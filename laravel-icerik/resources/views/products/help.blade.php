@extends('layouts.app')

@section('title', 'Yardım')

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

            <!-- Video Cards Section -->
            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://img.youtube.com/vi/13-sRkfTq2Y/maxresdefault.jpg" class="card-img-top"
                                        alt="Video Thumbnail">
                                    <h5 class="card-title mt-3">Stok Kartı Nasıl Oluşturulur?</h5>
                                    <p class="card-text">Stok Takip Sistemi / Stok Kartı İşlemleri</p>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal"
                                        data-ytid="13-sRkfTq2Y">Watch Video</button>
                                </div>
                            </div>
                        </div>

                        <!-- Video Modal -->
                        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="videoModalLabel">Watch Video</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="ratio ratio-16x9">
                                            <iframe id="videoFrame" src="https://youtu.be/13-sRkfTq2Y" frameborder="0"
                                                allowfullscreen></iframe>
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