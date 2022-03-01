<?php 

class CreditCard{
    protected string $cardNumber;
    protected int $cardCvvCode;
    protected DateTime $cardExpiringDate;

    public function __construct(string $_cardNumber, int $_cardCvvCode,
    string $_cardExpiringDate){
        $this->setCardNumber($_cardNumber);
        $this->setCardCvvCode($_cardCvvCode);
        $this->setCardExpiringDate($_cardExpiringDate);
    }

    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of cardCvvCode
     */ 
    public function getCardCvvCode()
    {
        return $this->cardCvvCode;
    }

    /**
     * Set the value of cardCvvCode
     *
     * @return  self
     */ 
    public function setCardCvvCode($cardCvvCode)
    {
        $this->cardCvvCode = $cardCvvCode;

        return $this;
    }    
    
    /**
     * Get the value of cardExpiringDate
     */ 
    public function getCardExpiringDate()
    {
        return $this->cardExpiringDate;
    }

    /**
     * Set the value of cardExpiringDate
     *
     * @return  self
     */ 
    public function setCardExpiringDate($cardExpiringDate)
    {
        $this->cardExpiringDate = $cardExpiringDate;

        return $this;
    }

}
?>