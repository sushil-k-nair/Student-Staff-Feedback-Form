<?php
    $query = "SELECT * FROM `feedback` order by id desc";
            
    $DB = new Database();
    $result = $DB->read($query);

?>