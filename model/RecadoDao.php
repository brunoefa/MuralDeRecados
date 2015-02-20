<?php

/**
 * Description of RecadoDao
 *
 * @author Bruno
 */
class RecadoDao {
    
    function __construct() {
        include 'mysqlConnect.php';
    }

    public function findAll() {
        $query = "select * from recado";
        $result = mysql_query($query);
        
        $listaRecados = null;
        $i = 0;
        while ($resultArray = mysql_fetch_array($result)) {
            $r = new Recado($resultArray["id"],
                            $resultArray["titulo"],
                            $resultArray["texto"],
                            $resultArray["autor"],
                            $resultArray["likes"]);
            $listaRecados[$i] = $r;
            $i++; 
        }
        return $listaRecados;
    }
    
    public function save($recado) {
        $query = "insert into recado (titulo, texto, autor) 
            values ('$recado->titulo', '$recado->texto', '$recado->autor');";
        return mysql_query($query);
    }    
    
    public function like($id){
        $query = "update recado set likes = likes + 1 where id = '$id';";
        return mysql_query($query);
    }
}

?>
