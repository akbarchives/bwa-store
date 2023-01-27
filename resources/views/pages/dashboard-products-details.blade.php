@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Details
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
                            <h2 class="dashboard-title">Shirup Marzann</h2>
                            <p class="dashboard-subtitle">
                                Product Details
                            </p>
                        </div>
                        <div class="dashboard-content">
                            <div class="row">
                                <div class="col-12">
                                    <form action="">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Product Name</label>
                                                            <input type="text" class="form-control" value="Shirup Marzan">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="number" class="form-control" value="100">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select name="category" class="form-control">
                                                                <option value="Foods" >Foods</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group rounded">
                                                            <label>Description</label>
                                                            <textarea name="editor"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" class="btn btn-success px-5 btn-block">Save Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-1.png" alt="" class="w-100">
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-2.png" alt="" class="w-100">
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="gallery-container">
                                                        <img src="/images/product-card-3.png" alt="" class="w-100">
                                                        <a href="#" class="delete-gallery">
                                                            <img src="/images/icon-delete.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" id="file" style="display: none;" multiple>
                                                    <button class="btn btn-secondary btn-block mt-3" onclick="thisFileUpload()">
                                                        Upload
                                                    </button>
                                                </div>
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

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        function thisFileUpload() {
            document.getElementById('file').click()
        }
    </script>
    <script>
        CKEDITOR.replace('editor');
    </script>

@endpush
