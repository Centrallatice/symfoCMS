<?php

namespace Proxies\__CG__\PageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Page extends \PageBundle\Entity\Page implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'titre', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'description', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'keywords', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'auteur', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'isHomepage', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'creationDate', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'rows'];
        }

        return ['__isInitialized__', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'id', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'titre', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'description', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'keywords', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'auteur', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'isHomepage', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'creationDate', '' . "\0" . 'PageBundle\\Entity\\Page' . "\0" . 'rows'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Page $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur($auteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', [$auteur]);

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', []);

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsHomepage($isHomepage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsHomepage', [$isHomepage]);

        return parent::setIsHomepage($isHomepage);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsHomepage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsHomepage', []);

        return parent::getIsHomepage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate($creationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', [$creationDate]);

        return parent::setCreationDate($creationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', []);

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function addKeyword(\PageBundle\Entity\keyWordsPage $keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addKeyword', [$keyword]);

        return parent::addKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function removeKeyword(\PageBundle\Entity\keyWordsPage $keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeKeyword', [$keyword]);

        return parent::removeKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeywords()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeywords', []);

        return parent::getKeywords();
    }

    /**
     * {@inheritDoc}
     */
    public function addRow(\PageBundle\Entity\Row $row)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRow', [$row]);

        return parent::addRow($row);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRow(\PageBundle\Entity\Row $row)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRow', [$row]);

        return parent::removeRow($row);
    }

    /**
     * {@inheritDoc}
     */
    public function getRows()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRows', []);

        return parent::getRows();
    }

}
