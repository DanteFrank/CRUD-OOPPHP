<?php

class DataOperation extends Db {
    public function insertRecord($table, $fields) {
        // INSERT INTO table_name( , , ) VALUES ('food_item', 'qty');
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        $sql .= " (".implode(",", array_keys($fields)).") VALUES ";
        $sql .= "('".implode("','", array_values($fields))."')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    
    }
}