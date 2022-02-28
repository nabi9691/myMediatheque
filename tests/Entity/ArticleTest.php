<?php

use App\Entity\Article;
namespace App\Tests\Entity;

use App\Entity\Article;
use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use DateTime;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function testValide(): void
    {
        $auteur = new Auteur;
        $categorie = new Categorie;
        $date = new DateTime();
        $article = New Article();
        $article
            ->setTitre("Toto")
            ->setContenu("Fab")
            ->setResume("Toto en vacance")
            ->setStatus("Publier")
            ->setSlug("Slug")
            ->setCategories($categorie)
            ->setAuteurs($auteur)
            ->setdate($date)
            ->setImageName("pnj1")
            ;
        $this->assertTrue($article->getTitre() === "Toto");
        $this->assertTrue($article->getContenu() === "Fab");
        $this->assertTrue($article->getResume() === "Toto en vacance");
        $this->assertTrue($article->getStatus() === "Publier");
        $this->assertTrue($article->getSlug() === "Slug");
        $this->assertTrue($article->getCategories() === $categorie);
        $this->assertTrue($article->getAuteurs() === $auteur);
        $this->assertTrue($article->getdate() === $date);
        $this->assertTrue($article->getImageName() === "pnj1");
    }

    public function testNonValide(): void
    {
        $auteur = new Auteur;
        $categorie = new Categorie;
        $date = new DateTime();
        $article = new Article();
        $article
            ->setTitre("Valdo")
            ->setContenu("Fab")
            ->setResume("Trop à faire")
            ->setStatus("Publier")
            ->setSlug("Slug")
            ->setCategories($categorie)
            ->setAuteurs($auteur)
            ->setdate($date)
            ->setImageName("pnj1")
            ;
        // $this->assertFalse(false);
        $this->assertFalse($article->getTitre() !== "Valdo");
        $this->assertFalse($article->getContenu() !== "Fab");
        $this->assertFalse($article->getResume() !== "Trop à faire");
        $this->assertFalse($article->getStatus() !== "Publier");
        $this->assertFalse($article->getSlug() !== "Slug");
        $this->assertFalse($article->getCategories() !== $categorie);
        $this->assertFalse($article->getAuteurs() !== $auteur);
        $this->assertFalse($article->getdate() !== $date);
        $this->assertFalse($article->getImageName() !== "pnj1");
    }

    public function testVide(): void
    {
        $article = new Article();
        // $this->assertEmpty(empty);
        $this->assertEmpty($article->getId());
        $this->assertEmpty($article->getTitre());
        $this->assertEmpty($article->getContenu());
        $this->assertEmpty($article->getResume());
        $this->assertEmpty($article->getStatus());
        $this->assertEmpty($article->getSlug());
        $this->assertEmpty($article->getCategories());
        $this->assertEmpty($article->getAuteurs());
        $this->assertEmpty($article->getdate());
        $this->assertEmpty($article->getImageName());
    }

    public function testAddRomveCommantaires()
    {
        
        $commentaire = new Commentaire();
        $article = new Article();

        $this->assertEmpty($commentaire->getArticles());

        $article->addCommentaire($commentaire);
        $this->assertContains($commentaire , $article->getCommentaires());
 
        $article->removeCommentaire($commentaire);
        $this->assertEmpty($commentaire->getArticles());
    }
}
