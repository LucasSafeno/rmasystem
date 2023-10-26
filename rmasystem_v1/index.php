<?php require_once "includes/header.php"; ?>
<?php 
if(isset($_SESSION['id'])){
    include_once "pages/home.php"; 
}else{
    include_once "pages/index.php"; 
}

?>
<?php require_once  "includes/footer.php"; ?>