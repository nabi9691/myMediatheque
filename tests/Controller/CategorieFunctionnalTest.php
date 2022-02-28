<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class CategorieFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/categorie');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireCategorie(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireCategorie');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelleCategorie(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelleCategorie');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherCategorie(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherCategorie');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierCategorie(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierCategorie');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerCategorie(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerCategorie');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

}