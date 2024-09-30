<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'prod_id';

    protected $fillable =  ['prod_name','prod_price','prod_description','prod_stock'];
}
