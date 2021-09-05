<div id="EditReview" class="modal modal-sm" xmlns="http://www.w3.org/1999/html">

    <form enctype="multipart/form-data" class="validate" method="post" id="ReviewEditForm"
          name="ReviewEditForm"  onsubmit="ReviewEditFormSubmit('ReviewEditForm'); return false;">
        <input type="hidden" id="UID" name="UID" value="0">
        <div class="modal-content">
            <h6 style="text-align: center;font-size: 1.45rem;" id="Head">Review Edit Modal</h6>

            <div class="row" style="margin-top: 30px;">
                <div class="col s6"><label for="first_name1">Name</label>
                    <input placeholder="User Name"
                           id="Name"
                           name="Name"
                           type="text"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Email</label>
                    <input placeholder="User Email"
                           id="Email"
                           name="Email"
                           type="email"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Designation </label>
                    <input placeholder="Designation"
                           id="Designation"
                           name="Designation"
                           type="text" class="">
                </div>
                <div class="col s6"><label for="first_name1">Description	</label>
                    <input placeholder="Description	"
                           id="Description"
                           name="Description"
                           type="text" class="">
                </div>
                <div class="col s12">
                    <div id="ReviewEditAjaxResult">  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button id="AddButton" class="btn btn-mini waves-effect waves-light gradient-45deg-green-teal"
                    type="button"
                    onclick="ReviewEditFormSubmit('ReviewEditForm');">Update
            </button>
            <a href="javascript:void(0);"
               class="btn btn-mini modal-action modal-close waves-effect waves-light gradient-45deg-red-pink">Cancel</a>
        </div>
    </form>
</div>