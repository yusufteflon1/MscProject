<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class approvalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { {
            DB::table('approvals')->insert([
                'user_id' => '3',
                'approval_id' => '1',
                'approval_name' => 'Third first approval',
                'comment'  => 'Third this is comment',
                'status'  =>  '1',
                'clients_id' => '3'
            ]);
        }
    }
}
