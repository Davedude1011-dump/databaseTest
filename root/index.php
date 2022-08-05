<html>
    <head>
        <link rel="stylesheet" href="CSS.css">
    </head>
    <body>
        <!--WAMP :I-->
        <form method="post">
            <input type="submit" name="clickButton" id="clickBTN" onclick="refresh()" value="-">
        </form>

        <form method="post">
            <input type="submit" name="upgrade1Button" id="upgrade1BTN" onclick="refresh()" value="upgrade 1: -">
        </form>
        <form method="post">
            <input type="submit" name="upgrade2Button" id="upgrade2BTN" onclick="refresh()" value="upgrade 2: -">
        </form>
        <form method="post">
            <input type="submit" name="upgrade3Button" id="upgrade3BTN" onclick="refresh()" value="upgrade 3: -">
        </form>

        <form method="post">
            <input type="submit" name="resetButton" id="resetBTN" onclick="refresh()" value="RESET">
        </form>

        <br><br>
        <?php
        include "database.php";
        include "retrieve.php";
        ?>
        <script>

            function refresh() {
                var cookieCount = <?=$cookies?>;
                var upgrade1Amount = <?=$upgrade1?>;
                var upgrade2Amount = <?=$upgrade2?>;
                var upgrade3Amount = <?=$upgrade3?>;
                document.getElementById("clickBTN").value = cookieCount
                document.getElementById("upgrade1BTN").value = 'upgrade 1: - ' + upgrade1Amount
                document.getElementById("upgrade2BTN").value = 'upgrade 2: - ' + upgrade2Amount
                document.getElementById("upgrade3BTN").value = 'upgrade 3: - ' + upgrade3Amount
            }
            refresh()

            function cookieClick() {
                refresh();
            }
        </script>
        <?php

//clicker
if (isset($_POST['clickButton'])) {
    $host = "localhost";
    $username = "root";
    $userpassword = "usbw";
    $database_in_use = "test";

    $cookies += 1;

    $mysqli = new mysqli($host, $username, $userpassword, $database_in_use);

    $sql = "UPDATE `cookieclickersaver` SET `cookieCount`='$cookies',`upgrade1Amount`='$upgrade1',`upgrade2Amount`='$upgrade2',`upgrade3Amount`='$upgrade3' WHERE 1";
    $result = $mysqli->query($sql);
    $mysqli->close();
}

//upgrade1
if (isset($_POST['upgrade1Button'])) {
    $host = "localhost";
    $username = "root";
    $userpassword = "usbw";
    $database_in_use = "test";

    $upgrade1 += 1;

    $mysqli = new mysqli($host, $username, $userpassword, $database_in_use);

    $sql = "UPDATE `cookieclickersaver` SET `cookieCount`='$cookies',`upgrade1Amount`='$upgrade1',`upgrade2Amount`='$upgrade2',`upgrade3Amount`='$upgrade3' WHERE 1";
    $result = $mysqli->query($sql);
    $mysqli->close();
}

//upgrade2
if (isset($_POST['upgrade2Button'])) {
    $host = "localhost";
    $username = "root";
    $userpassword = "usbw";
    $database_in_use = "test";

    $upgrade2 += 1;

    $mysqli = new mysqli($host, $username, $userpassword, $database_in_use);

    $sql = "UPDATE `cookieclickersaver` SET `cookieCount`='$cookies',`upgrade1Amount`='$upgrade1',`upgrade2Amount`='$upgrade2',`upgrade3Amount`='$upgrade3' WHERE 1";
    $result = $mysqli->query($sql);
    $mysqli->close();
}

//upgrade3
if (isset($_POST['upgrade3Button'])) {
    $host = "localhost";
    $username = "root";
    $userpassword = "usbw";
    $database_in_use = "test";

    $upgrade3 += 1;

    $mysqli = new mysqli($host, $username, $userpassword, $database_in_use);

    $sql = "UPDATE `cookieclickersaver` SET `cookieCount`='$cookies',`upgrade1Amount`='$upgrade1',`upgrade2Amount`='$upgrade2',`upgrade3Amount`='$upgrade3' WHERE 1";
    $result = $mysqli->query($sql);
    $mysqli->close();
}

//RESET
if (isset($_POST['resetButton'])) {
    $host = "localhost";
    $username = "root";
    $userpassword = "usbw";
    $database_in_use = "test";

    $cookies = 0;
    $upgrade1 = 0;
    $upgrade2 = 0;
    $upgrade3 = 0;

    $mysqli = new mysqli($host, $username, $userpassword, $database_in_use);

    $sql = "UPDATE `cookieclickersaver` SET `cookieCount`='$cookies',`upgrade1Amount`='$upgrade1',`upgrade2Amount`='$upgrade2',`upgrade3Amount`='$upgrade3' WHERE 1";
    $result = $mysqli->query($sql);
    $mysqli->close();
}

?>
    </body>
</html>