<?php
$db = parse_url(getenv("postgres://hgeqjxmwfmbujl:1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8@ec2-54-86-170-8.compute-1.amazonaws.com:5432/d11r24rr0egnvj"));
$db["path"] = ltrim($db["path"], "/");
    header('location: /');
?>