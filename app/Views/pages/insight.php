<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="insight">
    <div class="container insight-wrapper">
        <div class="col">

            <div class="row mt-4 pt-5">
                <div class="col-12">

                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card mb-3">
                        <div class="card-body text-center p-1">
                            <div id="map1">
                                <!-- Frame Bubble Map -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688780052580&to=1688801652580&panelId=5" class="w-100 rounded" height="575" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="card mb-3">
                            <div class="card-body text-center p-1">
                                <!-- Frame Service Filter -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688831099924&to=1688852699924&panelId=7" class="w-100 rounded" height="240" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body text-center p-1">
                                <!-- Frame Usage -->
                                <iframe src="http://localhost:3000/d-solo/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1&from=1688831503747&to=1688853103747&panelId=6" class="w-100 rounded" height="240" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="text-center">
                            <!-- button lihat rekomendasi -->
                            <a href="http://127.0.0.1:5000/" target="_blank" class="btn btn-outline-dark">See Recomendation</a>
                            <a href="http://localhost:3000/d/ce34e6bd-e7d1-4481-85bb-ef4b834c936d/dbeaver?orgId=1" target="_blank" class="btn btn-outline-dark">More Insight</a>
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