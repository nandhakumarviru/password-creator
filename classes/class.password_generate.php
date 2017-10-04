<?php 
class password {

private $char_length;

private $number_length;

private $symbol_length;

private $char;

private $number;

private $symbol;

private $password;

private function setCharLength($value) {

return $this->char_length = $value;

}



private function setNumberLength($value) {

return $this->number_length = $value;

}

private function setSymbolLength($value) {
return $this->symbol_length = $value;

}

private function generateChar() {

$chars = str_shuffle("abcdefghijklmnopqrstuvwxyz");

return $this->char = substr($chars, 0, $this->char_length); 

}

private function generateNumber() {

$numbers = str_shuffle("1234567890");

return $this->number = substr($numbers, 0, $this->number_length);

}

private function generateSymbol() {

$symbols = str_shuffle("!@#$%^&*()_+><?");

return $this->symbol = substr($symbols, 0, $this->symbol_length);

}


private function generatePassword() {


echo $password = $this->char.$this->number.$this->symbol;



}

public function setGlobalLength($char_length, $number_length, $symbol_length) {




$this->setCharLength($char_length);

$this->setNumberLength($number_length);

$this->setSymbolLength($symbol_length);

$this->generateChar();

$this->generateNumber();

$this->generateSymbol();



}




}





?>
