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

	static function getAdminEmailNameArray() {
		return User::where('is_admin', '=', '1')->orderBy('email', 'asc')->lists('username', 'email');		
	}
	
}