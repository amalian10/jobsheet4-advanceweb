<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HowitworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $desc=[
            [
                'image' => 'creat_pro.jfif',
                'title1' => 'Streamlined',
                'title2' => 'Communication Systems.',
                'deskripsi1' => 'laudantium rem aperiam, eaque ipsa quae ab illo 
                inventore veritatis',
                'deskripsi2' => 'Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium rem aperiam.'
            ],
            [
                'image' => 'how-is-works-img-02.jfif',
                'title1' => 'Powerful search tools',
                'title2' => 'for finding products.',
                'deskripsi1' => 'Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium rem aperiam, 
                eaque ipsa quae ab illo inventore veritatis et quasi 
                architecto beatae vitae dicta sunt explicabo.',
                'deskripsi2' => 'laudantium rem aperiam, eaque ipsa quae ab illo 
                inventore veritatis'
            ],
            [
                'image' => 'how-is-works-img-03.jfif',
                'title1' => 'Find Exciting and Exotic
                Products.',
                'title2' => 'for finding products.',
                'deskripsi1' => 'Sed ut perspiciatis unde omnis iste natus error sit 
                voluptatem accusantium doloremque laudantium rem aperiam, 
                eaque ipsa quae ab illo inventore veritatis et quasi 
                architecto beatae vitae dicta sunt explicabo.',
                'deskripsi2' => 'laudantium rem aperiam, eaque ipsa quae ab illo 
                inventore veritatis'
            ],
            
            ];
            DB::table('howitworkes')->insert($desc);  
        
        }
    }
