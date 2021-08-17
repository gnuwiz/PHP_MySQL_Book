<?php
include "parents.php";

class Child extends Parents
{
    public function echoParents() : string
    {
        return $this->parents;
    }
}

$child = new Child();
echo $child->echoParents();