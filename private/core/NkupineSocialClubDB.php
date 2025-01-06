<?php

class NkupineSocialClubDB
{
    protected ?PDO $pdo = null;

    private function connection()
    {
        if ($this->pdo === null) {
            try {
                $dbHost = getenv('DB_HOST') ?: 'localhost:3306';
                $username = getenv('DB_USER') ?: 'root';
                $password = getenv('DB_PASS') ?: 'O@mO23352433';
                $databaseName = getenv('DB_NAME') ?: 'NKUPINE_SOCIAL_CLUB';

                $this->pdo = new PDO("mysql:host=$dbHost;dbname=$databaseName", $username, $password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                error_log("Connection error: " . $e->getMessage()); // Log the error
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

            // Fetch all results as an associative array or an object (based on your preference)
            return $stmt->fetchAll(PDO::FETCH_OBJ); // Use fetchAll() to return an array of objects
        } catch (PDOException $e) {
            // Log the query and error message for easier debugging
            error_log("Query failed: $query");
            error_log("Error: " . $e->getMessage());
            return false; // Return false if the query fails
        }
    }

}
