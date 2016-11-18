<?php

namespace PageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use PageBundle\Entity\metaKeyWord;
use PageBundle\Entity\Page;

/**
 * keyWordsPage
 *
 * @ORM\Table(name="keyWordsPage")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\keyWordsPageRepository")
 */
class keyWordsPage extends metaKeyWord
{
     /**
   * @ORM\ManyToOne(targetEntity="PageBundle\Entity\Page")
   * @ORM\JoinColumn(nullable=false,inversedBy="keywords")
   */
    private $associationId;



    /**
     * Set associationId
     *
     * @param \PageBundle\Entity\Page $associationId
     *
     * @return keyWordsPage
     */
    public function setAssociationId(Page $associationId)
    {
        $this->associationId = $associationId;

        return $this;
    }

    /**
     * Get associationId
     *
     * @return \PageBundle\Entity\Page
     */
    public function getAssociationId()
    {
        return $this->associationId;
    }
}
