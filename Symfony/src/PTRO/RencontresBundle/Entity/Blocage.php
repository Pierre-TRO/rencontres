<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blocage
 *
 * @ORM\Table(name="blocage")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\BlocageRepository")
 */
class Blocage
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
     * @ORM\Column(name="date_blocage", type="datetime")
     */
    private $dateBlocage;

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
        $this->dateBlocage = new \DateTime();
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
     * Set dateBlocage
     *
     * @param \DateTime $dateBlocage
     *
     * @return Blocage
     */
    public function setDateBlocage($dateBlocage)
    {
        $this->dateBlocage = $dateBlocage;

        return $this;
    }

    /**
     * Get dateBlocage
     *
     * @return \DateTime
     */
    public function getDateBlocage()
    {
        return $this->dateBlocage;
    }

    /**
     * Set createur
     *
     * @param \PTRO\RencontresBundle\Entity\Utilisateur $createur
     *
     * @return Blocage
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
     * @return Blocage
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
