<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PTRO\RencontresBundle\Entity\Evenement;

/**
 * Favori
 *
 * @ORM\Table(name="favori")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\FavoriRepository")
 */
class Favori
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_favori", type="datetime")
     */
    private $dateFavori;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $createur;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $receveur;


    public function __construct()
    {
        //La date de creation de l'annonce est la date d'aujourd'hui
        $this->dateFavori = new \DateTime();
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
     * Set dateFavori
     *
     * @param \DateTime $dateFavori
     *
     * @return Favori
     */
    public function setDateFavori($dateFavori)
    {
        $this->dateFavori = $dateFavori;

        return $this;
    }

    /**
     * Get dateFavori
     *
     * @return \DateTime
     */
    public function getDateFavori()
    {
        return $this->dateFavori;
    }

    /**
     * Set createur
     *
     * @param \PTRO\RencontresBundle\Entity\Utilisateur $createur
     *
     * @return Favori
     */
    public function setCreateur(\PTRO\RencontresBundle\Entity\Utilisateur $createur)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return \PTRO\RencontresBundle\Entity\Utilisateur
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * Set receveur
     *
     * @param \PTRO\RencontresBundle\Entity\Utilisateur $receveur
     *
     * @return Favori
     */
    public function setReceveur(\PTRO\RencontresBundle\Entity\Utilisateur $receveur)
    {
        $this->receveur = $receveur;

        return $this;
    }

    /**
     * Get receveur
     *
     * @return \PTRO\RencontresBundle\Entity\Utilisateur
     */
    public function getReceveur()
    {
        return $this->receveur;
    }
}
