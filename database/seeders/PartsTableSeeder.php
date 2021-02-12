<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = ['part' => '選択なし'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'ボーカル'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'ギター'];
        DB::table('parts')->insert($param);

        $param = ['part' => '鍵盤'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'ベース'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'ドラム'];
        DB::table('parts')->insert($param);

        $param = ['part' => '管楽器'];
        DB::table('parts')->insert($param);

        $param = ['part' => '弦楽器'];
        DB::table('parts')->insert($param);

        $param = ['part' => '打楽器'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'その他楽器'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'イラストレーター'];
        DB::table('parts')->insert($param);

        $param = ['part' => 'カメラマン'];
        DB::table('parts')->insert($param);

        $param = ['part' => '映像クリエイター'];
        DB::table('parts')->insert($param);

        $param = ['part' => '音響クリエイター'];
        DB::table('parts')->insert($param);
    }
}
