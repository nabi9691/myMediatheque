<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ArticleFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/article');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireArticle(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireArticle');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelArticle(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelArticle');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherArticle(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherArticle');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierArticle(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierArticle');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerArticle(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerArticle');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

}