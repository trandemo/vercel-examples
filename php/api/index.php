<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Post";
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "GET";
}
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    echo "PUT";
}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    echo "DELETE";
}

?>
