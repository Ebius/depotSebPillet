<?php
    require 'Personnages.php';
    require 'Heros.php';
    require  'Compagnon.php';

    $hero1 = new Heros();
     $hero1->setNom('Arthur');
     $hero1->setType('Chevalier');
     $hero1->setSante(100);
     $hero1->setArme ('Excalibur');

    $hero2 = new Heros();
     $hero1->setNom('Gimli');
     $hero1->setType('Nain');
     $hero1->setSante(100);
     $hero1->setArme ('Hache');

    $compagnon = new Compagnon();
     $hero1->setNom('Ygmir');
     $hero1->setType('Dragon');
     $hero1->setSante(100);

    var_dump($personnage -> display());