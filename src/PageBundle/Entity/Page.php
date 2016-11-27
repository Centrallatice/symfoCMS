<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\PageRepository")
 */
class Page
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

   

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="isHomepage", type="boolean")
     */
    private $isHomepage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @ORM\ManyToOne(targetEntity="CategoryBundle\Entity\Category")
     * @ORM\JoinColumn(name="category", referencedColumnName="id",nullable=true)
    */
    private $category;
    
    /**
     * @ORM\OneToMany(targetEntity="PageBundle\Entity\Row", cascade={"remove"}, mappedBy="page")
     */
    
    private $rows;
    
    public function __construct() {
        $this->setCreationDate(new \DateTime());
        $this->rows = new \Doctrine\Common\Collections\ArrayCollection();
        $this->keywords = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Page
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Page
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Page
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set isHomepage
     *
     * @param boolean $isHomepage
     *
     * @return Page
     */
    public function setIsHomepage($isHomepage)
    {
        $this->isHomepage = $isHomepage;
    
        return $this;
    }

    /**
     * Get isHomepage
     *
     * @return boolean
     */
    public function getIsHomepage()
    {
        return $this->isHomepage;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Page
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    
        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Add keyword
     *
     * @param \PageBundle\Entity\keyWords $keyword
     *
     * @return Page
     */
    public function addKeyword(\PageBundle\Entity\keyWords $keyword)
    {
        $this->keywords[] = $keyword;
    
        return $this;
    }

    /**
     * Remove keyword
     *
     * @param \PageBundle\Entity\keyWords $keyword
     */
    public function removeKeyword(\PageBundle\Entity\keyWords $keyword)
    {
        $this->keywords->removeElement($keyword);
    }

    /**
     * Get keywords
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set category
     *
     * @param \CategoryBundle\Entity\Category $category
     *
     * @return Page
     */
    public function setCategory(\CategoryBundle\Entity\Category $category = null)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \CategoryBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Add row
     *
     * @param \PageBundle\Entity\Row $row
     *
     * @return Page
     */
    public function addRow(\PageBundle\Entity\Row $row)
    {
        $this->rows[] = $row;
    
        return $this;
    }

    /**
     * Remove row
     *
     * @param \PageBundle\Entity\Row $row
     */
    public function removeRow(\PageBundle\Entity\Row $row)
    {
        $this->rows->removeElement($row);
    }

    /**
     * Get rows
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRows()
    {
        return $this->rows;
    }
}
