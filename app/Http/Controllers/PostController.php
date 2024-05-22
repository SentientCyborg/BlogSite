<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;


class PostController extends Controller
{   
    protected $posts;

    public function __construct()
    {   
        /*Sample data for site mockup*/
        $this->posts = [ 
            'testPosts' => [
                [
                    'id' => 0,
                    'title' => 'Man must explore, and this is exploration at its greatest',
                    'subtitle' => 'Problems look mighty small from 150 miles up',
                    'text' => 'Never in all their history have men been able truly to conceive of the world as one: a single sphere, 
                        a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, 
                        in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. 
                        The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.',
                    'author' => 'Start Bootstrap',
                    'date_published' => 'September 24, 2023'
                ],
                [
                    'id' => 1,
                    'title' => 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.',
                    'subtitle' => null,
                    'text' => 'Science cuts two ways, of course; its products can be used for both good and evil. 
                        But there\'s no turning back from science. The early warnings about technological dangers 
                        also come from science.',
                    'author' => 'Stop Bootstrap',
                    'date_published' => 'September 18, 2023'
                ],
                [
                    'id' => 2,
                    'title' => 'Science has not yet mastered prophecy',
                    'subtitle' => 'We predict too much for the next year and yet far too little for the next ten.',
                    'text' => 'What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.',
                    'author' => 'Started Bootstrap',
                    'date_published' => 'August 24, 2023'
                ],
                [
                    'id' => 3,
                    'title' => 'Failure is not an option',
                    'subtitle' => 'Many say exploration is part of our destiny, but it\'s actually our duty to future generations',
                    'text' => 'A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her 
                        protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help 
                        but love and cherish her.',
                    'author' => 'Stopped Bootstrap',
                    'date_published' => 'September 24, 2023'
                ],
            ]
        ];

    }

    public function showPosts(): View {
        return view('index', ['posts' => $this->posts['testPosts']]);
    }

    public function showOnePost($id): View {
        $post = Arr::first($this->posts['testPosts'], fn($post) => $post['id'] == $id);
        return view('post', ['post' => $post]);
    }
}
