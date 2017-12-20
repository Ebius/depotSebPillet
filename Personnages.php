<?php
/**
 * Created by PhpStorm.
 * User: Sebastien
 * Date: 20/12/2017
 * Time: 12:04
 */

class Personnages
{
    private $nom;

    public function getNom()
    {
        return $this->nom;
    }

    }
    private $type;

    public function getType()
    {
        return $this->type;
    }
    private $sante;

    public function getSante()
    {
        return $this->sante;
    }

}
 protected function display():array {
    return [
        "Nom"=> $this->nom,
        "Type"=> $this->type,
        "Santé"=> $this->sante
    ];
}