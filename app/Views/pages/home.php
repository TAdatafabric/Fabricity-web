<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-home">
    <div class="container home-wrapper">
        <div class="content-left">
            <h1 class="heading"> Analyzing Data for You</h1>
            <p class="subheading">We are here to make your work easier!</p>
            <!-- insight button -->
            <div class="insight-btn">
                <div class="container insight-wrapper">
                    <a href="insight/create" class="btn btn-primary mb-3">View Insight</a>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="img-wrapper">
                <img src="image/home pict.png" alt="">
            </div>
        </div>
    </div>
</div>


<!-- service start -->
<section class="service">
    <div class="container service-wrapper">
        <div class="row1">
            <p class="label-service">What we serve</p>
            <h1 class="heading-service">Top Values for You</h1>
            <p class="subheading-service">The best services that will be with you everytime.</p>
        </div>
        <div class="row2">
            <div class="box-service">
                <i class='bx bx-globe'></i>
                <h3>Lots of Choices</h3>
                <p>We know what to do next
                    with our company with
                    just one click away</p>
            </div>
            <div class="box-service">
                <i class='bx bxs-pointer'></i>
                <h3>Easy Access</h3>
                <p>Providing services online
                    which can be access easily
                    through our website</p>
            </div>
            <div class="box-service">
                <i class='bx bx-vertical-bottom'></i>
                <h3>Insight</h3>
                <p>Giving you Business Insight
                    so you can decide
                    the next step of innovation
                    for your company
                </p>
            </div>
        </div>
</section>
<!-- service end -->

<!-- statistik start -->
<!-- <section class="statistik">
    <div class="container statistik-wrapper">
        <div class="content-img">
            <img src="image/fabric.png" alt="">
        </div>
        <div class="content-statis">
            <p class="label-statis">OUR PERFORMANCE</p>
            <h1 class="heading-statis">We're bringing the data-driven revolution to companies!</h1>
            <p class="subheading-statis">Our product will simplify your work just </p>

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

</section> -->
<!-- statistik end -->

<!-- footer start -->
<section class="footer">
    <div>
        <div class="social">
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bx-envelope'></i></a>
            <a href="#"><i class='bx bx-phone'></i></a>
        </div>

        <ul class="list">
            <li><a href="#">Home</a></li>
            <li><a href="/pages/insight">Insight</a></li>
            <li><a href="#">Input Data</a></li>
        </ul>
        <p class="copyright">
            Fabricity @ 2022
        </p>
    </div>
</section>
<!-- footer end -->

<?= $this->endSection(); ?>