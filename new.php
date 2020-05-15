<?php
$db = parse_url(getenv("postgres://zyazrgmcqradjd:571ca784b8de731a6991ca8a1b3f8c69f836f69bd7867e2cf760b69eade57dfe@ec2-52-44-166-58.compute-1.amazonaws.com:5432/d406gfnvmvbvdi"));
$db["path"] = ltrim($db["path"], "/");
$conn = pg_connect(getenv("postgres://zyazrgmcqradjd:571ca784b8de731a6991ca8a1b3f8c69f836f69bd7867e2cf760b69eade57dfe@ec2-52-44-166-58.compute-1.amazonaws.com:5432/d406gfnvmvbvdi"));
?>

