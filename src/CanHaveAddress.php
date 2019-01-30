<?php

namespace CleanCodeStudio\Addressable;

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