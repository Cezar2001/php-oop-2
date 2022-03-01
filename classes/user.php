<?php 

require_once __DIR__ . "/credit-card.php";
require_once __DIR__ . "/cart-product.php";

class User {
    protected string $name;
    protected string $surName;
    protected string $email;
    protected bool $registered = false;

    protected int $discount = 20;

    protected array $cart = [];
    protected float $cartTotal = 0;

    protected ?CreditCard $creditCard = null;

    function __construct(){
        
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
    public function getRegistered(): bool
    {
        return $this->registered;
    }

    /**
     * Set the value of registered
     *
     * @return  self
     */ 
    public function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    /**
     * Get the value of discount
     * no discount
     */ 
    public function getDiscount(): int
    {
        return $this->registered ? $this->discount : 0;
    }


    /**
     * Get the value of cart
     */ 
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @return  self
     */ 
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get the value of cartTotal +
     * discount
     */ 
    public function getCartTotal(): float
    {
        if ($this->registered) {
            return $this->cartTotal - (($this->cartTotal * $this->getDiscount()) / 100);
        }
        return $this->cartTotal;
    }

    /**
     * Set the value of cartTotal
     *
     * @return  self
     */ 
    public function setCartTotal($cartTotal)
    {
        $this->cartTotal = $cartTotal;

        return $this;
    }

    /**
     * carta credito
     */
    public function getCreditCard(): ?CreditCard {
        return $this-> creditCard;
    }

    public function setCreditCard(string $cardNumber, int $cardCvvCode, string $cardExpiringDate){
        if(( !isset($this->name) || !isset($this->surName)) && is_null($this->email)){
            return false;
        } else {
            $this->creditCard = new CreditCard($cardNumber, $cardCvvCode, $cardExpiringDate);
        }
    }

    protected function productInCart(string $needId) {
        $found = false;

        foreach($this->getCart() as $key => $cartProduct){
            $productId = $cartProduct->getProduct()->getId();

            if($productId == $needId) {
                $found = $key;

                break;
            }
        }
        return $found;
    }

    public function addToCart($product) {
        $exist = $this->productInCart($product->getId());

        if ($exist !== false) {
            $this->cart[$exist]->increaseQuantity();          
        } else {
            $cartProduct = new CartProduct($product);
            $this->cart[] = $cartProduct;
        }

        $this->newCartPrice();
    }

    private function newCartPrice() {
        $sum = 0;
        
        foreach ($this->getCart() as $product) {
          $sum += $product->getTotalPrice();
        }
        
        $this->cartTotal = $sum;
      }

}

?>