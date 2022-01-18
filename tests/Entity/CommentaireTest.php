<?php

namespace App\Tests\Entity;

use App\Entity\Commentaire;
use App\Entity\Article;

use DateTime;

use PHPUnit\Framework\TestCase;

class CommentaireUniTest extends TestCase
{
    public function testValide(): void
    {
        $dateTime = new DateTime();
        
        $commentaire = new Commentaire();

        $commentaire->setDate($dateTime)
        ->setContenu('Contenu')
                    ->setAuteurs('auteur');
                    
        $this->assertTrue($commentaire->getDate()===$dateTime);
        $this->assertTrue($commentaire->getContenu()==='Contenu');
        $this->assertTrue($commentaire->getAuteurs() === 'auteur');
    }

    public function testError(): void
    {
        $dateTime = new DateTime();

        $commentaire = new Commentaire();

        $commentaire->setDate($dateTime)
        ->setContenu('Contenu')
                    ->setAuteurs('auteur');
        
        $this->assertFalse($commentaire->getDate() !== $dateTime);
        $this->assertFalse($commentaire->getContenu() !=='Contenu');
        $this->assertFalse($commentaire->getAuteurs() !=='auteur');
                }

                public function testvide(): void
                {
                    $dateTime = new DateTime();
            
                    $commentaire = new Commentaire();
            
                    
                    $this->assertEmpty($commentaire->getDate() );
                    $this->assertEmpty($commentaire->getContenu());
                    $this->assertEmpty($commentaire->getAuteurs());
                }                    
                     
}