<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //pages
        // 1
        Page::create([
            'name' => 'Product Categories',
            'url' => '#',
        ]);

        // 2
        Page::create([
            'name' => 'Product',
            'url' => '#',
        ]);

        // 3
         Page::create([
            'name' => 'Menu',
            'url' => '#',
        ]);

        // // 4
        // Page::create([
        //     'name' => 'Settings',
        //     'url' => '#',
        // ]);


        // // 5
        // Page::create([
        //     'name' => 'New Recipe Category',
        //     'url' => 'recipecategory.create',
        //     'parent_page_id' => Page::where('name', 'Recipe Categories')->where('url', '#')->first()->id
        // ]);

        // // 6
        // Page::create([
        //     'name' => 'Recipe Category Listing',
        //     'url' => 'recipecategory.index',
        //     'parent_page_id' => Page::where('name', 'Recipe Categories')->where('url', '#')->first()->id
        // ]);

        // // 7
        // Page::create([
        //     'name' => 'New Recipe',
        //     'url' => 'recipe.create',
        //     'parent_page_id' => Page::where('name', 'Recipes')->where('url', '#')->first()->id
        // ]);

        // // 8
        // Page::create([
        //     'name' => 'Recipe Listing',
        //     'url' => 'recipe.index',
        //     'parent_page_id' => Page::where('name', 'Recipes')->where('url', '#')->first()->id
        // ]);

        // // 9
        // Page::create([
        //     'name' => 'New User',
        //     'url' => 'user.create',
        //     'parent_page_id' => Page::where('name', 'Admin Users')->where('url', '#')->first()->id
        // ]);

        // // 10
        // Page::create([
        //     'name' => 'Users Listing',
        //     'url' => 'user.index',
        //     'parent_page_id' => Page::where('name', 'Admin Users')->where('url', '#')->first()->id
        // ]);

        // // 11
        // Page::create([
        //     'name' => 'New Menu',
        //     'url' => 'page.create',
        //     'parent_page_id' => Page::where('name', 'Settings')->where('url', '#')->first()->id
        // ]);

        // // 12
        // Page::create([
        //     'name' => 'Menu Listing',
        //     'url' => 'page.index',
        //     'parent_page_id' => Page::where('name', 'Settings')->where('url', '#')->first()->id
        // ]);

        // // 13
        // Page::create([
        //     'name' => 'New Role',
        //     'url' => 'role.create',
        //     'parent_page_id' => Page::where('name', 'Settings')->where('url', '#')->first()->id
        // ]);

        // // 14
        // Page::create([
        //     'name' => 'Role Listing',
        //     'url' => 'role.index',
        //     'parent_page_id' => Page::where('name', 'Settings')->where('url', '#')->first()->id
        // ]);

        // Page::create([
        //     'name' => 'Menu',
        //     'url' => '#',
        // ]);
        // // 14
        // Page::create([
        //     'name' => 'Menu Builder',
        //     'url' => 'menu.create',
        //     'parent_page_id' => Page::where('name', 'Menu')->where('url', '#')->first()->id
        // ]);
        // // 14
        // Page::create([
        //     'name' => 'Chef',
        //     'url' => '#',
        // ]);
        // // 14
        // Page::create([
        //     'name' => 'Chef Dashboard',
        //     'url' => 'chef.dashboard',
        //     'parent_page_id' => Page::where('name', 'Chef')->where('url', '#')->first()->id
        // ]);
    }
}
