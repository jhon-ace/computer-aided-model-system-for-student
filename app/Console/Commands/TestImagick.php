<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestImagick extends Command
{
    protected $signature = 'test:imagick';
    protected $description = 'Check if Imagick extension is loaded';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if (extension_loaded('imagick')) {
            $this->info('Imagick extension is loaded.');
        } else {
            $this->error('Imagick extension is not loaded.');
        }
    }
}
