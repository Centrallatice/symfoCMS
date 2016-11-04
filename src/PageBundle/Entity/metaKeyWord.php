<?php

namespace PageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\MappedSuperclass */
abstract class metaKeyWord {
    
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
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="associationType", type="string", length=255)
     */
    private $associationType;
    

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
     * Set value
     *
     * @param string $value
     *
     * @return metaKeyWord
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set associationType
     *
     * @param string $associationType
     *
     * @return metaKeyWord
     */
    public function setAssociationType($associationType)
    {
        $this->associationType = $associationType;

        return $this;
    }

    /**
     * Get associationType
     *
     * @return string
     */
    public function getAssociationType()
    {
        return $this->associationType;
    }
}
