<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();
        // $user = user::factory()->create([
        //     'name'=>'john Doe',
        //     'email'=>'john@gmail.com'

        // ]);

                    // listing::factory(6)->create();
         \App\Models\listing::factory(1)->create();

        // \App\Models\listing::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',

           
        // ]);


//         DB::table('listings')->insert([
            
//             'title' => 'laravel senior developer',
//             'tags' => 'laravel ,javascript ',
//             'company' => 'acve   corp',
//             'email' => '  alfred@gmail.com',
//             'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '

//         ]);


//         $listings = [
//             ['user_id'=>'1',
//                 'title' => 'rust senior devphp artisaneloper',
//             'tags' => 'rust ,java, scrip',
//             'company' => 'javat   jort',
//             'location' => 'kitintale  ,  kawempe',
//             'email' => '  alfred@gmail.com',
//             'website' => 'https:wwwcloudalfa.com',
//             'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '
// ],
// ['user_id'=>'1','title' => 'node senior developer',
// 'tags' => 'node ,sql, jquery ',
// 'company' => 'kenyata   ,kingdom',
// 'location' => 'kenya  ,  nakawa',
// 'email' => '  alfred@gmail.com',
// 'website' => 'https:wwwcloudalfa.com',
// 'description' => 'pasure ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '
// ],
// ['user_id'=>'1','title' => 'ajax senior developer',
// 'tags' => 'ajax ,xml ,css,scss',
// 'company' => 'acve   corp',
// 'location' => 'kampala  ,  nakawa',
// 'email' => '  alfred@gmail.com',
// 'website' => 'https:wwwcloudalfa.com',
// 'description' => 'pasure ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '
// ],
// ['user_id'=>'1','title' => 'python senior developer',
// 'tags' => 'python ,javascript ,dart',
// 'company' => 'part   corp',
// 'location' => 'kasanga  ,  nakawa',
// 'email' => '  alfred@gmail.com',
// 'website' => 'https:wwwcloudalfa.com',
// 'description' => 'jami ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '
// ],
// ['user_id'=>'1','title' => 'laravel senior developer',
// 'tags' => 'laravel ,javascript,fluter ',
// 'company' => 'acve   corp',
// 'location' => 'kampala  ,  nakawa',
// 'email' => '  alfred@gmail.com',
// 'website' => 'https:wwwcloudalfa.com',
// 'description' => 'jami ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '
// ],
// ['user_id'=>'1',
// 'title' => 'cordina senior developer',
// 'tags' => 'html ,javascript ',
// 'company' => 'pep   pap',
// 'location' => 'mbarara  ,  katet',
// 'email' => '  alfred@gmail.com',
// 'website' => 'https:www.pep.com',
// 'description' => 'johe ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '
// ],
//         ];
        
//         DB::table('listings')->insert($listings);

        // listing::create([
        //     'title' => 'laravel senior developer',
        //     'tags' => 'laravel ,javascript ',
        //     'company' => 'acve   corp',
        //     'email' => '  alfred@gmail.com',
        //     'website' => 'https://www/acve.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '


        // ]);
        // listing::create([
        //     'title' => 'java senior developer',
        //     'tags' => 'java ,html ',
        //     'company' => 'cloud   corp',
        //     'email' => '  kaziibwe@gmail.com',
        //     'website' => 'https://www/cloud.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non reprehenderit facilis architecto autem quam necessitatibus, odit quod, repellendus voluptate cum. Necessitatibus a id tenetur. Error numquam at modi quaerat. '


        // ]);

        
    }
}
