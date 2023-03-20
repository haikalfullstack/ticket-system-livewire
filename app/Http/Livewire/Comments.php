<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Comments extends Component
{
    public $comments = [
        [
            'body' => 'lorem222222',
            'created_at' => '3 min ago',
            'creator' => 'Haikal'
        ]

    ];

    public function addComment(){
        array_unshift($this->comments,  [
            'body' => 'new comments',
            'created_at' => '3 min ago',
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
