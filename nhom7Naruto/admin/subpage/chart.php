<style>
.card .nav.flex-column>li:last-of-type {
    border-bottom: 0;
}

.card.height-control .card-body {
    max-height: 300px;
    overflow: auto;
}

.card .border-right {
    border-right: 1px solid rgba(0, 0, 0, 0.125);
}

.card .border-left {
    border-left: 1px solid rgba(0, 0, 0, 0.125);
}

.card.card-tabs:not(.card-outline)>.card-header {
    border-bottom: 0;
}

.card.card-tabs:not(.card-outline)>.card-header .nav-item:first-child .nav-link {
    border-left-color: transparent;
}

.card.card-tabs.card-outline .nav-item {
    border-bottom: 0;
}

.card.card-tabs.card-outline .nav-item:first-child .nav-link {
    border-left: 0;
    margin-left: 0;
}

.card.card-tabs .card-tools {
    margin: .3rem .5rem;
}

.card.card-tabs:not(.expanding-card).collapsed-card .card-header {
    border-bottom: 0;
}

.card.card-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs {
    border-bottom: 0;
}

.card.card-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs .nav-item {
    margin-bottom: 0;
}

.card.card-tabs.expanding-card .card-header .nav-tabs .nav-item {
    margin-bottom: -1px;
}

.card.card-outline-tabs {
    border-top: 0;
}

.card.card-outline-tabs .card-header .nav-item:first-child .nav-link {
    border-left: 0;
    margin-left: 0;
}

.card.card-outline-tabs .card-header a {
    border-top: 3px solid transparent;
}

.card.card-outline-tabs .card-header a:hover {
    border-top: 3px solid #dee2e6;
}

.card.card-outline-tabs .card-header a.active:hover {
    margin-top: 0;
}

.card.card-outline-tabs .card-tools {
    margin: .5rem .5rem .3rem;
}

.card.card-outline-tabs:not(.expanding-card).collapsed-card .card-header {
    border-bottom: 0;
}

.card.card-outline-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs {
    border-bottom: 0;
}

.card.card-outline-tabs:not(.expanding-card).collapsed-card .card-header .nav-tabs .nav-item {
    margin-bottom: 0;
}

.card.card-outline-tabs.expanding-card .card-header .nav-tabs .nav-item {
    margin-bottom: -1px;
}

html.maximized-card {
    overflow: hidden;
}

.card-header::after,
.card-body::after,
.card-footer::after {
    display: block;
    clear: both;
    content: "";
}

.card-header {
    background-color: transparent;
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    padding: 0.75rem 1.25rem;
    position: relative;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}

.collapsed-card .card-header {
    border-bottom: 0;
}

.card-header>.card-tools {
    float: right;
    margin-right: -0.625rem;
}

.card-header>.card-tools .input-group,
.card-header>.card-tools .nav,
.card-header>.card-tools .pagination {
    margin-bottom: -0.3rem;
    margin-top: -0.3rem;
}

.card-header>.card-tools [data-toggle="tooltip"] {
    position: relative;
}

.card-title {
    float: left;
    font-size: 1.1rem;
    font-weight: 400;
    margin: 0;
}

.card-text {
    clear: both;
}

.btn-tool {
    background-color: transparent;
    color: #adb5bd;
    font-size: 0.875rem;
    margin: -0.75rem 0;
    padding: .25rem .5rem;
}

.btn-group.show .btn-tool,
.btn-tool:hover {
    color: #495057;
}

.show .btn-tool,
.btn-tool:focus {
    box-shadow: none !important;
}
</style>
<?php
        require_once 'models/MenuModels.php';
        $order = new MenuModel;
        $result = $order->getYear();
    ?>
<div class="col-md-6">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title ">Line Chart</h3>
            <form class="float-right" action="">
                <select name="year" onchange="showSales(this.value)">
                    <option value="">Select Year:</option>
                    <?php foreach ($result as $row)
                    {
                        echo "<option value='".$row['years']."'>".$row['years']."</option>";
                    }
                    ?>
                </select>
            </form>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="lineChart"></canvas>
            </div>
        </div>
    </div>

    <script>
    function showSales(str) {
        $.ajax({
            url: 'controllers/salesController.php',
            data: {
                years: str,
            },
            success: function(data) {
                var datas = JSON.parse(data);
                var labels = [];
                var result = [];
                var barColors = ["#00CC66", "#33CC00", "#66CC00", "#99CC00", "#CCCC00", "#FFCC00",
                    "#00FF00",
                    "#33FF00",
                    "#66FF00", "#99FF00", "#CCFF00", "#FFFF00",
                ]
                for (let element in datas) {
                    labels.push(datas[element].months);
                    result.push(datas[element].Price);
                }
                new Chart("lineChart", {
                    type: "bar",
                    data: {
                        labels: labels,
                        datasets: [{
                            data: result,
                            backgroundColor: barColors,
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "Thống kê"
                        }
                    }
                });
            }
        })
    }
    </script>
</div>