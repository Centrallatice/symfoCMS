<?php

namespace ModuleBundle\CustomModules\HtmlModule\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HtmlModule
 *
 * @ORM\Table(name="HTML_module")
 * @ORM\Entity(repositoryClass="ModuleBundle\CustomModules\HtmlModule\Repository\HtmlModuleRepository")
 */
class HtmlModule
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
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * Set content
     *
     * @param string $content
     *
     * @return HtmlModule
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    
    public function getType(){
        return 'HTML';
    }
}