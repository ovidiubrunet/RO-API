<?php

namespace Application\AutoBundle\Entity;

/**
 * AutoSubCategoryHasProducers
 */
class AutoSubCategoryHasProducers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $subcategories;

    /**
     * @var int
     */
    private $producers;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set subcategories
     *
     * @param integer $subcategories
     *
     * @return AutoSubCategoryHasProducers
     */
    public function setSubcategories($subcategories)
    {
        $this->subcategories = $subcategories;

        return $this;
    }

    /**
     * Get subcategories
     *
     * @return int
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * Set producers
     *
     * @param integer $producers
     *
     * @return AutoSubCategoryHasProducers
     */
    public function setProducers($producers)
    {
        $this->producers = $producers;

        return $this;
    }

    /**
     * Get producers
     *
     * @return int
     */
    public function getProducers()
    {
        return $this->producers;
    }
}

