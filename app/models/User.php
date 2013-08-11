<?php

use Zizaco\Confide\ConfideUser;

class User extends ConfideUser {

    /**
     * Validation rules
     */
    public static $rules = array(
        'email'    => 'required|email',
        'password' => 'required|between:8,20|confirmed',
    );

    
}