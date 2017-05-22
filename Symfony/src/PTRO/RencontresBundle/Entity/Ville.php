<?php

namespace PTRO\RencontresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="PTRO\RencontresBundle\Repository\VilleRepository")
 */
class Ville
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
     * @ORM\Column(name="numeroDep", type="string", length=255)
     */
    private $numeroDep;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="PTRO\RencontresBundle\Entity\Departement")
     */
    private $departement;


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
     * Set numeroDep
     *
     * @param string $numeroDep
     *
     * @return Ville
     */
    public function setNumeroDep($numeroDep)
    {
        $this->numeroDep = $numeroDep;

        return $this;
    }

    /**
     * Get numeroDep
     *
     * @return string
     */
    public function getNumeroDep()
    {
        return $this->numeroDep;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Ville
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set departement
     *
     * @param \PTRO\RencontresBundle\Entity\Departement $departement
     *
     * @return Ville
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
}
