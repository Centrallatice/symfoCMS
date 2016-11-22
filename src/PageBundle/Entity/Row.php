<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PageBundle\Entity\Col;

/**
 * Row
 *
 * @ORM\Table(name="row")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\RowRepository")
 */
class Row
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
     * @ORM\Column(name="cssClass", type="string", length=255,nullable=true)
     */
    private $cssClass;
    
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
     * @ORM\Column(name="cssId", type="string", length=255,nullable=true)
     */
    private $cssId;
    
    /**
     * @var string
     *
     * @ORM\Column(name="enteteType", type="string", length=2,nullable=true)
     */
    private $enteteType; 
    
    /**
     * @ORM\ManyToOne(targetEntity="PageBundle\Entity\DispositionRow")
     * @ORM\JoinColumn(name="disposition", referencedColumnName="id",nullable=false)
    */
    protected $disposition;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="PageBundle\Entity\Page", inversedBy="rows")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $page;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    protected $etat;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer")
     */
    private $ordre;
    
    /**
     * @ORM\OneToMany(targetEntity="PageBundle\Entity\Col", cascade={"remove"}, mappedBy="row")
     */
    private $cols;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etat=false;
        $this->cols = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cssClass
     *
     * @param string $cssClass
     *
     * @return Row
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
     * Set titreAdmin
     *
     * @param string $titreAdmin
     *
     * @return Row
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
     * @return Row
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
     * Set cssId
     *
     * @param string $cssId
     *
     * @return Row
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
     * Set enteteType
     *
     * @param string $enteteType
     *
     * @return Row
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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Row
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
     * Set disposition
     *
     * @param \PageBundle\Entity\DispositionRow $disposition
     *
     * @return Row
     */
    public function setDisposition(\PageBundle\Entity\DispositionRow $disposition)
    {
        $this->disposition = $disposition;
    
        return $this;
    }

    /**
     * Get disposition
     *
     * @return \PageBundle\Entity\DispositionRow
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Set page
     *
     * @param \PageBundle\Entity\Page $page
     *
     * @return Row
     */
    public function setPage(\PageBundle\Entity\Page $page = null)
    {
        $this->page = $page;
    
        return $this;
    }

    /**
     * Get page
     *
     * @return \PageBundle\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Add col
     *
     * @param \PageBundle\Entity\Col $col
     *
     * @return Row
     */
    public function addCol(\PageBundle\Entity\Col $col)
    {
        $this->cols[] = $col;
    
        return $this;
    }

    /**
     * Remove col
     *
     * @param \PageBundle\Entity\Col $col
     */
    public function removeCol(\PageBundle\Entity\Col $col)
    {
        $this->cols->removeElement($col);
    }

    /**
     * Get cols
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCols()
    {
        return $this->cols;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return Row
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
}
