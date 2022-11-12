<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
 <head>
 <title>Wayward |Admin Dashboard</title>
<style>
header { text-decoration: underline;
background-color: rgb(251, 255, 0);
    text-align: center;
    font-size: 20px;
    color: rgb(20, 3, 3);
  }
footer{
    padding: 10px;
    font-size: 17px;
    font-weight: bold;
    text-align: center;
    background: #594848;
    color: white;
    font-family: Arial;
    letter-spacing: 1px;
}
</style>
 <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
         
         <?php include_once('includes/sidebar.php');?>

          <header>
        <h2>Wayward | Tour & Travels</h2>
      </header>
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="unread-queries.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <?php 
$sql ="SELECT ID from tbluser where IsRead is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalunreadquery=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalunreadquery);?></div>
                                    <p class="mt-5">
                                        <i class="si si-book-open fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Unread Queries</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="read-queries.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                     <?php 
$sql ="SELECT ID from tbluser where IsRead='1'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalreadquery=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalreadquery);?></div>
                                    <p class="mt-5">
                                        <i class="si si-paper-plane fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Read Queries</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="new-booking.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                    <?php 
$sql ="SELECT ID from tblbooking where Status is null ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalnewbooking=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalnewbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-pencil fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total New Booking</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-3">
                            <a class="block text-center" href="approved-booking.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                   <?php 
$sql ="SELECT ID from tblbooking where Status='Approved' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalappbooking=$query->rowCount();
?> 
                                    <div class="ribbon-box"><?php echo htmlentities($totalappbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-target fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Approved Booking</p>
                                </div>
                            </a>
                        </div>
                    
                        <!-- END Row #1 -->
                    </div>
                  
                  
                </div>
                <div class="content">
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="cancelled-booking.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <?php 
$sql ="SELECT ID from tblbooking where Status='Cancelled' ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalcanbooking=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalcanbooking);?></div>
                                    <p class="mt-5">
                                        <i class="si si-support fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Cancelled Booking</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="manage-services.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                     <?php 
$sql ="SELECT ID from tblservice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalserv=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalserv);?></div>
                                    <p class="mt-5">
                                        <i class="si si-wallet fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Users</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="manage-event-type.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                   
                                <?php 
$sql ="SELECT ID from tblservice";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totalserv=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totalserv);?></div>
                                    <p class="mt-5">
                                        <i class="si si-wallet fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Issue Raised</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block text-center" href="manage-event-type.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">



  <?php 
$sql ="SELECT ID from tbleventtype";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$totaleventtype=$query->rowCount();
?>
                                    <div class="ribbon-box"><?php echo htmlentities($totaleventtype);?></div>
                                    <p class="mt-5">
                                        <i class="si si-bubbles fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">Total Inquiry</p>
                                </div>
                            </a>
                        </div>
                        
                    
                        <!-- END Row #1 -->
                    </div>
                  
                  
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

             <footer>ALL RIGHT RESERVED WEB MASTER</footer>
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.js"></script>
    </body>
</html>
