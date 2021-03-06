<?php

namespace Bundle\ECommerce\ProductBundle\Document;

use Bundle\ECommerce\ProductBundle\Document\Option;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @mongodb:EmbeddedDocument()
 */
class Attribute
{
    /**
     * @mongodb:Id
     */
    protected $id;

    /**
     * @mongodb:String
     */
    protected $name;

    /**
     * @mongodb:EmbedMany(targetDocument="Bundle\ECommerce\ProductBundle\Document\Option")
     */
    protected $options = array();

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    public function  __toString()
    {
        return (string) $this->getName();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions(ArrayCollection $options)
    {
        $this->options = $options;

        return $this;
    }

    public function addOption(Option $option)
    {
        if (!$this->hasOption($option)) {
            $this->options[] = $option;
        }

        return $this;
    }

    public function removeOption(Option $option)
    {
        return $this->options->removeElement($option);
    }

    public function getOption(Option $option)
    {
        $key = array_search($option, $this->options->toArray(), true);

        if ($key !== false) {
            return $this->options->get($key);
        }
    }

    public function hasOption(Option $option)
    {
        return $this->options->contains($option);
    }
}

