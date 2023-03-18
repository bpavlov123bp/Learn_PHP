<?php
function sayHello(){
    echo "Hello PHP Function\n";
}
sayHello();

function sayHello1($name)
{
    echo "Hello $name\n";
}
sayHello1("Bobi");
sayHello1("Toshko");
sayHello1("Mitko");

function sayHello2($name, $age)
{
    echo "Hello, $name. You are $age years old.\n";
}
sayHello2("Mitko", 29);
sayHello2("Toshko", 13);
sayHello2("Dimitar", 33);
?>