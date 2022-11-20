<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = array(
            array('id' => '1','name' => 'Pakaian Kebangsaan Hitam','slug' => 'pakaian_kebangsaan_hitam','description' => 'Pakaian kebangsaan berwarna hitam','code' => 'H2828','retail_price' => '230.00','type_id' => '1','category_id' => '1','sub_category_id' => '1','image' => '','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','name' => 'Pakaian No.3 Kerja -Lelaki','slug' => 'pakaian_kerja_no3_lelaki','description' => 'Pakaian erja No.3 Lelaki','code' => 'J393938','retail_price' => '330.00','type_id' => '1','category_id' => '1','sub_category_id' => '1','image' => '','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','name' => 'Pakaian No5 Celorang Digital -Lelaki dan Wanita','slug' => 'pakaian_no.5_celoreng_digital_lelaki_dan_wanita','description' => 'Pakaian no 5 Celoreng Digital Lelaki dan wanita.','code' => 'K9388','retail_price' => '560.00','type_id' => '3','category_id' => '1','sub_category_id' => '1','image' => '','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','name' => 'Bullet Proof Vest Level III','slug' => 'bullet_proof_vest_level_iii','description' => 'Bullet Proof Vest Level III','code' => 'P38382','retail_price' => '820.00','type_id' => '3','category_id' => '1','sub_category_id' => '1','image' => '','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','name' => 'Pakaian Istiadat No.1 Temparate -Lelaki','slug' => 'pakaian_istiadat_no1_temparate_lelaki','description' => 'Pakaian Istiadat No.1 Temparate -Lelaki','code' => 'L38489','retail_price' => '782.00','type_id' => '1','category_id' => '1','sub_category_id' => '1','image' => '','created_at' => NULL,'updated_at' => NULL)
        );
        Product::insert($products);
    }
}
