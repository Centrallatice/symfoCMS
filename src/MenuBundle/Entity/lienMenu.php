<?php

namespace MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lienMenu
 *
 * @ORM\Table(name="lien_menu")
 * @ORM\Entity(repositoryClass="MenuBundle\Repository\lienMenuRepository")
 */
class lienMenu
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="idLink", type="integer", nullable=true)
     */
    private $idLink;

    /**
     * @var string
     *
     * @ORM\Column(name="targetType", type="string", length=255, nullable=true)
     */
    private $targetType;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="TemplateBundle\Entity\Template", cascade={"persist"})
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="titleAttribute", type="string", length=255, nullable=true)
     */
    private $titleAttribute;

    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=255, nullable=true)
     */
    private $cssClass;

    /**
     * @var string
     *
     * @ORM\Column(name="imgLink", type="string", length=255, nullable=true)
     */
    private $imgLink;

    /**
     * @var string
     *
     * @ORM\Column(name="imgTypeLink", type="string", length=255, nullable=true)
     */
    private $imgTypeLink;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return lienMenu
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set idLink
     *
     * @param integer $idLink
     *
     * @return lienMenu
     */
    public function setIdLink($idLink)
    {
        $this->idLink = $idLink;

        return $this;
    }

    /**
     * Get idLink
     *
     * @return integer
     */
    public function getIdLink()
    {
        return $this->idLink;
    }

    /**
     * Set targetType
     *
     * @param string $targetType
     *
     * @return lienMenu
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

        return $this;
    }

    /**
     * Get targetType
     *
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * Set titleAttribute
     *
     * @param string $titleAttribute
     *
     * @return lienMenu
     */
    public function setTitleAttribute($titleAttribute)
    {
        $this->titleAttribute = $titleAttribute;

        return $this;
    }

    /**
     * Get titleAttribute
     *
     * @return string
     */
    public function getTitleAttribute()
    {
        return $this->titleAttribute;
    }

    /**
     * Set cssClass
     *
     * @param string $cssClass
     *
     * @return lienMenu
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;

        return $this;
    }

    /**
     * Get cssClass
     *
     * @return string
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * Set imgLink
     *
     * @param string $imgLink
     *
     * @return lienMenu
     */
    public function setImgLink($imgLink)
    {
        $this->imgLink = $imgLink;

        return $this;
    }

    /**
     * Get imgLink
     *
     * @return string
     */
    public function getImgLink()
    {
        return $this->imgLink;
    }

    /**
     * Set imgTypeLink
     *
     * @param string $imgTypeLink
     *
     * @return lienMenu
     */
    public function setImgTypeLink($imgTypeLink)
    {
        $this->imgTypeLink = $imgTypeLink;

        return $this;
    }

    /**
     * Get imgTypeLink
     *
     * @return string
     */
    public function getImgTypeLink()
    {
        return $this->imgTypeLink;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return lienMenu
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set template
     *
     * @param \TemplateBundle\Entity\Template $template
     *
     * @return lienMenu
     */
    public function setTemplate(\TemplateBundle\Entity\Template $template = null)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return \TemplateBundle\Entity\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
