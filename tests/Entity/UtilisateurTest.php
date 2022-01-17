<?php

namespace App\Tests\Entity;

use App\Entity\Utilisateur;
use PHPUnit\Framework\TestCase;
use DateTime;

class UtilisateurTest extends TestCase
{
    public function testValide(): void
    {
        $utilisateur = new Utilisateur();
        $dateTime = new DateTime();

        $utilisateur
                        ->setCivilite('femme')
                        ->setNom('nom')
                        ->setPrenom('prenom')
                        ->setDatedenaissance($dateTime)
                        ->setAdresse('adresse')
                        ->setEmail('email@mail.com')
                        ->setStatus('1');
                                
        $this->assertTrue($utilisateur->getCivilite() ==='femme');
        $this->assertTrue($utilisateur->getNom()==='nom');
        $this->assertTrue($utilisateur->getPrenom()==='prenom');
        $this->assertTrue($utilisateur->getDatedenaissance()===$dateTime);
        $this->assertTrue($utilisateur->getAdresse()==='adresse');
        $this->assertTrue($utilisateur->getEmail()==='email@mail.com');
        $this->assertTrue($utilisateur->getStatus()==='1');
    }

    
    public function testError(): void
    {
        $utilisateur = new Utilisateur();
        $dateTime = new DateTime();
        $utilisateur
                        ->setCivilite('femme')
                        ->setNom('nom')
                        ->setPrenom('prenom')
                        ->setDatedenaissance($dateTime)
                        ->setAdresse('adresse')
                        ->setEmail('email@mail.com')
                        ->setStatus('1');
                                
        $this->assertFalse($utilisateur->getCivilite() !=='femme');
        $this->assertFalse($utilisateur->getNom() !=='nom');
        $this->assertFalse($utilisateur->getPrenom() !=='prenom');
        $this->assertFalse($utilisateur->getDatedenaissance() !==$dateTime);
        $this->assertFalse($utilisateur->getAdresse() !=='adresse');
        $this->assertFalse($utilisateur->getEmail() !=='email@mail.com');
        $this->assertFalse($utilisateur->getStatus() !=='1');
    }

    
    public function testVide(): void
    {
        $utilisateur = new Utilisateur();
        
        $this->assertEmpty($utilisateur->getCivilite());
        $this->assertEmpty($utilisateur->getNom());
        $this->assertEmpty($utilisateur->getPrenom() );
        $this->assertEmpty($utilisateur->getDatedenaissance());
        $this->assertEmpty($utilisateur->getAdresse() );
        $this->assertEmpty($utilisateur->getEmail());
        $this->assertEmpty($utilisateur->getStatus());
    }
    
}