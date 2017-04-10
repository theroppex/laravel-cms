<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextPost extends Model
{

    protected $fillable = ['user-id', 'cat-id','title','description','type','body'];

    /**
     * Veza koja vraca usera kojem dati text post pirpada
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User', 'user-id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'cat-id');
    }
}
