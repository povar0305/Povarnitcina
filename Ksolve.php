<?php //php 7.2.24
namespace Povarnitcina;
use core\EquationInterface;
use Povarnitcina\PovarExeption;



Class Ksolve extends Solve implements EquationInterface {
	protected function dis($a, $b, $c){
		return ($b*$b-(4*$a*$c));
	}
    public function solve($a, $b, $c):array{
        if($a==0){
            return $this->lin($b,$c);

        }
        MyLog::log("Это квадратное уравнение");
        $d=$this->dis($a,$b,$c);


	    if($d<0){
            throw new PovarExeption( "Ошибка: уравнение не имеет корней.");
        }
	    if ($d==0){
	       // $x=array(-($b/$a));
	        //return $x;
            return  $this->x  = array(-($b / $a));
        }
	    //$x=array(((-$b)+sqrt($d))/(2*$a),((-$b)-sqrt($d))/(2*$a));
	    //return $x;
        return  $this->x  = array(((-$b)+sqrt($d))/(2*$a),((-$b)-sqrt($d))/(2*$a));
    }

}
?>