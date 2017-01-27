<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\UtilisateurRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 5,
     *      max = 50,
     *      minMessage = "{{ limit }} charactères minimum",
     *      maxMessage = "{{ limit }} charactères maximum"
     * )
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 7,
     *      max = 50,
     *      minMessage = "{{ limit }} charactères minimum",
     *      maxMessage = "{{ limit }} charactères maximum"
     * )
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="emploi", type="string", length=255, nullable=true)
     */
    private $emploi;

    /**
     * @var int
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     * @Assert\Range(min=130, max=250)
     */
    private $taille;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", nullable=true)
     * @Assert\Range(min=130, max=250)
     */
    private $poids;

    /**
     * @var array
     *
     * @ORM\Column(name="hobbies", type="array", nullable=true)
     */
    private $hobbies;

    /**
     * @var array
     *
     * @ORM\Column(name="sports", type="array", nullable=true)
     */
    private $sports;

    /**
     * @var array
     *
     * @ORM\Column(name="qualites", type="array", nullable=true)
     */
    private $qualites;

    /**
     * @var array
     *
     * @ORM\Column(name="defauts", type="array", nullable=true)
     */
    private $defauts;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="datetime", nullable=true)
     */
    private $dateModification;

    /**
     * @var int
     *
     * @ORM\Column(name="vues", type="integer", nullable=true)
     */
    private $vues;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Genre")
    */
    private $genre;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\EtatCivil")
    */
    private $etatCivil;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Relation")
    */
    private $relation;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Departement")
    */
    private $departement;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Orientation")
    */
    private $orientation;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Physique")
    */
    private $physique;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Cigarette")
    */
    private $cigarette;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\CouleurYeux")
    */
    private $couleurYeux;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\CouleurCheveux")
    */
    private $couleurCheveux;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Alcool")
    */
    private $alcool;

    /**
     * @var bool
     *
     * @ORM\Column(name="desactive", type="boolean")
     */
    private $desactive;


    public function __construct()
    {
        //La date de creation de l'utilisateur est la date d'aujourd'hui
        $this->dateCreation = new \DateTime();

        //L'utilisateur est actif par défaut
        $this->desactive = false;
    }

    /**
    * @ORM\PreUpdate
    */
    public function updateDateModification()
    {
        $this->setDateModification(new \DateTime());
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Utilisateur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set emploi
     *
     * @param string $emploi
     *
     * @return Utilisateur
     */
    public function setEmploi($emploi)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get emploi
     *
     * @return string
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Utilisateur
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return int
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     *
     * @return Utilisateur
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return int
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set hobbies
     *
     * @param array $hobbies
     *
     * @return Utilisateur
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    /**
     * Get hobbies
     *
     * @return array
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Set sports
     *
     * @param array $sports
     *
     * @return Utilisateur
     */
    public function setSports($sports)
    {
        $this->sports = $sports;

        return $this;
    }

    /**
     * Get sports
     *
     * @return array
     */
    public function getSports()
    {
        return $this->sports;
    }

    /**
     * Set qualites
     *
     * @param array $qualites
     *
     * @return Utilisateur
     */
    public function setQualites($qualites)
    {
        $this->qualites = $qualites;

        return $this;
    }

    /**
     * Get qualites
     *
     * @return array
     */
    public function getQualites()
    {
        return $this->qualites;
    }

    /**
     * Set defauts
     *
     * @param array $defauts
     *
     * @return Utilisateur
     */
    public function setDefauts($defauts)
    {
        $this->defauts = $defauts;

        return $this;
    }

    /**
     * Get defauts
     *
     * @return array
     */
    public function getDefauts()
    {
        return $this->defauts;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Utilisateur
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param text $description
     *
     * @return Utilisateur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return text
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Utilisateur
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     *
     * @return Utilisateur
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set genre
     *
     * @param \PTRO\RencontresBundle\Entity\Genre $genre
     *
     * @return Utilisateur
     */
    public function setGenre(\PTRO\RencontresBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \PTRO\RencontresBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set etatCivil
     *
     * @param \PTRO\RencontresBundle\Entity\EtatCivil $etatCivil
     *
     * @return Utilisateur
     */
    public function setEtatCivil(\PTRO\RencontresBundle\Entity\EtatCivil $etatCivil = null)
    {
        $this->etatCivil = $etatCivil;

        return $this;
    }

    /**
     * Get etatCivil
     *
     * @return \PTRO\RencontresBundle\Entity\EtatCivil
     */
    public function getEtatCivil()
    {
        return $this->etatCivil;
    }

    /**
     * Set relation
     *
     * @param \PTRO\RencontresBundle\Entity\Relation $relation
     *
     * @return Utilisateur
     */
    public function setRelation(\PTRO\RencontresBundle\Entity\Relation $relation = null)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Get relation
     *
     * @return \PTRO\RencontresBundle\Entity\Relation
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Set departement
     *
     * @param \PTRO\RencontresBundle\Entity\Departement $departement
     *
     * @return Utilisateur
     */
    public function setDepartement(\PTRO\RencontresBundle\Entity\Departement $departement = null)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \PTRO\RencontresBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set orientation
     *
     * @param \PTRO\RencontresBundle\Entity\Orientation $orientation
     *
     * @return Utilisateur
     */
    public function setOrientation(\PTRO\RencontresBundle\Entity\Orientation $orientation = null)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return \PTRO\RencontresBundle\Entity\Orientation
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set physique
     *
     * @param \PTRO\RencontresBundle\Entity\Physique $physique
     *
     * @return Utilisateur
     */
    public function setPhysique(\PTRO\RencontresBundle\Entity\Physique $physique = null)
    {
        $this->physique = $physique;

        return $this;
    }

    /**
     * Get physique
     *
     * @return \PTRO\RencontresBundle\Entity\Physique
     */
    public function getPhysique()
    {
        return $this->physique;
    }

    /**
     * Set cigarette
     *
     * @param \PTRO\RencontresBundle\Entity\Cigarette $cigarette
     *
     * @return Utilisateur
     */
    public function setCigarette(\PTRO\RencontresBundle\Entity\Cigarette $cigarette = null)
    {
        $this->cigarette = $cigarette;

        return $this;
    }

    /**
     * Get cigarette
     *
     * @return \PTRO\RencontresBundle\Entity\Cigarette
     */
    public function getCigarette()
    {
        return $this->cigarette;
    }

    /**
     * Set couleurYeux
     *
     * @param \PTRO\RencontresBundle\Entity\CouleurYeux $couleurYeux
     *
     * @return Utilisateur
     */
    public function setCouleurYeux(\PTRO\RencontresBundle\Entity\CouleurYeux $couleurYeux = null)
    {
        $this->couleurYeux = $couleurYeux;

        return $this;
    }

    /**
     * Get couleurYeux
     *
     * @return \PTRO\RencontresBundle\Entity\CouleurYeux
     */
    public function getCouleurYeux()
    {
        return $this->couleurYeux;
    }

    /**
     * Set couleurCheveux
     *
     * @param \PTRO\RencontresBundle\Entity\CouleurCheveux $couleurCheveux
     *
     * @return Utilisateur
     */
    public function setCouleurCheveux(\PTRO\RencontresBundle\Entity\CouleurCheveux $couleurCheveux = null)
    {
        $this->couleurCheveux = $couleurCheveux;

        return $this;
    }

    /**
     * Get couleurCheveux
     *
     * @return \PTRO\RencontresBundle\Entity\CouleurCheveux
     */
    public function getCouleurCheveux()
    {
        return $this->couleurCheveux;
    }

    /**
     * Set alcool
     *
     * @param \PTRO\RencontresBundle\Entity\Alcool $alcool
     *
     * @return Utilisateur
     */
    public function setAlcool(\PTRO\RencontresBundle\Entity\Alcool $alcool = null)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return \PTRO\RencontresBundle\Entity\Alcool
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set vues
     *
     * @param integer $vues
     *
     * @return Utilisateur
     */
    public function setVues($vues)
    {
        $this->vues = $vues;

        return $this;
    }

    /**
     * Get vues
     *
     * @return integer
     */
    public function getVues()
    {
        return $this->vues;
    }

    /**
     * Set desactive
     *
     * @param boolean $desactive
     *
     * @return Utilisateur
     */
    public function setDesactive($desactive)
    {
        $this->desactive = $desactive;

        return $this;
    }

    /**
     * Get desactive
     *
     * @return boolean
     */
    public function getDesactive()
    {
        return $this->desactive;
    }
}
