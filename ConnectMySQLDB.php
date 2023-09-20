<?php


class ConnectMySQLDB {
    private $pdo;

    public function __construct($host, $dbname, $username, $password) {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password,array(
                PDO::ATTR_PERSISTENT => true,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function create($table, $data) {
        $keys = implode(',', array_keys($data));
        $values = ':' . implode(',:', array_keys($data));
        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        
        $stmt = $this->pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        
        return $stmt->execute();
    }

    public function read($table, $conditions = [], $orderBy = '') {
        $sql = "SELECT * FROM $table";

        if (!empty($conditions)) {
            $sql .= " WHERE ";
            $whereClauses = [];
            foreach ($conditions as $field => $value) {
                $whereClauses[] = "$field = :$field";
            }
            $sql .= implode(' AND ', $whereClauses);
        }

        if (!empty($orderBy)) {
            $sql .= " ORDER BY $orderBy";
        }

        $stmt = $this->pdo->prepare($sql);
        foreach ($conditions as $field => $value) {
            $stmt->bindValue(":$field", $value);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($table, $data, $conditions) {
        $setClauses = [];
        foreach ($data as $field => $value) {
            $setClauses[] = "$field = :$field";
        }
        $sql = "UPDATE $table SET " . implode(', ', $setClauses) . " WHERE ";
        
        $whereClauses = [];
        foreach ($conditions as $field => $value) {
            $whereClauses[] = "$field = :where_$field";
        }
        $sql .= implode(' AND ', $whereClauses);

        $stmt = $this->pdo->prepare($sql);
        foreach ($data as $field => $value) {
            $stmt->bindValue(":$field", $value);
        }
        foreach ($conditions as $field => $value) {
            $stmt->bindValue(":where_$field", $value);
        }

        return $stmt->execute();
    }

    public function delete($table, $conditions) {
        $sql = "DELETE FROM $table WHERE ";
        $whereClauses = [];
        foreach ($conditions as $field => $value) {
            $whereClauses[] = "$field = :$field";
        }
        $sql .= implode(' AND ', $whereClauses);

        $stmt = $this->pdo->prepare($sql);
        foreach ($conditions as $field => $value) {
            $stmt->bindValue(":$field", $value);
        }

        return $stmt->execute();
    }

    public function executeCustomQuery($query, $params = []) {
        $stmt = $this->pdo->prepare($query);

        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }

        $stmt->execute();

        // Si la requête est une requête SELECT
        if (strpos(strtoupper($query), 'SELECT') === 0) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // Pour les autres types de requêtes (INSERT, UPDATE, DELETE)
        return $stmt->rowCount(); // Nombre de lignes affectées
    }

    public function customSelect($tables, $conditions = [], $joins = [], $orderBy = '') {
        $tableList = implode(', ', $tables);

        $sql = "SELECT * FROM $tableList";

        foreach ($joins as $join) {
            $sql .= " $join";
        }

        if (!empty($conditions)) {
            $sql .= " WHERE ";
            $whereClauses = [];
            foreach ($conditions as $field => $value) {
                $whereClauses[] = "$field = :$field";
            }
            $sql .= implode(' AND ', $whereClauses);
        }

        if (!empty($orderBy)) {
            $sql .= " ORDER BY $orderBy";
        }

        $stmt = $this->pdo->prepare($sql);
        foreach ($conditions as $field => $value) {
            $stmt->bindValue(":$field", $value);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

