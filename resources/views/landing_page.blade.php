<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Profile - GAS Application</title>
</head>
<body>
    @include('header')

    <main>
        <section class="beranda">
            <img src="{{  asset('assets/img/background.png') }}" alt="" class="fluid">
            <div class="slogan">
                <h1>Bergabung dengan GAS</h1>
                <p>Aplikasi Gas akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas</p>
                <a href=""><i class="bx bxl-play-store"></i> Google Play</a>
            </div>
            {{-- <img src="{{ asset('assets/img/fotoku.jpg') }}" alt=""> --}}
        </section>
        <section id="fitur">
            <h2 class="section-title">Fitur</h2>
            <p class="section-title">Nikmati berbagai fitur menarik yang kami berikan</p>
            <div class="content">
                <div class="value">
                    <h2>Mesin Kasir</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ut fuga numquam fugiat quidem</p>
                </div>
                <div class="value">
                    <h2>Scan Barcode</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ut fuga numquam fugiat quidem</p>
                </div>
                <div class="value">
                    <h2>Daftar Kurir</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ut fuga numquam fugiat quidem</p>
                </div>
                <div class="value">
                    <h2>Stok Opname</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ut fuga numquam fugiat quidem</p>
                </div>
                <div class="value">
                    <h2>Print Thermal</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ut fuga numquam fugiat quidem</p>
                </div>
            </div>
        </section>
        <section id="toko">
            <h2 class="section-title">Kategori Toko</h2>
            <p class="section-title">Apapun jenis tokomu dapat bergabung dengan GAS</p>
            <div class="row">
                <div class="card-toko">
                    <img src="{{ asset('assets/img/toko/Toko.jpg') }}" alt="">
                    <h3>Toko Busana</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error ipsum repellat porro quae totam blanditiis iure autem accusantium iusto inventore impedit at numquam magnam, eos nulla sequi explicabo incidunt adipisci?</p>
                </div>
                <div class="card-toko">
                    <img src="{{ asset('assets/img/toko/Toko.jpg') }}" alt="">
                    <h3>Toko minimalis</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum excepturi tempore esse beatae iusto nulla dignissimos, quos ullam cupiditate mollitia, atque autem quas eius earum incidunt, aperiam odio optio?</p>
                </div>
                <div class="card-toko">
                    <img src="{{ asset('assets/img/toko/Toko.jpg') }}" alt="">
                    <h3>Toko minimalis</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut consequuntur, animi minus neque nesciunt enim quo nemo id qui ipsa in alias. Voluptate vel et nam fuga praesentium minus debitis.</p>
                </div>
                <div class="card-toko">
                    <img src="{{ asset('assets/img/toko/Toko.jpg') }}" alt="">
                    <h3>Toko minimalis</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas adipisci rerum omnis corrupti. Enim neque distinctio illum quidem excepturi, non beatae architecto commodi reprehenderit, accusantium laborum tenetur voluptate ducimus culpa!</p>
                </div>
            </div>
        </section>
        <section id="maps">
            <h2 class="section-title">Maps</h2>
            <p class="section-title">Aplikasi Gas Akan membantu dalam memantau stok produk dan menjakau yang lebih luas</p>
            <img src="{{ asset('assets/img/map.PNG') }}" alt="">
        </section>
        <section id="daftar">
            <h2 class="section-title" id="daftar">Daftar Tokomu Segera</h2>
            <p id="daftar">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloremque</p>
            <img id="daftar" src="{{ asset('assets/img/daftar1.PNG') }}" alt="" >
        </section>
        <section id="tentang">
            <h2 class="section-title">Tentang</h2>
            <p class="section-title">GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembel lebih luas Melalui Gerakan #AyoBelanjaTokoTetangga GAS mengajak untuk menjelajah dan menduku usaha-usaha disekitarmu.</p>
        </section>
        <section id="karir">
            <h2 class="section-title">Karir</h2>
            <p class="section-title">Mari bergabung bersama kami. Jadilah bagian dari kamii dan kembangkan bakat, ide kreatifmu dalam GAS</p>
            <div class="karir">
                <div class="card">
                    <h2>Marketing Comunication</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur autem nulla akjbdk falj</p>
                </div>
                <div class="card">
                    <h2>Marketing Comunication</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur autem nulla akjbdk falj</p>
                </div>
                <div class="card">
                    <h2>Marketing Comunication</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur autem nulla akjbdk falj</p>
                </div>
                <div class="card">
                    <h2>Marketing Comunication</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur autem nulla akjbdk falj</p>
                </div>
            </div>
        </section>
    </main>

    @include('footer')
    <script src="path/to/jquery.js"></script>
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $("#navbar").addClass("scrolled");
            } else {
                $("#navbar").removeClass("scrolled");
            }
        });

    </script>
</body>
</html>
