
<head>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <title>Traveling Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=$web_template?>css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="<?=$web_template?>css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="<?=$web_template?>css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="<?=$web_template?>css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="<?=$web_template?>css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?=$web_template?>css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?=$web_template?>img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <link rel="stylesheet" type="text/css" href="<?=$web_template?>css/ie10-viewport-bug-workaround.css">

     <script  src="<?=$web_template?>js/ie-emulation-modes-warning.js"></script>

    <script type="text/javascript" charset="utf-8">
        localStorage.setItem('path', '<?=$path?>');
        localStorage.setItem('template', '<?=$template?>');

    </script>
</head>
<body>


<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section clearfix">
                    <h3>Create an account</h3>
                    <div class="btn-section clearfix">
                        <a href="<?=$path?>web/userLogin" class="link-btn active btn-1 default-bg">Login</a>
                        <a href="<?=$path?>web/signup" class="link-btn btn-2 active-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>

                    <form enctype="multipart/form-data" class="validate" method="post" id="UserAddForm"
                          name="UserAddForm" onsubmit="UserAddFormSubmit('UserAddForm'); return false;">

                        <div class="form-group form-box">
                            <input placeholder="Name"
                                   id="Name"
                                   name="Name"
                                   type="text"
                                   class="input-text">
                        </div>
                        <div class="form-group form-box">
                            <input placeholder="Email"
                                   id="Email"
                                   name="Email"
                                   type="email"
                                   class="input-text">
                        </div>
                        <div class="form-group form-box clearfix">
                            <input placeholder="Password"
                                   id="Password"
                                   name="Password"
                                   type="Password"
                                   class="input-text">
                        </div>
                        <div class="form-group form-box">
                            <div id="UserAddAjaxResult">  </div>
                        </div>

                        <div class="form-group clearfix mb-0">
                            <button id="AddButton"
                                    type="submit"
                                    class="btn-md btn-theme float-left"
                                    onclick="UserAddFormSubmit('UserAddForm');">Register</button>
                        </div>

                    </form>
                </div>
            </div>



            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <h3 style="margin-top: 12px;">TRAVELING HOME</h3>
                 </div>
            </div>
        </div>
    </div>
</div>





<!-- Contact section end -->
<script>
    function UserAddFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/customer_form_submit', phpdata);
        if (response.status == 'success') {
            $("#UserAddAjaxResult").html('' +
                '<div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button> <strong>Success!</strong> ' + response.message + ' </div>')
                location.href = "<?=$path?>web/userLogin";
        } else {

            $("#UserAddAjaxResult").html('<div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button> <strong>Error!</strong> ' + response.message + ' </div>')
        }
    }
</script>

<script src="<?=$web_template?>js/jquery-2.2.0.min.js"></script>
<script src="<?=$web_template?>js/popper.min.js"></script>
<script src="<?=$web_template?>js/bootstrap.min.js"></script>
<script  src="<?=$web_template?>js/bootstrap-submenu.js"></script>
<script  src="<?=$web_template?>js/rangeslider.js"></script>
<script  src="<?=$web_template?>js/jquery.mb.YTPlayer.js"></script>
<script  src="<?=$web_template?>js/bootstrap-select.min.js"></script>
<script  src="<?=$web_template?>js/jquery.easing.1.3.js"></script>
<script  src="<?=$web_template?>js/jquery.scrollUp.js"></script>
<script  src="<?=$web_template?>js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="<?=$web_template?>js/leaflet.js"></script>
<script  src="<?=$web_template?>js/leaflet-providers.js"></script>
<script  src="<?=$web_template?>js/leaflet.markercluster.js"></script>
<script  src="<?=$web_template?>js/dropzone.js"></script>
<script  src="<?=$web_template?>js/slick.min.js"></script>
<script  src="<?=$web_template?>js/jquery.filterizr.js"></script>
<script  src="<?=$web_template?>js/jquery.magnific-popup.min.js"></script>
<script  src="<?=$web_template?>js/jquery.countdown.js"></script>
<script  src="<?=$web_template?>js/maps.js"></script>
<script  src="<?=$web_template?>js/app.js"></script>

<script src="<?=$template?>js/custom.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="<?=$web_template?>js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="<?=$web_template?>js/ie10-viewport-bug-workaround.js"></script>
</body>