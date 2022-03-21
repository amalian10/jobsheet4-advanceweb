<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $about=[
            [
                'image' => 'creat_pro.jfif',
                'title' => 'What Does Chamb Do',
                'deskripsi1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'deskripsi2' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
                voluptatem quia dolore magnam aliquam quaerat voluptatem.',
                'deskripsi3' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel 
                illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
                'deskripsi4' => 'We took it upon ourselves to change that. We developed a burning desire to create something to bridge the chasms between 
                businesses across country and continent. So, with a goal in mind, a skilled team at hand, Chamb sprung forth: the website 
                that helps discover and build profitable long-lasting networks amongst businesses around the world.'
            ],
            [
                'image' => 'lag-60.jfif',
                'title' => 'When, Who and Where?',
                'deskripsi1' => 'Chamb was born in 2014 and has steadily grown from the seed of an idea into a fully-fledged company that, with the power of the internet, employs people from every corner of the planet.',
                'deskripsi2' => 'Chamb hails from the Bosporus strait straddling Istanbul. Taking cues from this continent and culture spanning city, we bring people and place together in new and unexpected ways. Chamb may have its roots firmly planted in Turkey, but gaze out across fertile lands of Europe and you’ll see its branches spreading a canopy of connection and possibility across the globe.',
                'deskripsi3' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi 
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel 
                illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
                'deskripsi4' => 'We took it upon ourselves to change that. We developed a burning desire to create something to bridge the chasms between 
                businesses across country and continent. So, with a goal in mind, a skilled team at hand, Chamb sprung forth: the website 
                that helps discover and build profitable long-lasting networks amongst businesses around the world.'
                ]
            
            ];
            DB::table('abouts')->insert($about);  
        
        }
}
