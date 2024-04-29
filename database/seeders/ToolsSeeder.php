<?php

namespace Database\Seeders;

use App\Models\Tools;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tools = [
            [
                'id' => 1,
                'name' => 'Octane',
                'description' => "Laravel Octane supercharges your application's performance by serving your application using high-powered application servers.",
                'imagePath' => '/images/octane.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/octane',
                'githubPath' => 'https://github.com/laravel/octane',
                'sub_categories_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Forge',
                'description' => "Provision and deploy unlimited PHP applications on DigitalOcean, Akamai, Vultr, Amazon, Hetzner and more.",
                'imagePath' => '/images/forge.PNG',
                'websitePath' => 'https://forge.laravel.com/',
                'githubPath' => 'https://github.com/laravel/forge-cli',
                'sub_categories_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Vapor',
                'description' => "Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS.",
                'imagePath' => '/images/vapor.PNG',
                'websitePath' => 'https://vapor.laravel.com/',
                'githubPath' => 'https://github.com/laravel/vapor-core',
                'sub_categories_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'Envoyer',
                'description' => "Envoyer has been carefully crafted by the creators of Laravel to work perfectly with your applications. You can deploy at any time of day or night with confidence that your users will never experience downtime.",
                'imagePath' => '/images/envoyer.PNG',
                'websitePath' => 'https://envoyer.io/',
                'githubPath' => 'https://github.com/JustSteveKing/laravel-envoyer-sdk',
                'sub_categories_id' => 2
            ],
            [
                'id' => 5,
                'name' => 'Pennant',
                'description' => "Laravel Pennant is a simple and light-weight feature flag package - without the cruft. Feature flags enable you to incrementally roll out new application features with confidence, A/B test new interface designs, complement a trunk-based development strategy, and much more.",
                'imagePath' => '/images/pennant.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/pennant',
                'githubPath' => 'https://github.com/laravel/pennant',
                'sub_categories_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Breeze',
                'description' => "Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. In addition, Breeze includes a simple \"profile\" page where the user may update their name, email address, and password.",
                'imagePath' => '/images/breeze.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/starter-kits#laravel-breeze',
                'githubPath' => 'https://github.com/laravel/breeze',
                'sub_categories_id' => 7
            ],
            [
                'id' => 7,
                'name' => 'Breeze',
                'description' => "Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. In addition, Breeze includes a simple \"profile\" page where the user may update their name, email address, and password.",
                'imagePath' => '/images/breeze.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/starter-kits#laravel-breeze',
                'githubPath' => 'https://github.com/laravel/breeze',
                'sub_categories_id' => 7
            ],
            [
                'id' => 8,
                'name' => 'Cashier',
                'description' => "Laravel Cashier Stripe provides an expressive, fluent interface to Stripe's subscription billing services. It handles almost all of the boilerplate subscription billing code you are dreading writing. In addition to basic subscription management, Cashier can handle coupons, swapping subscription, subscription 'quantities', cancellation grace periods, and even generate invoice PDFs.",
                'imagePath' => '/images/cashier.PNG', 
                'websitePath' => 'https://laravel.com/docs/11.x/billing',
                'githubPath' => 'https://github.com/laravel/cashier-stripe',
                'sub_categories_id' => 7 
            ],
            [
                'id' => 9,
                'name' => 'Dusk',
                'description' => "Laravel Dusk provides an expressive, easy-to-use browser automation and testing API.",
                'imagePath' => '/images/dusk.PNG', 
                'websitePath' => 'https://laravel.com/docs/11.x/dusk',
                'githubPath' => 'https://github.com/laravel/dusk',
                'sub_categories_id' => 7
            ],
            [
                'id' => 10,
                'name' => 'Echo',
                'description' => "In many modern web applications, WebSockets are used to implement realtime, live-updating user interfaces. To assist you in building these types of features, Laravel makes it easy to 'broadcast' your server-side Laravel events over a WebSocket connection.",
                'imagePath' => '/images/echo.PNG', 
                'websitePath' => 'https://laravel.com/docs/11.x/broadcasting',
                'githubPath' => 'https://github.com/laravel/echo',
                'sub_categories_id' => 7 
            ],
            [
                'id' => 11,
                'name' => 'Herd',
                'description' => "Herd is a blazing fast, native Laravel and PHP development environment for Windows. It includes everything you need to get started with Laravel development, including PHP and nginx. Once you install Herd, you're ready to start developing with Laravel.",
                'imagePath' => '/images/herd.PNG', 
                'websitePath' => 'https://herd.laravel.com/windows',
                'githubPath' => null, 
                'sub_categories_id' => 7 
            ],
            [
                'id' => 12,
                'name' => 'Inertia',
                'description' => "Create modern single-page React, Vue, and Svelte apps using classic server-side routing. Works with any backend — tuned for Laravel.",
                'imagePath' => '/images/inertia.PNG', 
                'websitePath' => 'https://inertiajs.com/',
                'githubPath' => 'https://github.com/inertiajs/inertia',
                'sub_categories_id' => 7 
            ],
            [
                'id' => 13,
                'name' => 'JETSTREAM',
                'description' => "Laravel Jetstream is a beautifully designed application starter kit for Laravel and provides the perfect starting point for your next Laravel application. Jetstream provides the implementation for your application's login, registration, email verification, two-factor authentication, session management, API via Laravel Sanctum, and optional team management features.",
                'imagePath' => '/images/jetstream.PNG', 
                'websitePath' => 'https://jetstream.laravel.com/',
                'githubPath' => 'https://github.com/laravel/jetstream',
                'sub_categories_id' => 7 
            ],
            [
                'id' => 14,
                'name' => 'LIVEWIRE',
                'description' => "The most productive way to build your next web app. Powerful, dynamic, front-end UIs without leaving PHP.",
                'imagePath' => '/images/livewire.PNG',
                'websitePath' => 'https://livewire.laravel.com/',
                'githubPath' => 'https://github.com/livewire/livewire',
                'sub_categories_id' => 7
            ],
            [
                'id' => 15,
                'name' => 'NOVA',
                'description' => "Nova is the simplest and fastest way to build production-ready administration panels using Laravel. Simply composer require laravel/nova, nova:install, and you're ready to go.",
                'imagePath' => '/images/nova.PNG',
                'websitePath' => 'https://nova.laravel.com/',
                'githubPath' => null, 
                'sub_categories_id' => 8 
            ],
            [
                'id' => 16,
                'name' => 'Horizon',
                'description' => "Laravel Horizon provides a beautiful dashboard and code-driven configuration for your Laravel powered Redis queues. Horizon allows you to easily monitor key metrics of your queue system such as job throughput, runtime, and job failures.",
                'imagePath' => '/images/horizon.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/horizon',
                'githubPath' => 'https://github.com/laravel/horizon',
                'sub_categories_id' => 10 
            ]
        ];

        foreach($tools as $tool){
            Tools::updateOrCreate(
                ['id' => $tool['id']],
                $tool
            );
        }
    }
}
