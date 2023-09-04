<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RMS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rollback, migrate and seed the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:rollback');
        $this->call('migrate');
        $this->call('db:seed');

        return 0;
    }
}
