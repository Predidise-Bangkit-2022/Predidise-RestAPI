<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        $storage = Storage::disk('dummy')->path('output.csv');
        $handlee = fopen($storage, "r");
        for ($i = 0; $roww = fgetcsv($handlee); ++$i) {
            $arr[] = [
                'user_id' => $roww[1],
                'tourism_id' => $roww[2],
                'rating' => $roww[3],
                'review' => 'Excellent view and service!',
                'image' => '',
            ];
            if (count($arr) >= 100) {
                DB::table('reviews')->insert($arr);
                echo json_encode($arr[0]);
                $arr = [];
            }
        }
        fclose($handlee);
    }
}
