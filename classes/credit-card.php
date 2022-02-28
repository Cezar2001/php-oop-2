<?php 

class CreditCard{
    protected string $cardNumber;
    protected int $cardCvvCode;
    protected string $cardExpiringDate;

    public function __construct(string $_cardNumber, int $_cardCvvCode,
    string $_cardExpiringDate){
        $this-> cardNumber = $_cardNumber;
        $this-> cardCvvCode = $_cardCvvCode;
        $this-> cardExpiringDate = $_cardExpiringDate;
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
        if (strlen($cardNumber) == 16) {
            $this->cardNumber = $cardNumber;
            return $this;
        } else {
            $this->cardNumber = "CARTA INESISTENTE!";
            return $this;
        }
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
        if(is_int($cardCvvCode) && strlen($cardCvvCode) == 3){
            $this->cardCvvCode = $cardCvvCode;
            return $this;
        } else {
            $this->cardCvvCode = "CVV NON VALIDO!";
            return $this;
        }
    }

    /**
     * Get the value of carExpiringDate
     */ 
    public function getCarExpiringDate()
    {
        return $this->carExpiringDate;
    }

    /**
     * Set the value of carExpiringDate
     *
     * @return  self
     */ 
    public function setCardExpiringDate($cardExpiringDate)
    {
        $currentDate = date('m.d.y');
        $expireDate = date_create($cardExpiringDate);
        
        if($expireDate <  $currentDate){   
            $this->cardExpiringDate = "CARTA NON VALIDA!";
            return $this;
        }

        $this->cardExpiringDate = $cardExpiringDate;

    }
}

?>