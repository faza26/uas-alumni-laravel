<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Jejak Lulusan Alumni PeTIK Jombang</title>

    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>

    <!-- JS Assets -->
</head>

<body class="bg-gray-200 overflow-auto">

    @include('component.navbar')

    @yield('content')

    <footer class="footer">
        <div class="footer-nav">
            <div class="footer-start">
                <div class="footer-brand flex justify-start">
                    <img src="/assets/img/logo.png" alt="Logo PeTIK JOmbang" class="logo-footer">
                    <h2 class="brand-footer">PeTIK Jombang</h2>
                </div>
                <div class="footer-address mt-4">
                    <span class="font-semibold address-title">
                        Alamat : <br>
                    </span>
                    <span class="address">
                        Jl. KH.Bisri Syansuri - Plosogeneng<br>
                        Kec. Jombang Kab. Jombang<br>
                        Prov. Jawa Timur
                    </span>
                    <div class="contact-info block mt-3">
                        <span class="address"><i class="fa fa-globe"></i> <a href="https://petikjombang.com" class="backlink">https://petikjombang.com</a></span><br>
                        <span class="address"><i class="fa fa-envelope"></i> petikjombang@gmail.com</span><br>
                        <span class="address"><i class="fa fa-phone"></i> 083898137672</span>
                    </div>
                </div>
            </div>
            <hr class="separator-footer">
            <div class="footer-middle">
                <div class="partner">
                    <h2 class="partner-title">Link Terkait</h2>
                    <ul class="list-disc ml-5">
                        <li class="partner-list"><a href="https://petikjombang.com" class="backlink" target="_blank">Web Pesantren PeTIK Jombang</a></li>
                        <li class="partner-list"><a href="https://pmb.petikjombang.com" class="backlink">Web PMB PeTIK Jombang</a></li>
                        <li class="partner-list"><a href="https://instagram.com/petik_jombang/" class="backlink">Instagram PeTIK Jombang</a></li>
                        <li class="partner-list"><a href="https://instagram.com/ospe_petik_jombang/" class="backlink">Instagram OSPe PeTIK Jombang</a></li>
                    </ul>
                </div>
            </div>
            <hr class="separator-footer">
            <div class="footer-end">
                <h2 class="langganan">Berlangganan</h2>

                <!-- Langganan Form -->
                <form action="" class="langganan-form">
                    <input type="email" class="langganan-input" placeholder="namaanda@email.com">
                    <div class="button-form-wrapper">
                        <button class="btn btn-danger">Langganan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <span class="copyright">
                Copyright 2023 &copy; PeTIK Jombang. All Right Reserved.
            </span>

            <span class="creator">
                Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://github.com/faza26">Team Mahasantri AllStars</a> 
            </span>
        </div>
    </footer>

    <script src="/assets/js/app.js"></script>
</body>

</html>
