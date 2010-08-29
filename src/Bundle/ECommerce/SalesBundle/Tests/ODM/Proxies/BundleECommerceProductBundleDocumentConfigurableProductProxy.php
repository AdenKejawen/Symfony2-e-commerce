<?php

namespace ODM\Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class BundleECommerceProductBundleDocumentConfigurableProductProxy extends \Bundle\ECommerce\ProductBundle\Document\ConfigurableProduct implements \Doctrine\ODM\MongoDB\Proxy\Proxy
{
    public $__dm;
    public $__identifier;
    public $__isInitialized__ = false;

    public function __construct($dm, $identifier)
    {
        $this->__dm = $dm;
        $this->__identifier = $identifier;
        $this->__dm->getClassMetadata(__CLASS__)->setIdentifierValue($this, $this->__identifier);
    }

    private function load()
    {
        if ( ! $this->__isInitialized__ && $this->__dm) {
            $this->__isInitialized__ = true;
            if ($this->__dm->loadByID(get_class($this), $this->__identifier) === null) {
                throw \Doctrine\ODM\MongoDB\MongoDBException::documentNotFound(get_class($this), $this->__identifier);
            }
            unset($this->__dm);
            unset($this->__identifier);
        }
    }

    
    public function __toString()
    {
        $this->load();
        return parent::__toString();
    }

    public function getId()
    {
        $this->load();
        return parent::getId();
    }

    public function getName()
    {
        $this->load();
        return parent::getName();
    }

    public function setName($name)
    {
        $this->load();
        return parent::setName($name);
    }

    public function getOptions()
    {
        $this->load();
        return parent::getOptions();
    }

    public function addOption($name, $price = NULL, \Bundle\ECommerce\ProductBundle\Document\StockItem $item = NULL)
    {
        $this->load();
        return parent::addOption($name, $price, $item);
    }

    public function getOption($name)
    {
        $this->load();
        return parent::getOption($name);
    }

    public function removeOption($name)
    {
        $this->load();
        return parent::removeOption($name);
    }

    public function hasOption($name)
    {
        $this->load();
        return parent::hasOption($name);
    }

    public function selectOption($name)
    {
        $this->load();
        return parent::selectOption($name);
    }

    public function getPrice()
    {
        $this->load();
        return parent::getPrice();
    }


    public function __sleep()
    {
        return array('id', 'name', 'options');
    }
}