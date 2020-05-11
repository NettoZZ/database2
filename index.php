<?php
parse_url("postgres://hgeqjxmwfmbujl:1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8@ec2-54-86-170-8.compute-1.amazonaws.com(opens in new tab):5432/d11r24rr0egnvj");
pg_connect("postgres://hgeqjxmwfmbujl:1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8@ec2-54-86-170-8.compute-1.amazonaws.com(opens in new tab):5432/d11r24rr0egnvj");
?>

<!DOCTYPE html>
<html>
<head>
    <title> Lista PHP </title>
</head>
<body>
    <div class="heading">   
        <h2> Minha Lista </h2>
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