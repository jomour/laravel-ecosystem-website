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
                'name' => 'Laravel Envoy',
                'description' => "Laravel Envoy is a tool for executing common tasks you run on your remote servers. Using Blade style syntax, you can easily setup tasks for deployment, Artisan commands, and more. Currently, Envoy only supports the Mac and Linux operating systems. However, Windows support is achievable using WSL2.",
                'imagePath' => '/images/default.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/envoy',
                'githubPath' => 'https://github.com/laravel/envoy',
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
                'name' => 'Jetstream',
                'description' => "Laravel Jetstream is a beautifully designed application starter kit for Laravel and provides the perfect starting point for your next Laravel application. Jetstream provides the implementation for your application's login, registration, email verification, two-factor authentication, session management, API via Laravel Sanctum, and optional team management features.",
                'imagePath' => '/images/jetstream.PNG', 
                'websitePath' => 'https://jetstream.laravel.com/',
                'githubPath' => 'https://github.com/laravel/jetstream',
                'sub_categories_id' => 7 
            ],
            [
                'id' => 14,
                'name' => 'Livewire',
                'description' => "The most productive way to build your next web app. Powerful, dynamic, front-end UIs without leaving PHP.",
                'imagePath' => '/images/livewire.PNG',
                'websitePath' => 'https://livewire.laravel.com/',
                'githubPath' => 'https://github.com/livewire/livewire',
                'sub_categories_id' => 7
            ],
            [
                'id' => 15,
                'name' => 'Nova',
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
            ],
            [
                'id' => 17,
                'name' => 'Fortify',
                'description' => "Laravel Fortify is a frontend agnostic authentication backend implementation for Laravel. Fortify registers the routes and controllers needed to implement all of Laravel's authentication features, including login, registration, password reset, email verification, and more.",
                'imagePath' => '/images/fortify.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/fortify',
                'githubPath' => 'https://github.com/laravel/horizon',
                'sub_categories_id' => 10 
            ],
            [
                'id' => 18,
                'name' => 'Larastan',
                'description' => "Larastan focuses on finding errors in your code. It catches whole classes of bugs even before you write tests for the code. Adds static typing to Laravel to improve developer productivity and code quality. Supports most of Laravel's beautiful magic. Discovers bugs in your code",
                'imagePath' => '/images/larastan.PNG',
                'websitePath' => '',
                'githubPath' => 'https://github.com/larastan/larastan',
                'sub_categories_id' => 4 
            ],
            [
                'id' => 19,
                'name' => 'Folio',
                'description' => "Laravel Folio is a powerful page based router designed to simplify routing in Laravel applications. With Laravel Folio, generating a route becomes as effortless as creating a Blade template within your application's resources/views/pages directory.",
                'imagePath' => '/images/folio.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/folio',
                'githubPath' => 'https://github.com/laravel/folio',
                'sub_categories_id' => 7
            ],
            [
                'id' => 20,
                'name' => 'Homestead',
                'description' => "Laravel strives to make the entire PHP development experience delightful, including your local development environment. Laravel Homestead is an official, pre-packaged Vagrant box that provides you a wonderful development environment without requiring you to install PHP, a web server, or any other server software on your local machine.",
                'imagePath' => '/images/homestead.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/homestead',
                'githubPath' => 'https://github.com/laravel/homestead',
                'sub_categories_id' => 7
            ],
            [
                'id' => 21,
                'name' => 'Passport',
                'description' => "Laravel Passport provides a full OAuth2 server implementation for your Laravel application in a matter of minutes. Passport is built on top of the League OAuth2 server that is maintained by Andy Millington and Simon Hamp.",
                'imagePath' => '/images/passport.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/passport',
                'githubPath' => 'https://github.com/laravel/passport',
                'sub_categories_id' => 7
            ],
            [
                'id' => 22,
                'name' => 'Pint',
                'description' => "Laravel Pint is an opinionated PHP code style fixer for minimalists. Pint is built on top of PHP-CS-Fixer and makes it simple to ensure that your code style stays clean and consistent.",
                'imagePath' => '/images/passport.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/pint',
                'githubPath' => 'https://github.com/laravel/pint',
                'sub_categories_id' => 4
            ],
            [
                'id' => 23,
                'name' => 'Precognition',
                'description' => "Laravel Precognition allows you to anticipate the outcome of a future HTTP request. One of the primary use cases of Precognition is the ability to provide \"live\" validation in your frontend application.",
                'imagePath' => '/images/default.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/precognition',
                'githubPath' => 'https://github.com/laravel/precognition',
                'sub_categories_id' => 7
            ],
            [
                'id' => 24,
                'name' => 'Prompts',
                'description' => "Laravel Prompts is a PHP package for adding beautiful and user-friendly forms to your command-line applications, with browser-like features including placeholder text and validation. Laravel Prompts is perfect for accepting user input in your Artisan console commands, but it may also be used in any command-line PHP project.",
                'imagePath' => '/images/prompts.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/prompts',
                'githubPath' => 'https://github.com/laravel/prompts',
                'sub_categories_id' => 7
            ],
            [
                'id' => 25,
                'name' => 'Pulse',
                'description' => "Laravel Pulse delivers at-a-glance insights into your application's performance and usage. With Pulse, you can track down bottlenecks like slow jobs and endpoints, find your most active users, and more. For in-depth debugging of individual events, check out Laravel Telescope.",
                'imagePath' => '/images/pulse.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/pulse',
                'githubPath' => 'https://github.com/laravel/pulse',
                'sub_categories_id' => 10
            ],
            [
                'id' => 26,
                'name' => 'Reverb',
                'description' => "Laravel Reverb brings real-time WebSocket communication for Laravel applications.",
                'imagePath' => '/images/reverb.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/reverb',
                'githubPath' => 'https://github.com/laravel/reverb',
                'sub_categories_id' => 7
            ],
            [
                'id' => 27,
                'name' => 'Sanctum',
                'description' => "Laravel Sanctum provides a featherweight authentication system for SPAs and simple APIs.",
                'imagePath' => '/images/sanctum.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/sanctum',
                'githubPath' => 'https://github.com/laravel/sanctum',
                'sub_categories_id' => 7
            ],
            [
                'id' => 28,
                'name' => 'Scout',
                'description' => "Laravel Scout provides a simple, driver-based solution for adding full-text search to your Eloquent models. Once Scout is installed and configured, it will automatically sync your model changes to your search indexes.",
                'imagePath' => '/images/scout.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/scout',
                'githubPath' => 'https://github.com/laravel/scout',
                'sub_categories_id' => 7
            ],
            [
                'id' => 29,
                'name' => 'Socialite',
                'description' => "In addition to typical, form based authentication, Laravel also provides a simple, convenient way to authenticate with OAuth providers using Laravel Socialite. Socialite currently supports authentication via Facebook, Twitter, LinkedIn, Google, GitHub, GitLab, Bitbucket, and Slack.",
                'imagePath' => '/images/socialite.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/socialite',
                'githubPath' => 'https://github.com/laravel/socialite',
                'sub_categories_id' => 7
            ],
            [
                'id' => 30,
                'name' => 'Telescope',
                'description' => "Laravel Telescope makes a wonderful companion to your local Laravel development environment. Telescope provides insight into the requests coming into your application, exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, variable dumps, and more.",
                'imagePath' => '/images/telescope.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/telescope',
                'githubPath' => 'https://github.com/laravel/telescope',
                'sub_categories_id' => 7
            ],
            [
                'id' => 31,
                'name' => 'Valet',
                'description' => "Laravel Valet is a development environment for macOS minimalists. Laravel Valet configures your Mac to always run Nginx in the background when your machine starts. Then, using DnsMasq, Valet proxies all requests on the *.test domain to point to sites installed on your local machine.",
                'imagePath' => '/images/valet.PNG',
                'websitePath' => 'https://laravel.com/docs/11.x/valet',
                'githubPath' => 'https://github.com/laravel/valet',
                'sub_categories_id' => 7
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
