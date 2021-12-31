<?php require_once './controllers/dashboardController.php'; ?>
<style>
    .info-box .info-box-content {
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        line-height: 1.8;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        padding: 0 10px;
    }

    .info-box .info-box-icon {
        border-radius: 0.25rem;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-size: 1.875rem;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        text-align: center;
        width: 70px;
    }

    .info-box {
        box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
        border-radius: 0.25rem;
        background-color: #fff;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 1rem;
        min-height: 80px;
        padding: 0.5rem;
        position: relative;
        width: 100%;
    }
</style>
<div class="container">
    <div class="row">
        <?php $init = new DashboardController;
        print $init->showOnDashboard();
        ?>
    </div>
</div>