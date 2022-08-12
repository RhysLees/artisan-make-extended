<?php

namespace RhysLees\ArtisanMakeExtended\Commands;

use Illuminate\Console\Command;

class ArtisanMakeExtendedCommand extends Command
{
    public $signature = 'artisan-make-extended';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
