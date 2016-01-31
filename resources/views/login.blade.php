<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Login</title>

  	<link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
  	<link rel="shortcut icon" href="../../assets/images/favicon.ico">
	<link rel="stylesheet" href="{{ elixir('css/dashboard.min.css') }}">
  	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
</head>
<body class="page-login-v2 layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          <img class="brand-img" src="../../assets/images/logo@2x.png" alt="...">
          <h2 class="brand-text font-size-40">Purpose Wellness</h2>
        </div>
        <p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>

      <div class="page-login-main">
        <div class="brand visible-xs">
          <img class="brand-img" src="../../assets/images/logo-blue@2x.png" alt="...">
          <h3 class="brand-text font-size-40">Remark</h3>
        </div>
        <h3 class="font-size-24">Sign In</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

        <form method="post" action="/validateLogin">
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
            placeholder="Password">
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
              <input type="checkbox" id="remember" name="checkbox">
              <label for="inputCheckbox">Remember me</label>
            </div>
            <a class="pull-right" href="forgot-password.html">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </form>

        <p>No account? <a href="register-v2.html">Sign Up</a></p>

        <footer class="page-copyright">
          <div class="social">
            <a class="btn btn-icon btn-round social-twitter" href="javascript:void(0)">
              <i class="icon bd-twitter" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-facebook" href="javascript:void(0)">
              <i class="icon bd-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-icon btn-round social-google-plus" href="javascript:void(0)">
              <i class="icon bd-google-plus" aria-hidden="true"></i>
            </a>
          </div>
        </footer>
      </div>

    </div>
  </div>
  <!-- End Page -->
  <script src="{{ elixir('js/dashboard.js') }}"></script>
  <script src="{{ elixir('js/dashboard-scripts.js') }}"></script>
  <script>
    Breakpoints();
  </script>
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>