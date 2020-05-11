<?php
$db = parse_url(getenv("postgres://hgeqjxmwfmbujl:1bde68c14fa3f627ae70c6107d5945d785b671c696e7839a7888aca6d17894b8@ec2-54-86-170-8.compute-1.amazonaws.com:5432/d11r24rr0egnvj"));
$db["path"] = ltrim($db["path"], "/");
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
    header('location: index.php');
}
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
        <?php while ($row = mysqli_fetch_array($tasks)) { ?>
            <tr>
                <td><?php echo $row ['id']; ?></td>
                <td class= "task"><p class="teste"> <?php echo $row['task']; ?> </p></th>
            </tr>
        <?php } ?>
           
        </tbody>
    </table>
</body>
</html>