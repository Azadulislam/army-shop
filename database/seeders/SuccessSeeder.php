<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `successes` (`id`, `item_name`, `slug`, `value`, `year_start`, `agency_id`, `year_end`, `web_ad_title`, `web_ad_sub_title`, `web_ad_image`, `created_at`, `updated_at`) VALUES
(1, 'Uniforms for Ceremony', 'cerimonial_uniform', '3000000.00', 2019, 1, 2021, 'Supply Cerimonial Uniforms to the Army', 'Top quality uniforms', '', NULL, NULL),
(2, 'Barret Red Cap', 'red_barret_cap', '92000.00', 2021, 2, 2022, 'Supply Red Barret to Air Force', 'Bullet prove material', '', NULL, NULL),
(3, 'Great Coat Malaysian Pattern', 'great_coat_malaysian', '76000.00', 2018, 2, 2019, 'Supply Great Coat for Merdeka Day', 'Special made coat with Malaysian pattern.', '', NULL, NULL),
(4, 'Coat Waterproof', 'coat_waterproof', '1300000.00', 2020, 1, 2021, 'Supply Waterproof coat for the Malaysian Army', 'High quality waterproof coat made using nanotehnology tailoring.', '', NULL, NULL),
(5, 'Woolen Vest', 'woolean_vest', '235000.00', 2017, 3, 2019, 'Supply woolean vest for the Air Force for Lebanon UN Mission', 'Top quality woolen vest that can withstand very cold winter.', '', NULL, NULL),
(6, 'Black Tie', 'black_tia', '830000.00', 2020, 3, 2020, 'Supply of black tie for the Navy', 'Specially made tie using robotic machinery. This is to enable highly precision made tie.', '', NULL, NULL)");
    }
}
