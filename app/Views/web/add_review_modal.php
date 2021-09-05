<div class="modal fade" id="ReviewAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="text-align: center"> Add Review</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="validate" method="post" action="#" name="" id="" onsubmit="">
                <div class="modal-body">
                    <div class="text">
                        <form method="post" action="#" name="ContactUsAddForm" id="ContactUsAddForm"
                              onsubmit="ContactUsFormSubmit('ContactUsAddForm'); return false;" class="validate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group name">
                                                <input type="text" name="UserName" id="UserName"
                                                       class="form-control validate[required, custom[onlyLetterSp]]"
                                                       placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group email">
                                                <input type="email" name="UserEmail" id="UserEmail"
                                                       class="form-control validate[required,custom[email]]"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group subject">
                                                <input type="text" name="Designation"
                                                       class="form-control validate[required]"
                                                       placeholder="Designation">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group subject">
                                                <input type="file" name="Image"
                                                       class="form-control validate[required]"
                                                       placeholder="Image">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group message">
                                           <textarea class="form-control validate[required]" name="Description" id="Description"
                                          placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group message" id="ContactUsAjaxResult"></div>
                                        </div>
                                    </div>
                                </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="text">
                        <button type="submit" class="btn-md btn-theme float-left btn-sm">Add Review</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function ReviewAddModal() {

        $("#ReviewAddModal").modal({
            show: true,
            backdrop: "static"
        });
    }
</script>