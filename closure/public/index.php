<?php

// * Função anonima => Função sem nome
$person = function () {
    var_dump("Teste");
};

//  Chamr como uma função, usando ()
//$person();

class Person
{
    public function __invoke()
    {
        var_dump("Teste1");
    }
}

$person1 = new Person;
$person1();

?>