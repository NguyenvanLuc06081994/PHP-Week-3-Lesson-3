<?php
class DivideByZero extends Exception{
    public function __toString()
    {
        return "Can't divide by zero";
    }

}

function divide($numerator, $denominator)
{
    if ($denominator === 0){
        throw new DivideByZero();
    }
    return $numerator/$denominator;
}

try {
  echo divide(100,0);
} catch (Exception $e) {
   echo $e->__toString();
}
