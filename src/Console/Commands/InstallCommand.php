<?php

namespace Parth1895\LxBladeComponents\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lx:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the lx components';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'lx-views', '--force' => true]);
    }

    public function __construct()
    {
        parent::__construct();
    }
}