<?php

namespace Application\AutoBundle\Entity;
use Application\ProductBundle\Entity\Product;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ApiResource(
 *     itemOperations={
 *          "getCar"={"route_name"="get_car"},
 *          "updateCar"={"route_name"="update_car"},
 *      },
 *     collectionOperations = {
 *          "addCar"={"route_name"="add_car"},
 *          "getCars"={"route_name"="get_cars"}
 *      },
 *     attributes={
 *          "jsonld_embed_context"=true,
 *          "normalization_context"={"groups"={"car", "user-read"}},
 *          "denormalization_context"={"groups"={"car", "user-write"}}
 * }
 *  )
 */
class Car extends Product
{
    /**
     * @Groups({"car"})
     * @var string
     */
    protected $id;

    /**
     * @Groups({"car"})
     * @var string
     */
    private $fuel;

    /**
     * @Groups({"car"})
     * @var float
     */
    private $mileage;

    /**
     * @Groups({"car"})
     * @var float
     */
    private $engineCapacity;

    /**
     * @Groups({"car"})
     * @var string
     */
    private $vehicleType;

    /**
     * @Groups({"car"})
     * @var string
     */
    private $carCondition;

    /**
     * @Groups({"car"})
     * @var int
     */
    private $seatsNumber;

    /**
     * @Groups({"car"})
     * @var string
     */
    private $transmission;

    /**
     * @Groups({"car"})
     * @var string
     */
    private $exteriorColour;

    /**
     * @Groups({"car"})
     * @var bool
     */
    private $airConditioning;

    /**
     * @Groups({"car"})
     * @var \DateTime
     */
    protected $dateUpdated;

    /**
     * @Groups({"car"})
     * @var \DateTime
     */
    protected $dateCreated;

    /**
     * @Groups({"car"})
     * @var integer
     */
    private $models;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set fuel
     *
     * @param string $fuel
     *
     * @return Car
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;

        return $this;
    }

    /**
     * Get fuel
     *
     * @return string
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Set mileage
     *
     * @param float $mileage
     *
     * @return Car
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * Get mileage
     *
     * @return float
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * Set engineCapacity
     *
     * @param float $engineCapacity
     *
     * @return Car
     */
    public function setEngineCapacity($engineCapacity)
    {
        $this->engineCapacity = $engineCapacity;

        return $this;
    }

    /**
     * Get engineCapacity
     *
     * @return float
     */
    public function getEngineCapacity()
    {
        return $this->engineCapacity;
    }

    /**
     * Set vehicleType
     *
     * @param string $vehicleType
     *
     * @return Car
     */
    public function setVehicleType($vehicleType)
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * Get vehicleType
     *
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicleType;
    }

    /**
     * Set carCondition
     *
     * @param string $carCondition
     *
     * @return Car
     */
    public function setCarCondition($carCondition)
    {
        $this->carCondition = $carCondition;

        return $this;
    }

    /**
     * Get carCondition
     *
     * @return string
     */
    public function getCarCondition()
    {
        return $this->carCondition;
    }

    /**
     * Set seatsNumber
     *
     * @param integer $seatsNumber
     *
     * @return Car
     */
    public function setSeatsNumber($seatsNumber)
    {
        $this->seatsNumber = $seatsNumber;

        return $this;
    }

    /**
     * Get seatsNumber
     *
     * @return int
     */
    public function getSeatsNumber()
    {
        return $this->seatsNumber;
    }

    /**
     * Set transmission
     *
     * @param string $transmission
     *
     * @return Car
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;

        return $this;
    }

    /**
     * Get transmission
     *
     * @return string
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Set exteriorColour
     *
     * @param string $exteriorColour
     *
     * @return Car
     */
    public function setExteriorColour($exteriorColour)
    {
        $this->exteriorColour = $exteriorColour;

        return $this;
    }

    /**
     * Get exteriorColour
     *
     * @return string
     */
    public function getExteriorColour()
    {
        return $this->exteriorColour;
    }

    /**
     * Set airConditioning
     *
     * @param boolean $airConditioning
     *
     * @return Car
     */
    public function setAirConditioning($airConditioning)
    {
        $this->airConditioning = $airConditioning;

        return $this;
    }

    /**
     * Get airConditioning
     *
     * @return bool
     */
    public function getAirConditioning()
    {
        return $this->airConditioning;
    }


    /**
     * Set models
     *
     * @param \Application\AutoBundle\Entity\Model $models
     *
     * @return Car
     */
    public function setModels(\Application\AutoBundle\Entity\Model $models = null)
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Get models
     *
     * @return \Application\AutoBundle\Entity\Model
     */
    public function getModels()
    {
        return $this->models;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     *
     * @return Car
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Car
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function prePersist()
    {
        $this->dateCreated = new \DateTime();
    }


    public function preUpdate()
    {
        $this->dateUpdated = new \DateTime();
    }
}
