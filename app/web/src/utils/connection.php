<?php

$db = new mysqli("db", "root", "p4ssw0rd", "database");
if ($db->connect_error) {
    die($db->connect_error);
}
