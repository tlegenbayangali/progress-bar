<?php

namespace TlegenBayangali\ProgressBar\Commands;

use Illuminate\Console\Command;

class ProgressBarCommand extends Command
{
    public $signature = 'progress-bar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
