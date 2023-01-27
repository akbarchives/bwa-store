@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions
@endsection

@section('content')
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- dekstop menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                        <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture"> Hi, Angga
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                                        <a href="dashboard-account.html" class="dropdown-item">Settings</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="/" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inline-block mt-2">
                                        <img src="/images/icon-cart-filled.svg" alt="">
                                        <div class="card-badge">3</div>
                                    </a>
                                </li>
                            </ul>

                            <!-- mobile menu -->
                            <div class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inlineblock"> Hi, Angga</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link d-inlineblock"> Cart</a>
                                </li>

                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Section Content -->
                <div class="section-content section-dashboard-home" data-aos="fade-up">
                    <div class="container-fluid">
                        <div class="dashboard-heading">
                            <h2 class="dashboard-title">Transactions</h2>
                            <p class="dashboard-subtitle">
                                Big result start from the small one
                            </p>
                        </div>
                        <div class="dashboard content">
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sell Product</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Product</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="/images/dashboard-icon-product-1.png" alt="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            Shirup Marjan
                                                        </div>
                                                        <div class="col-md-3">
                                                            Angga Risky
                                                        </div>
                                                        <div class="col-md-3">
                                                            12 Januari, 2020
                                                        </div>
                                                        <div class="col-md-1 d-none d-md-block">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="/images/dashboard-icon-product-2.png" alt="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            LeBrone X
                                                        </div>
                                                        <div class="col-md-3">
                                                            Masayoshi
                                                        </div>
                                                        <div class="col-md-3">
                                                            11 Januari, 2020
                                                        </div>
                                                        <div class="col-md-1 d-none d-md-block">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="/images/dashboard-icon-product-3.png" alt="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            Soffa Lembutte
                                                        </div>
                                                        <div class="col-md-3">
                                                            Shayna
                                                        </div>
                                                        <div class="col-md-3">
                                                            11 Januari, 2020
                                                        </div>
                                                        <div class="col-md-1 d-none d-md-block">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="/images/dashboard-icon-product-1.png" alt="">
                                                        </div>
                                                        <div class="col-md-4">
                                                            Shirup Marjan
                                                        </div>
                                                        <div class="col-md-3">
                                                            Angga Risky
                                                        </div>
                                                        <div class="col-md-3">
                                                            12 Januari, 2020
                                                        </div>
                                                        <div class="col-md-1 d-none d-md-block">
                                                            <img src="/images/dashboard-arrow-right.svg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection


