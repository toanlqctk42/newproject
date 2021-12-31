<section class="home-section">
    <div class="container">
        <?php

        if (!isset($_GET['page'])) {
            include('subpage/dashboard.php');
        } else {
            $p = $_GET['page'];
            $page = "subpage/" . $p .'' ;
            if (file_exists($page)) {
                include($page);
            } else {
                echo "Không có Trang";
            }
        }
        ?>
    </div>
</section>