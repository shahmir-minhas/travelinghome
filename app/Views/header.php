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

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-menu-nav-dark-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 07:11:39 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Travelling Home</title>
    <link rel="apple-touch-icon" href="<?=$template?>images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$template?>images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$template?>vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$template?>css/themes/vertical-menu-nav-dark-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>css/themes/vertical-menu-nav-dark-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$template?>css/pages/data-tables.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$template?>css/custom/custom.css">
    <!-- END: Custom CSS-->
    <script src="<?=$template?>jquery.js"></script>

    <script type="text/javascript" charset="utf-8">
        localStorage.setItem('path', '<?=$path?>');
        localStorage.setItem('template', '<?=$template?>');

    </script>
</head>
 
<!-- END: Head-->
<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   "
      data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

<!-- BEGIN: Header-->
<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
            <div class="nav-wrapper">
                <ul class="navbar-list right">

                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                           data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                    src="<?=$template?>images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                </ul>
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="<?=$path?>home/login"><i class="material-icons">person_outline</i>
                            Profile</a></li>
                    <li><a class="grey-text text-darken-1" href="<?=$path?>home/logout"><i
                                class="material-icons">keyboard_tab</i> Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="<?=$path?>">
                <span class="logo-text hide-on-med-and-down" style="font-size: 20px;">TRAVELING HOME</span></a>

<!--            <a class="navbar-toggler" href="#"><i  class="material-icons">radio_button_checked</i></a></h1>-->
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                    class="material-icons">settings_input_svideo</i><span class="menu-title"
                                                                          data-i18n="Dashboard">Dashboard</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class=""><a class="" href="<?=$path?>"><i class="material-icons">radio_button_unchecked</i><span
                                data-i18n="Modern">Admin</span></a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">tag_faces</i><span class="menu-title" data-i18n="User">Users</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li>
                        <a href="<?=$path?>home/users">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="List">List</span>
                        </a>
                    </li>
                    <li><a href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Edit">Add</span></a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">texture</i><span class="menu-title" data-i18n="Ads">Advertising Manager</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="<?=$path?>home/ads"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="List">List</span></a>
                    </li>
                    <li><a href=""><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Edit">Add</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i
                        class="material-icons">texture</i><span class="menu-title" data-i18n="Ads">Review Manager</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="<?=$path?>home/review"><i class="material-icons">radio_button_unchecked</i><span
                                    data-i18n="Edit">List</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?=$path?>home/profile"><i class="material-icons">settings</i><span
                        class="menu-title" data-i18n="Chat">Setting</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="<?=$path?>home/logout"><i
                        class="material-icons">check</i><span class="menu-title" data-i18n="Logout">Logout</span></a>
        </li>



    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
       href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
