<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class RealEstateModel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'id', 'originalCost', 'newCost', 'construction','district','canton','province','direction','folio','lot','contactName','contactTelephoneNumber','contactEmail',
    );

    protected $hidden = array('created_at', 'updated_at');
}