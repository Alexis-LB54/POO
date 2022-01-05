<?php
namespace App\Entity;

// Alias
use \DateTimeImmutable as dateImmut;

final class NewsPaper extends Document {
    private dateImmut $release_date;

    public function __construct(string $title, dateImmut $d)
    {
        parent::__construct($title);
        $this->release_date = $d;
    }


    /**
     * Get the value of release_date
     * @return DateTimeImmutable
     */ 
    public function getRelease_date() : dateImmut
    {
        return $this->release_date;
    }

    /**
     * Set the value of release_date
     * @param DateTimeImmutable $release_date
     * @return  self
     */ 
    public function setRelease_date(dateImmut $release_date) : self
    {
        $this->release_date = $release_date;

        return $this;
    }
}