<?php

use Illuminate\Database\Seeder;

class allTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,10)->create();
        factory(App\LandOwner::class,10)->create();
        factory(App\Land::class,1)->create();
        factory(App\Blog::class,1)->create();
        factory(App\LandProfile::class,1)->create();
        factory(App\Role::class,1)->create();
        factory(App\RoleUser::class,1)->create();
        factory(App\SearchHistory::class,1)->create();

    }
}
