<!doctype html>
<html lang="en" ng-app="orari">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ORARI Lokal Berau</title>
  <!-- STYLES -->
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/rdash-ui/dist/css/rdash.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/angular-loading-bar/build/loading-bar.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/pnotify/pnotify.core.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('app2/src/components/angular-ui-grid/ui-grid.min.css') }}">
  <!-- SCRIPTS -->
  <script type="text/javascript" src="{{ asset('app2/src/components/angular/angular.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-bootstrap/ui-bootstrap-tpls.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-cookies/angular-cookies.min.js') }} "></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-ui-router/release/angular-ui-router.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-loading-bar/build/loading-bar.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/satellizer/satellizer.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/jquery/dist/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/pnotify/pnotify.core.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-pnotify/src/angular-pnotify.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/ngstorage/ngStorage.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-smart-table/dist/smart-table.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-messages/angular-messages.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/components/angular-ui-grid/ui-grid.min.js') }}"></script>
 
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
  <script type="text/javascript" src="{{ asset('app2/src/js/module.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/routes.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/directives/widget.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/directives/loading.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/directives/widget-body.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/directives/widget-footer.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/directives/csselect.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/directives/widget-header.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/master-ctrl.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/alert-ctrl.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/authController.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/registerController.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/headerController.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/listAnggotaController.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/frmAnggotaController.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/tempatLahirController.js') }}"></script>
  <script type="text/javascript" src="{{ asset('app2/src/js/controllers/deleteController.js') }}"></script>

  
</html>
