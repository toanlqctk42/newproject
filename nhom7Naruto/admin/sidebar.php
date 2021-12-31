<div class="nav" id="navbar">
  <nav class="nav__container">
    <div>
      <a href="index.php?page=dashboard.php" class="nav__link nav__logo">
        <i class='bx bxs-disc nav__icon'></i>
        <span class="nav__logo-name">Coffe Shop</span>
      </a>

      <div class="nav__list">
        <div class="nav__items">

          <a href="index.php?page=dashboard.php" class="nav__link active">
            <i class='bx bx-home nav__icon'></i>
            <span class="nav__name">Trang Chủ</span>
          </a>

          <div class="nav__dropdown">
            <a href="index.php?page=menu.php" class="nav__link">
              <i class='bx bx-collection nav__icon'></i>
              <span class="nav__name">Thực Đơn</span>
              <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
            </a>

            <div class="nav__dropdown-collapse">
              <div class="nav__dropdown-content">
                <?php
                require_once 'controllers/categorieController.php';
                $category = new categorieController;
                $data = $category->getallcategorieController();
                foreach ($data as $data_cel) {
                  echo " <li><a href='index.php?page=category_product.php&title=$data_cel->CateName'>$data_cel->CateName</a></li>";
                }
                ?>
              </div>
            </div>
          </div>

          <a href="index.php?page=table.php" class="nav__link">
            <i class='bx bx-table nav__icon'></i>
            <span class="nav__name">Phòng/Bàn</span>
          </a>
        </div>

        <div class="nav__items">
          <a href="index.php?page=order.php" class="nav__link">
            <i class='bx bx-book-alt nav__icon'></i>
            <span class="nav__name">Hóa Đơn</span>
          </a>
          <a href="index.php?page=stockimport.php" class="nav__link">
            <i class='fas fa-truck nav__icon'></i>
            <span class="nav__name">Nhập Kho</span>
          </a>
          <a href="index.php?page=stocktransfer.php" class="nav__link">
            <i class='fas fa-truck nav__icon'></i>
            <span class="nav__name">Chuyển Kho</span>
          </a>
          <a href="index.php?page=chart.php" class="nav__link">
            <i class='fas fa-chart-bar nav__icon'></i>
            <span class="nav__name">Doanh thu</span>
          </a>
        </div>
      </div>
    </div>

    <a href="./login.php" class="nav__link nav__logout">
      <i class='bx bx-log-out nav__icon'></i>
      <span class="nav__name">Log Out</span>
    </a>
  </nav>
</div>

<?php
include('content.php');
?>
<script>
  // var username = '<?php echo $_SESSION['userName']; ?>';
  // var level = '<?php echo $_SESSION['level']; ?>';
  // document.getElementById('name').innerHTML = username;
  // var job_name = document.getElementById('job_name');
  // if (level == 0) {
  //   job_name.innerHTML = "Admin";

  // } else {
  //   job_name.innerHTML = "Employee";
  //   document.getElementById("admin_tools").children[0].style.display = "none";
  //   document.getElementById("admin_tools_2").children[0].style.display = "none";
  // }
</script>