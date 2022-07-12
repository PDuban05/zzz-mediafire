<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php
        include 'loading.php';
        ?>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        include 'menu.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
        include 'navbar.php';
        ?>
            <!-- Navbar End -->

            <?php
        include 'mystaff.php';
        ?>


            

            <!-- Footer Start -->
            
            <?php
        include 'footer.php';
        ?>

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
        include 'libraryjs.php';
        ?>

    
</body>

</html>