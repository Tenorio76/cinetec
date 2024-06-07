<?php
$conexion=pg_connect("host=localhost dbname=cinetec  user=postgres password=2909 port=5433");

$query="SELECT * from peliculas";
$consulta=pg_query("$conexion,$query");

if($consulta){
    echo "se conecto correctamente";
}
else{
    echo "no se conecto correctamente";
}
  
?>