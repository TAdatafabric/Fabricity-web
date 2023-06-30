<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="insight">
    <div class="container insight-wrapper">
        <div class="col">

            <div class="row mt-5 pt-5">
                <div class="col-12">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-success shadow-none" id="show1">Provinsi</button>
                        <button type="button" class="btn btn-outline-success shadow-none" id="show2">Kabupaten / Kota</button>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body text-center p-1">
                            <div id="map1">
                                <!-- Frame Bubble Map -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688115155532&to=1688136755532&panelId=1" class="w-100 rounded" height="400" frameborder="0"></iframe>
                            </div>
                            <div class="d-none" id="map2">
                                <!-- Frame Heat Map -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688114396500&to=1688135996500&panelId=2" class="w-100 rounded" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div class="card mb-3">
                            <div class="card-body text-center p-1">
                                <!-- Frame Service Filter -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688113646137&to=1688135246137&panelId=4" class="w-100 rounded" height="120" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center p-1">
                                <!-- Frame Usage -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688114030906&to=1688135630906&panelId=3" class="w-100 rounded" height="120" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="text-center">
                            <!-- button lihat rekomendasi -->
                            <a href="http://127.0.0.1:5000/" class="btn btn-outline-dark">Lihat Rekomendasi</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--
    untuk file .js nya ada di public/script.js
-->

<?= $this->endSection(); ?>