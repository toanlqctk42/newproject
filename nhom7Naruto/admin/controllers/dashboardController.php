<?php
require_once './models/dashboardModel.php';

class DashboardController
{
    private $dashboardModel;
    public function __construct()
    {
        $this->dashboardModel = new DashboardModels;
    }

    public function showOnDashboard()
    {
        $this->pending();
        $this->active();
    }

    public function pending()
    {
        $pending = $this->dashboardModel->showDashboard(0);
        foreach ($pending as $val) {
            echo '<div class="col-md-3 col-sm-6 col-12 mt-5">
            <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="far fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Hóa đơn đã thanh toán</span>
                    <span class="info-box-number">' . $val . '</span>
                </div>
            </div>
        </div>';
        }
    }
    public function active()
    {
        $active = $this->dashboardModel->showDashboard(1);
        foreach ($active as $val) {
            echo '<div class="col-md-3 col-sm-6 col-12 mt-5">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-star""></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Hóa đơn đang phục vụ</span>
                    <span class="info-box-number">' . $val . '</span>
                </div>
            </div>
        </div>';
        }
    }
       
}
