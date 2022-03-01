<?php 

require_once __DIR__ . "/product.php";

class Toys extends Products{
    protected string $animalDestination;
    protected string $material;
    protected string $color;
    protected string $form;

    public function __construct(string $_name, float $_price, 
    string $_animalDestination){
        parent:: __construct($_name, $_price);
        
        $this-> setAnimalDestination($_animalDestination);
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of form
     */ 
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set the value of form
     *
     * @return  self
     */ 
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get the value of animalDestination
     */ 
    public function getAnimalDestination()
    {
        return $this->animalDestination;
    }

    /**
     * Set the value of animalDestination
     *
     * @return  self
     */ 
    public function setAnimalDestination($animalDestination)
    {
        $this->animalDestination = $animalDestination;

        return $this;
    }
}

?>