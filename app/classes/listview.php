<?php
$db2= new \app\codecontrol;
$db1= new \app\codemodel;
?>

<!DOCTYPE html>
<html>
<head>
    <title> TODOLIST PHPx </title>
</head>
<body> 
        <h2> Minha Lista: </h2>
    </div> 
    <form method="POST" action="<? $db1->db1(); ?>">
        <input type="text" name="task">
        <button>Adicionar</button>
    </form> <br>
    <table>
        <thead>
            <tr>
                <th>Tarefas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class= "task"><p class="teste"><? $db2->db2(); ?></p></th>
            </tr>
        </tbody>
    </table>
</body>
</html>