<?php
$db = parse_url(getenv("POSTGRES_CONNECTION_STRING"));
$db["path"] = ltrim($db["path"], "/");
    header('location: /');
?>