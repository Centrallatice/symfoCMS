<?php

namespace ModuleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="ModuleBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="renderType", type="string", length=255)
     */
    private $renderType;

    /**
     * @var string
     *
     * @ORM\Column(name="renderDisposition", type="string", length=255)
     */
    private $renderDisposition;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Module
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
     * Set renderType
     *
     * @param string $renderType
     *
     * @return Module
     */
    public function setRenderType($renderType)
    {
        $this->renderType = $renderType;

        return $this;
    }

    /**
     * Get renderType
     *
     * @return string
     */
    public function getRenderType()
    {
        return $this->renderType;
    }

    /**
     * Set renderDisposition
     *
     * @param string $renderDisposition
     *
     * @return Module
     */
    public function setRenderDisposition($renderDisposition)
    {
        $this->renderDisposition = $renderDisposition;

        return $this;
    }

    /**
     * Get renderDisposition
     *
     * @return string
     */
    public function getRenderDisposition()
    {
        return $this->renderDisposition;
    }
}

