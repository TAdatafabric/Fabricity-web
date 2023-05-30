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
            <img src="image/fabric.png" alt="">
        </div>
        <div class="content-statis">
            <p class="label-statis">OUR PERFORMANCE</p>
            <h1 class="heading-statis">We're bringing the data-driven revolution to companies!</h1>
            <p class="subheading-statis">Perusahaan dapat mendapatkan Bussiness Insight dari analisis data ....... (lanjutin keunggulan dari produk)</p>

            <div class="angka-wrapper">
                <div class="box-angka">
                    <h1>20</h1>
                    <p>Years
                        Experience</p>
                </div>
                <div class="box-angka">
                    <h1>30++</h1>
                    <p>Destination
                        Collaboration</p>
                </div>
                <div class="box-angka">
                    <h1>2k++</h1>
                    <p>Happy
                        Customers</p>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- statistik end -->

<!-- footer start -->
<footer class="footer" id="footer">
    <div class="container footer-wrapper">
        <div class="col-1-footer">
            <h1 class="logo-footer"><img src="image/Fabric.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Fabricity</h1>
            <p class="subheading-footer">The best service to customers is our top priority</p>
            <div class="sosmed-icon">
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            </div>
            <p class="copy">&copy;Copyright 2023 All Right Reserved | Built by Fabricity</p>
        </div>
        <div class="col-2-footer">
            <h3>About</h3>
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Insight</a></li>
                <li><a href="#">Input Data</a></li>
            </ul>
        </div>
        <div class="col-3-footer">
            <h3>Company</h3>
            <ul>
                <li><a href="#">Why Fabricity?</a></li>
                <li><a href="#">Partner with us</a></li>
                <li><a href="#">Blogs</a></li>
            </ul>
        </div>
        <div class="col-4-footer">
            <h3>Support</h3>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Accessbility</a></li>
            </ul>
        </div>
        <div class="col-5-footer">
            <h3>Get in touch</h3>
            <p>Questions or Feedback</p>
            <div class="form-input">
                <input type="text" placeholder="Type your email">
                <a href="#" class="btn-footer">Submit</a>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
<?= $this->endSection(); ?>