<?php

namespace ModuleBundle\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping as ORM;

/** @MappedSuperclass */
class ModuleType {
    /** @ORM\Column(type="integer") */
    protected $id;
    /** @ORM\Column(type="string") */
    protected $nom;
    /** @ORM\Column(type="datetime") */
    protected $createdDate;
    /**
     * @ORM\OneToOne(targetEntity="AdminBundle\Entity\User")
     * @ORM\JoinColumn(name="auteur_id", referencedColumnName="id")
     */
    protected $auteur;
    /** @ORM\Column(type="boolean")*/
    protected $etat;
    /**
     * @ORM\OneToOne(targetEntity="ModuleBundle\Entity\Module")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id",nullable=false)
     */
    protected $module;
}
