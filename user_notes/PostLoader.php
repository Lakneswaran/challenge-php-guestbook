<?php 

class Blackjack{

    private $player;
    private $dealer;
    private $deck;

    public function __construct()
    {
        $this -> deck  = new deck();
        $this -> deck -> shuffle();
        $this -> player = new player($this->deck);
        $this -> dealer = new dealer($this->deck);
    }


    public function getPlayer(){
        return $this->player;
    }


    public function getDealer(){
        return $this->dealer;
    }


    public function getDeck(){
        return $this->deck;
    }




}

?>