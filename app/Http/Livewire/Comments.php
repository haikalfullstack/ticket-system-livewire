<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;


class Comments extends Component
{
    public $newComment;
    public $comments = [
        [
            'body' => 'lorem222222',
            'created_at' => '3 min ago',
            'creator' => 'Haikal'
        ]

    ];

    public function addComment(){
        array_unshift($this->comments,  [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Haikal'
        ]);

        // $this->comments[] =   [
        //     'body' => 'new comments',
        //     'created_at' => '3 min ago',
        //     'creator' => 'Haikal'
        // ];
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
