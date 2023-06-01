<?php
    require_once(__DIR__."/../vendor/autoload.php");

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use App\Model\Aluno;

    $db_host='localhost';
    $db_name='chamadasonline';
    $username='root';
    $password='';

    $a = new Aluno();

    $logger = new Logger("###aprendendo PDO");
    $logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));
    $logger->info("Testando se o monolog ta funcionando");

    
   function get_connection()
   {

    $dsn = "mysql:host=localhost;dbname=chamadasonline;charset=utf8mb4";
    $connection = new \PDO($dsn, "root", "");
    $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connection;
   }

   $db_conn = get_connection();

   $query = "SELECT * FROM aluno";
   $statement = $db_conn->prepare($query);
   $statement->execute();

   while($dados = $statement->fetch(\PDO::FETCH_ASSOC)){
        echo '<center>','<table border = "1" width = 150px height = 150px>','<tr>','<td>',$dados['nome'],'</td>',
        '</tr>','</table>','</center>';
   }
 
?>