<?php
$dburl=getenv("DATABASE_URL");
$conn = pg_connect($dburl);
// $query2= "CREATE TABLE tarefas5 (
//     id serial,
//     descricao   varchar(255),
//     status varchar(255)
//     )";
// pg_query ($conn , $query2);
if (isset($_POST['task']));
$table = "tarefas5";
$dados = [
    'descricao' => $_POST['task']
];
pg_insert($conn, $table, $dados);
?>
<?php
header('Location: /list ');
?>


