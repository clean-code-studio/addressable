<?php

namespace CleanCodeStudio\Addressable;


use CleanCodeStudio\Address;

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