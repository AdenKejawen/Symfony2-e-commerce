<?php

namespace Bundle\ECommerce\SalesBundle\Entities;

use Symfony\Components\Validator\Constraints;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Components\Validator\Mapping\ClassMetadata;

use Bundle\ECommerce\ProductBundle\Document\ConfigurableProduct;

/**
 * Order
 * Represents an order.
 *
 * @author Klein Florian
 * @Entity
 * @Table(name="order")
 * @HasLifecycleCallbacks
 */
class Order
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $product_id;

    /**
     * @var Bundle\ECommerce\ProductBundle\Document\ConfigurableProduct;
     */
    private $product;

    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->product_id;
    }

    public function setProduct(ConfigurableProduct $product)
    {
        $this->product_id = $product->getId();
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }
}

