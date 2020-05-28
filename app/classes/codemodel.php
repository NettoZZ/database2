<?php
namespace app;
class codemodel {
function db1 (){
    header('Location: /list');
    $dburl=getenv("DATABASE_URL");
    $conn = pg_connect($dburl);
    if (isset($_POST['task'])){
    $table = "tarefas5";
    $dados = [
        'descricao' => $_POST['task']
    ];
    pg_insert($conn, $table, $dados);
    }
}}
?>
<?php
// $query2= "CREATE TABLE tarefas5 (
//     id serial,
//     descricao   varchar(255),
//     status varchar(255)
//     )";
// pg_query ($conn , $query2);
?>