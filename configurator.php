<?php
/**
 * Created by PhpStorm.
 * User: joao
 * Date: 14/05/18
 * Time: 20:10
 */

try {
    $db = new PDO('mysql://localhost:3306/bd2' . MYSQL_HOST . ';dbname=' . bd2, 'root', 'root' );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao realizada";
} catch (PDOException $e) {
    if ($e->getCode() == 1049) {
        echo "Falha na conexão com o banco de dados";
    } else {
        echo $e->getMessage();
    }
}
?>