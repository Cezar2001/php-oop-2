<?php 

require_once __DIR__ . "/credit-card.php";

class User extends CreditCard{
    protected string $name;
    protected string $surName;
    protected string $email;
    protected bool $registered = false;
    protected int $discount = 20;

    public function __construct(string $_name, string $_surName, string $_email,
    bool $_registered, int $_discount, string $_cardNumber, int $_cardCvvCode,
    string $_cardExpiringDate){
        parent:: __construct($_cardNumber, $_cardCvvCode, $_cardExpiringDate);
        
        $this-> name = $_name;
        $this-> surName = $_surName;
        $this-> email = $_email;
        $this-> registered = $_registered;
        $this-> discount = $_discount;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surName
     */ 
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Set the value of surName
     *
     * @return  self
     */ 
    public function setSurName($surName)
    {
        $this->surName = $surName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of registered
     */ 
    public function getRegistered()
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($price = 0)
    {
        if($this->registered == true){
            $priceDiscount = ($this-> discount / 100) * $price;
            $totalPrice = $price - $priceDiscount;
            return $totalPrice;
        } else{
            return $price;
        }
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

?>