<?php
include("config.php");
include("include/header.php");
?>
<body>
<?php
include("include/navbar.php");
?>
    <!-- start: Header -->
    
        <div class="container-fluid-full">
        <div class="row-fluid">
<?php
include("include/menu.php");
?>
            <!-- start: Content -->
            <div id="content" class="span10">
<?php
if ($_GET['page']) {
  if ($_GET['page'] == "lh") include("pages/lh.php");
  if ($_GET['page'] == "repeaters") include("pages/repeaters.php");
  if ($_GET['page'] == "dongles") include("pages/dongles.php");
  if ($_GET['page'] == "reflector") include("pages/reflector.php");
  if ($_GET['page'] == "masters") include("pages/masters.php");
  if ($_GET['page'] == "erouting") include("pages/extended_routing.php");
  if ($_GET['page'] == "display") include("pages/display.php");
  if ($_GET['page'] == "alerts") include("pages/alerts.php");
}else
  include("pages/dashboard.php");
?>    
            <!-- end: Content -->
        </div><!--/#content.span10-->
        </div><!--/fluid-row-->
    <?php include("include/config_menu.php"); ?> 
    <div class="clearfix"></div>
    
    <footer>

        <p>
            <span style="text-align:left;float:left">Application written by PD0ZRY Template: &copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/">Bootstrap Metro Dashboard</a></span>
            
        </p>

    </footer>
    
    <!-- start: JavaScript-->
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
    <!-- end: JavaScript-->
</body>
</html>
