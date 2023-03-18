<?php
function getGreetingFunction(){
    $timeOfDay = "morning";

    return(function($name) use (&$timeOfDay){
        $timeOfDay = ucfirst($timeOfDay);
        return ("Good $timeOfDay, $name!");
    });
};
$greetingFunction = getGreetingFunction();
echo $greetingFunction("Fred");
?>