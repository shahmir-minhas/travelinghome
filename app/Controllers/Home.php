<?php

namespace App\Controllers;

use App\Models\Apanel;
use App\Models\Main;

class Home extends BaseController
{
    var $data = array();
    var $MainModel;

    public function __construct()
    {
        $this->MainModel = new Main();
        $this->data = $this->MainModel->DefaultVariable();
        $this->data['page'] = getSegment(2);

        if($this->data['module'] != 'login') {
            $session = session();
            $this->MainModel->CheckUser($session->get());
        }


    }

    public function index()
    {
        $data = $this->data;

        echo view('header', $data);
        echo view('dashboard', $data);
        echo view('footer', $data);
    }

    public function users()
    {
        $data = $this->data;

        $SystemUserShowData = new Apanel();
        $data['Records'] = $SystemUserShowData->getUsers();

        echo view('header', $data);
        echo view('users/list', $data);
        echo view('footer', $data);
    }

    public function ads()
    {
        $data = $this->data;

        $SystemAdsShowData = new Apanel();
        $data['Records'] = $SystemAdsShowData->getAds();

        echo view('header', $data);
        echo view('ads/list', $data);
        echo view('footer', $data);
    }

        $SystemAdsShowData = new Apanel();
        $data['Records'] = $SystemAdsShowData->GetBookedAdsList();

        echo view('header', $data);
        echo view('ads/bookedAds', $data);
        echo view('footer', $data);
    }
    public function availableAds()
    {
        $data = $this->data;

        $SystemAdsShowData = new Apanel();
        $data['Records'] = $SystemAdsShowData->GetAvailableAdsList();

        echo view('header', $data);
        echo view('ads/availableAds', $data);
        echo view('footer', $data);
    }


//        Review


    public function review()
    {
        $data = $this->data;

        $SystemUserShowData = new Apanel();
        $data['Records'] = $SystemUserShowData->getReviewList();

        echo view('header', $data);
        echo view('review/list', $data);
        echo view('footer', $data);
    }

    //    admin

    public function login()
    {
        $data = $this->data;
         echo view('login', $data);
    }

    public function logout()
    {
        $data = $this->data;
        $session = session();
        $session->destroy();
        echo view('login', $data);
        exit;

    }
}
