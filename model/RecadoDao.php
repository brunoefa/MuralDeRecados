<?php

/**
 * Description of RecadoDao
 *
 * @author Bruno
 */
class RecadoDao {
    public function salvar($recado){
        
    }
    
    public function getLista($id) {
        $r1 = new Recado("Titulo teste do recado", "Texto teste do recado", "Autor teste");
        $r2 = new Recado("Titulo teste do recado2", "Texto teste do recado2", "Autor teste2");
        return array($r1, $r2);
    }
}

?>
