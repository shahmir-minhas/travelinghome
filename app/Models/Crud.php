<?php namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;
use App\Models\Main;

class Crud extends Model
{
    var $data = array();

    public function __construct()
    {
        $this->data['template'] = TEMPLATE;
        $this->data['path'] = PATH;
    }

    public
    function AlterDatabase()
    {
        $sql = file_get_contents(ROOT . "/db/alter.sql");

        $sqls = explode(';', $sql);
        array_pop($sqls);
        $db = db_connect();
        $db->db_debug = false;
        foreach ($sqls as $statement) {
            $statment = $statement . ";";
            if ($db->query($statment)) {
                //echo $db->getLastQuery() . "<hr>";
            }
        }
        $db->close();
    }


    public
    function AddRecord($table, $records)
    {
        $db = db_connect();
        $builder = $db->table($table);
        $builder->insert($records);
        $insertID = $db->insertID();
        // echo $db->getLastQuery() . "<hr>";
        $db->close();

        return $insertID;
    }

    public
    function UpdateRecord($table, $records, $where)
    {
        $db = db_connect();
        $builder = $db->table($table);
        if (count($where) > 0) {
            $builder->where($where);
        }
        $builder->update($records);
        //echo $builder->getLastQuery() . "<hr>";
        $db->close();
        return true;
    }

    public
    function DeleteRecord($table, $where)
    {
        $db = db_connect();
        $builder = $db->table($table);
        if (count($where) > 0) {
            $builder->where($where);
        }
        $builder->delete();
        $db->close();

        return true;
    }


    public
    function ListRecords($table, $wheres = array(), $order = array(), $limit = 0, $start = 0, $LikeArray = array(), $DateFilters = array(), $ColumnNull = array())
    {
        $db = db_connect();
        $builder = $db->table($table);

        $builder->select('*');
        if (count($wheres) > 0) {
            $builder->where($wheres);
        }
        if(count($DateFilters) > 0){
            $builder->where(' '.$DateFilters['Column'].' BETWEEN \''.$DateFilters['From'].'\' AND \''.$DateFilters['To'].'\' ');
        }
        if( count($ColumnNull) > 0 ){
            $builder->where( ' '.$ColumnNull['Column'].' '.$ColumnNull['Condition'].' ' );
        }

        if(count($LikeArray) > 0){
            $builder->groupStart();
            $builder->like($LikeArray);
            $builder->groupEnd();
        }
        if (count($order) > 0) {
            foreach ($order as $ordK => $ordV) {
                $builder->orderBy($ordK, $ordV);
            }
        }
        if ($limit > 0) {
            $builder->limit($limit, $start);
        }

        $query = $builder->get();
        $records = $query->getResultArray();
        //echo $db->getLastQuery() . "<hr>";

        return $records;
    }

    public
    function SingleRecord($table, $wheres = array(), $order = array())
    {
        $db = db_connect();
        $builder = $db->table($table);

        $builder->select('*');
        if (count($wheres) > 0) {
            $builder->where($wheres);
        }
        if (count($order) > 0) {
            foreach ($order as $ordK => $ordV) {
                $builder->orderBy($ordK, $ordV);
            }
        }
        $query = $builder->get();
        $record = $query->getRowArray();
       // echo $db->getLastQuery() . "<hr>";

        $db->close();

        return $record;
    }



    public function ExecuteSQL($Query)
    {
        $db = db_connect();
        $records = $db->query($Query)->getResult('array');
        //echo $db->getLastQuery() . "<hr>";
        return $records;
    }

}
