<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects=[
            [
                'name'=>'Income',
                'children'=>[
                    'Revenue/Sales',
                    'others'
                ]
            ],
            [
                'name'=>'Expense',
                'children'=>[
                    'Purchasing cost',
                    'Labor costs and other',
                    'Health and Medicine',
                    '交通費・旅費',
                    'Rent/Loan',
                    '水道光熱費',
                    'Advertisements etc.',
                    'Office and Library',
                    '交際費',
                    'Repair costs and maintenance',
                    'Shipping and handling fees',
                    'Outsourcing cost',
                    'others',
                ]
            ],
            [
                'name'=>'Transfer of Fund',
                'children'=>[
                   'Withdraw',
                   'Transfer',
                ]
            ],
        ];

        foreach($subjects as $subject){
            $new_children=Subject::create(['name'=>$subject['name']]);
            foreach($subject['children'] as $child){
                Subject::create(['name'=>$child,'parent_id'=>$new_children->id]);
            }
        }
    }
}
