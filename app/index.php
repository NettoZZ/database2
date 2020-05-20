<?php
$dburl=getenv("DATABASE_URL");
$conn = pg_connect($dburl);
$query2= "SELECT id, descricao, status
    FROM tarefas5";
$resultados= pg_query ($conn , $query2);
?>

<!DOCTYPE html>
<html>
<head>
    <title> TODOLIST PHPx </title>
</head>
<body>
    <div class="heading">   
        <h2> Minha Lista: </h2>
    </div> 
    <form method="POST" action="/new">
        <input type="text" name="task" class="task_input">
        <button href="new" type="submit" class="add_bnt" name="submit">Adicionar</button>
    </form> <br>
    <table>
        <thead>
            <tr>
                <th>Tarefas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class= "task"><p class="teste"><?php while($minhalinha=pg_fetch_array ($resultados)){echo $minhalinha["descricao"]. "<br>";} ?></p></th>
            </tr>
        </tbody>
    </table>
</body>
</html>