<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Col
 *
 * @ORM\Table(name="col")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\ColRepository")
 */
class Col
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
     * @ORM\Column(name="titreAdmin", type="string", length=255,nullable=true)
     */
    private $titreAdmin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titreClient", type="string", length=255,nullable=true)
     */
    private $titreClient;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cssClass", type="string", length=255)
     */
    private $cssClass;

    /**
     * @var string
     *
     * @ORM\Column(name="cssId", type="string", length=255,nullable=true)
     */
    private $cssId;

    /**
     * @var string
     *
     * @ORM\Column(name="htmlContent", type="text",nullable=true)
     */
    private $htmlContent;


    /**
     * @ORM\ManyToMany(targetEntity="ModuleBundle\Entity\Module")
     * @ORM\JoinTable(name="cols_modules",
     *      joinColumns={@ORM\JoinColumn(name="col_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="module_id", referencedColumnName="id", unique=true)}
     *      )
     */
    
    private $modules;
    
    /**
     * @var string
     *
     * @ORM\Column(name="enteteType", type="string", length=2,nullable=true)
     */
    private $enteteType;
    
    
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
     * Set cssClass
     *
     * @param string $cssClass
     *
     * @return Col
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
     * Set cssId
     *
     * @param string $cssId
     *
     * @return Col
     */
    public function setCssId($cssId)
    {
        $this->cssId = $cssId;

        return $this;
    }

    /**
     * Get cssId
     *
     * @return string
     */
    public function getCssId()
    {
        return $this->cssId;
    }

    /**
     * Set htmlContent
     *
     * @param string $htmlContent
     *
     * @return Col
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;

        return $this;
    }

    /**
     * Get htmlContent
     *
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }
    
    public function __construct() {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set titreAdmin
     *
     * @param string $titreAdmin
     *
     * @return Col
     */
    public function setTitreAdmin($titreAdmin)
    {
        $this->titreAdmin = $titreAdmin;

        return $this;
    }

    /**
     * Get titreAdmin
     *
     * @return string
     */
    public function getTitreAdmin()
    {
        return $this->titreAdmin;
    }

    /**
     * Set titreClient
     *
     * @param string $titreClient
     *
     * @return Col
     */
    public function setTitreClient($titreClient)
    {
        $this->titreClient = $titreClient;

        return $this;
    }

    /**
     * Get titreClient
     *
     * @return string
     */
    public function getTitreClient()
    {
        return $this->titreClient;
    }

    /**
     * Add module
     *
     * @param \ModuleBundle\Entity\Module $module
     *
     * @return Col
     */
    public function addModule(\ModuleBundle\Entity\Module $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \ModuleBundle\Entity\Module $module
     */
    public function removeModule(\ModuleBundle\Entity\Module $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set enteteType
     *
     * @param string $enteteType
     *
     * @return Col
     */
    public function setEnteteType($enteteType)
    {
        $this->enteteType = $enteteType;

        return $this;
    }

    /**
     * Get enteteType
     *
     * @return string
     */
    public function getEnteteType()
    {
        return $this->enteteType;
    }
}
