<?php
namespace src;

class Employee
{
    public string $surname;
    public string $name;
    public string $dateOfBirth;
    public string $address;
    public string $location;

    public function __construct($array)
    {
        $this->surname = $array["surname"];
        $this->name = $array["name"];
        $this->dateOfBirth = $array["dateOfBirth"];
        $this->address = $array["address"];
        $this->location = $array["location"];

    }

    /**
     * @return mixed|string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @return mixed|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed|string
     */
    public function getLocation()
    {
        return $this->location;
    }
}