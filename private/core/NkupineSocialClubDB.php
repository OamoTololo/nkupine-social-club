<?php
/*
 * This file is part of the Nkupine Social Club Application.
 *
 * @author      Oamogetswe Mgidi
 * @copyright   Copyright (c) Ntwana Sosha LTD
 */
class NkupineSocialClubDB
{
    protected ?PDO $pdo = null;

    protected function connection()
    {
        if ($this->pdo === null) {
            try {
                $dbHost = getenv('DB_HOST') ?: 'localhost:3306';
                $username = getenv('DB_USER') ?: 'root';
                $password = getenv('DB_PASS') ?: 'O@mO23352433';
                $databaseName = getenv('DB_NAME') ?: 'NKUPINE_SOCIAL_CLUB';

                $this->pdo = new PDO("mysql:host=$dbHost;dbname=$databaseName;charset=utf8mb4", $username, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                error_log("Database connection error: " . $e->getMessage());
                throw new Exception("Unable to connect to the database. Please try again later.");
            }
        }
        return $this->pdo;
    }

    public function query($query, $data = [])
    {
        try {
            $stmt = $this->connection()->prepare($query);
            $stmt->execute($data);

            return $stmt->fetchAll(PDO::FETCH_OBJ) ?: []; // Return empty array if no results
        } catch (PDOException $e) {
            error_log("Query failed: $query");
            error_log("Error: " . $e->getMessage());
            return [];
        }
    }
}

