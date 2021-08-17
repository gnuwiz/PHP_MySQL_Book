<?php
class Grammer
{
    public $name = "GNUWIZ";

    public function phpStudy($year)
    {
        echo "변수 name은 {$this->name} 입니다. <br/>";
        echo "변수 year은 {$year} 입니다. <br/>";
        echo $this->name . $year . "<br/>";
    }

}

$year = 2022;
$grammer = new Grammer();
$grammer->phpStudy($year);