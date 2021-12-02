<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $isian = [
        [
            "judul" => "Judul Satuu",
            "slug" =>"judul-satu",
            "isi"=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Obcaecati, ab. Assumenda doloremque animi corrupti officiis, 
                    facere voluptatum tempore perferendis ullam quo alias tempora nemo 
                    voluptate aliquam sit, quibusdam consequuntur ducimus"
        ],
        [
            "judul" => "Judul Duaaaaaaa",
            "slug" =>"judul-dua",
            "isi"=>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Obcaecati, ab. Assumenda doloremque animi corrupti officiis, 
                    facere voluptatum tempore perferendis ullam quo alias tempora nemo 
                    voluptate aliquam sit, quibusdam consequuntur ducimus"
        ]
    ];

    public static function all()
    {
        return collect(self::$isian);
    }

    public static function find ($slug){
        // mengambil semua data pada fungsi all() yang sudah berupa collection
        $isi = static::all();

        // mengambil berdasarkan slug dengan fungsi firstWhere
        return $isi->firstWhere('slug',$slug);
    }

}
