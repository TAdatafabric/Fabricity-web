<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="insight">
    <div class="container insight-wrapper">
        <div class="col">
            <h1>Insight for Your Data</h1>

            <div id="grafana-frame"></div>
            <!-- }); -->
            </script>
            <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310338206&to=1686331938206&panelId=5" width="400" height="400" frameborder="0"></iframe>
            <!-- map 2 -->
            <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310398171&to=1686331998171&panelId=1" width="400" height="400" frameborder="0"></iframe>
            <!--  usage-->
            <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310418654&to=1686332018655&panelId=2" width="805" height="400" frameborder="0"></iframe>
            <!-- service filter -->
            <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310441619&to=1686332041619&panelId=3" width="400" height="400" frameborder="0"></iframe>
            <!-- rtd-unit -->
            <iframe src="http://localhost:3000/d-solo/e9d71e09-5d6d-45ac-8aef-b13b21121e75/datafabric?orgId=1&from=1686310974688&to=1686332574688&panelId=4" width="400" height="400" frameborder="0"></iframe>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>