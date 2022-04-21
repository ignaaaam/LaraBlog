<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::truncate();
//        Post::truncate();
//        Tag::truncate();

        Role::factory()->create([
            'name' => 'admin'
        ]);

        Role::factory()->create([
            'name' => 'user'
        ]);

        Role::factory()->create([
            'name' => 'guest'
        ]);

        $user = User::factory()->create([
           'name' => 'John Doe',
            'role_id' => 1
        ]);

        $tag = Tag::factory(40)->create();

        $post = Post::factory(25)->create([
            'user_id' => $user->id
        ]);

    }
}
