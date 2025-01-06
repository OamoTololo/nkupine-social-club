<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */

class Modal extends NkupineSocialClubDB
{
    protected $table = "Members";

    public function where($column, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE $column = :value";
        echo $query;

        try {
            return $this->query($query, ['value' => $value]);
        } catch (PDOException $e) {
            error_log("Query failed: $query");
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
}
