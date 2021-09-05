<?php namespace App\Models;

use App\Models\Crud;
use App\Models\Main;
use CodeIgniter\Model;


class Web_records extends Model
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



    public function GetAdsData()
    {

        $Crud = new Crud();
        $table = 'ads';
        $where = array();
        $order = array("Title" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;

    }

    public function GetReviews()
    {

        $Crud = new Crud();
        $table = 'reviews';
        $where = array("Status" => 'Approved');
        $order = array("Description" => 'ASC');
        $records = $Crud->ListRecords($table, $where, $order);
        return $records;

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


}