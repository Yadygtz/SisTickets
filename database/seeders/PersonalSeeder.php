<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'JOSEL SIERRA REYES',
            'nombre_p_mostrar' => 'LIC. JOEL SIERRA',
            'puesto' => 'DIRECTOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'GERARDO BORJAS MOLINA',
            'nombre_p_mostrar' => 'LIC. GERARDO BORJAS',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'DINORAH JOCELYN MARTINEZ COVARRUBIAS',
            'nombre_p_mostrar' => 'LIC. DINORAH MARTINEZ',
            'puesto' => 'JEFE DE UNIDAD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MAYRA ROCIO VILLALOBOS ZUÑIGA',
            'nombre_p_mostrar' => 'LIC. MAYRA VILLLOBOS',
            'puesto' => 'JEFE DE UNIDAD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MARIA DE LOS ANGELES BARRON FUENTES',
            'nombre_p_mostrar' => 'LIC. MARIA BARRON',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'ORALIA ALEJANDRA BLANCO GARATE',
            'nombre_p_mostrar' => 'LIC. ORALIA BLANCO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'DEISY MARGARITA GARCIA HERNANDEZ',
            'nombre_p_mostrar' => 'LIC. DEISY GARCIA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'KARLA LETICIA GARCIA HERNANDEZ',
            'nombre_p_mostrar' => 'LIC. KARLA GARCIA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'THELMA YANETH GOMEZ MARTINEZ',
            'nombre_p_mostrar' => 'LIC. THELMA GOMEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MARCELA LILIANA HUERTA HERNANDEZ',
            'nombre_p_mostrar' => 'LIC. MARCELA HUERTA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'SIVIA ARACELY MAYORGA MARTINEZ',
            'nombre_p_mostrar' => 'LIC. SILVIA MAYORGA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'ROCIO PAZ RAMIREZ',
            'nombre_p_mostrar' => 'LIC. ROCIO PAZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'LUIS ALBERTO REYES RAMIREZ',
            'nombre_p_mostrar' => 'LIC. LUIS REYES',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'TANIA ELIZABETH RIVERA ESQUIVEL',
            'nombre_p_mostrar' => 'LIC. TANIA RIVERA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'RAYMUNDO OMAR RODRIGUEZ VILLANUEVA',
            'nombre_p_mostrar' => 'LIC. RAYMUNDO RODRIGUEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'VIRGINIA PATRICIA ROMO CONTRERAS',
            'nombre_p_mostrar' => 'LIC. VIRGINIA ROMO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MARINA RUIZ SANCHEZ',
            'nombre_p_mostrar' => 'LIC. MARINA RUIZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MAYRA LIZETH SANCHEZ PULIDO',
            'nombre_p_mostrar' => 'LIC. MAYRA SANCHEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MARIA ALEJANDRA TURRUBIATES MARTINEZ',
            'nombre_p_mostrar' => 'LIC. MARIA TURRUBIATES',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'XIOMARA BERENICE HUERTA PERALES',
            'nombre_p_mostrar' => 'LIC. XIOMARA HUERTA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 6,
            'nombre' => 'MARIA KARINA MALDONADO CARRANZA',
            'nombre_p_mostrar' => 'LIC. KARINA MALDONADO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'CLAUDIA ARACELY GARCIA MEZA',
            'nombre_p_mostrar' => 'LIC. CLAUDIA GARCIA',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'LILIANA LIZETH CRUZ ARIZPE',
            'nombre_p_mostrar' => 'LIC. LILIANA CRUZ',
            'puesto' => 'JEFE DE UNIDAD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'CARLOS AMADOR SILVA SANCHEZ',
            'nombre_p_mostrar' => 'LIC. CARLOS SILVA',
            'puesto' => 'JEFE DE UNIDAD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'YAZMIN LIZETH LAZO PEREZ',
            'nombre_p_mostrar' => 'LIC. YAZMIN LAZO',
            'puesto' => 'INVESTIGADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'LESLY ALEJANDRA ESTRADA MENDOZA',
            'nombre_p_mostrar' => 'LIC. LESLY ESTRADA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'LUZ ERUDICE LOREDO DIAZ',
            'nombre_p_mostrar' => 'LIC. LUZ LOREDO',
            'puesto' => 'INVESTIGADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'JESUS RAFAEL PEREZ RENDON',
            'nombre_p_mostrar' => 'LIC. JESUS PEREZ',
            'puesto' => 'INVESTIGADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'CHRISTIAN ERASMO TUDON VILLEGAS',
            'nombre_p_mostrar' => 'LIC. TUDON VILLEGAS',
            'puesto' => 'INVESTIGADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 2,
            'nombre' => 'CARLOS ALBERTO DOMINGUEZ CHAPA',
            'nombre_p_mostrar' => 'LIC. CARLOS CHAPA',
            'puesto' => 'INVESTIGADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'JUAN CARLOS MIRELES REYNA',
            'nombre_p_mostrar' => 'LIC. JUAN CARLOS MIRELES',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'ESMERALDA ABUNDIS FLORES',
            'nombre_p_mostrar' => 'LIC. ESMERALDA ABUNDIS',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'JORGE DEL ANGEL PEREZ',
            'nombre_p_mostrar' => 'LIC. JORGE DEL ANGEL',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'EORY MARLEN ESQUEDA SALDIVAR',
            'nombre_p_mostrar' => 'LIC. EORY ESQUEDA',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'MARTHA ELVA ESCOBEDO CONDE',
            'nombre_p_mostrar' => 'LIC. MARTHA ESCOBEDO',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'NAARA SERET MALDONADO Y DIAZ',
            'nombre_p_mostrar' => 'LIC. NAARA MALDONADO',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'ALICIA ALEJANDRA NIETO REYES',
            'nombre_p_mostrar' => 'LIC. ALICIA NIETO',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'BLANCA NALLELY TIRADO GARCIA',
            'nombre_p_mostrar' => 'LIC. BLANCA TIRADO',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'ELVIRA GUADALUPE URIEGAS MEDINA',
            'nombre_p_mostrar' => 'LIC. ELVIRA URIEGAS',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 10,
            'nombre' => 'ESMERALDA ABUNDIS FLORES',
            'nombre_p_mostrar' => 'LIC. ESMERALDA ABUNDIS',
            'puesto' => 'GESTIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'OMAR CISNEROS RODRIGUEZ',
            'nombre_p_mostrar' => 'LIC. OMAR CISNEROS',
            'puesto' => 'DIRECTOR DE INTEGRACIÓN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'DIANA EDITH ARRIAGA HERNANDEZ',
            'nombre_p_mostrar' => 'LIC. DIANA ARRIAGA',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'LAURA IVETTE CASTILLO DIAZ',
            'nombre_p_mostrar' => 'LIC. CASTILLO DIAZ',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'DIANA EDITH ARRIAGA HERNANDEZ',
            'nombre_p_mostrar' => 'LIC. DIANA ARRIAGA',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'DIANA EDITH ARRIAGA HERNANDEZ',
            'nombre_p_mostrar' => 'LIC. DIANA ARRIAGA',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'LAURA IVETTE CASTILLO DIAZ',
            'nombre_p_mostrar' => 'LIC. LAURA CASTILLO',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'MARIA LUCILA GARZA CUELLAR',
            'nombre_p_mostrar' => 'LIC. MARIA LUCILA',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'JETSSY LIZBETH HEREDIA MONTAFUR',
            'nombre_p_mostrar' => 'LIC. JETSSY HEREDIA',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 3,
            'nombre' => 'LEOBARDO ALFONSO RODRIGUEZ HENANDEZ',
            'nombre_p_mostrar' => 'LIC. LEOBARDO ALFONSO',
            'puesto' => 'ARCHIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 4,
            'nombre' => 'CIPATLY ADRIANA CORTES DUEÑAS',
            'nombre_p_mostrar' => 'LIC. CIPATLY CORTES',
            'puesto' => 'AUXILIAR DE CERTIFICACION',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'SARA ELIZABETH RODRIGUEZ GARCIA',
            'nombre_p_mostrar' => 'LIC. SARA RODRIGUEZ',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'JOSE RAUL RAMIREZ VILLEGAS',
            'nombre_p_mostrar' => 'LIC. RAUL RAMIREZ',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 4,
            'nombre' => 'JESUS GERARDO TORRES TORRES',
            'nombre_p_mostrar' => 'LIC. GERARDO TORRES',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'RUBEN DARIO MATA RODRIGUEZ',
            'nombre_p_mostrar' => 'LIC. DARIO MATA',
            'puesto' => 'JEFE ADMINISTRATIVO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'ALDO YAHIR CAMACHO GONZALEZ',
            'nombre_p_mostrar' => 'LIC. ALDO CAMACHO',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'MARIANA ESPINOZA CANTERO',
            'nombre_p_mostrar' => 'LIC. MARIANA ESPINOZA',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'CINTHYA CAROLINA GARCIA CARBONELL',
            'nombre_p_mostrar' => 'LIC. CINTHYA GARCIA',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'MONICA ALEJANDRA MOYERS GARCIA',
            'nombre_p_mostrar' => 'LIC. MONICA MOYERS',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'BERZAIN PEREZ MARQUINA',
            'nombre_p_mostrar' => 'LIC. BERZAIN PEREZ',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'CHRISTIAN JESUS ARMANDO RIOS ESCOBEDO',
            'nombre_p_mostrar' => 'LIC. JESUS RIOS',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'ADRIANA SANCHEZ VAZQUEZ',
            'nombre_p_mostrar' => 'LIC. ADRIANA SANCHEZ',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 7,
            'nombre' => 'SONIA GABRIELA SAUCEDO RUIZ',
            'nombre_p_mostrar' => 'LIC. SONIA SAUCEDO',
            'puesto' => 'INTEGRADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'ARIANA CAROLINA PRIEGO IZQUIERDO',
            'nombre_p_mostrar' => 'LIC. ARIANA PRIEGO',
            'puesto' => 'DIRECTOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'FRANCISCO OMAR DONIZZETI HERNANDEZ PEREZ',
            'nombre_p_mostrar' => 'LIC. OMAR DONIZETTI',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'EDER OTHONIEL ESTRADA GONZALEZ',
            'nombre_p_mostrar' => 'LIC. EDER ESTRADA',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'MIREYA ISELA GALLARDO NAJERA',
            'nombre_p_mostrar' => 'LIC. MIREYA GALLARDO',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'MARGARITA CONCEPCION MANZANO AMARO',
            'nombre_p_mostrar' => 'LIC. MARGARITA MANZANO',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'ROSALINDA TERAN AGUILAR',
            'nombre_p_mostrar' => 'LIC. ROSALINDA TERAN',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'MAYRA SIRENYA CANO HERRERA',
            'nombre_p_mostrar' => 'LIC. MAYRA CANO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'MIREYA ISELA GALLARDO NAJERA',
            'nombre_p_mostrar' => 'LIC. MIREYA GALLARDO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'SIMITRIA ALEJANDRA MEDINA COLUNGA',
            'nombre_p_mostrar' => 'LIC. SIMITRIA MEDINA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'SIMITRIA ALEJANDRA MEDINA COLUNGA',
            'nombre_p_mostrar' => 'LIC. SIMITRIA MEDINA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'SIMITRIA ALEJANDRA MEDINA COLUNGA',
            'nombre_p_mostrar' => 'LIC. SIMITRIA MEDINA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'LUIS ERNESTO OCAMPO GARCIA',
            'nombre_p_mostrar' => 'LIC. LUIS ERNESTO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'EMMA SALINAS CANTU',
            'nombre_p_mostrar' => 'LIC. EMMA SALINAS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'NANCY CECILIA SANCHEZ GARCIA',
            'nombre_p_mostrar' => 'LIC. NANCY SANCHEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'DIANA LAURA SANCHEZ GOMEZ',
            'nombre_p_mostrar' => 'LIC. DIANA SANCHEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'AIDA LISSETT TREVIÑO LOPEZ',
            'nombre_p_mostrar' => 'LIC. AIDA TREVIÑO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 9,
            'nombre' => 'OSCAR OMAR VEGA PEREZ',
            'nombre_p_mostrar' => 'LIC. OSCAR VEGA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        #EPP
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'DORA GUADALUPE GARCIA CASTELAN',
            'nombre_p_mostrar' => 'LIC. DORA GARCIA',
            'puesto' => 'DIRECTOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'ALAIN SAID BUENFIL MORALES',
            'nombre_p_mostrar' => 'LIC. ALAIN BUENFIL',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'ANGELITA ACOSTA CASTILLO',
            'nombre_p_mostrar' => 'LIC. ANGELITA ACOSTA',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'MIRNA ELOISA DOMINGUEZ JIMENEZ',
            'nombre_p_mostrar' => 'LIC. MIRNA DOMINGUEZ',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'JULIANA MORALES PACHECO',
            'nombre_p_mostrar' => 'LIC. JULIANA MORALES',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'SUSANA MARLEN SILVA RAMOS',
            'nombre_p_mostrar' => 'LIC. SUSANA SILVA',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'DEISY GUADALUPE VARGAS CARRILLO',
            'nombre_p_mostrar' => 'LIC. DEISY VARGAS',
            'puesto' => 'SUPERVISOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'ANA PATRICIA BALDERAS GALICIA',
            'nombre_p_mostrar' => 'LIC. ANA BALDERAS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'ESTEFANIA CARREON MARTINEZ',
            'nombre_p_mostrar' => 'LIC. ESTEFANIA CARRERON',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'BRENDA VALERIA DE LA FUENTE ELIZONDO',
            'nombre_p_mostrar' => 'LIC. BRENDA DE LA FUENTE',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'GEMA SHERALI GARCIA SUAREZ',
            'nombre_p_mostrar' => 'LIC. GEMA GARCIA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'BRYAN ULISES GONZALEZ MORENO',
            'nombre_p_mostrar' => 'LIC. BRYAN GONZALEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'KATIA MARISOL HERNANDEZ VAZQUEZ',
            'nombre_p_mostrar' => 'LIC. KATIA HERNANDEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'EUNICE SARAI MARTINEZ RAMIREZ',
            'nombre_p_mostrar' => 'LIC. EUNICE MARTINEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'DAYANA ANAHI MARTINEZ REYES',
            'nombre_p_mostrar' => 'LIC. DAYANA MARTINEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'JULIANA MORALES PACHECO',
            'nombre_p_mostrar' => 'LIC. JULIANA MORALES',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'CLAUDIA ABIGAIL PALOMO NAVA',
            'nombre_p_mostrar' => 'LIC. CLAUDIA PALOMO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'SUSANA MARLEN SILVA RAMOS',
            'nombre_p_mostrar' => 'LIC. SUSANA SILVA',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'KARINA SORIANO VAZQUEZ',
            'nombre_p_mostrar' => 'LIC. KARINA SORIANO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'KARINA DE JESUS DE LA ROSA AZUA',
            'nombre_p_mostrar' => 'LIC. KARINA DE LA ROSA',
            'puesto' => 'PSICOMETRISTA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'MAYRA YUSELI LOPEZ MEJIA',
            'nombre_p_mostrar' => 'LIC. MAYRA LOPEZ',
            'puesto' => 'PSICOMETRISTA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 11,
            'nombre' => 'DAYANA ANAHI MARTINEZ REYES',
            'nombre_p_mostrar' => 'LIC. DAYANA MARTINEZ',
            'puesto' => 'PSICOMETRISTA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        #EME
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'DAVID YAHIR ARIZMENDI CARVAJAL',
            'nombre_p_mostrar' => 'DR. DAVID ARIZMENDI',
            'puesto' => 'DIRECTOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'MONICA KARINA PAULIN GUZMAN',
            'nombre_p_mostrar' => 'DRA. MONICA PAULIN',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'FENICIA MELINA GUADALUPE SALDIVAR CASTILLO',
            'nombre_p_mostrar' => 'DRA.. FENICIA SALDIVAR',
            'puesto' => 'JEFE DE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'MAGNOLIA AMBRIZ GUTIERREZ',
            'nombre_p_mostrar' => 'DRA. MAGNOLIA AMBRIZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'MARISSA BALDERAS FOULLON',
            'nombre_p_mostrar' => 'DRA. MARISSA BALDERAS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'DANIEL CAVAZOS MANCILLA',
            'nombre_p_mostrar' => 'DR. DANIEL CAVAZOS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'DAYAN ARIZBETH SOLIS RAMOS',
            'nombre_p_mostrar' => 'DRA. DAYAN SOLIS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'ANA LAURA MEDINA ACOSTA',
            'nombre_p_mostrar' => 'LIC. ANA MEDINA',
            'puesto' => 'RADIOLOGO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'NELSON ALBERTO RIOS PEREZ',
            'nombre_p_mostrar' => 'LIC. NELSON RIOS',
            'puesto' => 'RADIOLOGO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'SANDRA ARCIGA MEDRANO',
            'nombre_p_mostrar' => 'LIC. SANDRA ARCIGA',
            'puesto' => 'ENFERMERIA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 8,
            'nombre' => 'JOSE DANIEL TOVAR SAMANO',
            'nombre_p_mostrar' => 'LIC. JOSE TOVAR',
            'puesto' => 'ENFERMERIA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'ILCE DANIELA DEL ANGEL DEL ANGEL',
            'nombre_p_mostrar' => 'LIC. ILCE DEL ANGEL',
            'puesto' => 'JEFE DEPARTAMENTO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'ANA KAREN CASTRO GONZALEZ',
            'nombre_p_mostrar' => 'QUIMICA ANA CASTRO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'DAVID JIMENEZ NEGRETE',
            'nombre_p_mostrar' => 'QUIMICO DAVID JIMENEZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'MALENY ABIGAIL PORRAS CASTILLO',
            'nombre_p_mostrar' => 'QUIMICA MALENY PORRAS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'LAURA GENOVEVA RAMIREZ GOMEZ',
            'nombre_p_mostrar' => 'QUIMICA LAURA RAMIREZ',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'EDLIN MARIEL RAMOS GONZALEZ',
            'nombre_p_mostrar' => 'QUIMICA EDLIN RAMOS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'YANETH SALEH MONTALVO',
            'nombre_p_mostrar' => 'QUIMICA YANETH SALEH',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'JUAN ALEXIS SANTOS GARCIA',
            'nombre_p_mostrar' => 'QUIMICO JUAN SANTOS',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 14,
            'nombre' => 'ANA KAREN CASTRO GONZALEZ',
            'nombre_p_mostrar' => 'QUIMICA ANA CASTRO',
            'puesto' => 'EVALUADOR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        #SESESP
        DB::table('personal')->insert([
            'id_area' => 16,
            'nombre' => 'MARIA DEL CONSUELO TERAN RODRIGUEZ',
            'nombre_p_mostrar' => 'LIC. MARIA TERAN',
            'puesto' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 16,
            'nombre' => 'ENA ANAYA',
            'nombre_p_mostrar' => 'LIC. ENA ANAYA',
            'puesto' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 16,
            'nombre' => 'YAZMIN CISNEROS',
            'nombre_p_mostrar' => 'LIC. YAZMIN CISNEROS',
            'puesto' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('personal')->insert([
            'id_area' => 16,
            'nombre' => 'MARIA ALEJANDRA CARDENAS',
            'nombre_p_mostrar' => 'LIC. MARIA ALEJANDRA',
            'puesto' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);




    }
}
