<?php

namespace CleanCodeStudio\LaravelAddresses;

trait CanHaveAddress
{
    /**
     * @return mixed
     */
    public function address()
    {

        return $this->morphOne(Address::class, 'addressable');

    }
    
}