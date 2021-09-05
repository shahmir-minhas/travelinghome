<?php
namespace App\Controllers;
use App\Models\Apanel;
use App\Models\Crud;
use App\Models\Main;


class Form_process extends BaseController
{
    var $data = array();
    var $MainModel;


    public function __construct()
    {
        $this->MainModel = new Main();
        $this->data = $this->MainModel->DefaultVariable();


    }

    public
    function user_form_submit()
    {
        $Crud = new Crud();
        $response = array();

        $UserAddFormSubmit = new Apanel();
        $UID = $this->request->getVar('UID');
        if ($_POST['Name'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter User Name...";
            echo json_encode($response);
            exit;

        } else if ($_POST['Email'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Email...";
            echo json_encode($response);
            exit;

        } else if ($_POST['AccountType'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Account Type...";
            echo json_encode($response);
            exit;

        } else {
            $Name = $this->request->getVar('Name');
            $ContactNumber = $this->request->getVar('ContactNumber');
            $Email = $this->request->getVar('Email');
            $AccountType = $this->request->getVar('AccountType');
            $Address = $this->request->getVar('Address');
            $Password = $this->request->getVar('Password');
            $RoomsBooked = $this->request->getVar('RoomsBooked');
            $AdsPosted = $this->request->getVar('AdsPosted');
            $Revenue = $this->request->getVar('Revenue');

            $records = array();
            $records['Name'] = $Name;
            $records['ContactNumber'] = $ContactNumber;
            $records['Email'] = $Email;
            $records['AccountType'] = $AccountType;
            $records['Address'] = $Address;
            $records['Password'] = $Password;
            $records['RoomsBooked'] = $RoomsBooked;
            $records['AdsPosted'] = $AdsPosted;
            $records['Revenue'] = $Revenue;

            $UserAddFormSubmit->UserFormSubmit($records, $UID);
        }
    }

    public
    function customer_form_submit()
    {
        $Crud = new Crud();
        $response = array();

        $CustomerAddFormSubmit = new Apanel();
        $UID = $this->request->getVar('UID');
        if ($_POST['Email'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Email...";
            echo json_encode($response);
            exit;

        }  else {
            $Name = $this->request->getVar('Name');
            $Email = $this->request->getVar('Email');
            $Password = $this->request->getVar('Password');


            $records = array();
            $records['Name'] = $Name;
            $records['Email'] = $Email;
            $records['Password'] = $Password;

            $CustomerAddFormSubmit->UserFormSubmit($records, $UID);
        }
    }

    public
    function remove_user()
    {
        $UID = $this->request->getVar('UID');
        $DltOperator = new Apanel();
        $DltOperator->DeleteUsers($UID);
    }
    public
    function get_users_data_by_id()
    {
        $data = $this->data;
        $result = array();

        $id = $this->request->getVar('UID');

        $Users = new Apanel();

        $Data = $Users->GetUsersDataByID($id);


        $result['Name'] = $Data['Name'];
        $result['ContactNumber'] = $Data['ContactNumber'];
        $result['Email'] = $Data['Email'];
        $result['Password'] = $Data['Password'];
        $result['Address'] = $Data['Address'];
        $result['AccountType'] = $Data['AccountType'];
        $result['RoomsBooked'] = $Data['RoomsBooked'];
        $result['AdsPosted'] = $Data['AdsPosted'];
        $result['Revenue'] = $Data['Revenue'];

        echo json_encode($result);

    }


    /// Ads form Processing

    public
    function ads_form_submit()
    {
        $Crud = new Crud();
        $response = array();

        $AdsAddFormSubmit = new Apanel();
        $UID = $this->request->getVar('UID');
        if ($_POST['Title'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Title...";
            echo json_encode($response);
            exit;

        } else if ($_POST['Status'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Availability...";
            echo json_encode($response);
            exit;

        }
        else {
            $UserId = $this->request->getVar('UserId');
            $UserName = $this->request->getVar('UserName');
            $AdsImage = $this->request->getVar('AdsImage');
            $Title = $this->request->getVar('Title');
            $Bath = $this->request->getVar('Bath');
            $Bed = $this->request->getVar('Bed');
            $Status = $this->request->getVar('Status');
            $Rent = $this->request->getVar('Rent');
            $AreaSq = $this->request->getVar('AreaSq');
            $AddDate = $this->request->getVar('AddDate');
            $Address = $this->request->getVar('Address');
            $Category = $this->request->getVar('Category');
            $Review = $this->request->getVar('Review');
            $BookUserId = $this->request->getVar('BookUserId');
            $Longitude = $this->request->getVar('Longitude');
            $Latitude = $this->request->getVar('Latitude');

            $records = array();
            $records['UserId'] = $UserId;
            $records['UserName'] = $UserName;
            $records['AdsImage'] = $AdsImage;
            $records['Title'] = $Title;
            $records['Bath'] = $Bath;
            $records['Bed'] = $Bed;
            $records['Status'] = $Status;
            $records['Rent'] = $Rent;
            $records['AddDate'] = $AddDate;
            $records['AreaSq'] = $AreaSq;
            $records['AddDate'] = $AddDate;
            $records['Address'] = $Address;
            $records['Category'] = $Category;
            $records['Review'] = $Review;
            $records['BookUserId'] = $BookUserId;
            $records['Latitude'] = $Latitude;
            $records['Longitude'] = $Longitude;

            $AdsAddFormSubmit->AdsFormSubmit($records, $UID);
        }
    }

    public
    function remove_ads()
    {
        $UID = $this->request->getVar('UID');
        $DltOperator = new Apanel();
        $DltOperator->DeleteAds($UID);
    }
    public
    function get_ads_data_by_id()
    {
        $data = $this->data;
        $result = array();

        $id = $this->request->getVar('UID');

        $Ads = new Apanel();

        $Data = $Ads->GetAdsDataByID($id);


        $result['UserId'] = $Data['UserId'];
        $result['UserName'] = $Data['UserName'];
        $result['Title'] = $Data['Title'];
        $result['Bath'] = $Data['Bath'];
        $result['Bed'] = $Data['Bed'];
        $result['Status'] = $Data['Status'];
        $result['Rent'] = $Data['Rent'];
        $result['AddDate'] = $Data['AddDate'];
        $result['AreaSq'] = $Data['AreaSq'];
        $result['AddDate'] = $Data['AddDate'];
        $result['Address'] = $Data['Address'];
        $result['Category'] = $Data['Category'];
        $result['Review'] = $Data['Review'];
        $result['BookUserId'] = $Data['BookUserId'];
        $result['Latitude'] = $Data['Latitude'];
        $result['Longitude'] = $Data['Longitude'];

        echo json_encode($result);

    }

        // Review


    public
    function review_form_submit()
    {
        $Crud = new Crud();
        $response = array();

        $ReviewAddFormSubmit = new Apanel();
        $UID = $this->request->getVar('UID');
        if ($_POST['Name'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter User Name...";
            echo json_encode($response);
            exit;

        } else if ($_POST['Email'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Email...";
            echo json_encode($response);
            exit;

        }
        else {
            $Name = $this->request->getVar('Name');
            $Email = $this->request->getVar('Email');
            $Designation = $this->request->getVar('Designation');
            $Description = $this->request->getVar('Description');


            $records = array();
            $records['Name'] = $Name;
            $records['Email'] = $Email;
            $records['Designation'] = $Designation;
            $records['Description'] = $Description;

            $ReviewAddFormSubmit->ReviewFormSubmit($records, $UID);
        }
    }

    public
    function remove_review()
    {
        $UID = $this->request->getVar('UID');
        $DltOperator = new Apanel();
        $DltOperator->DeleteReview($UID);
    }
    public
    function get_review_data_by_id()
    {
        $data = $this->data;
        $result = array();

        $id = $this->request->getVar('UID');

        $Ads = new Apanel();

        $Data = $Ads->GetReviewDataByID($id);


        $result['Name'] = $Data['Name'];
        $result['Email'] = $Data['Email'];
        $result['Designation'] = $Data['Designation'];
        $result['Description'] = $Data['Description'];


        echo json_encode($result);

    }

        //       Login form Admin

    public
    function login()
    {
        $data = $this->data;
        $result = array();
        $LoginSubmit = new Apanel();
        $Email = $this->request->getVar('Email');
        $Password = $this->request->getVar('Password');

        if ($_POST['Email'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Email...";
            echo json_encode($response);
            exit;

        } else if ($_POST['Password'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Password...";
            echo json_encode($response);
            exit;
        }
        else{
            $LoginSubmit->UserLoginSubmit($Email, $Password);


//            $result['Email'] = $Email;
//            $result['Password'] = $Password;
//
//            $Apanel = new Apanel();
//
//            if($Apanel->auth($result))
//            {
//                $response['status'] = "success";
//                $response['message'] = "Logged In Successful";
//                echo json_encode($response);
//                exit;
//            }
//            else{
//                $response['status'] = "fail";
//                $response['message'] = "You are Not a Member";
//                echo json_encode($response);
//                exit;
//            }

        }

    }

    public
    function userLogin()
    {
        $data = $this->data;
        $result = array();

        $Email = $this->request->getVar('Email');
        $Password = $this->request->getVar('Password');

        if ($_POST['Email'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Email...";
            echo json_encode($response);
            exit;

        } else if ($_POST['Password'] == '') {
            $response['status'] = "fail";
            $response['message'] = "Kindly Enter Password...";
            echo json_encode($response);
            exit;
        }
        else{
            $result['Email'] = $Email;
            $result['Password'] = $Password;

            $Apanel = new Apanel();

            if($Apanel->auth($result))
            {
                $response['status'] = "success";
                $response['message'] = "Logged In Successful";
                echo json_encode($response);
                exit;
            }
            else{
                $response['status'] = "fail";
                $response['message'] = "Login Failed";
                echo json_encode($response);
                exit;
            }

        }

    }

}
