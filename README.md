# ejerciciosTema6PHP
Ejercicios Tema 6 PHP

Si queremos hacer peticiones desde dominios distintos, pondremos lo siguiente en la cabecera
del programa PHP:

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

