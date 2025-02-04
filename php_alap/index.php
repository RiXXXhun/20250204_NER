<?php

    echo "Hello world";
    $valtozo1 = 1;
    $valtozo1 = "qwe";
    $valtozo1 = false;

    if ($valtozo1 === false) {
        echo "valtozo hamis";
    } else {
        echo "valtozo igaz";
    }

    for($i = 0; $i < 10; $i++) {
        echo  "<br>i: $i";
    }

    $tomb1 = array(1,2,3,4);
    $tomb2 = ["elso elem", true, 15, "negyedik elem"];

    echo "<br><pre>";
    var_dump($tomb1, $tomb2);

    function fuggveny(int $a, int $b) 
    {
        return $a+$b;
    }

    echo fuggveny(10, 12);

    include_once "Car.php";

    $auto = new Car("Ford", "Barna", 2019);
    $auto->szin = "piros";
    //$auto->marka = "Skoda";
    $auto->setMarka("Skoda");
    $auto->addModel("superB");

    var_dump($auto);

    include_once "SportCar.php";
    $sportCar = new SportCar("Ford", "Piros", 2020);
    $sportCar->setKobcenti(5500);
    var_dump($sportCar);
    echo "sport auto szine: " . $sportCar->szin;
    echo "sport auto kobcentije: " . $sportCar->getKobcenti();


   echo "kobcenti: " . $sportCar
    ->setKobcenti(2000)
    ->getKobcenti();
?>