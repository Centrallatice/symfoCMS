<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Category")
     * @ORM\JoinColumn(name="categoryParente", referencedColumnName="id",nullable=true)
    */
    protected $categoryParente;
    
    /**
     * @ORM\ManyToMany(targetEntity="ArticleBundle\Entity\Category", cascade={"remove"})
     * @ORM\JoinTable(name="category_categories",
     *      joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $categoryEnfants;
    
    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var datetime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;
    
    /**
     * @var int
     *
     * @ORM\Column(name="depth", type="integer")
     */
    private $depth;


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
     * @return Category
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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Category
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
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Category
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Category
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
    
    public function __construct() {
        $this->setDateCreation(new \DateTime());
        $this->setDepth(0);
    }

    /**
     * Set categoryParente
     *
     * @param \ArticleBundle\Entity\Category $categoryParente
     *
     * @return Category
     */
    public function setCategoryParente(\ArticleBundle\Entity\Category $categoryParente = null)
    {
        $this->categoryParente = $categoryParente;

        return $this;
    }

    /**
     * Get categoryParente
     *
     * @return \ArticleBundle\Entity\Category
     */
    public function getCategoryParente()
    {
        return $this->categoryParente;
    }

    /**
     * Set depth
     *
     * @param integer $depth
     *
     * @return Category
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return integer
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Add categoryEnfant
     *
     * @param \ArticleBundle\Entity\Category $categoryEnfant
     *
     * @return Category
     */
    public function addCategoryEnfant(\ArticleBundle\Entity\Category $categoryEnfant)
    {
        $this->categoryEnfants[] = $categoryEnfant;

        return $this;
    }

    /**
     * Remove categoryEnfant
     *
     * @param \ArticleBundle\Entity\Category $categoryEnfant
     */
    public function removeCategoryEnfant(\ArticleBundle\Entity\Category $categoryEnfant)
    {
        $this->categoryEnfants->removeElement($categoryEnfant);
    }

    /**
     * Get categoryEnfants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategoryEnfants()
    {
        return $this->categoryEnfants;
    }
}
