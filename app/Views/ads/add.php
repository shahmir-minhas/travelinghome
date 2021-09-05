<div id="AddNewAds" class="modal modal-sm" xmlns="http://www.w3.org/1999/html">
    <form enctype="multipart/form-data" class="validate" method="post" id="AdsAddForm"
          name="AdsAddForm"  onsubmit="AdsAddFormSubmit('AdsAddForm'); return false;">
        <input type="hidden" id="UID" name="UID" value="0">
        <div class="modal-content">
            <h6 style="text-align: center;font-size: 1.45rem;" id="Head">Ads Create Modal</h6>
            <div class="row" style="margin-top: 30px;">
                <div class="col s6"><label for="first_name1">Posted User Id </label>
                    <input placeholder="Posted User Id"
                           id="UserId"
                           name="UserId"
                           type="number"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">User Name</label>
                    <input placeholder="User Name"
                           id="UserName"
                           name="UserName"
                           type="text"
                           class="">
                </div>

                <div class="col s6"><label for="first_name1">Title </label>
                    <input placeholder="Title" id="Title" name="Title"
                           type="text" class="">
                </div>
                <div class="col s6"><label for="first_name1">Beds</label>
                    <input placeholder="Number of Beds" id="Bed" name="Bed"
                           type="number" class="">
                </div>
                <div class="col s6"><label for="first_name1">Baths</label>
                    <input placeholder="Number of Beds" id="Bath" name="Bath"
                           type="number" class="">
                </div>
                <div class="col s6">
                    <label for="Status">Status Type</label>
                    <select id="Status"
                            name="Status"
                            class="browser-default">

                        <option value="" disabled selected>Choose Account Type</option>
                        <option value="Available">Available</option>
                        <option value="Booked">Booked</option>
                    </select>
                </div>
                <div class="col s6"><label for="first_name1">Rent</label>
                    <input placeholder="Rent"
                           id="Rent"
                           name="Rent"
                           type="number"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Area Squrare</label>
                    <input placeholder="Area Squrare per Foot"
                           id="AreaSq"
                           name="AreaSq"
                           type="number"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Address</label>
                    <input placeholder="Provide Complete Address"
                           id="Address"
                           name="Address"
                           type="text"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Category</label>
                    <input placeholder="Category"
                           id="Category"
                           name="Category"
                           type="text"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Review</label>
                    <input placeholder="Write Review"
                           id="Review"
                           name="Review"
                           type="text"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Booked User Id</label>
                    <input placeholder="Booked User Id"
                           id="BookUserId"
                           name="BookUserId"
                           type="number"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Entry Date</label>
                    <input placeholder=""
                           id="AddDate"
                           name="AddDate"
                           type="date"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Image </label>
                    <input placeholder="" id="AdsImage" name="AdsImage"
                           type="file" class="">
                </div>

                <div class="col s12">
                    <div id="AdsAddAjaxResult">  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button id="AddButton" class="btn btn-mini waves-effect waves-light gradient-45deg-green-teal"
                    type="button"
                    onclick="AdsAddFormSubmit('AdsAddForm');">Add
            </button>
            <a href="javascript:void(0);"
               class="btn btn-mini modal-action modal-close waves-effect waves-light gradient-45deg-red-pink">Cancel</a>
        </div>
    </form>
</div>
