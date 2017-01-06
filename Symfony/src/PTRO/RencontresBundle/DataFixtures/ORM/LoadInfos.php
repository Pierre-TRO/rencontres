<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadUtilisateur.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PTRO\RencontresBundle\Entity\Genre;
use PTRO\RencontresBundle\Entity\Relation;
use PTRO\RencontresBundle\Entity\EtatCivil;
use PTRO\RencontresBundle\Entity\Region;
use PTRO\RencontresBundle\Entity\Departement;
use PTRO\RencontresBundle\Entity\Orientation;
use PTRO\RencontresBundle\Entity\Physique;
use PTRO\RencontresBundle\Entity\Cigarette;
use PTRO\RencontresBundle\Entity\CouleurYeux;
use PTRO\RencontresBundle\Entity\CouleurCheveux;
use PTRO\RencontresBundle\Entity\Alcool;
use PTRO\RencontresBundle\Entity\Photo;
use PTRO\RencontresBundle\Entity\Message;
use PTRO\RencontresBundle\Entity\Favori;
use PTRO\RencontresBundle\Entity\Conversation;
use PTRO\RencontresBundle\Entity\Poke;
use PTRO\RencontresBundle\Entity\Blocage;
use PTRO\RencontresBundle\Entity\Signalement;
use PTRO\RencontresBundle\Entity\Utilisateur;

