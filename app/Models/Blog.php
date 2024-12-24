<?php

namespace App\Models;

class Blog
{
    public function __construct(public $id, public $name, public $body) 
    {
        
    }
    public static function all()  
    {
        return collect([
            new Blog('1','first Blog','Body 1'),
            new Blog('2','second Blog','Body 2'),
            new Blog('3', 'Third Blog','Body 3'),
        ]);   
    }
    public static function find($id)
    {
        $blogs = Blog::all();
        return $blogs->firstWhere('id', $id);
    }
}
