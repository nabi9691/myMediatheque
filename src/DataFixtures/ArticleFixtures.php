<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Categorie;

use Faker;
use Faker\Factory;
use DateTime;

use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
{
    $faker = Faker\Factory::create('fr_FR');

    // catégories :
            
    for ($i=1; $i<5 ; $i++ ) 
            { 
                
$categorie = new Categorie();

                $categorie->setTitre($faker->name)
                        ->setResume($faker->sentence());
                        
                    $manager->persist($categorie);
    
    // articles :
            
    for ($j=1; $j<10 ; $j++ ) 
            { 
$status = ['archiver', 'publier', 'dépublier'];
shuffle($status);
                
$article = new Article();

                $article->setTitre($faker->name)
                        ->setResume($faker->sentence())
                        ->setStatus($status[0])
                        ->setContenu($faker->sentence()) 
->setDate(new \DateTime())
->setImageName($faker->name) 
                            ->setCategories($categorie);
                    
 $manager->persist($article);
            }
                    $manager->flush();
    }
    }
}
