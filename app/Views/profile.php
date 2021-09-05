<link rel="stylesheet" type="text/css" href="<?= $template ?>css/pages/page-account-settings.min.css">


<div id="main">
    <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Account Settings</span>
                        </h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?= $path ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active">Page Account Settings
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- Account settings -->
                <section class="tabs-vertical mt-1 section">
                    <div class="row">
                        <div class="col l4 s12">
                            <!-- tabs  -->
                            <div class="card-panel">
                                <ul class="tabs">
                                    <li class="tab">
                                        <a href="#general">
                                            <i class="material-icons">brightness_low</i>
                                            <span>General</span>
                                        </a>
                                    </li>
                                    <li class="tab">
                                        <a href="#change-password">
                                            <i class="material-icons">lock_open</i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <!--                                    <li class="tab">-->
                                    <!--                                        <a href="#info">-->
                                    <!--                                            <i class="material-icons">error_outline</i>-->
                                    <!--                                            <span> Info</span>-->
                                    <!--                                        </a>-->
                                    <!--                                    </li>-->
                                    <!--                                    <li class="tab">-->
                                    <!--                                        <a href="#social-link">-->
                                    <!--                                            <i class="material-icons">chat_bubble_outline</i>-->
                                    <!--                                            <span>Social Links</span>-->
                                    <!--                                        </a>-->
                                    <!--                                    </li>-->

                                </ul>
                            </div>
                        </div>

                        <div class="col l8 s12">
                            <form enctype="multipart/form-data" method="post" action="#" name="ProfileInfoNameAddForm"
                                  id="ProfileInfoNameAddForm"
                                  onsubmit="ProfileNameFormSubmit('ProfileInfoNameAddForm'); return false;">
                                <input type="hidden" name="id" id="id" value="<?= $session['id'] ?>">

                                <!-- tabs content -->
                                <div id="general">
                                    <div class="card-panel">
                                        <div class="display-flex">
                                            <div class="media">
                                              <?php
                                if($session['profile'] > 0)
                                { echo '<img  src="'.$path.'home/load_file/'.$session['profile'].'" class="border-radius-4" alt="profile image"
                                                     height="64" width="64">';
                                }
                                else{ echo '<img  src="'.$template.'no_image.jpg" alt="avatar  class="border-radius-4" alt="profile image"
                                                     height="64" width="64"">';
                                } ?>

                                            </div>
                                            <div class="media-body">
                                                <div class="general-action-btn mb-2">
                                                    <input id="ProfilesImage" class="validate" value="Upload new photo"
                                                           type="file" name="ProfilesImage">
                                                </div>
                                                <small>Allowed JPG, GIF or PNG. Max size of 1024 kB</small>
                                            </div>
                                        </div>
                                        <div class="divider mb-1 mt-1"></div>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <label for="name">Name</label>
                                                    <input id="UserName" name="UserName" type="text"
                                                           value="<?= $session['name'] ?>"
                                                           data-error=".errorTxt2">
                                                    <small class="errorTxt2"></small>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <label for="email">E-mail</label>
                                                    <input id="UserEmail" type="email" name="UserEmail"
                                                           value="<?= $session['email'] ?>" readonly
                                                           data-error=".errorTxt3">
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div id="ProfileNameAjaxResult"></div>
                                            </div>
                                            <div class="col s12 display-flex justify-content-end form-action">
                                                <button type="button"
                                                        class="btn indigo waves-effect waves-light mr-2"
                                                        onclick="ProfileNameFormSubmit('ProfileInfoNameAddForm');">
                                                    Save changes
                                                </button>
                                                <button type="button"
                                                        class="btn btn-light-pink waves-effect waves-light mb-1">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form enctype="multipart/form-data" method="post" action="#" name="ProfilePasswordEditForm"
                                  id="ProfilePasswordEditForm"
                                  onsubmit="ProfilePasswordSubmit(); return false;">
                                <input type="hidden" name="uid" id="uid" value="<?= $session['id'] ?>">

                                <div id="change-password">
                                    <div class="card-panel">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <input id="OldPassword" name="OldPassword" type="password"
                                                           data-error=".errorTxt4" autocomplete="off" readonly
                                                           onfocus="this.removeAttribute('readonly');">
                                                    <label for="oldpswd">Old Password</label>
                                                    <small class="errorTxt4"></small>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <input id="NewPassword" name="NewPassword" type="password"
                                                           data-error=".errorTxt5">
                                                    <label for="newpswd">New Password</label>
                                                    <small class="errorTxt5"></small>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <input id="ConfirmPassword" type="password" name="ConfirmPassword"
                                                           data-error=".errorTxt6">
                                                    <label for="repswd">Retype new Password</label>
                                                    <small class="errorTxt6"></small>
                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <div id="ProfilePaswwordAjaxResult"></div>
                                            </div>

                                            <div class="col s12 display-flex justify-content-end form-action">
                                                <button type="submit"
                                                        class="btn indigo waves-effect waves-light mr-1"
                                                        onclick="ProfilePasswordSubmit();">
                                                    Save changes
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-light-pink waves-effect waves-light">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </section><!-- START RIGHT SIDEBAR NAV -->
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>

<script src="<?= $template ?>js/scripts/page-account-settings.min.js"></script>


<script type="text/javascript">

    function ProfileNameFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/profile_name_details_submit', phpdata);
        if (response.status == 'success') {
            $("#ProfileNameAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>');
            setTimeout(function () {
                location.href = "<?=$path?>home/profile";
            }, 2000)
        } else {
            $("#ProfileNameAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }

    }

    function ProfilePasswordSubmit() {

        var phpdata = $("form#ProfilePasswordEditForm").serialize();
        response = AjaxResponse("form_process/profile_password_details_submit", phpdata);

        if (response.status == 'success') {
            $("#ProfilePaswwordAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>');
            setTimeout(function () {
                location.href = "<?=$path?>home/logout";
            }, 2000)
        } else {
            $("#ProfilePaswwordAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')

        }
    }

</script>