<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    private const MAPPING = [
        'name',
        'price',
        'bedrooms',
        'bathrooms',
        'storeys',
        'garages'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $row = 1;
        if (($handle = fopen(__DIR__ . "/../../storage/data/property-data.csv", "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                if ($row === 1) {
                    $row++;
                    continue;
                }
                $num = count($data);
                $row++;
                $modelData = [];
                for ($c = 0; $c < $num; $c++) {
                    $modelData[self::MAPPING[$c]] = $data[$c];
                }
                House::create($modelData);
            }
            fclose($handle);
        }
    }
}
