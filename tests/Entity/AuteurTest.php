<?php

namespace App\Tests\Entity;

use App\Entity\Auteur;
use PHPUnit\Framework\TestCase;

class AuteurTest extends TestCase
{
    public function testIsTrue()
    {
        $auteur = new Auteur();
        
        $auteur->setEmail('Email')
                   ->setResume('Resume');
                   $this->assertTrue($categorie->getTitre()==='Titre');
                   $this->assertTrue($categorie->getResume()==='Resume');
        
    }

    public function TestError()
    {
        $categorie = new Categorie();
Categorie        
        $categorie->setTitre('Titre')
                   ->setResume('Resume');
    
                   $this->assertFalse($categorie->getTitre() !=='titre');
                   $this->assertFalse($categorie->getResume() !=='resume');
        
    }

    public function TestEmpty()
    {
        $categorie = new Categorie();
        Categori
        $this->assertEmpty($categorie->getTitre())
        $this->assertEmpty($categorie->getResume());
        
    
    }
}