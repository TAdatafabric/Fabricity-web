<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="insight">
    <div class="container insight-wrapper">
        <div class="col">
            <h1>Insight for Your Data</h1>

            <p>Ini section untuk full visualisasi data</p>
            <p>ini bisa diedit buat insight</p>
            <!-- map 1 -->
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1685412161741&to=1685433761741&panelId=5" width="400" height="400" frameborder="0"></iframe>
<<<<<<< HEAD
            <!-- map 2 -->
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1685411021697&to=1685432621697&theme=dark&panelId=1" width="400" height="400" frameborder="0"></iframe>
            <!--  usage-->
=======
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686043573023&to=1686065173023&theme=light&panelId=1" width="400" height="400" frameborder="0"></iframe>
>>>>>>> d3d05e358d9af2fc484b45da0377ce5c730c28ac
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=-6826978578871&to=-6826909218871&panelId=2" width="805" height="200" frameborder="0"></iframe>
            <!-- service filter -->
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=-6826978578871&to=-6826909218871&panelId=3" width="400" height="400" frameborder="0"></iframe>
            <!-- rembal -->
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=-6826978578871&to=-6826909218871&panelId=4" width="400" height="400" frameborder="0"></iframe>
            <h3>Rekomendasi service filter</h3>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>