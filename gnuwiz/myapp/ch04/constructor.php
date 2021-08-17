<?php
class Example
{
    protected $name;

    public function __construct()
    {
        $this->name = "홍길동";
        echo $this->name;
    }
}

new Example();