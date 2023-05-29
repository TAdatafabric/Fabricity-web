<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Insight for Your Data</h1>

            <p>Ini section untuk full visualisasi data</p>

            <p>ini bisa diedit buat insight</p>
            <iframe src="http://localhost:3010/d-solo/ac1d307a-bd1d-490b-b474-7915a21b15e2/datafabric?orgId=1&from=1630454400000&to=1630454400000&panelId=1" width="450" height="200" frameborder="0"></iframe>
                <iframe src="http://localhost:3010/d-solo/ac1d307a-bd1d-490b-b474-7915a21b15e2/datafabric?orgId=1&from=1630454400000&to=1630454400000&panelId=2" width="450" height="200" frameborder="0"></iframe>
                    <iframe src="http://localhost:3010/d-solo/ac1d307a-bd1d-490b-b474-7915a21b15e2/datafabric?orgId=1&from=1630454400000&to=1630454400000&panelId=3" width="450" height="200" frameborder="0"></iframe>
                        <iframe src="http://localhost:3010/d-solo/ac1d307a-bd1d-490b-b474-7915a21b15e2/datafabric?orgId=1&from=1630454400000&to=1630454400000&panelId=4" width="450" height="200" frameborder="0"></iframe>
                            <iframe src="http://localhost:3010/d-solo/ac1d307a-bd1d-490b-b474-7915a21b15e2/datafabric?orgId=1&from=1630454400000&to=1630454400000&panelId=5" width="450" height="200" frameborder="0"></iframe>
            
                <h3>Rekomendasi service filter</h3>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>