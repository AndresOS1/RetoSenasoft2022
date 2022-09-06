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
            ['carta' => '1A','img_carta'=>'https://images.mediotiempo.com/TFAt7R3tfhrUe0AogtvLHnmRfIE=/0x530/uploads/media/2021/03/04/aston-martin-am-correra-vettel.jpg', 'modelo'=>'astin-martin-vatle','cilindraje' => 1497,'cilindros'=>6,'potencia'=>800,'revoluciones'=>11200,'peso'=>569],
            ['carta' => '2A','img_carta'=>'https://phantom-marca.unidadeditorial.es/448e4fb19e054941ea00c9a01a60c280/resize/1320/f/jpg/assets/multimedia/imagenes/2022/02/09/16444242286100.jpg', 'modelo'=>'Red Bull-2022','cilindraje' => 1197,'cilindros'=>8,'potencia'=>760 ,'revoluciones'=>12120,'peso'=>409],
            ['carta' => '3A','img_carta'=>'https://www.diariomotor.com/imagenes/picscache/1440x655c/McLaren_F1_GTR_028R_01_1440x655c.jpg', 'modelo'=>'McLaren F1 GTR','cilindraje' => 1507,'cilindros'=>8,'potencia'=>870,'revoluciones'=>12312,'peso'=>486],
            ['carta' => '4A','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2021/02/Diseno-sin-titulo-1-18.jpg', 'modelo'=>'Mercedes-2022','cilindraje' => 1697,'cilindros'=>8,'potencia'=>1110 ,'revoluciones'=>12216 ,'peso'=>434],
            ['carta' => '5A','img_carta'=>'https://www.diariomotor.com/competicion/imagenes/picscache/750x/aston-martin-amr22-temporada-2022-f1-6_750x.jpg', 'modelo'=>'Aston Martin AMR22.','cilindraje' => 2000,'cilindros'=>8,'potencia'=>1700,'revoluciones'=>13000,'peso'=>425],
            ['carta' => '6A','img_carta'=>'https://upload.wikimedia.org/wikipedia/commons/5/55/2022_Emilia_Romagna_GP_-_Mercedes-AMG_F1_W13_E_Performance_of_Lewis_Hamilton.jpg' ,'modelo'=>'Mercedes W13','cilindraje' => 1700,'cilindros'=>6,'potencia'=>1500,'revoluciones'=>11000,'peso'=> 370],
            ['carta' => '7A','img_carta'=>'https://cdn-1.motorsport.com/images/amp/6AEAodv6/s1000/williams-fw44-1.jpg', 'modelo'=>'Williams FW44','cilindraje' => 1405,'cilindros'=>6,'potencia'=>1370,'revoluciones'=>11890,'peso'=>360],
            ['carta' => '8A','img_carta'=>'https://cdn-1.motorsport.com/images/amp/YEQP1BMY/s6/charles-leclerc-ferrari-f1-75-.jpg','modelo'=>'Ferrari F1-75','cilindraje' => 1600,'cilindros'=>8,'potencia'=>1600,'revoluciones'=>10679,'peso'=>300],



            ['carta' => '1B','img_carta'=>'https://e00-marca.uecdn.es/assets/multimedia/imagenes/2022/04/29/16512105369548.jpg' , 'modelo'=>'Porsche 911','cilindraje' => 1300,'cilindros'=>6,'potencia'=>900,'revoluciones'=>12000,'peso'=>234],
            ['carta' => '2B','img_carta'=>'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/nissan-gtr-2022-japon-portada-1631625941.jpg', 'modelo'=>'Nissan GT-R','cilindraje' => 1500 ,'cilindros'=>8,'potencia'=>1100,'revoluciones'=>10800,'peso'=>250],
            ['carta' => '3B','img_carta'=>'https://www.diariomotor.com/imagenes/picscache/1920x1600c/lamborghini-aventador-ultimae-031_1920x1600c.jpg', 'modelo'=>'Lamborghini aventador','cilindraje' => 1600,'cilindros'=>8,'potencia'=>1800,'revoluciones'=>15000,'peso'=>350],
            ['carta' => '4B','img_carta'=>'https://img.remediosdigitales.com/0b7d3d/mercedes-amg-gt-2020-002/1366_2000.jpg', 'modelo'=>'Mercedes-AMG','cilindraje' => 1300,'cilindros'=>6,'potencia'=>1000,'revoluciones'=>10000,'peso'=>230],
            ['carta' => '5B','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2021/10/20212510-MAZDA-MX-5-SKYACTIV-X-PORTADA.jpg', 'modelo'=>'Mazda MX-5','cilindraje' => 1460,'cilindros'=>8,'potencia'=>1200,'revoluciones'=>13000,'peso'=>245],
            ['carta' => '6B','img_carta'=>'https://img.remediosdigitales.com/5584b3/alpine-a110-1-/1366_2000.jpg', 'modelo'=>'Alpine A110','cilindraje' => 1390,'cilindros'=>6,'potencia'=>1434,'revoluciones'=>13290,'peso'=>600],
            ['carta' => '7B','img_carta'=>'https://www.diariomotor.com/imagenes/picscache/1920x1600c/mclaren-570s-ficha-0118-014_1920x1600c.jpg', 'modelo'=>'McLaren 570S','cilindraje' => 2000,'cilindros'=>8,'potencia'=>2000,'revoluciones'=>14000,'peso'=>1000],
            ['carta' => '8B','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2020/02/20200227-BMW-M2-COMPETITION-PRUEBA-DE-MANEJO-EN-COLOMBIA-0xAA.jpg', 'modelo'=>'BMW M2 Competition','cilindraje' => 1800,'cilindros'=>8,'potencia'=>1534,'revoluciones'=>10450,'peso'=>567],




            ['carta' => '1C','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2020/01/20200109-RENAULT-CLIO-E-TECH-HIBRIDO-01.jpg', 'modelo'=>'Renault-Clio','cilindraje' => 400,'cilindros'=>4,'potencia'=>700,'revoluciones'=>8000,'peso'=>240],
            ['carta' => '2C','img_carta'=>'https://upload.wikimedia.org/wikipedia/commons/8/88/2019_Mazda3_SE-L_2.0_Front.jpg', 'modelo'=>'Mazda 3','cilindraje' => 500,'cilindros'=>6,'potencia'=>750,'revoluciones'=>9500,'peso'=>255],
            ['carta' => '3C','img_carta'=>'https://www.auto-data.net/images/f45/Kia-Rio-III-Hatchback-UB.jpg', 'modelo'=>'Kia 3','cilindraje' => 350 ,'cilindros'=>4,'potencia'=>500,'revoluciones'=>4000,'peso'=>240 ],
            ['carta' => '4C','img_carta'=>'https://acnews.blob.core.windows.net/imgnews/medium/NAZ_2def2d46eca64907b5302dd21b3ec8d4.jpg', 'modelo'=>'Suzuki-Swift','cilindraje' => 300,'cilindros'=>4,'potencia'=>300,'revoluciones'=>4000,'peso'=>300],
            ['carta' => '5C','img_carta'=>'https://http2.mlstatic.com/D_NQ_NP_739946-MCO49549464316_042022-O.jpg', 'modelo'=>'Ford fiesta','cilindraje' => 700 ,'cilindros'=>4,'potencia'=>800,'revoluciones'=>8000,'peso'=>358],
            ['carta' => '6C','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2021/08/20210802-MAZDA-2-2022-SUNLIT-CITRUS-JAPON-01.jpg', 'modelo'=>'Mazda 2','cilindraje' => 560,'cilindros'=>6,'potencia'=>900,'revoluciones'=>9800,'peso'=>500],
            ['carta' => '7C','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2019/03/20190322-CHEVROLET-ONIX-SEDAN-2020-REDLINE-PRIMERA-IMAGEN-OFICIAL-02.jpg', 'modelo'=>'Chevrolet Onix','cilindraje' => 460,'cilindros'=>4,'potencia'=>700,'revoluciones'=>7897,'peso'=>370],
            ['carta' => '8C','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2019/09/Portada-1.jpg', 'modelo'=>'Chevrolet sail','cilindraje' => 340,'cilindros'=>6,'potencia'=>789,'revoluciones'=>10000,'peso'=>290],




            ['carta' => '1D','img_carta'=>'https://acroadtrip.blob.core.windows.net/catalogo-imagenes/xl/RT_V_250fd7eb529e4bf7a1c3fec541b1899b.jpg', 'modelo'=>'Suzuki Jimny','cilindraje' => 1200 ,'cilindros'=>8,'potencia'=>2000,'revoluciones'=>14800,'peso'=>450],
            ['carta' => '2D','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2020/10/Portada-7.jpg', 'modelo'=>'Hyundai santa fe','cilindraje' => 1500 ,'cilindros'=>8,'potencia'=>1100,'revoluciones'=>10800,'peso'=>250],
            ['carta' => '3D','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2021/06/20210906-TOYOTA-LAND-CRUISER-2022-PORTADA.jpg', 'modelo'=>'Toyota Land Cruiser','cilindraje' => 900,'cilindros'=>6,'potencia'=>5000,'revoluciones'=>12900,'peso'=>490],
            ['carta' => '4D','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2021/04/20210413-SKODA-KODIAQ-2022-PORTADA.jpg', 'modelo'=>'Skoda Kodiaq','cilindraje' => 1000,'cilindros'=>8,'potencia'=>4300,'revoluciones'=>13200,'peso'=>487],
            ['carta' => '5D','img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2022/08/20220804-DACIA-DUSTER-COMERCIAL-2023-PORTADA.jpg', 'modelo'=>'Dacia Duster','cilindraje' => 1600,'cilindros'=>6,'potencia'=>3700,'revoluciones'=>9800,'peso'=>384],
            ['carta' => '6D', 'img_carta'=>'https://www.elcarrocolombiano.com/wp-content/uploads/2019/04/20190409-HYUNDAI-TUCSON-2020-COLOMBIA-PRECIO-CARACTERISTICAS-Y-VERSIONES-01.jpg','modelo'=>'Hyundai Tucson','cilindraje' => 1430,'cilindros'=>6,'potencia'=>4100,'revoluciones'=>7800,'peso'=>370],
            ['carta' => '7D','img_carta'=>'https://www.megautos.com/wp-content/uploads/2021/03/2022-Ford-Super-Duty-Limited-adelante.jpg', 'modelo'=>'Ford F-250','cilindraje' => 1670,'cilindros'=>8,'potencia'=>3897,'revoluciones'=>8020,'peso'=>400],
            ['carta' => '8D','img_carta'=>'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/jeep-wrangler-4xe-2022-1638881858.jpg?crop=1.00xw:0.892xh;0,0.0462xh&resize=1200:*', 'modelo'=>'Jeep Wrangler','cilindraje' => 1478,'cilindros'=>6,'potencia'=>3890,'revoluciones'=>12789,'peso'=>370],
        ];

        DB::table('cartas')->insert($data);
    }
}
