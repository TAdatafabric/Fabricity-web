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
                                <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310398171&to=1686331998171&panelId=1" class="w-100 rounded" height="400" frameborder="0"></iframe>
                            </div>
                            <div class="d-none" id="map2">
                                <!-- Frame Heat Map -->
                                <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310338206&to=1686331938206&panelId=5" class="w-100 rounded" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <div class="card mb-3">
                            <div class="card-body text-center p-1">
                                <!-- Frame Service Filter -->
                                <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686454058045&to=1686475658045&panelId=6" class="w-100" height="120" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center p-1">
                                <!-- Frame Usage -->
                                <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686454182001&to=1686475782001&panelId=2" class="w-100" height="120" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="text-center">
                            <!-- button lihat rekomendasi -->
                            <a href="http://127.0.0.1:5000/" target="_blank" class="btn btn-outline-dark">Lihat Rekomendasi</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--
     file .js nya ada di public/script.js
-->

<?= $this->endSection(); ?>