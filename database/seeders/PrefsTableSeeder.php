<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = ['pref' => '選択なし'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '北海道'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '青森県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '岩手県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '宮城県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '秋田県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '山形県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '福島県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '茨城県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '栃木県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '群馬県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '埼玉県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '千葉県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '東京都'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '神奈川県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '新潟県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '富山県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '石川県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '福井県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '山梨県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '長野県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '岐阜県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '静岡県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '愛知県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '三重県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '滋賀県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '京都府'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '大阪府'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '兵庫県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '奈良県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '和歌山県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '鳥取県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '島根県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '岡山県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '広島県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '山口県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '徳島県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '香川県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '愛媛県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '高知県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '福岡県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '佐賀県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '長崎県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '熊本県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '大分県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '宮崎県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '鹿児島県'];
        DB::table('prefs')->insert($param);

        $param = ['pref' => '沖縄県'];
        DB::table('prefs')->insert($param);
    }
}
