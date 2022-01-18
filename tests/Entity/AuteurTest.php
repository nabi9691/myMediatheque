<?php

namespace App\Tests\Entity;

use App\Entity\Auteur;
use PHPUnit\Framework\TestCase;

class AuteurTest extends TestCase
{
    public function testIsTrue()
    {
        $auteur = new Auteur();
        
        $auteur
        ->setCivilite('Civilite')
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
$auteur
->setCivilite('homme')
->setNom('Nom')
                   ->setPrenom('Prenom')
                   ->setEmail('Email');
    
                                      $this->assertFalse($auteur->getNom() !=='nom');
                   $this->assertFalse($auteur->getPrenom() !=='prenom');
                       
                   $this->assertFalse($auteur->getEmail() !=='email');
                                      }

    public function TestEmpty()
    {
        $auteur = new Auteur();

        $this->assertEmpty($auteur->getCivilite());
        $this->assertEmpty($auteur->getNom());
        $this->assertEmpty($auteur->getPrenom());
                $this->assertEmpty($auteur->getEmail());
        }
}