<?php

namespace App\Models;

class Phone
{
    public function __construct(public $id, public $name, public $age) 
    {
        
    }
    public static function phone() 
    {
        return collect([
            new Phone('1', 'aung', '23'),
            new Phone('2','myat', '25'),
            new Phone('3', 'kyaw', '34') ]); 
         
    }
    
}
