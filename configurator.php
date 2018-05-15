<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 14/05/18
 * Time: 20:10
 */
$conn = 'mysql:host=localhost;dbname=bd2';
try {
    $db = new PDO($conn, 'root', 'presunto456');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    if($e->getCode() == 1049){
        echo "Falha na conexão com o banco de dados";
    }else{
        echo $e->getMessage();
    }
}
?>