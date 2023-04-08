<?php

namespace Database\Seeders;

use App\Models\books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
        [
            'title' => 'Pencinta Wanita',
            'author'=> 'Hendra Kusuma',
            'publisher' => 'Gramedia',
            'price' => 60000,
            'published_at' => '1989-04-27',
        ],
        [
            'title' => 'Apes Karena Anak',
            'author'=> 'Rafael Alun Tri Sambodo',
            'publisher' => 'Gunung Kembar',
            'price' => 100000,
            'published_at' => '1988-10-7',
        ],
        [
            'title' => 'Flexing Flexing Flexing Bucin',
            'author'=> 'Mario Dandy Satrio',
            'publisher' => 'Gunung Kembar',
            'price' => 135000,
            'published_at' => '2023-3-2',
        ]
        ])->each(function($book){
            books::create($book);
        });
    }
}