<?php


namespace MipaLearn;


class Custemer 
{
    public function __construct(private string $name)
    {
        
    }
    public function sayHello(string $name = "guest"): string
{
    return "Hello $name, My Name is $this->$name";
}



}



?>