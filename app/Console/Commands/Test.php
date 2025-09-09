<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // php artisan serve
        // Artisan::call('serve');
        // print('hello world');

        // open to browser with google.com for macbook
        // exec('open "" "http://youtube.com"');
    }
}
