<?php

class ConnectionFactory {

    static public function getConnection() {
        $conn = mysqli_connect(ConnectionProperty::getHost(), ConnectionProperty::getUser(), ConnectionProperty::getPassword());
        mysqli_select_db($conn, ConnectionProperty::getDatabase());
        if (!$conn) {
            throw new Exception('could not connect to database');
        }
        return $conn;
    }

    static public function close($connection) {
        mysqli_close($connection);
    }

}

?>
