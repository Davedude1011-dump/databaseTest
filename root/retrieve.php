<?php

    include "database";
    $sql = "SELECT cookieCount, upgrade1Amount, upgrade2Amount, upgrade3Amount FROM cookieclickersaver";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $cookies = $row["cookieCount"];
            $upgrade1 = $row["upgrade1Amount"];
            $upgrade2 = $row["upgrade2Amount"];
            $upgrade3 = $row["upgrade3Amount"];
        }
    }
    $mysqli->close();
?>