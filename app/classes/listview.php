<?php
namespace app;
class listview {
    public function echohtml() {
    echo <<<MEUHTML
    <!DOCTYPE html>
    <html>
    <head>
        <title> TODOLIST PHPx </title>
    </head>
    <body> 
            <h2> Minha Lista: </h2>
        </div> 
        <form method="POST" action="/new">
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
                    <td class= "task"><p class="teste"></p></th>
                </tr>
            </tbody>
        </table>
    </body>
    </html>
MEUHTML;
}}
?>



