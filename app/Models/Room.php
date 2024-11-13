<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Room
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'title-1',
                'title' => 'Room Type 1',
                'author' => 'Emil Fauzan',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel dolorum cumque libero qui deleniti! Facere minus temporibus deserunt recusandae culpa provident reiciendis maxime at suscipit nisi, dignissimos perspiciatis adipisci nam eos debitis? Ut, et aperiam consequatur quasi porro accusamus quia magnam labore dicta vel deserunt tempore fuga adipisci eos nobis.'
            ],
            [
                'id' => 2,
                'slug' => 'title-2',
                'title' => 'Room Type 2',
                'author' => 'Emil Fauzan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eaque voluptas tempora quod enim! Harum illo
velit quam in labore nobis, accusantium asperiores beatae praesentium quas? Reprehenderit dolorem
distinctio, ut eum voluptatem tempore vitae ea veritatis ab, velit voluptates pariatur, sit dolorum unde
ipsam temporibus nam officia facere? Dignissimos, porro quos sed optio reiciendis qui eaque quibusdam non,
neque perspiciatis, cumque earum id at voluptate facilis deleniti ratione ut laudantium.'
            ]
        ];
    }

    public static function find($slug): array
    {

        // $room = Arr::first(Room::all(), function ($room) use ($slug) {
        //     return $room['slug'] == $slug;
        // });

        $room = Arr::first(static::all(), fn($room) => $room['slug'] == $slug);

        if (! $room) {
            abort(404);
        }
        
        return $room;
    }
}
