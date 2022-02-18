<?php
/**
 * Родительский класс
 */
class Base {
    protected $b_street;
    protected $b_home;
    protected $b_floor;
    protected $c_elev;
    protected $c_entr;
    protected $v_area = 0;

    public function setAddress($street, $home) {
        $this->b_street = $street;
        $this->b_home = $home;
    }
    public function setFloor($level) {
        $this->b_floor = $level;
    }
    public function getInfo() {
        echo "Дом находится по улице $this->b_street, $this->b_home. ";
        echo "Здание $this->b_floor эт. ";
        if ($this->c_elev != 0 && $this->c_entr != 0) {
            echo "В доме ",$this->c_elev, " лифт и ",$this->c_entr," подъезда. Дом городского типа.";
        }
        else {
            echo "В доме нет лифтов. Дом поселкового типа.";
        }
        echo '<br>';
    }
    public function getType() {
        if ($this->v_area == 0 && $this->c_entr == 0){
            echo "Не могу определить тип здания, не хватает параметров <br>";
        }
        else if ($this->v_area == 0) {
            echo "Здание относится к городу <br>";
        }
        else if ($this->c_entr == 0) {
            echo "Здание относится к селу <br>";
        }
    }

}