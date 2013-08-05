<?php

class ContactMessage extends Eloquent {
      
      protected $table = 'contact_message';     
      
      protected $guarded = array();
      
      public static $rules = array(
          'from_name'  => 'required',
          'from_email' => 'required',
          'message'    => 'required'
      );
               
}