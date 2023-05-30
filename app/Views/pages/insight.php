<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Insight for Your Data</h1>

            <p>Ini section untuk full visualisasi data</p>
            <p>ini bisa diedit buat insight</p>
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?from=1685343715479&to=1685365315479&orgId=1&panelId=1" width="400" height="400" frameborder="0"></iframe>
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=-6826978578871&to=-6826909218871&panelId=3" width="400" height="400" frameborder="0"></iframe>
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=-6826978578871&to=-6826909218871&panelId=2" width="400" height="200" frameborder="0"></iframe>
            <iframe src="http://localhost:3010/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=-6826978578871&to=-6826909218871&panelId=4" width="400" height="200" frameborder="0"></iframe>
                <h3>Rekomendasi service filter</h3>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>