<?php 

require_once __DIR__ . "/product.php";

class Toys extends Products{

    protected string $material;
    protected string $color;
    protected string $form;

    public function __construct(string $_name, string $_description, float $_price,
    string $_material, string $_color, string $_form){
        parent:: __construct($_name, $_description, $_price);

        $this-> material = $_material;
        $this-> color = $_color;
        $this-> form = $_form;
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
}

?>