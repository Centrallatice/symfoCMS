<?php

namespace Proxies\__CG__\PageBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Row extends \PageBundle\Entity\Row implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'id', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'cssClass', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'titreAdmin', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'titreClient', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'cssId', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'enteteType', 'disposition', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'page', 'etat', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'cols'];
        }

        return ['__isInitialized__', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'id', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'cssClass', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'titreAdmin', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'titreClient', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'cssId', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'enteteType', 'disposition', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'page', 'etat', '' . "\0" . 'PageBundle\\Entity\\Row' . "\0" . 'cols'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Row $proxy) {
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
    public function setCssClass($cssClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCssClass', [$cssClass]);

        return parent::setCssClass($cssClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getCssClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCssClass', []);

        return parent::getCssClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreAdmin($titreAdmin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreAdmin', [$titreAdmin]);

        return parent::setTitreAdmin($titreAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreAdmin', []);

        return parent::getTitreAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitreClient($titreClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitreClient', [$titreClient]);

        return parent::setTitreClient($titreClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitreClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitreClient', []);

        return parent::getTitreClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setCssId($cssId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCssId', [$cssId]);

        return parent::setCssId($cssId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCssId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCssId', []);

        return parent::getCssId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnteteType($enteteType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnteteType', [$enteteType]);

        return parent::setEnteteType($enteteType);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnteteType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnteteType', []);

        return parent::getEnteteType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisposition(\PageBundle\Entity\DispositionRow $disposition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisposition', [$disposition]);

        return parent::setDisposition($disposition);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisposition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisposition', []);

        return parent::getDisposition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPage(\PageBundle\Entity\Page $page = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPage', [$page]);

        return parent::setPage($page);
    }

    /**
     * {@inheritDoc}
     */
    public function getPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPage', []);

        return parent::getPage();
    }

    /**
     * {@inheritDoc}
     */
    public function addCol(\PageBundle\Entity\Col $col)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCol', [$col]);

        return parent::addCol($col);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCol(\PageBundle\Entity\Col $col)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCol', [$col]);

        return parent::removeCol($col);
    }

    /**
     * {@inheritDoc}
     */
    public function getCols()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCols', []);

        return parent::getCols();
    }

}