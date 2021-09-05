<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m12 l12 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Review</span>
                        </h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="<?= $path ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Review</a>
                            </li>
                            <li class="breadcrumb-item active">List
                            </li>
                        </ol>
                        <span class="float-right">
                            <a href="#AddNewReview" class="modal-trigger mb-6 btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow btn-small">Create Review</a>

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
                                                    <th>Designation</th>
                                                    <th>Description</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $cnt=0; foreach ($Records as $record) {
                                                    $action = '<a class="dropdown-trigger mb-6 btn-floating waves-effect waves-light green darken-1" href="javascript:void(0);" data-target="actions' . $record['UID'] . '"><i class="material-icons">format_list_bulleted</i></a>
                                                    <ul id="actions' . $record['UID'] . '" class="dropdown-content">
                                                        <li><a href="javascript:void(0);" onclick="EditReview('.$record['UID'].')">Update</a></li>
                                                        <li><a href="javascript:void(0);" onclick="DeleteReview(' . $record['UID'] . ');">Delete</a></li>
                                                       
                                                    </ul>';
                                                    $cnt++;
                                                    echo '
                                                    <tr>
                                                    <td>'.$cnt.'</td>
                                                    <td>'.$record['Name'].'</td>
                                                    <td>'.$record['Email'].'</td>
                                                    <td>'.$record['Designation'].'</td>
                                                    <td>'.$record['Description'].'</td>
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


<?php echo view('review/add.php'); ?>
<?php echo view('review/edit.php'); ?>

<script>

    function DeleteReview(UID) {
        if (confirm("Are You Want To Remove Ad ?")) {
            response = AjaxResponse("form_process/remove_review", "UID=" + UID);
            if (response.status == 'success') {
                location.href = "<?=$path?>home/review";
            }
        }
    }


    function ReviewAddFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/review_form_submit', phpdata);
        if (response.status == 'success') {
            $("#ReviewAddAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/review";
        } else {
            $("#ReviewAddAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }



    }
    function ReviewEditFormSubmit(parent) {

        var phpdata = new window.FormData($("form#" + parent)[0]);
        var response = AjaxUploadResponse('form_process/review_form_submit', phpdata);
        if (response.status == 'success') {
            $("#ReviewEditAjaxResult").html('<div class="card-alert card gradient-45deg-green-teal"><div class="card-content white-text"><p><i class="material-icons">check</i> SUCCESS : ' + response.message + '</p></div></div>')
            location.href = "<?=$path?>home/review";
        } else {
            $("#ReviewEditAjaxResult").html('<div class="card-alert card gradient-45deg-red-pink"><div class="card-content white-text"><p><i class="material-icons">error</i> ERROR : ' + response.message + '</p></div></div>')
        }



    }

    function EditReview(id) {


        $("#EditReview form#ReviewEditForm input#UID").val(id);
        rslt = AjaxResponse("form_process/get_review_data_by_id", "UID=" + id);

        if (rslt.Email != '') {
            $("#EditReview form#ReviewEditForm input#Name").val(rslt.Name);
            $("#EditReview form#ReviewEditForm input#Email").val(rslt.Email);
            $("#EditReview form#ReviewEditForm input#Designation").val(rslt.Designation);
            $("#EditReview form#ReviewEditForm input#Description").val(rslt.Description);
        }


        $('#EditReview').modal("open");

    }

    function AddNewReview() {

        $('#AddNewReview').modal("open");

    }

</script>