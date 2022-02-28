<?php


namespace App\Controller;

use App\Entity\Article;
//use App\Entity\Categorie;
// use App\Entity\Auteur;
use App\Repository\ArticleRepository;
use Symfony\Component\Serializer\Serializer;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//use Faker; 
//use Faker\Factory;

/**
 * @Route("/api2", name="api2_")
 * 
 */

 class ApiArticleController extends AbstractController
{
    /**
     * @Route("/article/blog", name="article_blog"), methods={"GET"})
     */
    public function listeArticle(ArticleRepository $articleRepo)
    {
           
           #_1 Recupération des Articles
            # On récupère la liste des articles
                //$article = $articleRepo->findAll();
                 $article = $articleRepo->api2FindAll();
                //dd($article);

        #_2 Json_Encode 
            # je vais utiliser l'encodeur JSON
                $encoders = [new JsonEncoder()];

        #_3_Normalisation  
            # je lance 1 Instance de mon "normaliseur" pour la convertion de la collection en tableau
                $normalizers = [new ObjectNormalizer()];

        #_4_ La Serialisation
            # je lance le convertisseur
                $serializer = new Serializer($normalizers, $encoders);

         #_4_ Reference Circulaire
            # La Convertion en Json 
    
            $jsonArticle = $serializer->serialize($article, 'json', [
                'circular_reference_handler' => function ($object) {
                    return $object->getId();
                }
            ]);


         #_5_ Creer une Reponse HTTP 
            # je cree ma respponse
            $response = new Response($jsonArticle);

           #  je n'oublie pas l'entête HTTP
            $response->headers->set('Content-Type', 'application/json');

            // On envoie la réponse
            return $response;
    }


}       