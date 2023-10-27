<?php require_once "includes/header.php"; ?>
<?php if(!isset($_SESSION['id'])){
    header("Location: ./index.php");
}
include_once "pages/home.php"; ?>
<?php require_once  "includes/footer.php"; ?>