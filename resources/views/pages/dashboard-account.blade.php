@extends('layouts.dashboard')

@section('title')
    Store Dashboard Settings
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
                            <h2 class="dashboard-title">My Account</h2>
                            <p class="dashboard-subtitle">
                                Update your current profile
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
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="Rizqi Akbar">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="rizqiakbar@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="addressOne">Address 1</label>
                                                            <input type="text" class="form-control" id="addressOne" name="addressOne" value="Setra Duta Cemara">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="addressTwo">Address 2</label>
                                                            <input type="text" class="form-control" id="addressTwo" name="addressTwo" value="Blok B2 No. 34">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="province">Province</label>
                                                            <select name="province" id="province" class="form-control">
                                                            <option value="West Java">West Java</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <select name="city" id="city" class="form-control">
                                                            <option value="Bandung">Bandung</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="postalCode">Postal Code</label>
                                                            <input type="text" class="form-control" id="postalCode" name="postalCode" value="53414">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <input type="text" class="form-control" id="country" name="country" value="Indonesia">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mobile">Mobile</label>
                                                            <input type="text" class="form-control" id="mobile" name="mobile" value="+6281294213582">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-right">
                                                        <button type="submit" class="btn btn-success px-5">Save Now</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection


