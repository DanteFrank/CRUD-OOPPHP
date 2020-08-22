<?php

class DataOperation extends Db {
    //Insert Records Into The Database
    public function insertRecord($table, $fields) {
        // INSERT INTO table_name( , , ) VALUES ('food_item', 'qty');
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        $sql .= " (".implode(",", array_keys($fields)).") VALUES ";
        $sql .= "('".implode("','", array_values($fields))."')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        if($stmt) {
            return true;
        }
    
    }

    //Fetch Records From The Database
    public function fetchRecord($table) {
        $sql = "SELECT * FROM".$table;
        $array = array();
        $query = $this->connect()->query($sql);
        while ($row = $query->fetch()) {
            $array[] = $row;
        }
        return $array;
    }



}

