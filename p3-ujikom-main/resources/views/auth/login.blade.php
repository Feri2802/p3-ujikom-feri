{{-- @extends('layouts.auth')
@section('title', 'Masuk')
@section('content')
<section class="row flexbox-container">
    <div class="col-xl-8 col-11 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="{{asset('backend/images/pages/login.png')}}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            @if ($message = Session::get('error'))
                              <div class="alert alert-danger alert-block">
                                <strong>{{ $message }}</strong>
                              </div>
                            @endif
                            <div class="card-title">
                                <h4 class="mb-0">Masuk</h4>
                            </div>
                        </div>
                        <p class="px-2">Selamat Datang, Masuk Menggunakan Akun Kamu.</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-Mail" value="{{ old('email') }}">
                                        @error('email')
                                          <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="email">E-Mail</label>
                                    </fieldset>

                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="Password">
                                        @error('password')
                                          <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="user-password">Password</label>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary float-right btn-inline btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                        <span class="mt-1 ml-2" style="text-align: left"><a href=" {{route('password.request')}} ">Lupa Password ?</a></span>
                        <div class="login-footer">
                            <div class="divider">
                                <div class="divider-text"><a href="/">E-Laundry</a></div>
                            </div>
                            <p style="font-size:10px;text-align:center">Build With <i class="feather icon-heart text-danger"></i> by <a href="https://andridesmana.pw" target="_blank">Andri Desmana</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}

{{-- @extends('layouts.auth')
@section('title', 'Masuk')
@section('content')
<section class="row flexbox-container">
    <div class="col-xl-8 col-11 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="{{asset('backend/images/pages/login.png')}}" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            @if ($message = Session::get('error'))
                              <div class="alert alert-danger alert-block">
                                <strong>{{ $message }}</strong>
                              </div>
                            @endif
                            <div class="card-title">
                                <h4 class="mb-0">Masuk</h4>
                            </div>
                        </div>
                        <p class="px-2">Selamat Datang, Masuk Menggunakan Akun Kamu.</p>
                        <div class="card-content">
                            <div class="card-body pt-1">
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="E-Mail" value="{{ old('email') }}">
                                        @error('email')
                                          <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="email">E-Mail</label>
                                    </fieldset>

                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="user-password" placeholder="Password">
                                        @error('password')
                                          <span class="invalid-feedback text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="user-password">Password</label>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary float-right btn-inline btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                        <span class="mt-1 ml-2" style="text-align: left"><a href=" {{route('password.request')}} ">Lupa Password ?</a></span>
                        <div class="login-footer">
                            <div class="divider">
                                <div class="divider-text"><a href="/">E-Laundry</a></div>
                            </div>
                            <p style="font-size:10px;text-align:center">Build With <i class="feather icon-heart text-danger"></i> by <a href="https://andridesmana.pw" target="_blank">Andri Desmana</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}

<body>
    <style type="text/css">
        body {
            position: fixed;
            width: 1366px;
            height: 768px;
            background-image: url("/frontend/img/login/bglogin.png");
        }

        /* codingan navbar */
        .topnav {
            background: rgba(0, 0, 0, 0);
            overflow: hidden;
            padding: 0px 15px;
        }

        .topnav a {
            font-family: 'Arial';
            width: 100px;
            height: 15px;
            left: 807px;
            top: 7px;
            float: right;
            display: block;
            color: #FFFFFF;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a img {
            position: absolute;
            width: 29px;
            height: 23px;
            left: 1310px;
            top: 10.6px;
        }

        .topnav a:hover {
            background: #FFFFFF;
            mix-blend-mode: normal;
            border-radius: 30px;
            color: black;
            border-radius: 30px;
            width: 100px;
            height: 15px;
            left: 807px;
            top: 7px;
        }

        .topnav a.active:hover {
            background: #FFFFFF;
            mix-blend-mode: normal;
            border-radius: 30px;
            color: black;
            border-radius: 30px;
            width: 100px;
            height: 15px;
            left: 807px;
            top: 7px;
        }

        .topnav a.active {
            width: 100px;
            height: 15px;
            left: 807px;
            top: 7px;

            background: rgba(0, 0, 0, 0.2);
            border-radius: 30px;
        }

        /* Form Login */
        section {
            width: 473px;
            height: 493px;
            left: 797px;
            top: 50px;
            position: absolute;
            padding: 10px;
            background: rgba(0, 0, 0, 0.2);
            mix-blend-mode: normal;
            border-radius: 30px;
        }

        p {
            align-item: center;
            text-align: center;
            width: 95px;
            height: 40px;
            left: 986px;
            top: 180px;
            margin-left: 195px;

            font-family: 'Righteous';
            font-style: normal;
            font-weight: 400;
            font-size: 32px;
            line-height: 40px;
            color: #FFFFFF;
        }

        /* codingan element fektor */
        svg {
            position: absolute;
            width: 846px;
            height: 754px;
            left: -10px;
            top: 10px;
        }

        /* codingan gambar icon laundry */
        img {
            position: absolute;
            width: 612px;
            height: 430px;
            left: 92px;
            top: 140px;
        }

        /* codingan button login */
        .button {
            position: absolute;
            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 28px;
            text-align: center;
            color: #FFFFFF;
            border: none;
            width: 220px;
            height: 44px;
            left: 940px;
            top: 420px;
            background: rgba(255, 254, 254, 0.3);
            border-radius: 20px;
            text-decoration: none;
        }

        .button:hover {
            position: absolute;
            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 28px;
            text-align: center;
            color: black;
            border: none;
            width: 220px;
            height: 44px;
            left: 940px;
            top: 420px;
            background: #FFFFFF;
            border-radius: 20px;
            text-decoration: none;
        }

        /* codingan form login */
        .username {
            position: absolute;
            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 28px;
            text-align: center;
            color: #FFFFFF;
            border: none;
            width: 366px;
            height: 61px;
            left: 861px;
            top: 180px;
            background: rgba(255, 254, 254, 0.3);
            border-radius: 20px;
        }

        .username:focus {
            outline: 0px;
            outline-color: #F0EEEE;
        }

        .password {
            position: absolute;
            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 28px;
            text-align: center;
            color: #FFFFFF;
            border: none;
            width: 366px;
            height: 61px;
            left: 861px;
            top: 280px;
            background: rgba(255, 254, 254, 0.3);
            border-radius: 20px;
        }

        .password:focus {
            outline: 0px;
            outline-color: #F0EEEE;
        }
    </style>

    <!-- codingan navbar -->
    <div class="topnav">
        <a class="active" href="/login">Masuk</a>
        <a href="/">Beranda</a>
    </div>

    <!-- codingan Form Login -->
    <section>
        <p>Masuk</p>
    </section>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter Email" class="username">
        <input type="password" name="password" placeholder="Enter Password" class="password">
        <button type="submit" class="button">Masuk</button>
    </form>

    <!-- codingan element fektor -->
    <svg width="867" height="755" viewBox="0 0 867 755" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_33_55)">
            <path
                d="M0 171.042V29.8909C79.8528 -10.0782 201.738 -34.1226 305.107 136.58C434.318 349.959 284.586 393.389 552.682 393.389C780.127 393.389 836.569 676.793 846 755H593.237C628.134 732.183 717.072 677.674 655.956 557.2C579.562 406.608 530.518 459.952 368.769 431.628C207.02 403.303 298.505 353.263 216.923 220.138C151.658 113.637 45.1137 143.032 0 171.042Z"
                fill="white" />
            <path
                d="M0 171.042V29.8909C79.8528 -10.0782 201.738 -34.1226 305.107 136.58C434.318 349.959 284.586 393.389 552.682 393.389C780.127 393.389 836.569 676.793 846 755H593.237C628.134 732.183 717.072 677.674 655.956 557.2C579.562 406.608 530.518 459.952 368.769 431.628C207.02 403.303 298.505 353.263 216.923 220.138C151.658 113.637 45.1137 143.032 0 171.042Z"
                stroke="white" />
        </g>
        <defs>
            <filter id="filter0_d_33_55" x="-20.5" y="0.499878" width="887.064" height="815"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                <feOffset dy="40" />
                <feGaussianBlur stdDeviation="10" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_33_55" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_33_55" result="shape" />
            </filter>
        </defs>
    </svg>

    <!-- codingan icon laundry -->
    <img src="/frontend/img/login/RAWR.png">
</body>
