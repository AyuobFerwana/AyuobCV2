<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class FreshDBCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:fresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'calls migrate:fresh and db:seed';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->warn('Running migrate:fresh command...');
        Artisan::call('migrate:fresh');
        $this->info('migrate:fresh command ran successfully!');

        $this->warn('Running db:seed command...');
        Artisan::call('db:seed');
        $this->info('db:seed command ran successfully!');
    }
}
