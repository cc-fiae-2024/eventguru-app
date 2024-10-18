<?php

namespace App\Console\Commands;

use App\Imports\EventPlaceImport;
use Illuminate\Console\Command;

class ImportExcel extends Command
{
    protected $signature = 'import:excel';

    protected $description = 'Laravel Excel importer';

    public function handle()
    {
        $this->output->title('Starting import');
        (new EventPlaceImport)->withOutput($this->output)->import(
            storage_path('app/private/05-staedte.xlsx')
        );
        $this->output->success('Import successful');
    }
}
