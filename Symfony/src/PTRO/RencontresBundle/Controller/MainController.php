<?php

namespace PTRO\RencontresBundle\Controller;

use PTRO\RencontresBundle\Entity\Blocage;
use PTRO\RencontresBundle\Entity\Conversation;
use PTRO\RencontresBundle\Entity\Favori;
use PTRO\RencontresBundle\Entity\Message;
use PTRO\RencontresBundle\Entity\Poke;
use PTRO\RencontresBundle\Entity\Signalement;
use PTRO\RencontresBundle\Form\MessageType;
use PTRO\RencontresBundle\Form\SignalementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PTRO\RencontresBundle\Entity\Utilisateur;
use PTRO\RencontresBundle\Form\UtilisateurType;

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
        $formMessage = null;
        $formSignalement = null;

        //Si l'utilisateur est connecté
        if($this->getUser() != null){

            //Si le user consulte son propre profil, on le redirige vers la page "mon profil"
            if($this->getUser()->getId() == $id){
                return $this->redirectToRoute("fos_user_profile_show");
            }

            //On crée les formulaires d'interaction avec l'utilisateur
            $message = new Message();
            $formMessage = $this->get('form.factory')->create(MessageType::class, $message);
            $formMessage->get('id_receveur')->setData($id);

            //On crée le formulaire de signalement
            $signalement = new Signalement();
            $formSignalement = $this->get('form.factory')->create(SignalementType::class, $signalement);
            $formSignalement->get('id_receveur')->setData($id);
        }

        //On va chercher les infos du profil à afficher
        $em = $this->getDoctrine()->getManager();
        $repoProfil = $em->getRepository("PTRORencontresBundle:Utilisateur");
        $profil = $repoProfil->findOneById($id);

        if($profil == null){
            throw $this->createNotFoundException("Ce profil n'existe pas.");
        }

        //On va chercher les photos
        $repoPhotos = $em->getRepository("PTRORencontresBundle:Photo");
        $photos = $repoPhotos->getPhotosProfile($profil->getId());

        //On regarde si ce profil est dans ses favoris
        $repoFavori = $em->getRepository("PTRORencontresBundle:Favori");
        if($repoFavori->getFavoriByUsers($id, $this->getUser()) != null){
            $favori = 1;
        }else{
            $favori = 0;
        }

        //On regarde si ce profil est bloqué par l'utilisateur
        $repoBlocage = $em->getRepository("PTRORencontresBundle:Blocage");
        if($repoBlocage->findOneBy(array("createur" => $this->getUser(), "receveur" => $id)) != null){
            $bloquer = 1;
        }else{
            $bloquer = 0;
        }
		
		return $this->render('PTRORencontresBundle:Rencontres:layout_profil.html.twig', array("profil" => $profil, "photos" => $photos, "formMessage" => ($formMessage == null)? null: $formMessage->createView(), 'favori'=> $favori, 'bloquer' => $bloquer, "formSignalement" => ($formSignalement == null)? null: $formSignalement->createView(),));
	}

	public function messageAction(Request $request){
        //This is optional. Do not do this check if you want to call the same action using a regular request.
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Seul Ajax est autorisé!'), 400);
        }

        $message = new Message();
        $form = $this->get('form.factory')->create(MessageType::class, $message);
        $form->handleRequest($request);

        if ($form->isValid()) {

            //On vérifie si une conversation existe déjà entre les deux personnes
            $em = $this->getDoctrine()->getManager();
            $receveur = $em->getRepository('PTRORencontresBundle:Utilisateur')->find($form->get('id_receveur')->getData());
            $envoyeur = $this->getUser();

            $repoConversation = $em->getRepository('PTRORencontresBundle:Conversation');
            $conversation = $repoConversation->getConversationByUsers($envoyeur,$receveur);
            if ($conversation == null){
                $conversation = $repoConversation->getConversationByUsers($receveur,$envoyeur);
            }

            //Si il n'y a pas de conversation on la crée
            if($conversation == null){
                $conversation = new Conversation();
                $conversation->setCreateur($envoyeur);
                $conversation->setReceveur($receveur);
                $em->persist($conversation);
                $em->flush();
            }

            //On sauvegarde le message avec la conversation précédente et l'auteur
            $message->setConversation($conversation);
            $message->setAuteur($this->getUser());
            $em->persist($message);
            $em->flush();

            return new JsonResponse(array('message' => 'Success!', 'data' => ''), 200);
        }

        $response = new JsonResponse(
            array(
                'message' => 'Error',
                'data' => $this->getErrorMessages($form)),
                400);

        return $response;
    }

    // Generate an array contains a key -> value with the errors where the key is the name of the form field
    protected function getErrorMessages(Form $form)
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }

    public function favoriAction(Request $request)
    {
        //This is optional. Do not do this check if you want to call the same action using a regular request.
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Seul Ajax est autorisé!'), 400);
        }
        try{
            $em = $this->getDoctrine()->getManager();

            $id_receveur = $request->get('id_receveur');
            $createur = $this->getUser();
            $receveur = $em->getRepository('PTRORencontresBundle:Utilisateur')->find($id_receveur);

            $favori = $em->getRepository('PTRORencontresBundle:Favori')->findOneBy(array("createur" => $createur, "receveur" => $receveur));
            if(!$favori){
                $favori = new Favori();
                $favori->setCreateur($createur);
                $favori->setReceveur($receveur);
                $em->persist($favori);
                $em->flush();
                return new JsonResponse(array('message' => 'Success!', 'data' => 'Ajout'), 200);
            }else{
                $em->remove($favori);
                $em->flush();
                return new JsonResponse(array('message' => 'Success!', 'data' => 'Enleve'), 200);
            }

        }catch (Exception $e){
            $response = new JsonResponse(
                array(
                    'message' => 'Erreur pendant l\'ajout dans vos favoris.',
                    'data' => ''),
                400);
            return $response;
        }

    }

    public function pokeAction(Request $request)
    {
        //This is optional. Do not do this check if you want to call the same action using a regular request.
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Seul Ajax est autorisé!'), 400);
        }
        try{
            $em = $this->getDoctrine()->getManager();

            $id_receveur = $request->get('id_receveur');
            $createur = $this->getUser();
            $receveur = $em->getRepository('PTRORencontresBundle:Utilisateur')->find($id_receveur);

            //Un seul poke par jour pour un profil
            $poke_today = $em->getRepository('PTRORencontresBundle:Poke')->getPokeTodayByUsers($receveur, $createur);
            if(!$poke_today){
                $poke = new Poke();
                $poke->setCreateur($createur);
                $poke->setReceveur($receveur);
                $em->persist($poke);
                $em->flush();
                return new JsonResponse(array('message' => 'Success!', 'data' => 'Envoye'), 200);
            }else{
                return new JsonResponse(array('message' => 'Error!', 'data' => 'DejaEnvoyeAujourdhui'), 200);
            }

        }catch (Exception $e) {
            $response = new JsonResponse(
                array(
                    'message' => 'Erreur pendant l\'envoi du poke.',
                    'data' => ''),
                400);
            return $response;
        }
    }

    public function bloquerAction(Request $request)
    {
        //This is optional. Do not do this check if you want to call the same action using a regular request.
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Seul Ajax est autorisé!'), 400);
        }
        try{
            $em = $this->getDoctrine()->getManager();

            $id_receveur = $request->get('id_receveur');
            $createur = $this->getUser();
            $receveur = $em->getRepository('PTRORencontresBundle:Utilisateur')->find($id_receveur);

            $blocage = $em->getRepository('PTRORencontresBundle:Blocage')->findOneBy(array("createur" => $createur, "receveur" => $receveur));
            if(!$blocage){
                $blocage = new Blocage();
                $blocage->setCreateur($createur);
                $blocage->setReceveur($receveur);
                $em->persist($blocage);
                $em->flush();
                return new JsonResponse(array('message' => 'Success!', 'data' => 'Ajout'), 200);
            }else{
                $em->remove($blocage);
                $em->flush();
                return new JsonResponse(array('message' => 'Success!', 'data' => 'Enleve'), 200);
            }

        }catch (\Exception $e){
            $response = new JsonResponse(
                array(
                    'message' => 'Erreur pendant l\'ajout dans vos favoris.',
                    'data' => ''),
                400);
            return $response;
        }
    }

    public function signalerAction(Request $request)
    {
        //This is optional. Do not do this check if you want to call the same action using a regular request.
        if (!$request->isXmlHttpRequest()) {
            return new JsonResponse(array('message' => 'Seul Ajax est autorisé!'), 400);
        }

        try {

            $signalement = new Signalement();
            $form = $this->get('form.factory')->create(SignalementType::class, $signalement);
            $form->handleRequest($request);

            if ($form->isValid()) {

                //On vérifie si un signalement existe déjà
                $em = $this->getDoctrine()->getManager();
                $receveur = $em->getRepository('PTRORencontresBundle:Utilisateur')->find($form->get('id_receveur')->getData());
                $envoyeur = $this->getUser();

                $repoSignalement = $em->getRepository('PTRORencontresBundle:Signalement');
                $signalement_existant = $repoSignalement->getSignalementByUsers($receveur, $envoyeur);

                //Si il n'y a pas de signalement on le crée
                if ($signalement_existant == null) {
                    $signalement->setCreateur($envoyeur);
                    $signalement->setReceveur($receveur);
                    $em->persist($signalement);
                    $em->flush();
                    return new JsonResponse(array('message' => 'Success!', 'data' => ''), 200);
                }else{
                    return new JsonResponse(array('message' => 'Vous avez déjà signalé ce profil au webmaster.', 'data' => ''), 400);
                }

            }

            $response = new JsonResponse(
                array(
                    'message' => 'Error',
                    'data' => $this->getErrorMessages($form)),
                400);

            return $response;
        }
        catch (\Exception $e){
            $response = new JsonResponse(
                array(
                    'message' => 'Erreur pendant le signalement.',
                    'data' => ''),
                400);
            return $response;
        }
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

	public function inscriptionAction(Request $request){

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
	    $formData = new Utilisateur(); // Your form data class. Has to be an object, won't work properly with an array.

	    $flow = $this->get('PTRO.form.flow.createUtilisateur'); // must match the flow's service id
	    $flow->bind($formData);

	    // form of the current step
	    $form = $flow->createForm();
	    if ($flow->isValid($form)) {
	        $flow->saveCurrentStepData($form);

	        if ($flow->nextStep()) {
	            // form for the next step
	            $form = $flow->createForm();
	        } else {
	            // flow finished
	            $em = $this->getDoctrine()->getManager();
	            $em->persist($formData);
	            $em->flush();

	            $flow->reset(); // remove step data from the session

	            return $this->redirect($this->generateUrl('ptro_rencontres_homepage')); // redirect when done
	        }
		}

	    return $this->render('PTRORencontresBundle:Rencontres:layout_inscription.html.twig', array(
	        'form' => $form->createView(),
	        'flow' => $flow,
    		));
	    /*
		$utilisateur = new Utilisateur();
		$form = $this->get('form.factory')->create(UtilisateurType::class, $utilisateur);


		if($request->isMethod('POST')){

		}

		return $this->render('PTRORencontresBundle:Rencontres:layout_inscription_1.html.twig', array("form" => $form->createView()));
	*/
	}

    public function mailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('send@example.com')
            ->setTo('pierre.trochet.munoz@gmail.com')
            ->setBody(
                'Hello Pierre',
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
        $this->get('mailer')->send($message);

        return new Response('mail envoyé');
    }

    public function menuAction(){
        $user = $this->getUser();
        $photoMiniature = null;
        if($user != null){
            $em = $this->getDoctrine()->getManager();
            $photoRepository = $em->getRepository('PTRORencontresBundle:Photo');
            $photoPrincipale = $photoRepository->getPhotoByOrdreAndUser($user,1);
            if($photoPrincipale != null){
                $photoMiniature = $photoPrincipale->getWebPathMedium();
            }
        }
        return $this->render('PTRORencontresBundle:Rencontres:layout_menu.html.twig', array("photo_miniature_path" => $photoMiniature));
    }
	
}
