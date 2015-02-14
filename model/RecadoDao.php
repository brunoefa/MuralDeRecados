<?php

/**
 * Description of RecadoDao
 *
 * @author Bruno
 */
class RecadoDao {
    public function save($recado){
        // PERSISTIR REGISTRO NO BANCO DE DADOS
    }
    
    public function findAll() {
        $r1 = new Recado("Titulo teste do recado1", "Texto teste do recado1", "Autor teste1");
        $r2 = new Recado("Titulo teste do recado2", "Texto teste do recado2", "Autor teste2");
        $r3 = new Recado("Titulo teste do recado3", "Texto teste do recado3", "Autor teste3");
        $r4 = new Recado("Titulo teste do recado4", "Texto teste do recado4", "Autor teste4");
        $r5 = new Recado("Titulo teste do recado5", "Texto teste do recado5", "Autor teste5");
        return array($r1, $r2, $r3, $r4, $r5);
    }
    
    public function like($id){
        // INCREMENTAR REGISTRO NO BANCO DE DADOS
    }
}

?>
