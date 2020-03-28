<?php

trait SayHello{
    public function Hello()
    {
        echo 'Hello';
    }
}

trait SayWorld{
    public function World()
    {
        echo ' World';
    }
}

class HelloWorld{
    use SayHello,SayWorld;

    public function Taajob()
    {
        echo ' !';
    }

}

$say = new HelloWorld();
$say->Hello();
$say->World();
$say->Taajob();
