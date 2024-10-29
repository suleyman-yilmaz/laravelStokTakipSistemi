@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <!-- Logo yerine Stok Takip Sistemi başlığı -->
                                <h1 class="title-text">Stok Takip Sistemi</h1>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputtext1" class="form-label">İsim</label>
                                        <input type="text" class="form-control" id="exampleInputtext1"
                                            name="name" aria-describedby="textHelp"> <!-- Name attribute added -->
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">E-Mail</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            name="email" aria-describedby="emailHelp"> <!-- Name attribute added -->
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Şifre</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            name="password"> <!-- Name attribute added -->
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPasswordConfirm" class="form-label">Şifre (Tekrar)</label>
                                        <input type="password" class="form-control" id="exampleInputPasswordConfirm"
                                            name="password_confirmation"> <!-- Name attribute added -->
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Üye ol</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Zaten bir hesabın var mı?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Giriş
                                            yap</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
