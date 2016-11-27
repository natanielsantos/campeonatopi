<?php

class QueryExecutor {

    
    
    public static function execute($sqlQuery) {
        $transaction = Transaction::getCurrentTransaction();
        if (!$transaction) {
            $connection = new Connection();
        } else {
            $connection = $transaction->getConnection();
        }
        $query = $sqlQuery->getQuery();
//                $pos = strpos($query, "null");
//                if ($pos != false) {
//                    if(true) {
//                      writeToFile($query);
//                    }
//                }
        $result = $connection->executeQuery($query);
        if (!$result) {
            throw new Exception("SQL Error: -->" . $query . "<--" . mysqli_error());
        }
        $i = 0;
        $tab = array();
        while ($row = mysqli_fetch_array($result)) {
            $tab[$i++] = $row;
        }
        mysqli_free_result($result);
        if (!$transaction) {
            $connection->close();
        }
        return $tab;
    }

    public static function executeUpdate($sqlQuery) {
        $link = mysqli_connect("localhost", "root", "", "mydb");
        $transaction = Transaction::getCurrentTransaction();
        if (!$transaction) {
            $connection = new Connection();
        } else {
            $connection = $transaction->getConnection();
        }
        $query = $sqlQuery->getQuery();
        $result = $connection->executeQuery($query);
        if (!$result) {
            throw new Exception("SQL Error: -->" . $query . "<--" . mysqli_error($link));
        }
        
        
        return mysqli_affected_rows($link);
    }

    public static function executeInsert($sqlQuery) {
        QueryExecutor::executeUpdate($sqlQuery);
        $link = mysqli_connect("localhost", "root", "", "mydb");
        return mysqli_insert_id($link);
    }

    public static function queryForString($sqlQuery) {
        $transaction = Transaction::getCurrentTransaction();
        if (!$transaction) {
            $connection = new Connection();
        } else {
            $connection = $transaction->getConnection();
        }
        $result = $connection->executeQuery($sqlQuery->getQuery());
        if (!$result) {
            throw new Exception("SQL Error: -->" . $sqlQuery->getQuery() . "<--" . mysqli_error());
        }
        $row = mysqli_fetch_array($result);
        return $row[0];
    }

}
