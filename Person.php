<?php

class Person
{
    private $firstname;
    private $lastname;


    public function getFirstname():string
    {
        return $this->firstname;
    }


    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }


    public function getLastname():string
    {
        return $this->lastname;
    }


    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }
    public function display ():string {
        return "Salut " . $this->firstname . '' . $this->lastname;
    }

}
$person = new person();
$person->setFirstname("Ebius");
$person->getFirstname();

$person->setLastname("San");
$person->getLastname();
 var_dump($person->display());