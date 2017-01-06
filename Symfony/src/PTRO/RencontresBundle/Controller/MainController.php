<?php

namespace PTRO\RencontresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PTRO\RencontresBundle\Entity\Utilisateur;
use PTRO\RencontresBundle\Form\UtilisateurInscription1Type;

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
			"images" => array("http://placehold.it/300x230/555/000&text=One", "http://placehold.it/300x230/fffccc/000&text=Two","http://placehold.it/300x230/fffccc/000&text=Three","http://placehold.it/300x230/fffccc/000&text=Four","http://placehold.it/300x230/fffccc/000&text=Five"),
			"images_lg" => array("http://placehold.it/1200x920/555/000&text=One","http://placehold.it/1200x920/fffccc/000&text=Two","http://placehold.it/1200x920/fffccc/000&text=Three","http://placehold.it/1200x920/fffccc/000&text=Four","http://placehold.it/1200x920/fffccc/000&text=Five"),
			
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
			"images" => array("http://placehold.it/300x230/555/000&text=One", "http://placehold.it/300x230/fffccc/000&text=Two","http://placehold.it/300x230/fffccc/000&text=Three","http://placehold.it/300x230/fffccc/000&text=Four","http://placehold.it/300x230/fffccc/000&text=Five"),
			"images_lg" => array("http://placehold.it/1200x920/555/000&text=One","http://placehold.it/1200x920/fffccc/000&text=Two","http://placehold.it/1200x920/fffccc/000&text=Three","http://placehold.it/1200x920/fffccc/000&text=Four","http://placehold.it/1200x920/fffccc/000&text=Five"),
			
		);

		return $this->render('PTRORencontresBundle:Rencontres:layout_mon_profil.html.twig', array("profil" => $profil));
	}

	public function mesMessagesAction(){

		$messages = array(
			array(
				"id" => "1",
				"pseudo" => "Coralie",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi!",
				"photo" => "http://placehold.it/100x77"
				),
			array(
				"id" => "2",
				"pseudo" => "Jessica",
				"date_message" => "27fev. 2016 à 06:17",
				"sujet" => "Bonjour",
				"photo" => "http://placehold.it/100x77"
				),
		);

		return $this->render('PTRORencontresBundle:Rencontres:layout_mes_messages.html.twig', array("messages" => $messages));
	}

	public function discussionAction($idProfil){

		//On récupère les infos du profil ayant pour id idProfil

		$profil = array(
				"id" => $idProfil,
				"pseudo" => "Coralie04",
				"photo" => "http://placehold.it/100x77");

		//On récupère les messages entre le user et le profil ayant pour id idProfil
		
		$messages = array(
			array(
				"id" => "1",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi!",
				"contenu" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lorem quam, interdum pretium erat at, rhoncus condimentum sapien. Praesent mollis consequat felis, vitae lobortis ante mollis in. Morbi volutpat pretium magna, non scelerisque felis sagittis et. Nam semper luctus risus. Proin consectetur lacus lacus, eu ultricies orci sodales vel. Pellentesque nec lorem pulvinar lectus semper mattis faucibus eget nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce et odio felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare commodo metus ac dictum. Donec nec viverra felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id odio porttitor, bibendum elit in, sagittis velit. Vestibulum accumsan lobortis dui. Morbi sit amet vulputate est. "
				),
			array(
				"id" => "1",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi!",
				"contenu" => "Praesent eget mauris tellus. In imperdiet lorem sed turpis dapibus, sit amet facilisis nisi faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis tristique, enim viverra fringilla venenatis, est ipsum pretium erat, vel sodales turpis dui eu nisl. Nullam luctus finibus odio, nec pretium felis ultricies in. Ut at tincidunt metus, nec consectetur felis. Sed at tortor pulvinar, tristique augue quis, placerat enim. Pellentesque ullamcorper nec erat in fringilla. Nullam vitae metus et massa consequat fringilla. Vivamus ac mi in urna efficitur dictum in ac felis. Cras vel dui tempor, varius est sed, hendrerit libero. Vivamus sed finibus dui. Donec viverra, justo id semper luctus, orci nunc pharetra leo, ut semper libero est feugiat ex. Ut quis sem eget erat auctor tincidunt.  "
				),
			array(
				"id" => "1",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi!",
				"contenu" => "Salut ça va?"
				),
			array(
				"id" => "1",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi!",
				"contenu" => "Bien et toi?"
				),
		);

		return $this->render('PTRORencontresBundle:Rencontres:layout_discussion.html.twig', array("profil" => $profil, "messages" => $messages));
	}

	public function messagesSupprAction(){

		//On récupère les messages entre le user et le profil ayant pour id idProfil

		$messages = array(
			array(
				"id" => "1",
				"pseudo" => "Coralie",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi! Est ce que tu vas bien? ça fait longtemps. Est ce que tu vas bien? ça fait longtemps.",
				"photo" => "http://placehold.it/100x77"
				),
			array(
				"id" => "2",
				"pseudo" => "Jessica",
				"date_message" => "27fev. 2016 à 06:17",
				"sujet" => "Bonjour",
				"photo" => "http://placehold.it/100x77"
				),
		);

		return $this->render('PTRORencontresBundle:Rencontres:layout_messages_suppr.html.twig', array("messages" => $messages));
	}

	public function mesContactsAction(){

		//On récupère les messages entre le user et le profil ayant pour id idProfil

		$contacts = array(
			array(
				"id" => "1",
				"pseudo" => "Coralie",
				"date_message" => "26 fev. 2016 à 06:17",
				"sujet" => "Salut toi! Est ce que tu vas bien? ça fait longtemps. Est ce que tu vas bien? ça fait longtemps.",
				"photo" => "http://placehold.it/100x77"
				),
			array(
				"id" => "2",
				"pseudo" => "Jessica",
				"date_message" => "27fev. 2016 à 06:17",
				"sujet" => "Bonjour",
				"photo" => "http://placehold.it/100x77"
				),
		);

		return $this->render('PTRORencontresBundle:Rencontres:layout_contacts.html.twig', array("contacts" => $contacts));
	}

	public function inscriptionAction(){

		//Si l'utilisateur arrive par GET et que la variable de session utilisateur_inscription n'existe pas
		//On le redirige vers layout_inscription_1.html.twig
		//Si l'utilisateur arrive par GET et que la variable de session utilisateur_inscription existe
		//On le redirige vers le layout inscription en cours grâce au champ caché etape_inscription 
		//Si l'utilisateur arrive par GET et que la variable de session utilisateur_inscription existe
		//et que la variable GET etape_precedente == 1 On le redirige vers le layout inscription en cours -1
		//grâce au champ caché etape_inscription 
		//Si l'utilisateur arrive par POST on alimente la variable de session utilisateur_inscription
		//puis on redirige vers layout_inscription en cours + 1 grâce au champ caché etape_inscription 
		//Si l'utilisateur arrive par POST et que l'étape en cours == 4 on persiste + flush l'utilisateur

		$utilisateur = new Utilisateur();
		$form = $this->get('form.factory')->create(UtilisateurInscription1Type::class, $utilisateur);


		if($request->isMethod('POST')){

		}

		return $this->render('PTRORencontresBundle:Rencontres:layout_inscription_1.html.twig', array("form" => $form->createView()));
	}
	
}
