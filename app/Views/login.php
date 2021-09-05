<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-menu-nav-dark-template/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 07:14:23 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Login</title>
    <link rel="apple-touch-icon" href="<?=$template?>images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$template?>images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$template?>vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?=$template?>css/themes/vertical-menu-nav-dark-template/materialize.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?=$template?>css/themes/vertical-menu-nav-dark-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>css/pages/login.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$template?>css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 1-column login-bg   blank-page blank-page"
      data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container"><div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8"
                     style="margin-left: 500px; margin-top: 100px; margin-bottom: 100px;">

                    <form enctype="multipart/form-data" class="validate login-form" method="post" id="AuthForm"
                          name="AuthForm"  onsubmit="AuthFormSubmit('AuthForm'); return false;">

                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">Sign in</h5>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="Email"
                                       name="Email"
                                       type="email">

                                <label for="Email" class="center-align">Email</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="Password"
                                       name="Password"
                                       type="password">

                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div id="AuthAjaxResult">  </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <a onclick="AuthFormSubmit('AuthForm');"
                                   class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>

<script>
    function AuthFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/login', phpdata);
        if (response.status == 'success') {
            $("#AuthAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/index";
        } else {
            $("#AuthAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }}
</script>
</body>
<!-- BEGIN VENDOR JS-->
<script src="<?=$template?>js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="<?=$template?>js/plugins.min.js"></script>
<script src="<?=$template?>js/search.min.js"></script>
<script src="<?=$template?>js/custom/custom-script.min.js"></script>
<script src="<?=$template?>js/custom.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-menu-nav-dark-template/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 07:14:23 GMT -->
</html>