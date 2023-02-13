<?php
namespace App\Models;

class Animal
{
    protected $id;
    protected $type;
    protected $name;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    // SET METHODS
    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}