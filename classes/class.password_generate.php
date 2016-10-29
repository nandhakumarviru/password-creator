<?php 


class password {



public $char_length;

public $number_length;

public $symbol_length;

public $char;

public $number;

public $symbol;

public $password;
/**
*@param $value
*@return length
*/


public function setCharLength($value) {

return $this->char_length = $value;

}



public function setNumberLength($value) {

return $this->number_length = $value;

}

public function setSymbolLength($value) {
return $this->symbol_length = $value;

}

public function generateChar() {

$chars = str_shuffle("abcdefghijklmnopqrstuvwxyz");

return $this->char = substr($chars, 0, $this->char_length); 

}

public function generateNumber() {

$numbers = str_shuffle("1234567890");

return $this->number = substr($numbers, 0, $this->number_length);

}

public function generateSymbol() {

$symbols = str_shuffle("!@#$%^&*()_+><?");

return $this->symbol = substr($symbols, 0, $this->symbol_length);

}


public function generatePassword() {


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
