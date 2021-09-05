<div id="EditUser" class="modal modal-sm" xmlns="http://www.w3.org/1999/html">

    <form enctype="multipart/form-data" class="validate" method="post" id="UserEditForm"
          name="UserEditForm"  onsubmit="UserEditFormSubmit('UserEditForm'); return false;">
        <input type="hidden" id="UID" name="UID" value="0">
        <div class="modal-content">
            <h6 style="text-align: center;font-size: 1.45rem;" id="Head">User Edit Modal</h6>
            <div class="row" style="margin-top: 30px;">
                <div class="col s6"><label for="first_name1">Name </label>
                    <input placeholder="Name"
                           id="Name"
                           name="Name"
                           type="text"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Contact Number </label>
                    <input placeholder="ContactNumber"
                           id="ContactNumber"
                           name="ContactNumber"
                           type="number"
                           class="">
                </div>

                <div class="col s6"><label for="first_name1">Email </label>
                    <input placeholder="Email"
                           id="Email"
                           name="Email"
                           type="email"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Password </label>
                    <input placeholder="Password"
                           id="Password"
                           name="Password"
                           type="text"
                           class="">
                </div>

                <div class="col s6">
                    <label for="AccountType">Account Type</label>
                    <select id="AccountType"
                            name="AccountType"
                            class="browser-default">

                        <option value="" disabled selected>Choose Account Type</option>
                        <option value="Seller">Seller</option>
                        <option value="Buyer">Buyer</option>
                    </select>
                </div>
                <div class="col s6"><label for="first_name1">Address </label>
                    <input placeholder="Enter Detailed Address"
                           id="Address"
                           name="Address"
                           type="text"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Rooms Booked </label>
                    <input placeholder="Rooms Booked by User"
                           id="RoomsBooked"
                           name="RoomsBooked"
                           type="number"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Ads Posted</label>
                    <input placeholder="Ads Posted by User"
                           id="AdsPosted"
                           name="AdsPosted"
                           type="number"
                           class="">
                </div>
                <div class="col s6"><label for="first_name1">Revenue </label>
                    <input placeholder="Revenue Earned by User"
                           id="Revenue"
                           name="Revenue"
                           type="number"
                           class="">
                </div>

                <div class="col s12">
                    <div id="UserEditAjaxResult">  </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button id="AddButton" class="btn btn-mini waves-effect waves-light gradient-45deg-green-teal"
                    type="button"
                    onclick="UserEditFormSubmit('UserEditForm');">Update
            </button>
            <a href="javascript:void(0);"
               class="btn btn-mini modal-action modal-close waves-effect waves-light gradient-45deg-red-pink">Cancel</a>
        </div>
    </form>
</div>