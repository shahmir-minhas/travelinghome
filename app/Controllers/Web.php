<?php

namespace App\Controllers;

use App\Models\Apanel;
use App\Models\Main;
use App\Models\Web_records;

class Web extends BaseController
{
    var $data = array();
    var $MainModel;

    public function __construct()
    {
        $this->MainModel = new Main();
        $this->data = $this->MainModel->DefaultVariable();
        $this->data['page'] = getSegment(2);

    }
    public function index()
    {
        $data = $this->data;

        $AdsShowData = new Web_records();
        $data['Records'] = $AdsShowData->GetAdsData();

        $AdsShowData = new Web_records();
        $data['Reviews'] = $AdsShowData->GetReviews();

        echo view('web/header', $data);
        echo view('web/dashboard', $data);
        echo view('web/footer', $data);
    }
    public function detail()
    {
        $data = $this->data;

        $data['ID'] = getSegment(3);

        $AdsShowData = new Web_records();
        $data['Record'] = $AdsShowData->GetAdsDataByID($data['ID']);

        echo view('web/header', $data);
        echo view('web/property_details_page', $data);
        echo view('web/footer', $data);
    }
    public function signup()
    {
        $data = $this->data;

//        echo view('web/header', $data);
        echo view('web/signup', $data);
//        echo view('web/footer', $data);
    }
    public function userLogin()
    {
        $data = $this->data;

//        echo view('web/header', $data);
        echo view('web/userLogin', $data);
//        echo view('web/footer', $data);
    }
}
