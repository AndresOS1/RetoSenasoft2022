<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            ['carta' => '1A', 'modelo'=>'Ferrari-2022','cilindraje' => 1497,'cilindros'=>6,'potencia'=>800,'revoluciones'=>11200,'peso'=>569],
            ['carta' => '2A', 'modelo'=>'Red Bull-2022','cilindraje' => 1197,'cilindros'=>8,'potencia'=>760 ,'revoluciones'=>12120,'peso'=>409],
            ['carta' => '3A', 'modelo'=>'McLaren F1 GTR','cilindraje' => 1507,'cilindros'=>8,'potencia'=>870,'revoluciones'=>12312,'peso'=>486],
            ['carta' => '4A', 'modelo'=>'Mercedes-2022','cilindraje' => 1697,'cilindros'=>8,'potencia'=>1110 ,'revoluciones'=>12216 ,'peso'=>434],
            ['carta' => '5A', 'modelo'=>'Aston Martin AMR22.','cilindraje' => 2000,'cilindros'=>8,'potencia'=>1700,'revoluciones'=>13000,'peso'=>425],
            ['carta' => '6A', 'modelo'=>'Mercedes W13','cilindraje' => 1700,'cilindros'=>6,'potencia'=>1500,'revoluciones'=>11000,'peso'=> 370],
            ['carta' => '7A', 'modelo'=>'Williams FW44','cilindraje' => 1405,'cilindros'=>6,'potencia'=>1370,'revoluciones'=>11890,'peso'=>360],
            ['carta' => '8A', 'modelo'=>'Ferrari F1-75.','cilindraje' => 1600,'cilindros'=>8,'potencia'=>1600,'revoluciones'=>10679,'peso'=>300],



            ['carta' => '1B', 'modelo'=>'Porsche 911','cilindraje' => 1300,'cilindros'=>6,'potencia'=>900,'revoluciones'=>12000,'peso'=>234],
            ['carta' => '2B', 'modelo'=>'Nissan GT-R ','cilindraje' => 1500 ,'cilindros'=>8,'potencia'=>1100,'revoluciones'=>10800,'peso'=>250],
            ['carta' => '3B', 'modelo'=>'Lamborghini','cilindraje' => 1600,'cilindros'=>8,'potencia'=>1800,'revoluciones'=>15000,'peso'=>350],
            ['carta' => '4B', 'modelo'=>'Mercedes-AMG','cilindraje' => 1300,'cilindros'=>6,'potencia'=>1000,'revoluciones'=>10000,'peso'=>230],
            ['carta' => '5B', 'modelo'=>'Mazda MX-5','cilindraje' => 1460,'cilindros'=>8,'potencia'=>1200,'revoluciones'=>13000,'peso'=>245],
            ['carta' => '6B', 'modelo'=>'Alpine A110','cilindraje' => 1390,'cilindros'=>6,'potencia'=>1434,'revoluciones'=>13290,'peso'=>600],
            ['carta' => '7B', 'modelo'=>'McLaren 570S','cilindraje' => 2000,'cilindros'=>8,'potencia'=>2000,'revoluciones'=>14000,'peso'=>1000],
            ['carta' => '8B', 'modelo'=>'BMW M2 Competition ','cilindraje' => 1800,'cilindros'=>8,'potencia'=>1534,'revoluciones'=>10450,'peso'=>567],




            ['carta' => '1C', 'modelo'=>'Renault-Clio','cilindraje' => 400,'cilindros'=>4,'potencia'=>700,'revoluciones'=>8000,'peso'=>240],
            ['carta' => '2C', 'modelo'=>'Mazda 3','cilindraje' => 500,'cilindros'=>6,'potencia'=>750,'revoluciones'=>9500,'peso'=>255],
            ['carta' => '3C', 'modelo'=>'Kia 3','cilindraje' => 350 ,'cilindros'=>4,'potencia'=>500,'revoluciones'=>4000,'peso'=>240 ],
            ['carta' => '4C', 'modelo'=>'Suzuki-Swift','cilindraje' => 300,'cilindros'=>4,'potencia'=>300,'revoluciones'=>4000,'peso'=>300],
            ['carta' => '5C', 'modelo'=>'Ford fiesta','cilindraje' => 700 ,'cilindros'=>4,'potencia'=>800,'revoluciones'=>8000,'peso'=>358],
            ['carta' => '6C', 'modelo'=>'Mazda 2','cilindraje' => 560,'cilindros'=>6,'potencia'=>900,'revoluciones'=>9800,'peso'=>500],
            ['carta' => '7C', 'modelo'=>'Chevrolet Onix','cilindraje' => 460,'cilindros'=>4,'potencia'=>700,'revoluciones'=>7897,'peso'=>370],
            ['carta' => '8C', 'modelo'=>'Chevrolet sail','cilindraje' => 340,'cilindros'=>6,'potencia'=>789,'revoluciones'=>10000,'peso'=>290],




            ['carta' => '1D', 'modelo'=>'Suzuki Jimny','cilindraje' => 1200 ,'cilindros'=>8,'potencia'=>2000,'revoluciones'=>14800,'peso'=>450],
            ['carta' => '2D', 'modelo'=>'Hyundai santa fe','cilindraje' => 1500 ,'cilindros'=>8,'potencia'=>1100,'revoluciones'=>10800,'peso'=>250],
            ['carta' => '3D', 'modelo'=>'Toyota Land Cruiser.','cilindraje' => 900,'cilindros'=>6,'potencia'=>5000,'revoluciones'=>12900,'peso'=>490],
            ['carta' => '4D', 'modelo'=>'Skoda Kodiaq','cilindraje' => 1000,'cilindros'=>8,'potencia'=>4300,'revoluciones'=>13200,'peso'=>487],
            ['carta' => '5D', 'modelo'=>'Dacia Duster','cilindraje' => 1600,'cilindros'=>6,'potencia'=>3700,'revoluciones'=>9800,'peso'=>384],
            ['carta' => '6D', 'modelo'=>'Hyundai Tucson','cilindraje' => 1430,'cilindros'=>6,'potencia'=>4100,'revoluciones'=>7800,'peso'=>370],
            ['carta' => '7D', 'modelo'=>'Ford F-250','cilindraje' => 1670,'cilindros'=>8,'potencia'=>3897,'revoluciones'=>8020,'peso'=>400],
            ['carta' => '8D', 'modelo'=>'Jeep Wrangler','cilindraje' => 1478,'cilindros'=>6,'potencia'=>3890,'revoluciones'=>12789,'peso'=>370],
        ];

        DB::table('cartas')->insert($data);
    }
}
