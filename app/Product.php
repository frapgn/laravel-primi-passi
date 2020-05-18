<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /*  Laravel capisce che la tabella alla quale vogliamo parlare
    *   si chiama 'products' perchè guarda il nome della classe Product
    *   e fa il plurale.
    *   È come se avessimo già fatto per noi questo: */
    public $table = 'products';

    // Se vogliamo settare manualmente il nome della tabella possiamo fare così:
    // protected $table = 'NOME_TABELLA';

    // Se vogliamo settare manualmente il nome della primary key possiamo fare così:
    // protected $primaryKey = 'NOME_PRIMARY_KEY'
}
