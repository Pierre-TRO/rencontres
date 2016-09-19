<?php

namespace PTRO\RencontresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class MainController extends Controller
{
    public function accueilAction($tri,$affichage)
    {
		$session = new Session();

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
		
		if($session->has('affichage')){
			if($session->get('affichage') != $affichage){
				$session->set('affichage', $affichage);
			}
		}else{
			$session->set('affichage', $affichage);
		}
		
		
		if($session->get('affichage') == "detail"){
			return $this->render('PTRORencontresBundle:Rencontres:accueil_detail.html.twig', array("tri" => $tri, "profils" => $profils));
		}
		else{
			return $this->render('PTRORencontresBundle:Rencontres:accueil_vignette.html.twig', array("tri" => $tri, "profils" => $profils));
		}
			
    }
}
