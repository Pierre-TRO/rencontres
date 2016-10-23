<?php

namespace PTRO\RencontresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends Controller
{
    public function accueilAction($tri){
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 1,
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
							"id" => 2,
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
							"id" => 2,							
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
							"id" => 2,
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
							"id" => 2,
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
							"id" => 2,
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
							"id" => 2,
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
							"id" => 2,
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
							"id" => 2,
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
							"id" => 3,
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
							"id" => 3,
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
							"id" => 3,
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
							"id" => 3,
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
							"id" => 3,
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
							"id" => 3,
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
							"id" => 3,
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
							"id" => 3,
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
	

    public function affichageAction(Request $request){
		$session = new Session();
		$affichage = $request->get('affichage_vue');
		
		$session->set('affichage', $affichage);
		
		//prepare the response, e.g.
		$response = array("code" => 100, "success" => true);
		//you can return result as JSON
		return new JsonResponse($response);
	}

    public function profilAction($id){
		$profil = array(
			"pseudo" => "Charlotte",
			"titre" => "Je cherche à me faire des amis....................",
			"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
			"genre" => "femme",
			"age" => "35",
			"taille" => "1m77",
			"poids" => "70",
			"silhouette" => "mince",
			"yeux" => "vert",
			"cheveux" => "châtain",
			"etat_civil" => "célibataire",
			"relation" => "amicale",
			"orientation" => "hétérosexuelle",
			"emploi" => "coiffeuse",
			"nationalite" => "française",
			"region" => "Ile de France",
			"ville" => "Melun",
			"departement" => "Seine et Marne",
			"date_inscription" => "10/2015",
			"vues" => 102,
			"ethnie" => "blanc",
			"date_derniere_visite" => "En ligne",
			"hobbies" => "Jeux vidéos, informatique, cinéma",
			"sports" => "natation, vtt, course à pied",
			"qualites" => "calme, généreux",
			"defauts" => "indécis",
			"cigarette" => "Oui",
			"alcool" => "occasionnelement",
			"images" => array("http://placehold.it/300x300/555/000&text=One", "http://placehold.it/300x300/fffccc/000&text=Two","http://placehold.it/300x300/fffccc/000&text=Three","http://placehold.it/300x300/fffccc/000&text=Four","http://placehold.it/300x300/fffccc/000&text=Five"),
			"images_lg" => array("http://placehold.it/1200x600/555/000&text=One","http://placehold.it/1200x600/fffccc/000&text=Two","http://placehold.it/1200x600/fffccc/000&text=Three","http://placehold.it/1200x600/fffccc/000&text=Four","http://placehold.it/1200x600/fffccc/000&text=Five"),
			
		);
		
		return $this->render('PTRORencontresBundle:Rencontres:layout_profil.html.twig', array("profil" => $profil));
	}

	public function rechercheAction(){

		$session = new Session();
		if(!$session->has('affichage') || $session->get('affichage') == null){
			$session->set('affichage', 'vignette');
		}

		$profils = array
			(
				array(
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
		$infos_recherche = array();

		return $this->render('PTRORencontresBundle:Rencontres:layout_recherche.html.twig', array("profils" => $profils, 'infos_recherche' => $infos_recherche));
	}

	public function favorisAction(){

		$session = new Session();
		if(!$session->has('affichage') || $session->get('affichage') == null){
			$session->set('affichage', 'vignette');
		}

		$profils = array
			(
				array(
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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
					"id" => 1,
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

		return $this->render('PTRORencontresBundle:Rencontres:layout_favoris.html.twig', array("profils" => $profils));
	}

	public function monProfilAction(){

		$profil = array(
			"pseudo" => "Charlotte",
			"titre" => "Je cherche à me faire des amis....................",
			"description" => "Respect et hônnèteté , deux valeurs indispensables pour faire une belle rencontre , faire connaissance et laisser le destin décider........je suis une personne calme et réservée, j'aime la marche , la nature, les animaux, ne suis pas sportive, je suis ici comme beaucoup de personne , rompre la solitude , partager des moments à deux , apprendre à se connaitre , je n'aime pas la foule d..",
			"genre" => "femme",
			"age" => "35",
			"taille" => "1m77",
			"poids" => "70",
			"silhouette" => "mince",
			"yeux" => "vert",
			"cheveux" => "châtain",
			"etat_civil" => "célibataire",
			"relation" => "amicale",
			"orientation" => "hétérosexuelle",
			"emploi" => "coiffeuse",
			"nationalite" => "française",
			"region" => "Ile de France",
			"ville" => "Melun",
			"departement" => "Seine et Marne",
			"date_inscription" => "10/2015",
			"vues" => 102,
			"ethnie" => "blanc",
			"date_derniere_visite" => "En ligne",
			"hobbies" => "Jeux vidéos, informatique, cinéma",
			"sports" => "natation, vtt, course à pied",
			"qualites" => "calme, généreux",
			"defauts" => "indécis",
			"cigarette" => "Oui",
			"alcool" => "occasionnelement",
			"images" => array("http://placehold.it/300x300/555/000&text=One", "http://placehold.it/300x300/fffccc/000&text=Two","http://placehold.it/300x300/fffccc/000&text=Three","http://placehold.it/300x300/fffccc/000&text=Four","http://placehold.it/300x300/fffccc/000&text=Five"),
			"images_lg" => array("http://placehold.it/1200x600/555/000&text=One","http://placehold.it/1200x600/fffccc/000&text=Two","http://placehold.it/1200x600/fffccc/000&text=Three","http://placehold.it/1200x600/fffccc/000&text=Four","http://placehold.it/1200x600/fffccc/000&text=Five"),
			
		);

		return $this->render('PTRORencontresBundle:Rencontres:layout_mon_profil.html.twig', array("profil" => $profil));
	}
	
}
