<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaravelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:basic
                                {argument : ini adalah deskripsi argument}
                                {--o|opsi= : ini adalah deskripsi opsi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'laravel basic command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle():void
    {
        $this->info("Informasi yang muncul dalam terminal");
        $this->error("something went error");
        $this->line("Display this on the screen");

        //$this->line(print_r($this->options()) . ' ' . print_r($this->arguments()));
        $this->line($this->argument('argument') . " " . $this->option('opsi'));
        $name = $this->ask('nama kamu siapa');
        $password = $this->secret('password mu dong');

        if ($this->confirm('apakah kamu mau lanjut')){
            $this->line($name . " " . $password);
        }
    }
}
