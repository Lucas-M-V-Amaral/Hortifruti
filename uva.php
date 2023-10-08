<?php

class Uva extends Fruta {

    protected $cor;
    protected $tamanhoMedio

    public function __construct($l) {
        parent::__construct($l);
    }

    public function set_cor($cor) {
        $this->cor = $cor;
    }

    public function get_cor() {
        return $this->cor;
    }

    public function set_tamanhoMedio($tamanhoMedio) {
        $this->tamanhoMedio = $tamanhoMedio;
    }

    public function get_tamanhoMedio() {
        return $this->tamanhoMedio;
    }
}

?>