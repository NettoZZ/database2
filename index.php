<?php include ('new.php')?>

<!DOCTYPE html>
<html>
<head>
    <title> TODOLIST PHP </title>
</head>
<body>
    <div class="heading">   
        <h2> Minha Lista: </h2>
    </div> 
    <form method="POST" action="new.php">
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
                <td class= "task"><p class="teste">  </p></th>
            </tr>
        </tbody>
    </table>
</body>
</html>
