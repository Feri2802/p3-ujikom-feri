{{-- Banner --}}

{{-- <!-- begin container -->
    <div class="container">
        <a href="{{route('login')}}">Masuk</a>
        <h3>Lacak Status Laundry</h3>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        @include('frontend.modal')
    </div> --}}
{{-- End Header --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawrndry</title>
</head>

<body>
    <style type="text/css">
        body {
            position: relative;
            width: 1340px;
            height: 2450px;
            background-image: url("/frontend/img/landing/bglanding.png");
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

        /* .topnav a img {
            position: absolute;
            width: 29px;
            height: 23px;
            left: 1285px;
            top: 10.6px;
        } */

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
            left: 0px;
            top: 7px;

            background: rgba(0, 0, 0, 0.2);
            border-radius: 30px;
        }

        /* codingan button login */
        .login {
            background: rgba(0, 0, 0, 0);
            overflow: hidden;
            padding: 0px 15px;
            text-decoration: none;
        }

        .login a {
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
            border: none;
        }

        /* .login a img {
            position: absolute;
            width: 29px;
            height: 23px;
            left: 1285px;
            top: 10.6px;
        } */

        .login a:hover {
            background: rgba(0, 0, 0, 0.2);
            mix-blend-mode: normal;
            border-radius: 30px;
            color: black;
            width: 100px;
            height: 15px;
            left: 807px;
            top: 7px;
        }

        .login a.active {
            width: 100px;
            height: 15px;
            left: 0px;
            top: 7px;

            background: rgba(0, 0, 0, 0.2);
            border-radius: 30px;
        }

        /* codingan serach bar */
        .input-group {
            position: absolute;
            width: 395px;
            height: 54.97px;
            left: 510px;
            top: 40px;
            margin: 50px auto;
            background: #F0EEEE;
            filter: drop-shadow(0px 10px 7px rgba(0, 0, 0, 0.25));
            border-radius: 50px;
        }

        .form-control {
            width: 314.7px;
            height: 54.97px;
            padding: 0px 15px;
            background: #F0EEEE;
            border: 0px solid #F0EEEE;
            border-radius: 50px;
            text-decoration: none;
        }

        .form-control:focus {
            outline: 0px;
            outline-color: #F0EEEE;
        }

        .btn {
            position: absolute;
            height: 54.97px;
            left: 340px;
            padding: 6px 15px;
            border: 2px solid #FB7B63;
            background-color: #FB7B63;
            border-radius: 50px;
            color: #fafafa;
        }

        .btn:hover {
            background-color: #FB7B63;
            color: #F0EEEE;
        }

        .check {
            position: absolute;
            left: 530px;
            top: 50px;
            bottom: 87.8%;

            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 21px;
            color: #FFFFFF;
        }

        /* codingan icon1 */
        .rawrndry {
            position: absolute;
            width: 624px;
            height: 592px;
            left: 75px;
            top: 325px;
        }

        /* codingan paragraf welcome */
        .welcome {
            position: absolute;
            width: 497px;
            height: 211px;
            left: 740px;
            top: 450px;

            font-family: 'Acme';
            font-style: normal;
            font-weight: 400;
            font-size: 30px;
            line-height: 40px;

            color: #FFFFFF;
        }

        /* <!-- codingan element vektor1 --> */
        svg {
            position: absolute;
            width: 1011px;
            height: 623.06px;
            left: 330px;
            top: 340px;
        }

        /* codingan paragraf about */
        .aboutus {
            position: absolute;
            left: 100px;
            top: 1135px;
            bottom: 87.8%;

            font-family: 'Acme';
            font-style: normal;
            font-weight: 400;
            font-size: 60px;
            line-height: 21px;
            color: #FFFFFF;
        }

        .about {
            position: absolute;
            width: 497px;
            height: 211px;
            left: 100px;
            top: 1200px;

            font-family: 'Acme';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 40px;

            color: #FFFFFF;
        }

        /* codingan paragraf why us */
        .whyus {
            position: absolute;
            left: 765px;
            top: 1650px;
            bottom: 87.8%;

            font-family: 'Acme';
            font-style: normal;
            font-weight: 400;
            font-size: 40px;
            line-height: 21px;
            color: #FFFFFF;
        }

        .why {
            position: absolute;
            width: 497px;
            height: 211px;
            left: 765px;
            top: 1700px;

            font-family: 'Acme';
            font-style: normal;
            font-weight: 400;
            font-size: 25px;
            line-height: 40px;

            color: #FFFFFF;
        }

        /* codingan icon laundry */
        .laundry {
            width: 580px;
            height: 430px;
            position: absolute;
            left: 75px;
            top: 1700px;
            bottom: 87.8%;
        }

        /* codingan dino */
        .dino {
            position: absolute;
            width: 550px;
            height: 518px;
            left: 760px;
            top: 1040px;
            bottom: 87.8%;
        }

        footer {
            position: absolute;
            width: 1366px;
            height: 200px;
            left: -18px;
            top: 2300px;
            text-align: center;
            color: #FFFFFF;
            background: rgba(255, 255, 255, 0.274);
            /* box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25); */
            border-radius: 90px 90px 0px 0px;
        }

        .footer-distributed {
            box-sizing: border-box;
            /* width: 100%; */
            text-align: left;
            font: bold 16px sans-serif;
            /* padding: 50px 50px 60px 50px; */
            /* margin-top: 80px; */
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left {
            position: absolute;
            width: 30%;
            left: 20%;
        }

        .footer-distributed h3 {
            color: #FFFFFF;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }

        /* Footer links */

        .footer-distributed .footer-links {
            color: #FFFFFF;
            margin: 20px 0 12px;
        }

        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }




        /* Footer Right */

        .footer-distributed .footer-right {
            position: absolute;
            width: 30%;
            left: 60%;
        }

        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-company-about span {
            display: block;
            color: #FFFFFF;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>

    <!-- codingan navbar -->
    <div class="topnav">
        <a href="/login">Masuk</a>
        <a class="active" href="/">Beranda</a>
        {{-- <img src="/frontend/img/landing/iconlogin.png"> --}}
    </div>

    <h1 class="check">Lacak Status Laundry</h1>
    <!-- codingan search bar -->
    <div class="input-group m-b-20">
        <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i>Cari</button>
        </span>
    </div>
    @include('frontend.modal')
    {{-- <form>
        <input class="search" type="search" placeholder="Contoh : TR0392928">
        <input class="button" type="button" value="Cari">
    </form> --}}

    <!-- codingan paragraf welcome -->
    <p class="welcome" id="i">Selamat datang di "RAWRNDRY", toko laundry terpercaya dan berkualitas. Kami
        memahami bahwa
        kebersihan dan kenyamanan pakaian anda adalah prioritas utama kami, dan kami hadir untuk membantu anda
        merawatnya.
    </p>

    <!-- codingan element vektor1 -->
    <svg width="1026" height="645" viewBox="0 0 1026 645" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_43_96)">
            <path
                d="M158 535.5C151.2 488.7 74.8333 487 39.5 494L98 461L163.5 423C181.333 424 214.7 438.4 227.5 466C257.1 547.2 279.5 547.394 309.5 551C374.667 558.833 512.8 560.1 542 510.5C578.5 448.5 703.5 396.5 758 408.5C1037 456 1018.5 260 1007.5 219C1000.07 191.302 946.167 158.667 906.5 144C875.833 129.5 788.4 15.2 686 62C583.6 108.8 509 68.9999 440.5 136H438C428.5 72.5 557.8 70.6 679 27C800.2 -16.6 980 80 1045 100.5V250V460C1026.5 489.667 965 541.3 867 510.5C744.5 472 679 580.5 580 624C500.8 658.8 310 624.5 224.5 603C193.5 596.667 164.8 582.3 158 535.5Z"
                fill="white" />
            <path
                d="M224.5 603C193.5 596.667 164.8 582.3 158 535.5C151.2 488.7 74.8333 487 39.5 494L98 461L163.5 423C181.333 424 214.7 438.4 227.5 466C257.1 547.2 279.5 547.394 309.5 551M224.5 603L258.5 587.5L309.5 551M224.5 603C310 624.5 500.8 658.8 580 624C679 580.5 744.5 472 867 510.5C965 541.3 1026.5 489.667 1045 460V250V100.5C980 80 800.2 -16.6 679 27C557.8 70.6 428.5 72.5 438 136H440.5C509 68.9999 583.6 108.8 686 62C788.4 15.2 875.833 129.5 906.5 144C946.167 158.667 1000.07 191.302 1007.5 219C1018.5 260 1037 456 758 408.5C703.5 396.5 578.5 448.5 542 510.5C512.8 560.1 374.667 558.834 309.5 551"
                stroke="white" />
        </g>
        <defs>
            <filter id="filter0_d_43_96" x="0.254395" y="0.32196" width="1045.25" height="644.061"
                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                <feOffset dx="-29" dy="-5" />
                <feGaussianBlur stdDeviation="5" />
                <feComposite in2="hardAlpha" operator="out" />
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_43_96" />
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_43_96" result="shape" />
            </filter>
        </defs>
    </svg>

    <!-- codingan icon1 -->
    <img src="/frontend/img/landing/rawrndry.png" class="rawrndry" alt="">

    <!-- codingan paragraf about -->
    <h1 class="aboutus" id="a">Tentang Kami</h1>
    <p class="about">"RAWRNDRY" adalah nama yang unik dan catchy yang memiliki kesan lucu dan menyenangkan. Nama
        ini
        merupakan gabungan dari kata "Rawr" yang merupakan raungan binatang yang menakutkan, dan "Laundry" yang
        menandakan bahwa kami adalah jasa laundry.
    </p>

    <!-- codingan paragraf why us? -->
    <h1 class="whyus" id="w">Kenapa Harus Memilih Kami?</h1>
    <p class="why">Dengan mesin dan peralatan cuci terbaru serta tim yang terlatih dan berpengalaman, kami
        menjamin
        hasil cucian yang bersih dan berkualitas.

        Kami menerapkan prosedur ketat untuk memastikan keamanan dan privasi pakaian Anda. Kami juga menawarkan jasa
        pengeringan dan plastik tahan air untuk melindungi pakaian dari cuaca ekstrim. Kami berdedikasi untuk
        memenuhi
        kebutuhan Anda dan memastikan kepuasan pelanggan.

        Jadilah bagian dari keluarga besar kami dan nikmati layanan laundry terpercaya dan berkualitas. Hubungi kami
        hari ini untuk informasi lebih lanjut dan pemesanan."
    </p>

    <!-- codingan icon laundry -->
    <img src="/frontend/img/landing/laundry.png" class="laundry" alt="">

    {{-- codingan icon dino --}}
    <img src="/frontend/img/landing/roar.png" class="dino" alt="">

    {{-- <footer>
        <ul>
            <a>Instragram</a><br>
            <a>Facebook</a>
            <a>Twitter</a>
        </ul>
        <!--copyright-->
        <p class="copyright">Copyright by Feri</p>
    </footer> --}}

    <footer class="footer-distributed">

        <div class="footer-left">
            <br>
            <h3>Rawr<span>ndry</span></h3>

            <p class="footer-links">
                <a>Informasi :</a><br>
                <a href="#i">Beranda</a>
                |
                <a href="#a">Tentang Kami</a>
                |
                <a href="#w">Alasan memilih kami</a>
            </p>

        </div>


        <div class="footer-right">
            <p class="footer-company-about">
            <h2>Kontak Kami</h2>
            </p>
            <p class="footer-links">
                <a href="https://www.instagram.com/feri.feri.feri.feri.feri/">Intagram : rawrndry</a>
                <br>
                <a href="https://www.instagram.com/feri.feri.feri.feri.feri/">facebook : rawrndry</a>
                <br>
                <a href="https://www.instagram.com/feri.feri.feri.feri.feri/">Whatsapp : +62 895-xxxx-xxxx</a>
                <br>
                <a href="https://www.instagram.com/feri.feri.feri.feri.feri/">Email : rawrndry@gmail.com</a>
            </p>
        </div>
    </footer>

</body>


</html>
