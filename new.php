<?php
$dburl=getenv("DATABASE_URL");
$conn = pg_connect($dburl);
// $query= "CREATE TABLE tarefas (
//     id serial,
//     descricao   varchar(255),
//     status varchar(255)
//     )";
// pg_query ($conn , $query);
$table = "tarefas";
$dados = [
    'descricao' => 'Minha tarefa',
//    'status' => 'Pendente'
];
pg_insert($conn, $table, $dados);
$dados = [
    'descricao' => 'Segunda tarefa',
//    'status' => 'Finalizada'
];
pg_insert($conn, $table, $dados);
$dados = [
    'descricao' => 'Terceira tarefa',
//   'status' => 'Finalizada'
];
pg_insert($conn, $table, $dados);
$query= "SELECT id, descricao, status
    FROM tarefas";
$resultados= pg_query ($conn , $query);
var_dump($resultados);
$resultados2= pg_fetch_array ($resultados);
var_dump($resultados2[1]);

while($minhalinha=pg_fetch_array ($resultados)){
    echo $minhalinha["descricao"]."<br>";
}
?>
