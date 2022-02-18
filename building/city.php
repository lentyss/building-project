<?php

include_once "./base.php";
/**
 * Дочерний класс
 */
class City extends Base {

    public function setElevator($elevator) {
        $this->c_elev = $elevator;
    }
    public function setEntrance($level) {
        $this->c_entr = $level;
    }
}