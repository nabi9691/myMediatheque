<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class AuteurFunctionnalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/auteur');

        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testFormulaireAuteur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'formulaireAuteur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testNouvelAuteur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'nouvelAuteur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
 
  public function testAfficherAuteur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'afficherAuteur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }
  
  public function testmodifierAuteur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'modifierAuteur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

  public function testsupprimerAuteur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', 'supprimerAuteur');
                
        $this->assertResponseIsSuccessful();
        //$this->assertResponseStatusCodeSame(Response::HTTP_OK);
  }

}