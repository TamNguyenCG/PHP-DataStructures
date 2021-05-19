<?php


class Dancer
{
    public string $name;
    public string $gender;

    public function __construct(string $name, string $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}