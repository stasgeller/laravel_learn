<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $table = 'Car';

  public $id;
  public $manufacturer;
  public $price;
  public $firstRegistrationDate;
  public $owner;
}
