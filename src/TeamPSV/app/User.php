<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role-id', 'surname', 'email', 'password', 'banned',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Veza koja povezuje korisnika sa rolom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(){
        return $this->belongsTo('App\Role', 'role-id');
    }

    /**
     * Vraca sve tekstualne postove koje ima korisnik
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function textPosts()
    {
        return $this->hasMany('App\TextPost', 'user-id');
    }

    /**
     * Funkcija provera da li je korisnik admin
     *
     * @return bool
     */
    public function isAdmin(){
        $role = $this->role->type;

        return $role === 'admin';
    }

    /**
     * Funkcija proverava da li je korsinik banovan
     *
     * @return bool
     */
    public function isBanned(){
        return $this->banned;
    }
}
