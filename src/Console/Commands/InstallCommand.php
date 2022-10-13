<?php

namespace Parth1895\LxBladeComponents\Console\Commands;

use RuntimeException;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

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
        // $this->callSilent('vendor:publish', ['--tag' => 'lx-views', '--force' => true]);
        // $this->output->writeln(PHP_EOL.'<bg=blue;fg=black> INFO </> '. 'Publishing [lx-views] assets.'. PHP_EOL .'   Copying directory [vendor/parth1895/lxbladecomponents/resources/views] to [resources/views/components/lx] .......................................... DONE' .PHP_EOL);
        (new Filesystem)->copyDirectory(__DIR__.'/../resources/views/components/', resource_path('resources/views/components/lx'));

    }

    public function __construct()
    {
        parent::__construct();
    }

    protected function runCommands($commands)
    {
        $process = Process::fromShellCommandline(implode(' && ', $commands), null, null, null, null);

        if ('\\' !== DIRECTORY_SEPARATOR && file_exists('/dev/tty') && is_readable('/dev/tty')) {
            try {
                $process->setTty(true);
            } catch (RuntimeException $e) {
                $this->output->writeln('  <bg=yellow;fg=black> WARN </> '.$e->getMessage().PHP_EOL);
            }
        }

        $process->run(function ($type, $line) {
            $this->output->write('    '.$line);
        });
    }
}