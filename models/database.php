<?php
class Database{
    // Utiliza o padrão Singleton, cujo o objetivo é garantir que apenas uma única instância de uma classe seja criada durante a execução de programa, e que essa instância seja utilizada sempre que necessário.
    private static $instance = null;

    // Método público que retorna a conexão com BD
    public static function getConnection(){
        if(!self::$instance){
            $host       = 'localhost';
            $db         = 'sistema_usuarios';
            $user       = 'root';
            $password   = '';
        }
    }
}
?>