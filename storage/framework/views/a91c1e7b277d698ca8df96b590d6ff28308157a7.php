<!doctype html>
<html lang="en" ng-app="orari">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ORARI Lokal Berau</title>
  <!-- STYLES -->
  <link rel="stylesheet" href="<?php echo e(asset('app2/dist/lib/css/main.min.css')); ?> "/>
  <!-- SCRIPTS -->
  <script src="<?php echo e(asset('app2/dist/lib/js/main.min.js')); ?> "></script>
 
</head>
<body ng-controller="MasterCtrl">
  <div id="page-wrapper" ng-class="{'open': toggle}" ng-cloak>
    <div ui-view="sidebar"></div>
     <div id="content-wrapper">
      <div class="page-content">
        <div ui-view="header"></div>
        <div ui-view="content"></div>
      </div>
     </div> 
  </div>
  <div ui-view></div> 
</body>
 <!-- Custom Scripts -->
  <script type="text/javascript" src="<?php echo e(asset('app2/dist/js/orari.min.js')); ?> "></script>

  
</html>
