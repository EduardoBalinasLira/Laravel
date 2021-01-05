<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index() {
        echo '<h1>Fluent String</h1>';

        $slice = Str::of("Welcome to my Youtube Channel")->after("Welcome to");
        echo $slice . '<br>';

        $slice2 = Str::of("App\Http\Controllers\Controller")->afterLast('\\');
        echo $slice2 .'<br>';
        
        $string = Str::of("Hello")->append(" World");
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replace = str::of('Laravel 7.0')->replace('7.0', '8.0');
        echo $replace . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted .'<br>';

        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of('Laravel Framework')->substr(8);
        echo $str .'<br>';

        $str2 = Str::of('/Laravel 8/')->trim('/');
        echo $str2 . '<br>';

        $str3 =  Str::of('laravel 8')->upper();
        echo $str3;
    }
}