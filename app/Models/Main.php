<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\Crud;

class Main extends Model
{
    var $data = array();

    public function __construct()
    {
        helper('main');
        $this->data = $this->DefaultVariable();

        // Alter Database
        $Crud = new Crud();
        $Crud->AlterDatabase();

    }

    public
    function CheckUser($session)
    {
        if (!$session['logged_in']) {
            $data = $this->data;
            echo view('login', $data);
            exit;
        }
    }

    public
    function DefaultVariable()
    {
        $data = array();

        $session = session();
        $data['session'] = $session->get();
        date_default_timezone_set("Asia/Karachi");

        $data['template'] = TEMPLATE;
        $data['web_template'] = WEBTEMPLATE;
        $data['path'] = PATH;
        $data['module'] = getSegment(1);
        $data['page'] = getSegment(2);
        $data['sub_page'] = getSegment(3);

        return $data;
    }



}
