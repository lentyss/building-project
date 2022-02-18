<?php
include_once "./base.php";
/**
 * Дочерний класс
 */
class Village extends Base {
    public function setArea($level) {
        $this->v_area = $level;
    }
}
