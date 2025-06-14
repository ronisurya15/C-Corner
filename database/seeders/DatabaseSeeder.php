<?php

namespace Database\Seeders;

use App\Models\Forum;
use App\Models\PostCategory;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rahasia')
        ]);

        Profile::create([
            'user_id' => 1,
            'email' => 'admin@gmail.com',
            'date_of_birth' => date('Y-m-d')
        ]);

        // Forum
        Forum::create([
            'title' => 'Informatika'
        ]);

        Forum::create([
            'title' => 'Manajemen Bisnis'
        ]);

        Forum::create([
            'title' => 'DKV'
        ]);

        Forum::create([
            'title' => 'Pendidikan'
        ]);

        // Category
        PostCategory::create([
            'title' => 'Skripsi'
        ]);

        PostCategory::create([
            'title' => 'Meme'
        ]);

        PostCategory::create([
            'title' => 'Tugas'
        ]);

        PostCategory::create([
            'title' => 'Tips & Trik Kuliah'
        ]);

        PostCategory::create([
            'title' => 'Info Beasiswa'
        ]);

        PostCategory::create([
            'title' => 'Event Kampus'
        ]);
    }
}
