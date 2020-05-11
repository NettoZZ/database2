<?php
parse_url("postgres://hgeqjxmwfmbujl:1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8@ec2-54-86-170-8.compute-1.amazonaws.com(opens in new tab):5432/d11r24rr0egnvj");
$conn = pg_connect("postgres://hgeqjxmwfmbujl:1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8@ec2-54-86-170-8.compute-1.amazonaws.com(opens in new tab):5432/d11r24rr0egnvj");
header('location: /');
?>