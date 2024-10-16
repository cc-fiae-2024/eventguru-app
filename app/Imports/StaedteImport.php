<?php

namespace App\Imports;

use App\Models\EventPlace;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StaedteImport implements ToCollection, WithChunkReading, WithStartRow, WithBatchInserts
{
    public function collection(Collection $collection)
    {
        $i = 0;

        foreach ($collection as $row) {
            if (empty($row[0])) {
                break;
            }
            Log::info('rowLog'.$i);
            $i++;
            $area = $row[1];
            $city = $row[6];
            $zipCode = $row[7];

            EventPlace::create([
                'area_id' => $area,
                'name' => $city,
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

}
