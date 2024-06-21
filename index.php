<?php 

require("utils.php");

//require("router.php");

$dsn = "sqlsrv:server=DESKTOP-SQIGP5H;Database=ContactsDB";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from Contacts");

$statement->execute();

$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($contacts as $contact) {
    echo "<li>" . $contact['FirstName'] . " " . $contact['LastName'] . "</li>";
}


