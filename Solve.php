<?php //php 7.2.24
namespace Povarnitcina;
Class Solve
{
    protected $x = 0;
    public function lin($a, $b)
    {

        if ($a == 0) {
            throw new PovarExeption("Ошибка: уравнения не существует.");
        }
        // $x=array();
        MyLog::log("Это линейное уравнение");


        return  $this->x  = array(-($b / $a));
    }


}

?>