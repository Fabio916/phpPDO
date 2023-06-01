<?php
    require_once(__DIR__."/../vendor/autoload.php");

    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    function getLogger(){
        $Logger = new \Monolog\Logger('channel-name');
        $logger = new Logger('aprendePDO');
        $logger->pushHandler(new StreamHandler(__DIR__.'/app.log', Logger::DEBUG));
        return $logger;
    }

    getLogger()->info("Testando monolog!");


    $db_host='localhost';
    $db_name='etec';
    $db_user='root';
    $db_password='';

   function get_connection($host, $dbname, $username, $password)
   {

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $connection = new \PDO($dsn, $username, $password);
    $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $connection;
   }

   $db_conn = get_connection($db_host,$db_name,$db_user,$db_password);

   var_dump($db_conn);

?>