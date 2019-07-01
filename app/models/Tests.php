<?php

class Tests {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getTests() {
        $sql = "SELECT * FROM tests";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function saveResult($userId ,$testId, $testScore, $testResult) {
        $sql = "INSERT INTO test_results (user_id, test_id, test_date, test_score, test_result) VALUES (:userId, :testId, now(), :testScore, :testResult)";

        $this->db->query($sql);

        $this->db->bind(':userId', $userId);
        $this->db->bind(':testId', $testId);
        $this->db->bind(':testScore', $testScore);
        $this->db->bind(':testResult', $testResult);

        return  $this->db->execute() ? true : false;
    }

    public function getTestResultByUserId($id) {
        $sql = "SELECT test_results.test_id, tests.test_name, test_results.test_score, test_results.test_result, test_results.test_date FROM test_results INNER JOIN tests ON test_results.test_id = tests.test_id WHERE user_id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);

        $resultSet = $this->db->resultSet();

        return $resultSet ? $resultSet : false;
    }

    public function deleteTestResultByUserId($id) {
        $sql = "DELETE FROM test_results WHERE user_id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $id);

        return $this->db->execute() ? true : false;
    }
}
