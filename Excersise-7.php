<?php

class Dog
{
    private string $name;
    private string $gender;
    private string $mother = 'Unknown';
    private string $father = 'Unknown';

    public function __construct(string $name, string $gender)
    {

        $this->name = $name;
        $this->gender = $gender;
    }

    public function fathersName()
    {
        return $this->father;
    }
}

class DogTest extends Dog
{
    public function assignMother(string $mother): void
    {
        $this->mother = $mother;
    }

    public function assignFather(string $father): void
    {
        $this->father = $father;
    }
}

$dogs = [
    new DogTest('Max', 'male'),
    new DogTest('Rocky', 'male'),
    new DogTest('Sparky', 'male'),
    new DogTest('Buster', 'male'),
    new DogTest('Sam', 'male'),
    new DogTest('Lady', 'female'),
    new DogTest('Molly', 'female'),
    new DogTest('Coco', 'female')
];

$dogs[0]->assignMother('Lady');
$dogs[0]->assignFather('Rocky');

$dogs[7]->assignMother('Molly');
$dogs[7]->assignFather('Buster');

$dogs[0]->assignMother('Molly');
$dogs[0]->assignFather('Sam');

$dogs[0]->assignMother('Lady');
$dogs[0]->assignFather('Sparky');



echo $dogs[7]->fathersName();
