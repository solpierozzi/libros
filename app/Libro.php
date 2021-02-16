<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //Relación inversa uno a muchos. Un libro pertenece a una categoría. Una categoría puede tener muchos libros
    public function categoria(){ //$Libro->categoria->nombre
        return $this->belongsTo(Categoria::class); //Pertenece a una categoría
    }
    //Relación muchos a muchos
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class); 
    }

    protected $dates = ['fecha']; // pasar fechas a carbon
}
