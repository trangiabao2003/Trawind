<?php 
    $result = $this->conn->query($sql);

    $data = array();

    while ($row = $result->fetch_assoc()) 
    {
        $data[] = $row;
    }
?>
