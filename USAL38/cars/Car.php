<?php
class Car
{
    /** @var int $id the car identifier */
    private int $id;
    /** @var string $name the car name */
    private string $name;
    /** @var int $model the car model */
    private int $model;
    /** @var int $cylinders the car cylinder  */
    private int $cylinders;
    /**@var int $horsepower the car horsepower */
    private int $horsepower;
    /** @var int $weight the car weight */
    private int $weight;
    /** @var string $origin the car origin.
     * must be 2 char length
     */
    private string $origin;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
