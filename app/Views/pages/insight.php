<div class="container">
    <div class="row">
        <div class="col">
            <h1>Insight for Your Data</h1>
            <p>ini bisa diedit buat insight</p>
            <iframe src="http://localhost:3000/d-solo/be0f08ce-17f0-4a6c-9bdf-a7c1be83de8b/tadatafabric-dashboard-grafana?orgId=1&from=1610125200000&to=1628442000000&panelId=6" width="450" height="200" frameborder="0"></iframe>
                <h3>Tes ini muncul kah?</h3>
                <?php
                $output = shell_exec("python insight.py");
                echo $output;
                ?> 
        </div>
    </div>
</div>