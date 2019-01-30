<?php

namespace CleanCodeStudio\Addressable;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'addressable_id', 'addressable_type', 'city', 'state', 'country', 'postal_code', 'latitude', 'longitude', 'address_line_1', 'address_line_2'
    ];

    /**
     * @MorphTo
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function owner()
    {

        return $this->addressable();

    }

    /**
     * @MorphTo
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function addressable()
    {

        return $this->morphTo();

    }
}