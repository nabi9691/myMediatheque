<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;
use DateTime;

class ArticleTest extends TestCase
{
    public function testValide(): void
    {
        $article = new Article();
        $dateTime = new DateTime();

        $article
                        ->setTitre('titre')
                        ->setResume('resume')
                        ->setStatus('publier')
                        ->setContenu('contenu de mon article');
                        ->setDate($dateTime)
                        ->setImage('image');
                                
        $this->assertTrue($article->getTitre() ==='titre');
        $this->assertTrue($article->getResume() ==='resume');
        $this->assertTrue($article->getStatus() ==='publier');
        $this->assertTrue($article->getContenu() ==='contenu');
$this->assertTrue($article->getDate()===$dateTime);
$this->assertTrue($article->getImageName() ==='imageName');
    }
    
    public function testError(): void
    {
        $article = new Article();
        $dateTime = new DateTime();
        $article
        ->setTitre('titre')
        ->setResume('resume')
        ->setStatus('publier')
        ->setContenu('contenu de mon article');
        ->setDate($dateTime)
        ->setImage('image');
        
        
                        
        $this->assertFalse($article->getTitre() !=='titre');
        $this->assertFalse($article->getResume() !=='resume');
        
        $this->assertFalse($article->getStatus() !=='publier');
        $this->assertFalse($article->getContenu() !=='contenu');
                $this->assertFalse($article->getDate() !==$dateTime);
        $this->assertFalse($article->getImageName() !=='imageName');
        
    }

    
    public function testVide(): void
    {
        $article = new Article();
        
        $this->assertEmpty($article->getTitre());
        $this->assertEmpty($article->getResume());
        $this->assertEmpty($article->getStatus());
        $this->assertEmpty($article->getContenu());
        $this->assertEmpty($article->getDate());
        $this->assertEmpty($article->getImageName());
        }
    
}