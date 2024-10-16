<?php

namespace App\Imports;

use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class EventPlaceImport implements WithMultipleSheets, WithProgressBar
{
    use Importable;

    /**
     * @param  array  $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function sheets(): array
    {
        Log::info("betreten");

        return [
            "Städte" => new StaedteImport(),
        ];
    }
}
