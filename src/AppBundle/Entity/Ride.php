<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ride
 *
 * @ORM\Table(name="ride")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RideRepository")
 */
class Ride
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
     * @var \DateTime
     *
     * @ORM\Column(name="arrival", type="datetime")
     */
    private $arrival;

    /**
     * @var string
     *
     * @ORM\Column(name="cityArrival", type="string", length=255)
     */
    private $cityArrival;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="departure", type="datetime")
     */
    private $departure;

    /**
     * @var string
     *
     * @ORM\Column(name="cityDeparture", type="string", length=255)
     */
    private $cityDeparture;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

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
     * Set arrival
     *
     * @param \DateTime $arrival
     *
     * @return Ride
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return \DateTime
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * Set cityArrival
     *
     * @param string $cityArrival
     *
     * @return Ride
     */
    public function setCityArrival($cityArrival)
    {
        $this->cityArrival = $cityArrival;

        return $this;
    }

    /**
     * Get cityArrival
     *
     * @return string
     */
    public function getCityArrival()
    {
        return $this->cityArrival;
    }

    /**
     * Set departure
     *
     * @param \DateTime $departure
     *
     * @return Ride
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \DateTime
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * Set cityDeparture
     *
     * @param string $cityDeparture
     *
     * @return Ride
     */
    public function setCityDeparture($cityDeparture)
    {
        $this->cityDeparture = $cityDeparture;

        return $this;
    }

    /**
     * Get cityDeparture
     *
     * @return string
     */
    public function getCityDeparture()
    {
        return $this->cityDeparture;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Ride
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}

