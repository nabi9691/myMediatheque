<?php

namespace App\Tests\Entity;

use App\Entity\Auteur;
use PHPUnit\Framework\TestCase;

class AuteurTest extends TestCase
{
    public function testIsTrue()
    {
        $auteur = new Auteur();
        
        $auteur->setCivilite('Civilite')
                   ->setNom('Nom')
                   ->setPrenom('Prenom')
                   ->setEmail('Email');
                   

                   $this->assertTrue($auteur->getCivilite()==='Civilite');
                   $this->assertTrue($auteur->getNom()==='Nom');
                   $this->assertTrue($auteur->getPrenom()==='Prenom');
                   $this->assertTrue($auteur->getPrenom()==='Email');
}

    public function TestError()
    {
        $auteur = new Auteur();
Auteur
$auteur->setNom('Nom');
                   ->setPrenom('Prenom')
                   ->setCivilite('homme')
->setEmail('Email');
    
                                      $this->assertFalse($auteur->getNom() !=='nom');
                   $this->assertFalse($auteur->getPrenom() !=='prenom');
                       
                   $this->assertFalse($auteur->getEmail() !=='email');
                                      }

    public function TestEmpty()
    {
        $auteur = new Auteur();
        Auteur
        $this->assertEmpty($auteur->getNom());
        $this->assertEmpty($auteur->getPrenom());
        $this->assertEmpty($auteur->getCivilite())
        
        $this->assertEmpty($auteur->getEmail());
        }
}