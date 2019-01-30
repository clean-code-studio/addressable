<?php

namespace CleanCodeStudio\LaravelAddresses;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'city', 
        'state', 
        'country', 
        'latitude', 
        'longitude', 
        'postal_code', 
        'address_line_1', 
        'address_line_2',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function owner()
    {

        return $this->addressable();

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function addressable()
    {

        return $this->morphTo();

    }
}