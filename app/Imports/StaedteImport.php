<?php

namespace App\Imports;

use App\Models\EventPlace;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithColumnLimit;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StaedteImport implements ToCollection, WithBatchInserts, WithChunkReading, WithColumnLimit, WithStartRow
{
    public function collection(Collection $collection)
    {
        $i = 0;

        foreach ($collection as $row) {
            if (empty($row[0])) {
                break;
            }
            $i++;
            $area = $row[1];
            $city = $row[6];
            $zipCode = $row[7];

            EventPlace::firstOrCreate([
                'area_id' => $area,
                'name' => explode(',', $city)[0],
                'zip_code' => $zipCode,
            ]);
        }
    }

    public function startRow(): int
    {
        return 8;
    }

    public function chunkSize(): int
    {
        return 100;
    }

    public function batchSize(): int
    {
        return 1;
    }

    public function endColumn(): string
    {
        return 'H';
    }
}
