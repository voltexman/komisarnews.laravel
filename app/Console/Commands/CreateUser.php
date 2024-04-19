<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create';

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
        if ($hasAdmin = User::where('name', 'admin')->first()) {

            $this->info('Адміністратор вже існує.');
            $this->info('Токен: '.$hasAdmin->plainTextToken);

        } else {

            $user = User::create([
                'name' => 'admin',
                'email' => 'admin@admin.admin',
                'password' => Hash::make('!komisarAdmin!Max.'),
            ]);

            $user->save();

            $created = $user->createToken('admin-access');

            $this->info('Адміністратор успішно створений.');
            $this->info('Токен: '.$created->plainTextToken);
        }
    }
}
