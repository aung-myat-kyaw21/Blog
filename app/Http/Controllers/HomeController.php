<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Phone;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Blog_lara_table;


class HomeController extends Controller
{
    public function show ()
    {
        $student_data = Student::all();
        return view('home',['student_data' => $student_data]);
    }
    public function contact ()
    {
        return view('contact');
    }
    public function about ()
    {
        return view('about');
    }
    public function shown (Student $name)
    {
        return view('student1');
    }
    
}
