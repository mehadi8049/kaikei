<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'name'=>'Cash',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'name'=> 'Bank',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ];
        TransactionType::insert($data);
    }
}
