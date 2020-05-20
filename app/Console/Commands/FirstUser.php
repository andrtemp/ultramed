<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class FirstUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'first:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate admin user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@ultramed.com',
            'role' => 'admin',
            'password' => Hash::make('ultramed33')
        ]);

        $this->info('User created. Credentials: email - admin@ultramed.com, password - ultramed33');
        return true;
    }
}
