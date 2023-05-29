<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-home">
    <div class="container home-wrapper">
        <div class="content-left">
            <h1 class="heading"> Analyzing Data</h1>
            <h1 class="heading"> for You</h1>
            <p class="subheading">We are here to make your work easier!</p>
            <!-- <div class="box-wrapper"> -->
            <!-- <div class="box"> -->
            <!-- <p>Mulai</p> -->

        </div>
        <!-- <div class="content-right"> -->
        <!-- <div class="img-wrapper"> -->
        <!-- <img src="image/map.png" width:"500" height="300" alt=""> -->
    </div>
</div>

<!-- service start -->
<section class="service">
    <div class="container service-wrapper">
        <div class="row1">
            <p class="label-service">What we serve</p>
            <h1 class="heading-service">Top Values for You</h1>
            <p class="subheading-service">The best service that we will be with you everytime</p>
        </div>
        <div class="row2">
            <div class="box-service">
                <i class='bx bx-globe'></i>
                <h3>Lots of Choices</h3>
                <p>We know what to do next
                    with our company with
                    just one click away</p>
                <div class="btn-learn">
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="box-service">
                <i class='bx bxs-cart-add'></i>
                <h3>Easy Access</h3>
                <p>Providing services online
                    which can be access easily
                    through our website</p>
                <div class="btn-learn">
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="box-service">
                <i class='bx bxs-hotel'></i>
                <h3>Masih belum tau</h3>
                <p>We also provide lodging near the
                    destination where you are visiting</p>
                <div class="btn-learn">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
</section>
<!-- service end -->

<!-- statistik start -->
<section class="statistik">
    <div class="container statistik-wrapper">
        <div class="content-img">
            <img src="image/logo.jpg" alt="">
        </div>
        <div class="content-statis">
            <p class="label-statis">OUR PERFORMANCE</p>
            <h1 class="heading-statis">We're bringing the data-driven
                revolution to companies!</h1>
            <p class="subheading-statis">Dengan menggunakan layanan kami, perusahaan dapat
                mendapatkan Bussiness Insight dari analisis data ....... (lanjutin keunggulan dari produk)</p>

            <div class="angka=wrapper">
                <div class="tahun">
                    <h1>20</h1>
                    <p>Years
                        Experience</p>
                </div>
                <div class="desti">
                    <h1>30++</h1>
                    <p>Destination
                        Collaboration</p>
                </div>
                <div class="customer">
                    <h1>2k++</h1>
                    <p>Happy
                        Customers</p>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- statistik end -->
<?= $this->endSection(); ?>