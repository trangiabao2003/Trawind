<?php
require_once("connection.php");
class Model
{
    var $conn;
    var $table;
    var $contens;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function All()
    {
        $sql = "select * from $this->table ORDER BY $this->contens DESC ";

        require("result.php");

        return $data;
        
    }
    function find($id)
    {
        $sql = "select * from $this->table where $this->contens =$id";
        require("result.php");

        return $data;
    }
    function delete($id)
    {
        $sql = "DELETE from $this->table where $this->contens=$id";
        
        $status = $this->conn->query($sql);
        if ($status == true) {
            setcookie('msg', 'Xóa thành công', time() + 2);
        } else {
            setcookie('msg', 'Xóa không thành công', time() + 2);
        }

    }
    function store($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $sql = "INSERT INTO $this->table($f) VALUES ($v)";

        $status = $this->conn->query($sql);

        if ($status == true) {
            setcookie('msg', 'Thêm mới thành công', time() + 2);
        } else {
            setcookie('msg', 'Thêm mới không thành công', time() + 2);
        }
    }
    function update($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");


        $sql = "UPDATE $this->table SET  $v   WHERE $this->contens = " . $data[$this->contens];

        $result = $this->conn->query($sql);
        
        if ($result == true) {
            setcookie('msg', 'Duyệt thành công', time() + 2);
            header('Location: ?mod=' . $this->table);
        } else {
            setcookie('msg', 'Update vào không thành công', time() + 2);
            header('Location: ?mod=' . $this->table . '&act=edit&id=' . $data['id']['id']);
        }
    }
}
