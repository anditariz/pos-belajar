<?php include('inc/topbar.php'); ?>
<?php include('inc/sidebar.php'); ?>

<?php 
if(isset($_GET['page'])) {
    if (file_exists('content/' . $_GET['page'] . '.php')) {
        include( 'content/' . $_GET['page'] . '.php');
    } else {
        include('dashboard.php');
    }
} else {
    include('dashboard.php');
}
?>

<?php include('inc/footer.php'); ?>