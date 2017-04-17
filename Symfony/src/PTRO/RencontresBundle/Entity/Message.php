<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="objet", type="text", nullable=true)
     *
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide.", groups={"Message"})
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", nullable=true)
     *
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide.", groups={"Message"})
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="datetime")
     */
    private $dateMessage;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $auteur;

    /**
    * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Conversation")
    * @ORM\JoinColumn(nullable=false)
    */
    private $conversation;


    public function __construct()
    {
        //La date de creation de l'annonce est la date d'aujourd'hui
        $this->dateMessage = new \DateTime();
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
     * Set objet
     *
     * @param string $objet
     *
     * @return Message
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateMessage
     *
     * @param \DateTime $dateMessage
     *
     * @return Message
     */
    public function setDateMessage($dateMessage)
    {
        $this->dateMessage = $dateMessage;

        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return \DateTime
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }

    /**
     * Set auteur
     *
     * @param \PTRO\RencontresBundle\Entity\Utilisateur $auteur
     *
     * @return Message
     */
    public function setAuteur(\PTRO\RencontresBundle\Entity\Utilisateur $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \PTRO\RencontresBundle\Entity\Utilisateur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set conversation
     *
     * @param \PTRO\RencontresBundle\Entity\Conversation $conversation
     *
     * @return Message
     */
    public function setConversation(\PTRO\RencontresBundle\Entity\Conversation $conversation)
    {
        $this->conversation = $conversation;

        return $this;
    }

    /**
     * Get conversation
     *
     * @return \PTRO\RencontresBundle\Entity\Conversation
     */
    public function getConversation()
    {
        return $this->conversation;
    }
}
