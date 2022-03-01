<?php 

class CartProduct {
    protected int $quantity = 1;
    protected float $totalPrice = 0;
    protected $product;

    public function __construct($_product, $_quantity = 1)
    {
        $this->setQuantity($_quantity);
        $this->setProduct($_product);
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
        $this->totalPrice = $this->quantity * $this->getProduct()->getPrice();
    }

    public function increaseQuantity(int $quantity = 1){
        $this->setQuantity($this->getQuantity() + $quantity);
    }

    /**
     * Get the value of totalPrice
     */ 
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set the value of totalPrice
     *
     * @return  self
     */ 
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get the value of product

     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }
}
?>