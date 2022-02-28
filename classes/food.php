<?php 

require_once __DIR__ . "/product.php";

class Food extends Products{
    
    protected string $type;
    protected string $tastes;
    protected int $weight;
    protected int $quantity;

    public function __construct(string $_name, string $_description, float $_price,
    string $_type, string $_tastes, int $_weight, int $_quantity){
        $this-> type = $_type;
        $this-> tastes = $_tastes;
        $this-> weight = $_weight;
        $this-> quantity = $_quantity;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of tastes
     */ 
    public function getTastes()
    {
        return $this->tastes;
    }

    /**
     * Set the value of tastes
     *
     * @return  self
     */ 
    public function setTastes($tastes)
    {
        $this->tastes = $tastes;

        return $this;
    }

    /**
     * Get the value of wight
     */ 
    public function getWight()
    {
        return $this->wight;
    }

    /**
     * Set the value of wight
     *
     * @return  self
     */ 
    public function setWight($wight)
    {
        $this->wight = $wight;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}

?>