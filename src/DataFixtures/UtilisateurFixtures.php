<?php

namespace App\DataFixtures;

use Faker; 
use Faker\Factory;


use App\Entity\Utilisateur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Validator\Constraints\Date;

class UtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

         // Creer occurence de 750 utilisateurs :
        
         for ($i=0; $i<750 ; $i++ ) 
        { 
        
        $utilisateur = new Utilisateur();
        $civilite = ['homme', 'femme'];
        shuffle($civilite);
        $status = ['connecter', 'déconnecter', 'anonyme'];
        shuffle($status);


        $utilisateur->setNom($faker->lastName)
        ->setPrenom($faker->firstName)
        //->setDatedenaissance($dateTime)
            ->setAdresse($faker->address)
        ->setEmail($faker->email)
        ->setCivilite($faker->titleMale)
        ->setStatus($status[0]);

        $utilisateur->setDatedenaissance(new \DateTime('-20 years'));
        

$manager->persist($utilisateur);

        $manager->flush();
    }
    }
}
