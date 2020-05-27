<?php
namespace app;
    class codecontrol {
        public $resultados;
        function db2 () {
            $dburl=getenv("DATABASE_URL");
            $conn = pg_connect($dburl);
            $query2= "SELECT id, descricao, status
            FROM tarefas5";
            $resultados= pg_query ($conn , $query2);
            while($minhalinha=pg_fetch_array ($resultados)){echo $minhalinha["descricao"]. "<br>";}
    }
}
?>