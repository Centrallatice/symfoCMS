<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColsModules
 *
 * @ORM\Table(name="cols_modules")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\ColsModulesRepository")
 */
class ColsModules
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
     * @ORM\Column(name="moduleType", type="string", length=20, nullable=false)
     */
    private $moduleType;

    /**
     * @var string
     *
     * @ORM\Column(name="moduleId", type="integer")
     */
    private $moduleId;

    /**
   * @ORM\ManyToOne(targetEntity="PageBundle\Entity\Col")
   * @ORM\JoinColumn(name="colId",nullable=false)
   */
    private $colId;


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
     * Set moduleType
     *
     * @param string $moduleType
     *
     * @return ColsModules
     */
    public function setModuleType($moduleType)
    {
        $this->moduleType = $moduleType;
    
        return $this;
    }

    /**
     * Get moduleType
     *
     * @return string
     */
    public function getModuleType()
    {
        return $this->moduleType;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return ColsModules
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;
    
        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set colId
     *
     * @param \PageBundle\Entity\Col $colId
     *
     * @return ColsModules
     */
    public function setColId(\PageBundle\Entity\Col $colId)
    {
        $this->colId = $colId;
    
        return $this;
    }

    /**
     * Get colId
     *
     * @return \PageBundle\Entity\Col
     */
    public function getColId()
    {
        return $this->colId;
    }
}
