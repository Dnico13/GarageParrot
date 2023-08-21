<?php

class Voiture{
    protected string $marque;
    protected string $modele;
    protected int $circulation;
    protected int $km;
    protected int $price;
    protected string $description;
    protected string $photo;
     
 

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of modele
     */ 
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */ 
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get the value of circulation
     */ 
    public function getCirculation()
    {
        return $this->circulation;
    }

    /**
     * Set the value of circulation
     *
     * @return  self
     */ 
    public function setCirculation($circulation)
    {
        $this->circulation = $circulation;

        return $this;
    }

    /**
     * Get the value of km
     */ 
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Set the value of km
     *
     * @return  self
     */ 
    public function setKm($km)
    {
        $this->km = $km;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
}