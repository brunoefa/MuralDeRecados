<?php

/**
 * @author Bruno
 */
class Recado {

    public $id;
    public $titulo;
    public $texto;
    public $autor;
    public $likes;

    public function __construct($titulo, $texto, $autor, $likes = 0) {
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->autor = $autor;
        $this->likes = $likes;
    }

    public function toString() {
        return $this->id . ' ' .
                $this->titulo . ' ' .
                $this->texto . ' ' .
                $this->autor . ' ' .
                $this->likes;
    }
}
?>
