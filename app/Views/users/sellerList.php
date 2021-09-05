
<!--Seller Account List-->

<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m12 l12 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Seller</span>
                        </h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?= $path ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Seller</a>
                            </li>
                            <li class="breadcrumb-item active">List
                            </li>
                        </ol>
                        <span class="float-right">
                            <a href="#AddNewUser" class="modal-trigger mb-6 btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow btn-small">Add User</a>

                        </span>
                    </div>

                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12">
                                            <table id="scroll-vert-hor" class="display nowrap" style="width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th width="10px">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Password</th>
                                                    <th>Contact Number</th>
                                                    <th>Account Type</th>
                                                    <th>Address</th>
                                                    <th>Rooms Booked</th>
                                                    <th>Ads Posted</th>
                                                    <th>Revenue</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $cnt=0; foreach ($Records as $record) {
                                                    $action = '<a class="dropdown-trigger mb-6 btn-floating waves-effect waves-light green darken-1" href="javascript:void(0);" data-target="actions' . $record['UID'] . '"><i class="material-icons">format_list_bulleted</i></a>
                                                    <ul id="actions' . $record['UID'] . '" class="dropdown-content">
                                                        <li><a href="javascript:void(0);" onclick="EditUser('.$record['UID'].')">Update</a></li>
                                                        <li><a href="javascript:void(0);" onclick="DeleteUser(' . $record['UID'] . ');">Delete</a></li>
                                                       
                                                    </ul>';
                                                    $cnt++;
                                                    echo '
                                                    <tr>
                                                    <td>'.$cnt.'</td>
                                                    <td>'.$record['Name'].'</td>
                                                    <td>'.$record['Email'].'</td>
                                                    <td>'.$record['Password'].'</td>
                                                    <td>'.$record['ContactNumber'].'</td>
                                                    <td>'.$record['AccountType'].'</td>
                                                    <td>'.$record['Address'].'</td>
                                                    <td>'.$record['RoomsBooked'].'</td>
                                                    <td>'.$record['AdsPosted'].'</td>
                                                    <td>'.$record['Revenue'].'</td>
                                                    <td>'.$action.'</td>
                                                     
                                                   
                                                </tr>';
                                                } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>

    </div>


</div>

<?php echo view('users/add.php'); ?>
<?php echo view('users/edit.php'); ?>

<script>

    function DeleteUser(UID) {
        if (confirm("Are You Want To Remove User")) {
            response = AjaxResponse("form_process/remove_user", "UID=" + UID);
            if (response.status == 'success') {
                location.href = "<?=$path?>home/sellerList";
            }
        }
    }


    function UserAddFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/user_form_submit', phpdata);
        if (response.status == 'success') {
            $("#UserAddAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/sellerList";
        } else {
            $("#UserAddAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }



    }
    function UserEditFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/user_form_submit', phpdata);
        if (response.status == 'success') {
            $("#UserEditAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/sellerList";
        } else {
            $("#UserEditAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }



    }

    function EditUser(id) {


        $("#EditUser form#UserEditForm input#UID").val(id);
        rslt = AjaxResponse("form_process/get_users_data_by_id", "UID=" + id);

        if (rslt.Email != '') {
            $("#EditUser form#UserEditForm input#Name").val(rslt.Name);
            $("#EditUser form#UserEditForm input#ContactNumber").val(rslt.ContactNumber);
            $("#EditUser form#UserEditForm input#Email").val(rslt.Email);
            $("#EditUser form#UserEditForm input#Password").val(rslt.Password);
            $("#EditUser form#UserEditForm select#AccountType").val(rslt.AccountType);
            $("#EditUser form#UserEditForm input#Address").val(rslt.Address);
            $("#EditUser form#UserEditForm input#RoomsBooked").val(rslt.RoomsBooked);
            $("#EditUser form#UserEditForm input#AdsPosted").val(rslt.AdsPosted);
            $("#EditUser form#UserEditForm input#Revenue").val(rslt.Revenue);
            $("#EditUser form#UserEditForm span#ProfilesImage").html(rslt.ProfilesImage);

        }


        $('#EditUser').modal("open");

    }

    function AddNewUser() {

        $('#AddNewUser').modal("open");

    }

</script>