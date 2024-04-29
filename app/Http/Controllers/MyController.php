<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function method1()
    {
        $title = '1';
        $content = 'content1';
        return view('method', ['title' => $title, 'content' => $content]);
    }

    public function method2()
    {
        $title = '2';
        $content = 'content2';
        return view('method', ['title' => $title, 'content' => $content]);
    }

    public function method3()
    {
        $title = '3';
        $content = 'content3';
        return view('method', ['title' => $title, 'content' => $content]);
    }

    public function method4($title, $content)
    {
        $links = [
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'tex',
                'href' => 'href3',
            ],
        ];
        return view('method', compact('title', 'content', 'links'));
    }

    public function method5()
    {
        $title = '5';
        $content = 'content5';
        $users = [
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned' => true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned' => false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned' => true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned' => false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned' => false,
            ],

        ];
        return view('method', compact('title', 'content', 'users'));
    }
}
