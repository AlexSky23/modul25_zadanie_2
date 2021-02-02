<?php

interface Auto_interface {

    public function sound();
    public function drive();
}

abstract class Autos implements Auto_interface{

    public function sound(){
        echo $this->sound;
    }
    public function drive(){
        echo $this->drive;
    }
    public $signal = 'off';
    public $dvorniki = 'off';
}

class Car extends Autos{
    public $name = 'Car';
    public $signal = 'on';
    public $dvorniki = 'on';
    public $spec = 'soft interior';
    public function drive(){
        echo 'forward and back';
    }
    public function sound(){
        echo 'sound_1';
    }
}

class Tank extends Autos{
    public $name = 'Tank';
    public $signal = 'off';
    public $dvorniki = 'off';
    public $spec = 'shoot';
    public function drive(){
        echo 'forward and back';
    }
    public function sound(){
        echo 'sound_2';
    }
}

class Excavator extends Autos{
    public $name = 'Excavator';
    public $signal = 'on';
    public $dvorniki = 'on';
    public $spec = 'works with a bucket';
    public function drive(){
        echo 'forward and back';
    }
    public function sound(){
        echo 'sound_3';
    }
}

$Car = new Car();
$Tank = new Tank();
$Excavator = new Excavator();

function Go($tehnika){
echo $tehnika->name.': <br>';
echo 'signal: '. $tehnika->signal.',<br>';
echo 'dvorniki: '. $tehnika->dvorniki.',<br>';
echo 'spec function: '.$tehnika->spec.',<br>';
echo 'drive: '; $tehnika->drive(); echo ',<br>';
echo 'sound: '; $tehnika->sound();
}

echo Go($Tank);