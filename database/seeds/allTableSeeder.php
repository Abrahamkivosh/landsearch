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
        factory(App\Admin::class,5)->create();
        factory(App\User::class,10)->create();
        factory(App\LandOwner::class,10)->create();
        factory(App\Land::class,60)->create();
        factory(App\Blog::class,120)->create();
        factory(App\LandProfile::class,66)->create();
        factory(App\Role::class,6)->create();
        factory(App\RoleUser::class,15)->create();
        factory(App\LandUser::class,120)->create();

    }
}
