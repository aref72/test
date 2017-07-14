<?php
class Calc{
    public $num1;
    public $num2;
    
    
    public function sum() {
        return $this->num1 +$this->num2;
    }
    public function mul() {
        return $this->num1 * $this->num2;
    }
}