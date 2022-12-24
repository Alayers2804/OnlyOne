<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | OnlyOne'
        ];
        echo view('layout/header', $data );
        echo view('template/index');
        echo view('layout/footer');
    }
    public function explore()
    {
        $data = [
            'title' => 'Explore | OnlyOne'
        ];
        echo view('layout/header',$data);
        echo view('template/explore');
        echo view('layout/footer');
    }
    public function details()
    {
        $data = [
            'title' => 'Details | OnlyOne'
        ];
        echo view('layout/header',$data);
        echo view('template/details');
        echo view('layout/footer');
    }
    public function author()
    {
        $data = [
            'title' => 'Author | OnlyOne'
        ];
        echo view('layout/header',$data);
        echo view('template/author');
        echo view('layout/footer');
    }
    public function create()
    {
        $data = [
            'title' => 'Create | OnlyOne'
        ];
        echo view('layout/header', $data);
        echo view('template/create');
        echo view('layout/footer');
    }
    
}
