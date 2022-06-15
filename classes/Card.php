<?php
class Card {
    public $number;
    private $balance;
    function __construct($_number, $_balance = 500) {
        $this->number = $_number;
        $this->balance = $_balance;
    }
    public function getBalance() {
        return $this->balance;
    }
    public function spent($price) {
        $this->balance -= $price;
    }
}
?>