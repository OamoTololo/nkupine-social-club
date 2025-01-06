<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */

class Modal extends NkupineSocialClubDB
{
    protected $table = "MEMBERS"; // Fixed typo

    public function where($column, $value)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$column} = :value";

        try {
            $stmt = $this->connection()->prepare($query);
            $stmt->execute(['value' => $value]);

            return $stmt->fetchAll(PDO::FETCH_OBJ); // Return all matching records
        } catch (PDOException $e) {
            error_log("Query failed: $query");
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }
}
