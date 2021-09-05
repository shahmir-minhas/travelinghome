<?php namespace App\Models;

use App\Models\Crud;
use App\Models\Main;
use CodeIgniter\Model;


class Apanel extends Model
{
    var $data = array();
    var $MainModel = array();


    public function __construct()
    {
        $Main = new Main();
        $this->data = $Main->DefaultVariable();
        $this->data['template'] = TEMPLATE;
        $this->data['path'] = PATH;
    }

    public
    function GetAllMembersCountByType($Type)
    {

        $Crud = new Crud();
        $table = 'users';
        $where = array("Archive" => '0', "AccountType" => $Type);
        $order = array("Name" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;

    }

    public function UserFormSubmit($records, $ProfilesImage, $UID)
    {
        $data = $this->data;

        $Crud = new Crud();
        $table = 'users';

        $this->MainModel = new Main();

        ////////////////// Duplicate Email Check
        $Email = $Crud->SingleRecord($table, array("Email" => $records['Email']));

        if ($UID == 0) {
            if (isset($email['UID']) && $email['UID'] > 0) {
                $response['status'] = "fail";
                $response['message'] = "This Email Already Exist";
            } else {
                if ($ProfilesImage['ProfilesImage'] != 0) {
                    $records['ProfilesImage'] = $ProfilesImage['ProfilesImage'];
                }
                if ($recordID = $Crud->AddRecord($table, $records)) {
                    $response['status'] = "success";
                    $response['record_id'] = $recordID;
                    $response['message'] = "User Successfully Added...";

                } else {
                    $response['status'] = "fail";
                    $response['message'] = "Data Didn't Submitted Correctly...";
                }
            }
        } else {
            $where = array("UID" => $UID);
            if ($ProfilesImage['ProfilesImage'] != '') {
                $record['ProfilesImage'] = $ProfilesImage['ProfilesImage'];

            }
            $Crud->UpdateRecord($table, $records, $where);
            $response['status'] = "success";
            $response['message'] = "User Details Updated...";

        }

        echo json_encode($response);
    }

    public
    function UserLoginSubmit($Email, $Password)
    {
        $Crud = new Crud();

        $this->MainModel = new Main();
        $main = $this->MainModel;

        $session = session();
        $response = array();
        $table = 'users';
        $where = array("Email" => $Email, "Password" => $Password, "Archive" => "0");
        $Record = $Crud->SingleRecord($table, $where);

        if (isset($Record['UID'])) {
            $newdata = [
                'id' => $Record['UID'],
                'type' => $Record['AccountType'],
                'name' => $Record['Name'],
                'profile' => $Record['ProfilesImage'],
                'email' => $Record['Email'],
                'logged_in' => TRUE
            ];
            $session->set($newdata);
            $response['status'] = "success";
            $response['message'] = " You are successfully logged";

        } else {
            $response['status'] = "fail";
            $response['message'] = " Invalid Login and Password, Please Try again...";
        }

        echo json_encode($response);
    }

    public
    function UpdateUserNameSubmit($Name, $ProfilesImage, $ID)
    {

        $Crud = new Crud();

        $table = 'users';
        $where = array("UID" => $ID);
        $record['Name'] = $Name;
        $records = $Crud->SingleRecord($table, $where);
        if ($ProfilesImage['ProfilesImage'] != 0) {
            $record['ProfilesImage'] = $ProfilesImage['ProfilesImage'];

        }
        if (isset($records['UID'])) {
            if ($Crud->UpdateRecord($table, $record, $where)) {
                $response = array();
                $response['status'] = 'success';
                $response['message'] = 'Profile Details Updated Successfully';
            } else {
                $response = array();
                $response['status'] = 'fail';
                $response['message'] = 'Failed To Update Profile Details, Please Try Again';
            }
        }
        echo json_encode($response);

    }


    public
    function UpdatePasswordFormSubmit($Password, $ConfirmPassword, $NewPassword, $ID)
    {

        $Crud = new Crud();

        $this->MainModel = new Main();
        $main = $this->MainModel;

        $table = 'users';
        $where = array("Password" => $Password);
        $records = $Crud->SingleRecord($table, $where);
        if ($_POST['NewPassword'] == '') {
            $response = array();
            $response['status'] = 'fail';
            $response['message'] = 'Password Can Not Be Empty, Please Try Again';
            echo json_encode($response);
        } else {
            if ($NewPassword == $ConfirmPassword) {
                if (isset($records['UID'])) {
                    $record['Password'] = $ConfirmPassword;
                    $wheres = array("UID" => $ID);
                    if ($Crud->UpdateRecord($table, $record, $wheres)) {
                        $response = array();
                        $response['status'] = 'success';
                        $response['message'] = 'Password Updated Successfully';
                        echo json_encode($response);

                    } else {
                        $response = array();
                        $response['status'] = 'fail';
                        $response['message'] = 'Failed To Update Password, Please Try Again';
                        echo json_encode($response);

                    }
                } else {

                    $response = array();
                    $response['status'] = 'fail';
                    $response['message'] = 'Invalid Old Password, Please Try Again';
                    echo json_encode($response);

                }
            } else {
                $response = array();
                $response['status'] = 'fail';
                $response['message'] = 'Password Did not Matched, Please Try Again';
                echo json_encode($response);

            }
        }


    }

    public function getUsers()
    {

        $Crud = new Crud();
        $table = 'users';
        $where = array("Archive" => '0');
        $order = array("Name" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;

    }

    public
    function DeleteUsers($UID)
    {

        $Crud = new Crud();
        $table = 'users';
        $record['Archive'] = "1";
        $where = array("UID" => $UID);
        if ($Crud->UpdateRecord($table, $record, $where)) {
            $response['status'] = "success";
        } else {
            $response['status'] = "fail";
        }
        echo json_encode($response);
    }

    public
    function GetUsersDataByID($id)
    {
        $Crud = new Crud();
        $table = 'users';
        $where = array("UID" => $id);
        $records = $Crud->SingleRecord($table, $where);
        return $records;

    }


    ////////////// Ads functions
    //// ads manipulations starts form here

    public function AdsFormSubmit($records, $UID)
    {
        $data = $this->data;

        $Crud = new Crud();
        $table = 'ads';

        $this->MainModel = new Main();


        if ($UID == 0) {
            if ($recordID = $Crud->AddRecord($table, $records)) {
                $response['status'] = "success";
                $response['record_id'] = $recordID;
                $response['message'] = "User Successfully Added...";

            } else {
                $response['status'] = "fail";
                $response['message'] = "Data Didn't Submitted Correctly...";
            }

        } else {
            $where = array("UID" => $UID);
            $Crud->UpdateRecord($table, $records, $where);
            $response['status'] = "success";
            $response['message'] = "User Details Updated...";
        }

        echo json_encode($response);
    }


    public function getAds()
    {

        $Crud = new Crud();
        $table = 'ads';
        $where = array("Archive" => '0');
        $order = array("Title" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    public function getAvailableAds()
    {

        $Crud = new Crud();
        $table = 'ads';
        $where = array("Archive" => '0', "Status" => "Available");
        $order = array("Title" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    public
    function DeleteAds($UID)
    {

        $Crud = new Crud();
        $table = 'ads';
        $record['Archive'] = "1";
        $where = array("UID" => $UID);
        if ($Crud->UpdateRecord($table, $record, $where)) {
            $response['status'] = "success";
        } else {
            $response['status'] = "fail";
        }
        echo json_encode($response);
    }

    public
    function GetAdsDataByID($id)
    {
        $Crud = new Crud();
        $table = 'ads';
        $where = array("UID" => $id);
        $records = $Crud->SingleRecord($table, $where);
        return $records;

    }


    //  Lists

    public function getSellerList()
    {

        $Crud = new Crud();
        $table = 'users';
        $where = array("Archive" => '0', "AccountType" => 'Seller');
        $order = array("Name" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    public function getBuyerList()
    {

        $Crud = new Crud();
        $table = 'users';
        $where = array("Archive" => '0', "AccountType" => 'Buyer');
        $order = array("Name" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    public
    function GetBookedAdsList()
    {
        $Crud = new Crud();
        $table = 'ads';
        $where = array("Archive" => '0', "Status" => 'Booked');
        $order = array("SystemDate" => 'ASC');

        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    function GetAvailableAdsList()
    {
        $Crud = new Crud();
        $table = 'ads';
        $where = array("Archive" => '0', "Status" => 'Available');
        $order = array("SystemDate" => 'ASC');

        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    function getReviewList()
    {
        $Crud = new Crud();
        $table = 'reviews';
        $where = array("Archive" => '0');
        $order = array("UID" => 'ASC');

        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    //Review

    public function ReviewFormSubmit($records, $UID)
    {
        $data = $this->data;

        $Crud = new Crud();
        $table = 'reviews';

        $this->MainModel = new Main();

        ////////////////// Duplicate Email Check
        if ($UID == 0) {
            if ($recordID = $Crud->AddRecord($table, $records)) {
                $response['status'] = "success";
                $response['record_id'] = $recordID;
                $response['message'] = "Review Successfully Added...";

            } else {
                $response['status'] = "fail";
                $response['message'] = "Review Didn't Submitted Correctly...";
            }

        } else {
            $where = array("UID" => $UID);
            $Crud->UpdateRecord($table, $records, $where);
            $response['status'] = "success";
            $response['message'] = "User Details Updated...";
        }

        echo json_encode($response);
    }


    public function getReview()
    {

        $Crud = new Crud();
        $table = 'reviews';
        $where = array("Archive" => '0');
        $order = array("UID" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    public function getAvailableReview()
    {

        $Crud = new Crud();
        $table = 'reviews';
        $where = array("Archive" => '0');
        $order = array("UID" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;
    }

    public
    function DeleteReview($UID)
    {

        $Crud = new Crud();
        $table = 'reviews';
        $record['Archive'] = "1";
        $where = array("UID" => $UID);
        if ($Crud->UpdateRecord($table, $record, $where)) {
            $response['status'] = "success";
        } else {
            $response['status'] = "fail";
        }
        echo json_encode($response);
    }

    public
    function GetReviewDataByID($id)
    {
        $Crud = new Crud();
        $table = 'reviews';
        $where = array("UID" => $id);
        $records = $Crud->SingleRecord($table, $where);
        return $records;

    }

    // Login Form

    public
    function auth($result)
    {
        $Crud = new Crud();
        $table = 'users';
        $where = array("Email" => $result['Email'], "Password" => $result['Password']);
        $records = $Crud->SingleRecord($table, $where);
        return $records;
    }


}