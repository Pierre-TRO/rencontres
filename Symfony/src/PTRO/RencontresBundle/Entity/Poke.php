<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poke
 *
 * @ORM\Table(name="poke")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\PokeRepository")
 */
class Poke
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
     * @ORM\Column(name="date_poke", type="datetime")
     */
    private $datePoke;

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
        $this->datePoke = new \DateTime();
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
     * Set datePoke
     *
     * @param \DateTime $datePoke
     *
     * @return Poke
     */
    public function setDatePoke($datePoke)
    {
        $this->datePoke = $datePoke;

        return $this;
    }

    /**
     * Get datePoke
     *
     * @return \DateTime
     */
    public function getDatePoke()
    {
        return $this->datePoke;
    }

    /**
     * Set createur
     *
     * @param \PTRO\RencontresBundle\Entity\Utilisateur $createur
     *
     * @return Poke
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
     * @return Poke
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
