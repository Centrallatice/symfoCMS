<?php

namespace PageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use PageBundle\Entity\metaKeyWord;
use ArticleBundle\Entity\Article;

/**
 * keyWordsPage
 *
 * @ORM\Table(name="keyWordsArticle")
 * @ORM\Entity(repositoryClass="PageBundle\Repository\keyWordsArticleRepository")
 */
class keyWordsArticle extends metaKeyWord
{
     /**
   * @ORM\ManyToOne(targetEntity="ArticleBundle\Entity\Article",inversedBy="keywords")
   * @ORM\JoinColumn(nullable=false)
   */
    private $associationId;


    /**
     * Set associationId
     *
     * @param \ArticleBundle\Entity\Article $associationId
     *
     * @return keyWordsPage
     */
    public function setAssociationId(Article $associationId)
    {
        $this->associationId = $associationId;

        return $this;
    }

    /**
     * Get associationId
     *
     * @return \ArticleBundle\Entity\Article
     */
    public function getAssociationId()
    {
        return $this->associationId;
    }
}
