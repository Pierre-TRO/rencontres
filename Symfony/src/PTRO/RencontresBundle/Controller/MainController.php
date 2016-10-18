<?php

namespace PTRO\RencontresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends Controller
{
    public function accueilAction($tri)
    {
		$session = new Session();
		if(!$session->has('affichage') || $session->get('affichage') == null){
			$session->set('affichage', 'vignette');
		}
		
		$profils = array();
		switch ($tri) {
			case "nouveau":
				$profils = array
					(
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Ammalia",
							"genre" => "femme",
							"age" => "40",
							"orientation" => "hétéro",
							"relation" => "serieuse",
							"titre" => "faire confiance à sa bonne étoile si elle existe....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
					);
				break;
			case "visite":
				$profils = array
					(
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Jenifer",
							"genre" => "femme",
							"age" => "25",
							"orientation" => "hétéro",
							"relation" => "ephemere",
							"titre" => "Je cherche à m'éclater....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
					);
				break;
			case "pres_vous":
				$profils = array
					(
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
						array(
							"pseudo" => "Charlotte",
							"genre" => "femme",
							"age" => "35",
							"orientation" => "hétéro",
							"relation" => "amicale",
							"titre" => "Je cherche à me faire des amis....................",
							"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
							"region" => "Ile de France",
							"departement" => "Seine et Marne",
							"ville" => "Melun",
							"image" => "http://placehold.it/300x230",
							"nb_photo" => 3
							),
					);
				break;
		}
		
		
		return $this->render('PTRORencontresBundle:Rencontres:layout_accueil.html.twig', array("tri" => $tri, "profils" => $profils));
			
    }
	

    public function affichageAction(Request $request)
	{
		$session = new Session();
		$affichage = $request->get('affichage_vue');
		
		$session->set('affichage', $affichage);
		
		//prepare the response, e.g.
		$response = array("code" => 100, "success" => true);
		//you can return result as JSON
		return new JsonResponse($response);
	}
	
}
