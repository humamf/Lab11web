<?php

namespace App\Controllers;

class Page extends BaseController
{
    
    public function artikel()
    {
        return view ('artikel',  [
            'title' => 'Artikel',
            'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
        ]);
           
    }

    public function contact()
    {
        return view ('contact',  [
            'title' => 'Contact',
            'content' => 'Ini adalah halaman contact yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
