<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m12 l12 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Booked Ads</span>
                        </h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?= $path ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Booked Ads</a>
                            </li>
                            <li class="breadcrumb-item active">List
                            </li>
                        </ol>
                        <span class="float-right">
                            <a href="#AddNewAds" class="modal-trigger mb-6 btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow btn-small">Create Ad</a>

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
                                                    <th>Posted User Id</th>
                                                    <th>User Name</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Baths</th>
                                                    <th>Beds</th>
                                                    <th>Status</th>
                                                    <th>Rent</th>
                                                    <th>Area Square</th>
                                                    <th>Add Date</th>
                                                    <th>Address</th>
                                                    <th>Category</th>
                                                    <th>Review</th>
                                                    <th>Booked User Id</th>
                                                    <th>Lat</th>
                                                    <th>log</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $cnt=0; foreach ($Records as $record) {
                                                    $action = '<a class="dropdown-trigger mb-6 btn-floating waves-effect waves-light green darken-1" href="javascript:void(0);" data-target="actions' . $record['UID'] . '"><i class="material-icons">format_list_bulleted</i></a>
                                                    <ul id="actions' . $record['UID'] . '" class="dropdown-content">
                                                        <li><a href="javascript:void(0);" onclick="EditAds('.$record['UID'].')">Update</a></li>
                                                        <li><a href="javascript:void(0);" onclick="DeleteAds(' . $record['UID'] . ');">Delete</a></li>
                                                       
                                                    </ul>';
                                                    $cnt++;
                                                    echo '
                                                    <tr>
                                                    <td>'.$cnt.'</td>
                                                    <td>'.$record['UserId'].'</td>
                                                    <td>'.$record['UserName'].'</td>
                                                    <td>'.$record['AdsImage'].'</td>
                                                    <td>'.$record['Title'].'</td>
                                                    <td>'.$record['Bath'].'</td>
                                                    <td>'.$record['Bed'].'</td>
                                                    <td>'.$record['Status'].'</td>
                                                    <td>'.$record['Rent'].'</td>
                                                    <td>'.$record['AreaSq'].'</td>
                                                    <td>'.$record['AddDate'].'</td>
                                                    <td>'.$record['Address'].'</td>
                                                    <td>'.$record['Category'].'</td>
                                                    <td>'.$record['Review'].'</td>
                                                    <td>'.$record['BookUserId'].'</td>
                                                    <td>'.$record['Latitude'].'</td>
                                                    <td>'.$record['Longitude'].'</td>
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


<?php echo view('ads/add.php'); ?>
<?php echo view('ads/edit.php'); ?>

<script>

    function DeleteAds(UID) {
        if (confirm("Are You Want To Remove Ad ?")) {
            response = AjaxResponse("form_process/remove_ads", "UID=" + UID);
            if (response.status == 'success') {
                location.href = "<?=$path?>home/ads/bookedAds";
            }
        }
    }


    function AdsAddFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/ads_form_submit', phpdata);
        if (response.status == 'success') {
            $("#AdsAddAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/ads/bookedAds";
        } else {
            $("#AdsAddAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }



    }
    function AdsEditFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/ads_form_submit', phpdata);
        if (response.status == 'success') {
            $("#AdsEditAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/ads/bookedAds";
        } else {
            $("#AdsEditAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }



    }

    function EditAds(id) {


        $("#EditAds form#AdsEditForm input#UID").val(id);
        rslt = AjaxResponse("form_process/get_ads_data_by_id", "UID=" + id);

        if (rslt.Email != '') {
            $("#EditAds form#AdsEditForm input#UserId").val(rslt.UserId);
            $("#EditAds form#AdsEditForm input#UserName").val(rslt.UserName);
            $("#EditAds form#AdsEditForm input#AdsImage").val(rslt.AdsImage);
            $("#EditAds form#AdsEditForm input#Title").val(rslt.Title);
            $("#EditAds form#AdsEditForm input#Bath").val(rslt.Bath);
            $("#EditAds form#AdsEditForm input#Bed").val(rslt.Bed);
            $("#EditAds form#AdsEditForm input#Status").val(rslt.Status);
            $("#EditAds form#AdsEditForm input#Rent").val(rslt.Rent);
            $("#EditAds form#AdsEditForm input#AreaSq").val(rslt.AreaSq);
            $("#EditAds form#AdsEditForm input#AddDate").val(rslt.AddDate);
            $("#EditAds form#AdsEditForm input#Address").val(rslt.Address);
            $("#EditAds form#AdsEditForm input#Category").val(rslt.Category);
            $("#EditAds form#AdsEditForm input#Review").val(rslt.Review);
            $("#EditAds form#AdsEditForm input#BookUserId").val(rslt.BookUserId);

        }


        $('#EditAds').modal("open");

    }

    function AddNewAds() {

        $('#AddNewAds').modal("open");

    }

</script>