class LoadInfos implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    $genres = array(
      'Homme',
      'Femme'
    );

    $genre = new Genre();
    $genre->setNom($genres[0]);
    $manager->persist($genre);

    $genre2 = new Genre();
    $genre2->setNom($genres[1]);
    $manager->persist($genre2);


    $relations = array(
      'Sérieuse',
      'Ephémère',
      'Amicale',
      'Indécis'
    );
    $relation = new Relation();
    $relation->setNom($relations[0]);
    $manager->persist($relation);

    $relation2 = new Relation();
    $relation2->setNom($relations[1]);
    $manager->persist($relation2);

    $relation3 = new Relation();
    $relation3->setNom($relations[2]);
    $manager->persist($relation3);

    $relation4 = new Relation();
    $relation4->setNom($relations[3]);
    $manager->persist($relation4);


    $etatcivils = array(
      'Célibataire',
      'Concubinage',
      'Marié'
    );

    $etatcivil = new EtatCivil();
    $etatcivil->setNom($etatcivils[0]);
    $manager->persist($etatcivil);

    $etatcivil2 = new EtatCivil();
    $etatcivil2->setNom($etatcivils[1]);
    $manager->persist($etatcivil2);

    $etatcivil3 = new EtatCivil();
    $etatcivil3->setNom($etatcivils[2]);
    $manager->persist($etatcivil3);


    $name = 'Ile-De-France';
    $region = new Region();
    $region->setNom($name);
    $manager->persist($region);


    $departements = array(
      '77 - Seine et Marne',
      '91 - Essonne',
      '75 - Paris',
      '94 - Val de Marne',
      '93 - Seine Saint Denis',
      '92 - Haut de Seine',
      '95 - Val d\'Oise',
      '78 - Yvelines'
    );

    $departement = new Departement();
    $departement->setNom($departements[0]);
    $departement->setRegion($region);
    $manager->persist($departement);

    $departement2 = new Departement();
    $departement2->setNom($departements[1]);
    $departement2->setRegion($region);
    $manager->persist($departement2);

    $departement3 = new Departement();
    $departement3->setNom($departements[2]);
    $departement3->setRegion($region);
    $manager->persist($departement3);

    $departement4 = new Departement();
    $departement4->setNom($departements[3]);
    $departement4->setRegion($region);
    $manager->persist($departement4);

    $departement5 = new Departement();
    $departement5->setNom($departements[4]);
    $departement5->setRegion($region);
    $manager->persist($departement5);

    $departement6 = new Departement();
    $departement6->setNom($departements[5]);
    $departement6->setRegion($region);
    $manager->persist($departement6);

    $departement7 = new Departement();
    $departement7->setNom($departements[6]);
    $departement7->setRegion($region);
    $manager->persist($departement7);

    $departement8 = new Departement();
    $departement8->setNom($departements[7]);
    $departement8->setRegion($region);
    $manager->persist($departement8);

    $orientations = array(
      'Hétérosexuelle',
      'Homosexuelle',
      'Bisexuelle'
    );

    $orientation = new Orientation();
    $orientation->setNom($orientations[0]);
    $manager->persist($orientation);

    $orientation2 = new Orientation();
    $orientation2->setNom($orientations[1]);
    $manager->persist($orientation2);

    $orientation3 = new Orientation();
    $orientation3->setNom($orientations[2]);
    $manager->persist($orientation3);

    $physiques = array(
      'Mince',
      'Normal',
      'Athlétique',
      'Musclé',
      'Enrobé',
      'Taille forte'
    );

      $physique = new Physique();
      $physique->setNom($physiques[0]);
      $manager->persist($physique);

      $physique2 = new Physique();
      $physique2->setNom($physiques[1]);
      $manager->persist($physique2);

      $physique3 = new Physique();
      $physique3->setNom($physiques[2]);
      $manager->persist($physique3);

      $physique4 = new Physique();
      $physique4->setNom($physiques[3]);
      $manager->persist($physique4);

      $physique5 = new Physique();
      $physique5->setNom($physiques[4]);
      $manager->persist($physique5);

      $physique6 = new Physique();
      $physique6->setNom($physiques[5]);
      $manager->persist($physique6);


    $cigarettes = array(
      'Oui',
      'Occasionnelement',
      'Non'
    );

    $cigarette = new Cigarette();
    $cigarette->setNom($cigarettes[0]);
    $manager->persist($cigarette);

    $cigarette2 = new Cigarette();
    $cigarette2->setNom($cigarettes[1]);
    $manager->persist($cigarette2);

    $cigarette3 = new Cigarette();
    $cigarette3->setNom($cigarettes[2]);
    $manager->persist($cigarette3);


    $alcools = array(
      'Oui',
      'Occasionnelement',
      'Non'
    );

    $alcool = new Alcool();
    $alcool->setNom($alcools[0]);
    $manager->persist($alcool);

    $alcool2 = new Alcool();
    $alcool2->setNom($alcools[1]);
    $manager->persist($alcool2);

    $alcool3 = new Alcool();
    $alcool3->setNom($alcools[2]);
    $manager->persist($alcool3);

    $couleursYeux = array(
      'Bleu',
      'Brun',
      'Marron',
      'Noir',
      'Vert'
    );

    $couleurYeux = new CouleurYeux();
    $couleurYeux->setNom($couleursYeux[0]);
    $manager->persist($couleurYeux);

    $couleurYeux2 = new CouleurYeux();
    $couleurYeux2->setNom($couleursYeux[1]);
    $manager->persist($couleurYeux2);

    $couleurYeux3 = new CouleurYeux();
    $couleurYeux3->setNom($couleursYeux[2]);
    $manager->persist($couleurYeux3);

    $couleurYeux4 = new CouleurYeux();
    $couleurYeux4->setNom($couleursYeux[3]);
    $manager->persist($couleurYeux4);

    $couleurYeux5 = new CouleurYeux();
    $couleurYeux5->setNom($couleursYeux[4]);
    $manager->persist($couleurYeux5);

    $couleursCheveux = array(
      'Noir',
      'Brun',
      'Aubrun',
      'Châtain',
      'Roux',
      'Blond',
      'Blanc'
    );

    $couleurCheveux = new CouleurCheveux();
    $couleurCheveux->setNom($couleursCheveux[0]);
    $manager->persist($couleurCheveux);

    $couleurCheveux2 = new CouleurCheveux();
    $couleurCheveux2->setNom($couleursCheveux[1]);
    $manager->persist($couleurCheveux2);

    $couleurCheveux3 = new CouleurCheveux();
    $couleurCheveux3->setNom($couleursCheveux[2]);
    $manager->persist($couleurCheveux3);

    $couleurCheveux4 = new CouleurCheveux();
    $couleurCheveux4->setNom($couleursCheveux[3]);
    $manager->persist($couleurCheveux4);

    $couleurCheveux5 = new CouleurCheveux();
    $couleurCheveux5->setNom($couleursCheveux[4]);
    $manager->persist($couleurCheveux5);

    $couleurCheveux6 = new CouleurCheveux();
    $couleurCheveux6->setNom($couleursCheveux[5]);
    $manager->persist($couleurCheveux6);

    $couleurCheveux7 = new CouleurCheveux();
    $couleurCheveux7->setNom($couleursCheveux[6]);
    $manager->persist($couleurCheveux7);


    $utilisateur = new Utilisateur();
    $utilisateur->setPseudo('Pierrot_77');
    $utilisateur->setPassword('12345');
    $utilisateur->setGenre($genre);
    $utilisateur->setRelation($relation);
    $utilisateur->setEtatCivil($etatcivil);
    $utilisateur->setDepartement($departement);
    $utilisateur->setOrientation($orientation);
    $utilisateur->setPhysique($physique2);
    $utilisateur->setCigarette($cigarette);
    $utilisateur->setAlcool($alcool);
    $utilisateur->setCouleurYeux($couleurYeux5);
    $utilisateur->setCouleurCheveux($couleurCheveux3);
    $utilisateur->setTitre('Je suis un super gars');
    $utilisateur->setDescription('Je suis un super gars. Toi-même tu sais.');
    $utilisateur->setDateNaissance(new \DateTime('1983-11-13'));
    $utilisateur->setEmploi('informaticien');
    $utilisateur->setTaille(177);
    $utilisateur->setPoids(90);
    $utilisateur->setSports(array('boxe anglaise','course à pied','natation'));
    $utilisateur->setHobbies(array('geek','jeux vidéos'));
    $utilisateur->setQualites(array('généreux','calme','sociable'));
    $utilisateur->setDefauts(array('paresseux','trop gentil'));
    $utilisateur->setDateModification(new \DateTime());
    $utilisateur->setVues(5);

    $manager->persist($utilisateur);

    $utilisateur2 = new Utilisateur();
    $utilisateur2->setPseudo('Marjorie_78');
    $utilisateur2->setPassword('54321');
    $utilisateur2->setGenre($genre2);
    $utilisateur2->setRelation($relation2);
    $utilisateur2->setEtatCivil($etatcivil);
    $utilisateur2->setDepartement($departement8);
    $utilisateur2->setOrientation($orientation);
    $utilisateur2->setPhysique($physique);
    $utilisateur2->setCigarette($cigarette3);
    $utilisateur2->setAlcool($alcool3);
    $utilisateur2->setCouleurYeux($couleurYeux);
    $utilisateur2->setCouleurCheveux($couleurCheveux6);
    $utilisateur2->setTitre('Je suis une super fille');
    $utilisateur2->setDescription('Je suis une super fille. Contacte-moi, tu ne le regeteras pas!');
    $utilisateur2->setDateNaissance(new \DateTime('1983-11-13'));
    $utilisateur2->setEmploi('secrétaire');
    $utilisateur2->setTaille(177);
    $utilisateur2->setPoids(90);
    $utilisateur2->setSports(array('fitness','yoga','ping-pong'));
    $utilisateur2->setHobbies(array('lecture','cinéma'));
    $utilisateur2->setQualites(array('energique','cool','sociable'));
    $utilisateur2->setDefauts(array('indécise','lunatique'));
    $utilisateur2->setDateModification(new \DateTime());
    $utilisateur2->setVues(36);
    $manager->persist($utilisateur2);

    $favori = new Favori();
    $favori->setCreateur($utilisateur);
    $favori->setReceveur($utilisateur2);
    $manager->persist($favori);

    $conversation = new Conversation();
    $conversation->setCreateur($utilisateur);
    $conversation->setReceveur($utilisateur2);
    $manager->persist($conversation);

    $message = new Message();
    $message->setAuteur($utilisateur);
    $message->setConversation($conversation);
    $message->setObjet('Salut');
    $message->setContenu('Salut Marjorie, moi c\'est Pierre, j\'ai kiffé ton profil!ça te dit de faire connaissance? Tu es dans mes favoris.');
    $manager->persist($message);

    $message = new Message();
    $message->setAuteur($utilisateur2);
    $message->setConversation($conversation);
    $message->setObjet('Re: Salut');
    $message->setContenu('Salut Pierre, tu es mignon ^^, moi aussi j\'aimerai faire ta connaissance! Je t\'envoie un poke');
    $manager->persist($message);

    $poke = new Poke();
    $poke->setCreateur($utilisateur2);
    $poke->setReceveur($utilisateur);
    $manager->persist($poke);


    // On déclenche l'enregistrement 
    $manager->flush();
  }
}