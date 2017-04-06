<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextPost extends Model
{

    /**
     * Veza koja vraca usera kojem dati text post pirpada
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User', 'user-id');
    }
}
