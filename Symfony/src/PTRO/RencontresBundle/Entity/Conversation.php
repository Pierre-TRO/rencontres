<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversation
 *
 * @ORM\Table(name="conversation")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\ConversationRepository")
 */
class Conversation
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
     * @var bool
     *
     * @ORM\Column(name="createurCorbeille", type="boolean")
     */
    private $createurCorbeille;

    /**
     * @var bool
     *
     * @ORM\Column(name="receveurCorbeille", type="boolean")
     */
    private $receveurCorbeille;

    /**
     * @var bool
     *
     * @ORM\Column(name="createurSuppr", type="boolean")
     */
    private $createurSuppr;

    /**
     * @var bool
     *
     * @ORM\Column(name="receveurSuppr", type="boolean")
     */
    private $receveurSuppr;

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
        $this->createurCorbeille = false;
        $this->receveurCorbeille = false;
        $this->createurSuppr = false;
        $this->receveurSuppr = false;
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
     * Set createurCorbeille
     *
     * @param boolean $createurCorbeille
     *
     * @return Conversation
     */
    public function setCreateurCorbeille($createurCorbeille)
    {
        $this->createurCorbeille = $createurCorbeille;

        return $this;
    }

    /**
     * Get createurCorbeille
     *
     * @return bool
     */
    public function getCreateurCorbeille()
    {
        return $this->createurCorbeille;
    }

    /**
     * Set receveurCorbeille
     *
     * @param boolean $receveurCorbeille
     *
     * @return Conversation
     */
    public function setReceveurCorbeille($receveurCorbeille)
    {
        $this->receveurCorbeille = $receveurCorbeille;

        return $this;
    }

    /**
     * Get receveurCorbeille
     *
     * @return bool
     */
    public function getReceveurCorbeille()
    {
        return $this->receveurCorbeille;
    }

    /**
     * Set createurSuppr
     *
     * @param boolean $createurSuppr
     *
     * @return Conversation
     */
    public function setCreateurSuppr($createurSuppr)
    {
        $this->createurSuppr = $createurSuppr;

        return $this;
    }

    /**
     * Get createurSuppr
     *
     * @return bool
     */
    public function getCreateurSuppr()
    {
        return $this->createurSuppr;
    }

    /**
     * Set receveurSuppr
     *
     * @param boolean $receveurSuppr
     *
     * @return Conversation
     */
    public function setReceveurSuppr($receveurSuppr)
    {
        $this->receveurSuppr = $receveurSuppr;

        return $this;
    }

    /**
     * Get receveurSuppr
     *
     * @return bool
     */
    public function getReceveurSuppr()
    {
        return $this->receveurSuppr;
    }

    /**
     * Set createur
     *
     * @param \PTRO\RencontresBundle\Entity\Utilisateur $createur
     *
     * @return Conversation
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
     * @return Conversation
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
