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
     * @ORM\Column(name="cssClassPerso", type="string", length=255)
     */
    private $cssClassPerso;

    /**
     * @var string
     *
     * @ORM\Column(name="cssId", type="string", length=255,nullable=true)
     */
    private $cssId;

    /**
     * @ORM\ManyToMany(targetEntity="ModuleBundle\CustomModules\HtmlModule\Entity\Module")
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
     * @ORM\ManyToOne(targetEntity="PageBundle\Entity\Row", inversedBy="cols")
     * @ORM\JoinColumn(name="row_id", referencedColumnName="id")
     */
    private $row;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
   
    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;
    
    public function __construct() {
        $this->modules = new \Doctrine\Common\Collections\ArrayCollection();
    }


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

    /**
     * Add module
     *
     * @param \ModuleBundle\CustomModules\HtmlModule\Entity\Module $module
     *
     * @return Col
     */
    public function addModule(\ModuleBundle\CustomModules\HtmlModule\Entity\Module $module)
    {
        $this->modules[] = $module;
    
        return $this;
    }

    /**
     * Remove module
     *
     * @param \ModuleBundle\CustomModules\HtmlModule\Entity\Module $module
     */
    public function removeModule(\ModuleBundle\CustomModules\HtmlModule\Entity\Module $module)
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
     * Set row
     *
     * @param \PageBundle\Entity\Row $row
     *
     * @return Col
     */
    public function setRow(\PageBundle\Entity\Row $row = null)
    {
        $this->row = $row;
    
        return $this;
    }

    /**
     * Get row
     *
     * @return \PageBundle\Entity\Row
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Col
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
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return Col
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set cssClassPerso
     *
     * @param string $cssClassPerso
     *
     * @return Col
     */
    public function setCssClassPerso($cssClassPerso)
    {
        $this->cssClassPerso = $cssClassPerso;
    
        return $this;
    }

    /**
     * Get cssClassPerso
     *
     * @return string
     */
    public function getCssClassPerso()
    {
        return $this->cssClassPerso;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Col
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
