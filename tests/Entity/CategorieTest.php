<?php

namespace App\Tests\Entity;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieTest extends TestCase
{
    public function testIsTrue()
    {
        $categorie = new Categorie();
        
        $categorie->setTitre('Titre')
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