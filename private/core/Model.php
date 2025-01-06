<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */

class Model extends NkupineSocialClubDB
{
    protected $table = "Members";

    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";

        try {
            return $this->query($query, [
                'value' => $value
            ]);
        } catch (PDOException $e) {
            error_log("Query failed: $query");
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }

    public function findAll()
    {
        $query = "SELECT * FROM $this->table";

        try {
            return $this->query($query);
        } catch (PDOException $e) {
            error_log("Query failed: $query");
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
}
