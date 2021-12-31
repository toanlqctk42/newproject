<?php include "header.php"; ?>
<?php 
    if (isset($_SESSION['userName'])) {
        include "sidebar.php";
    } else {
        header("Location: login.php");
        exit();
    }
?>
<?php include "footer.php"; ?>