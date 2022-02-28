<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class CommentaireFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/commentaire');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireCommentaire(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireCommentaire');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouveauCommentaire(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouveauCommentaire');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherCommentaire(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherCommentaire');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierCommentaire(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierCommentaire');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerCommentaire(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerCommentaire');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

}