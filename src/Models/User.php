<?php

namespace PHPCollective\JWTLaraAuth\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use App\User as BaseUser;

class User extends BaseUser implements JWTSubject
{
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(){
        return [];
    }
}
