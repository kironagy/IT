<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    private $Contents = [
        [
            'key' => 'intro_title',
            'content' => [
                'en' => 'Your Dream Job Is Waiting For You',
                'fr' => 'Your Dream Job Is Waiting For You',
                'de' => 'Your Dream Job Is Waiting For You',
                'it' => 'Your Dream Job Is Waiting For You',
            ],
        ],
        [
            'key' => 'website_name',
            'content' => [
                'en' => 'website_name',
                'fr' => 'website_name',
                'de' => 'website_name',
                'it' => 'website_name',
            ],
        ],
        [
            'key' => 'work_title',
            'content' => [
                'en' => 'How It Work',
                'fr' => 'How It Work',
                'de' => 'How It Work',
                'it' => 'How It Work',
            ],
        ],
        [
            'key' => 'work_description',
            'content' => [
                'en' => 'Working Process',
                'fr' => 'Working Process',
                'de' => 'Working Process',
                'it' => 'Working Process',
            ],
        ],
        [
            'key' => 'Compaines',
            'content' => [
                'en' => '500+ World Top Company Posted There Job',
                'fr' => '500+ World Top Company Posted There Job',
                'de' => '500+ World Top Company Posted There Job',
                'it' => '500+ World Top Company Posted There Job',
            ],
        ],
        [
            'key' => 'Compaines_button',
            'content' => [
                'en' => 'Find Jobs',
                'fr' => 'Find Jobs',
                'de' => 'Find Jobs',
                'it' => 'Find Jobs',
            ],
        ],

        [
            'key' => 'Category_title',
            'content' => [
                'en' => 'Jobs Category',
                'fr' => 'Jobs Category',
                'de' => 'Jobs Category',
                'it' => 'Jobs Category',
            ],
        ],
        [
            'key' => 'Category_description',
            'content' => [
                'en' => 'Choose Your Desire Category',
                'fr' => 'Choose Your Desire Category',
                'de' => 'Choose Your Desire Category',
                'it' => 'Choose Your Desire Category',
            ],
        ],
        [
            'key' => 'Jobs_title',
            'content' => [
                'en' => 'All Jobs Post',
                'fr' => 'All Jobs Post',
                'de' => 'All Jobs Post',
                'it' => 'All Jobs Post',
            ],
        ],
        [
            'key' => 'Jobs_description',
            'content' => [
                'en' => 'Find Your Career You Deserve It',
                'fr' => 'Find Your Career You Deserve It',
                'de' => 'Find Your Career You Deserve It',
                'it' => 'Find Your Career You Deserve It',
            ],
        ],
        [
            'key' => 'Card_title',
            'content' => [
                'en' => 'Let’s Get Connected And Start Finding Your Dream Job',
                'fr' => 'Let’s Get Connected And Start Finding Your Dream Job',
                'de' => 'Let’s Get Connected And Start Finding Your Dream Job',
                'it' => 'Let’s Get Connected And Start Finding Your Dream Job',
            ],
        ],
        [
            'key' => 'Card_button',
            'content' => [
                'en' => 'Create Free Account',
                'fr' => 'Create Free Account',
                'de' => 'Create Free Account',
                'it' => 'Create Free Account',
            ],
        ],
        [
            'key' => 'footer_links',
            'content' => [
                'en' => 'Useful Links',
                'fr' => 'Useful Links',
                'de' => 'Useful Links',
                'it' => 'Useful Links',
            ],
        ],
        [
            'key' => 'footer_category',
            'content' => [
                'en' => 'Category',
                'fr' => 'Category',
                'de' => 'Category',
                'it' => 'Category',
            ],
        ],
        [
            'key' => 'footer_followUs',
            'content' => [
                'en' => 'Follow Us',
                'fr' => 'Follow Us',
                'de' => 'Follow Us',
                'it' => 'Follow Us',
            ],
        ],
        [
            'key' => 'footer_newsletter',
            'content' => [
                'en' => 'Newsletter',
                'fr' => 'Newsletter',
                'de' => 'Newsletter',
                'it' => 'Newsletter',
            ],
        ],
        [
            'key' => 'footer_newsletter_description',
            'content' => [
                'en' => 'Sign up to our archi. point to recent updates & office',
                'fr' => 'Sign up to our archi. point to recent updates & office',
                'de' => 'Sign up to our archi. point to recent updates & office',
                'it' => 'Sign up to our archi. point to recent updates & office',
            ],
        ],
    ];

    private $Photo = [
        [
            "key"=>"img_1",
            "img_path"=>""
        ],
        [
            "key"=>"img_2",
            "img_path"=>""
        ],
        [
            "key"=>"img_2",
            "img_path"=>""
        ],
        [
            "key"=>"img_2",
            "img_path"=>""
        ],
        [
            "key"=>"img_2",
            "img_path"=>""
        ],
        ];

    public function run(): void
    {
        // \App\Models\Page::factory(4)->create();

        foreach ($this->Contents as $content) {
            \App\Models\Page::factory()->create($content);
        }
        foreach ($this->Photo as $photo) {
            \App\Models\Photo::factory()->create($photo);
        }

        \App\Models\User::factory()->create([
            'name' => \env('admin_name'),
            'email' => \env('admin_email'),
            'password' => Hash::make(\env('admin_password')),
            'role' => 'superAdmin',
        ]);

    }
}
