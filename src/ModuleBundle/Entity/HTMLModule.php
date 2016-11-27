<?php

namespace ModuleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HTMLModule
 *
 * @ORM\Table(name="HTML_module")
 * @ORM\Entity(repositoryClass="ModuleBundle\Repository\HTMLModuleRepository")
 */
class HTMLModule extends ModuleType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
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
     * @return HTMLModule
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
    
}
