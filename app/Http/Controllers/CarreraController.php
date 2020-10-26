<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class CarreraController extends Controller
{
    //Función para traer los datos generales de la carrera
    public function carreraDatosIdentificacion($campus)
    {
        //
    }

    //I-CARACTERÍSTICAS DE LA CARRERA
    //Nivel de estudios al que corresponde la carrera
    public function carreraI1($campus, $carrera)
    {
        //
    }
    //Fecha de creación y actualización del plan de estudios
    public function carreraI2($campus, $carrera)
    {
        //
    }
    //Retorna la duración del programa y estructura (semestres, cuatrimestres, etc)
    public function carreraI3($campus, $carrera)
    {
        //
    }
    //Número total de créditos por cubrir
    public function carreraI4($campus, $carrera)
    {
        //
    }


    //II-ALUMNOS DE PRIMER INGRESO DEL CICLO ANTERIOR
    //Número de periodos de inscripción a primer ingreso que ofreción durante el ciclo ANTERIOR
    public function carreraII1($campus, $carrera)
    {
        //
    }
    //Número de alumnos de primer ingreso a la carrera, del ciclo escolar ANTERIOR
    public function carreraII2($campus, $carrera)
    {
        //
    }

    //III-EGRESADOS Y TITULADOS
    //Número de EGRESADOS en el ciclo escolar ANTERIOR
    public function carreraIII1($campus, $carrera)
    {
        //
    }
    //Número de TITULADOS en el ciclo escolar ANTERIOR
    public function carreraIII2($campus, $carrera)
    {
        //
    }
    //Número de Egresados y Titulados en el ciclo escolar ANTERIOR por Sexo y Edad
    public function carreraIII3($campus, $carrera)
    {
        //
    }

    //IV-MOVILIDAD DE ALUMNOS
    //Total de alumnos en el ciclo anterior que la institución envió a otra entidad o país
    public function carreraIV1($campus, $carrera)
    {
        //
    }
    //Indique las ENTIDADES a las que se enviaron alumnos en el ciclo escolar ANTERIOR, por sexo, tipo de movilidad y financiamiento
    public function carreraIV2($campus, $carrera)
    {
        //
    }
    //Indique los PAISES a los que se enviaron alumnos en el ciclo escolar ANTERIOR, por sexo, tipo de movilidad y financiamiento
    public function carreraIV3($campus, $carrera)
    {
        //
    }
    //Total de alumnos que la institución recibió de otra entidad o país en el ciclo escolar ANTERIOR
    public function carreraIV4($campus, $carrera)
    {
        //
    }
    //Indique las ENTIDADES de las que recibió alumnos en el ciclo ANTERIOR, por sexo, tipo movilidad y financiamiento
    public function carreraIV5($campus, $carrera)
    {
        //
    }
    //Indique los PAISES de los que recibió alumnos en el ciclo ANTERIOR, por sexo, tipo movilidad y financiamiento
    public function carreraIV6($campus, $carrera)
    {
        //
    }

    //V-ALUMNOS DE PRIMER INGRESO
    //Fecha de inicio de cursos del ciclo escolar ACTUAL
    public function carreraV1()
    {
        $fecha = "2020-07-29";

        $ano = date('Y', strtotime($fecha));
        $mes = date('m', strtotime($fecha));
        $dia = date('d', strtotime($fecha));
        $fechaInicio[] = [
            'ano' => $ano,
            'mes' => $mes,
            'dia' => $dia,
        ];
        return $fechaInicio;

    }
    //Número de lugares ofertados para primer ingreso del ciclo actual
    public function carreraV2($campus, $carrera)
    {
        $sql1="SELECT
        count(distinct matricula) Lugares
        from matricula911
        where campus LIKE ? and descPrograma LIKE ?
        and tipoIngreso like 'Nuevo Ingreso'";

        $consulta = DB::select($sql1, array($campus, $carrera));

        if($consulta == null){
            $lugares = [
                'Lugares' => 0,
            ];
        }else{
            $lugares = $consulta;
        }
        return $lugares;
    }
    //Número de solicitudes recibidas para ingresar a la carrera por sexo, discapacidad y lenguas
    public function carreraV3($campus, $carrera)
    {
        //falta información de aspirantes
        $solicitudes[]   = [
            'Hombres' => 0,
            'Mujeres' => 0,
            'Total' => 0,
            'Discapacidad' => 0,
            'LenguasIndigenas' => 0,
        ];


        return $solicitudes;
    }
    //Número de alumnos de primer ingreso a la carrera en el ciclo ACTUAL por sexo, discapacidad y lenguas
    public function carreraV4($campus, $carrera)
    {
        $sql1="SELECT
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres,
        count(IF(tipoIngreso='Nuevo Ingreso', 1, NULL)) Total,
        count(IF(tipoDiscapacidad!='0', 1, NULL)) Discapacidad,
        count(IF(descBeca = 'COMPARTIR', 1, NULL)) LenguasIndigenas
        from matricula911
        where campus LIKE ? and descPrograma LIKE ?
        and tipoIngreso='Nuevo Ingreso'";

        $consulta = DB::select($sql1, array($campus, $carrera));

        if($consulta == null){
            $primerIngreso = [
                'Hombres' => 0,
                'Mujeres' => 0,
                'Total' => 0,
                'Discapacidad' => 0,
                'LenguasIndigenas' => 0,
            ];
        }else{
            $primerIngreso = $consulta;
        }

        return $primerIngreso;

    }
    //Número de alumnos de primer ingreso a la carrera en el ciclo ACTUAL según el lugar de estudios de BACHILLERATO
    public function carreraV5($campus, $carrera)
    {
        $sql1="SELECT
        count(IF(estadoEscuelaProcedencia = 'AGUASCALIENTES', 1, NULL)) AGUASCALIENTES,
        count(IF(estadoEscuelaProcedencia = 'BAJA CALIFORNIA', 1, NULL)) BAJA_CALIFORNIA,
        count(IF(estadoEscuelaProcedencia = 'BAJA CALIFORNIA SUR', 1, NULL)) BAJA_CALIFORNIA_SUR,
        count(IF(estadoEscuelaProcedencia = 'CAMPECHE', 1, NULL)) CAMPECHE,
        count(IF(estadoEscuelaProcedencia = 'COAHUILA', 1, NULL)) COAHUILA,
        count(IF(estadoEscuelaProcedencia = 'COLIMA', 1, NULL)) COLIMA,
        count(IF(estadoEscuelaProcedencia = 'CHIAPAS', 1, NULL)) CHIAPAS,
        count(IF(estadoEscuelaProcedencia = 'CHIHUAHUA', 1, NULL)) CHIHUAHUA,
        count(IF(estadoEscuelaProcedencia = 'CIUDAD DE MÉXICO', 1, NULL)) CIUDAD_DE_MÉXICO,
        count(IF(estadoEscuelaProcedencia = 'DURANGO', 1, NULL)) DURANGO,
        count(IF(estadoEscuelaProcedencia = 'GUANAJUATO', 1, NULL)) GUANAJUATO,
        count(IF(estadoEscuelaProcedencia = 'GUERRERO', 1, NULL)) GUERRERO,
        count(IF(estadoEscuelaProcedencia = 'HIDALGO', 1, NULL)) HIDALGO,
        count(IF(estadoEscuelaProcedencia = 'JALISCO', 1, NULL)) JALISCO,
        count(IF(estadoEscuelaProcedencia = 'MÉXICO', 1, NULL)) MÉXICO,
        count(IF(estadoEscuelaProcedencia = 'MICHOACÁN', 1, NULL)) MICHOACÁN,

        count(IF(estadoEscuelaProcedencia = 'MORELOS', 1, NULL)) MORELOS,
        count(IF(estadoEscuelaProcedencia = 'NAYARIT', 1, NULL)) NAYARIT,
        count(IF(estadoEscuelaProcedencia = 'NUEVO LEÓN', 1, NULL)) NUEVO_LEÓN,
        count(IF(estadoEscuelaProcedencia = 'OAXACA', 1, NULL)) OAXACA,
        count(IF(estadoEscuelaProcedencia = 'PUEBLA', 1, NULL)) PUEBLA,
        count(IF(estadoEscuelaProcedencia = 'QUERÉTARO', 1, NULL)) QUERÉTARO,
        count(IF(estadoEscuelaProcedencia = 'QUINTANA ROO', 1, NULL)) QUINTANA_ROO,
        count(IF(estadoEscuelaProcedencia = 'SAN LUIS POTOSÍ', 1, NULL)) SAN_LUIS_POTOSÍ,
        count(IF(estadoEscuelaProcedencia = 'SINALOA', 1, NULL)) SINALOA,
        count(IF(estadoEscuelaProcedencia = 'SONORA', 1, NULL)) SONORA,
        count(IF(estadoEscuelaProcedencia = 'TABASCO', 1, NULL)) TABASCO,
        count(IF(estadoEscuelaProcedencia = 'TAMAULIPAS', 1, NULL)) TAMAULIPAS,
        count(IF(estadoEscuelaProcedencia = 'TLAXCALA', 1, NULL)) TLAXCALA,
        count(IF(estadoEscuelaProcedencia = 'VERACRUZ', 1, NULL)) VERACRUZ,
        count(IF(estadoEscuelaProcedencia = 'YUCATÁN', 1, NULL)) YUCATÁN,
        count(IF(estadoEscuelaProcedencia = 'ZACATECAS', 1, NULL)) ZACATECAS,

        count(IF(estadoEscuelaProcedencia = 'ESTADOS UNIDOS', 1, NULL)) ESTADOS_UNIDOS,
        count(IF(estadoEscuelaProcedencia = 'CANADÁ', 1, NULL)) CANADÁ,
        count(IF(estadoEscuelaProcedencia = 'CENTRO AMÉRICA Y EL CARIBE', 1, NULL)) CENTRO_AMÉRICA_Y_EL_CARIBE,
        count(IF(estadoEscuelaProcedencia = 'SUDAMÉRICA', 1, NULL)) SUDAMÉRICA,
        count(IF(estadoEscuelaProcedencia = 'ÁFRICA', 1, NULL)) ÁFRICA,
        count(IF(estadoEscuelaProcedencia = 'ASIA', 1, NULL)) ASIA,
        count(IF(estadoEscuelaProcedencia = 'EUROPA', 1, NULL)) EUROPA,
        count(IF(estadoEscuelaProcedencia = 'OCEANÍA', 1, NULL)) OCEANÍA,

        count(IF(estadoEscuelaProcedencia != '', 1, NULL)) Total
        from matricula911
        where campus LIKE ? and descPrograma LIKE ?
        and tipoIngreso='Nuevo Ingreso'";

        $consulta = DB::select($sql1, array($campus, $carrera));

        if($consulta == null){
            $estadoEscuelaProcedencia = [
                'AGUASCALIENTES' => 0,
                'BAJA_CALIFORNIA' => 0,
                'BAJA_CALIFORNIA_SUR' => 0,
                'CAMPECHE' => 0,
                'COAHUILA' => 0,
                'COLIMA' => 0,
                'CHIAPAS' => 0,
                'CHIHUAHUA' => 0,
                'CIUDAD_DE_MÉXICO' => 0,
                'DURANGO' => 0,
                'GUANAJUATO' => 0,
                'GUERRERO' => 0,
                'HIDALGO' => 0,
                'JALISCO' => 0,
                'MÉXICO' => 0,
                'MICHOACÁN' => 0,
                'MORELOS' => 0,
                'NAYARIT' => 0,
                'NUEVO_LEÓN' => 0,
                'OAXACA' => 0,
                'PUEBLA' => 0,
                'QUERÉTARO' => 0,
                'QUINTANA_ROO' => 0,
                'SAN_LUIS_POTOSÍ' => 0,
                'SINALOA' => 0,
                'SONORA' => 0,
                'TABASCO' => 0,
                'TAMAULIPAS' => 0,
                'TLAXCALA' => 0,
                'VERACRUZ' => 0,
                'YUCATÁN' => 0,
                'ZACATECAS' => 0,

                'ESTADOS_UNIDOS' => 0,
                'CANADÁ' => 0,
                'CENTRO_AMÉRICA_Y_EL_CARIBE' => 0,
                'SUDAMÉRICA' => 0,
                'ÁFRICA' => 0,
                'ASIA' => 0,
                'EUROPA' => 0,
                'OCEANÍA' => 0,

                'Total' => 0,


            ];
        }else{
            $estadoEscuelaProcedencia = $consulta;
        }

        return $estadoEscuelaProcedencia;
    }
    //Número de alumnos de primer ingreso a la carrera en el ciclo ACTUAL según su lugar de nacimiento
    public function carreraV6($campus, $carrera)
    {
        $sql1="SELECT
        count(IF(estadoOrigenNI = 'En la entidad', 1, NULL)) En_la_entidad,
        count(IF(estadoOrigenNI = 'En otra entidad federativa', 1, NULL)) En_otra_entidad_federativa,
        count(IF(estadoOrigenNI = 'Estados Unidos', 1, NULL)) Estados_Unidos,
        count(IF(estadoOrigenNI = 'Otro país', 1, NULL)) Otro_país,
        count(matricula) Total
        from matricula911
        where campus LIKE ? and descPrograma LIKE ?
        and tipoIngreso='Nuevo Ingreso'";

        $consulta = DB::select($sql1, array($campus, $carrera));

        if($consulta == null){
            $estadoOrigenNI = [
                'En_la_entidad' => 0,
                'En_otra_entidad_federativa' => 0,
                'Estados_Unidos' => 0,
                'Otro_país' => 0,
                'Total' => 0,
            ];
        }else{
            $estadoOrigenNI = $consulta;
        }

        return $estadoOrigenNI;
    }

    //VI-MATRÍCULA TOTAL DE LA CARRERA
    //Total de alumnos inscritos en la carrera en el ciclo ACTUAL por grado de avance, discapacidad, extranjeros y lenguas indigenas
    public function carreraVI1($campus, $carrera)
    {
        $sql1="SELECT
        gradoAvance,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres,
        count(matricula) Total,
        count(IF(tipoDiscapacidad != '0', 1, NULL)) Con_Discapacidad,
        count(IF(estadoOrigenNI = 'Estados Unidos' OR estadoOrigenNI = 'Otro país', 1, NULL)) Nacidos_fuera_de_México,
        count(IF(descBeca = 'COMPARTIR', 1, NULL)) Lenguas_Indigenas
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and gradoAvance like ? GROUP BY gradoAvance";

        $sql2="SELECT
        'TOTAL' as gradoAvance,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres,
        count(matricula) Total,
        count(IF(tipoDiscapacidad != '0', 1, NULL)) Con_Discapacidad,
        count(IF(estadoOrigenNI = 'Estados Unidos' OR estadoOrigenNI = 'Otro país', 1, NULL)) Nacidos_fuera_de_México,
        count(IF(descBeca = 'COMPARTIR', 1, NULL)) Lenguas_Indigenas
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? GROUP BY descPrograma";

        //Se define arreglo de grados para iterar consulta
        $grados = array('PRIMERO', 'SEGUNDO', 'TERCERO', 'CUARTO', 'QUINTO');

        //Iteración de consulta por grado de avance, si no hay datos se agrega el grado en ceros
        foreach ($grados as $grado) {
            $consultaGrado = DB::select($sql1, array($campus, $carrera, $grado));
            if($consultaGrado == null){
                $gradoAvance[] = [
                    'gradoAvance' => $grado,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                    'Total' => 0,
                    'Con_Discapacidad' => 0,
                    'Nacidos_fuera_de_México' => 0,
                    'Lenguas_Indigenas' => 0,
                ];
            }else{
                $gradoAvance[] = $consultaGrado;
            }
        }

        //Consulta para sumarizar el total, si no existe en la carrera, se incluye total en ceros
        $consultaGrado = DB::select($sql2, array($campus, $carrera));
        if($consultaGrado == null){
            $gradoAvance[] = [
                'gradoAvance' => 'TOTAL',
                'Hombres' => 0,
                'Mujeres' => 0,
                'Total' => 0,
                'Con_Discapacidad' => 0,
                'Nacidos_fuera_de_México' => 0,
                'Lenguas_Indigenas' => 0,
            ];
        }else{
            $gradoAvance[] = $consultaGrado;
        }

        return $gradoAvance;
    }
    //Total de alumnos inscritos en la carrera en el ciclo ACTUAL por lugar de residencia y lugar de nacimiento
    public function carreraVI2($campus, $carrera)
    {
        //Se considera que el total de alumnos inscritos, reside en el Estado de Chihuahua
        //Por lo que el total de la siguiente consulta se emplea para la primer tabla del reporte para residencia en Chihuahua
        //La dispersión de la primera tabla, al considerar que todos residen en Chihuahua, se hace en la vista

        $sql1="SELECT
        count(IF(estadoOrigenTotal = 'En la entidad', 1, NULL)) En_la_entidad,
        count(IF(estadoOrigenTotal = 'En otras entidades federativas', 1, NULL)) Otra_entidad,
        count(IF(estadoOrigenTotal = 'Estados Unidos', 1, NULL)) Estados_Unidos,
        count(IF(estadoOrigenTotal = 'Canadá', 1, NULL)) Canadá,
        count(IF(estadoOrigenTotal = 'Centro América y el Caribe', 1, NULL)) Centro_América,
        count(IF(estadoOrigenTotal = 'Sudamérica', 1, NULL)) Sudamérica,
        count(IF(estadoOrigenTotal = 'África', 1, NULL)) África,
        count(IF(estadoOrigenTotal = 'Asia', 1, NULL)) Asia,
        count(IF(estadoOrigenTotal = 'Europa', 1, NULL)) Europa,
        count(IF(estadoOrigenTotal = 'Oceanía', 1, NULL)) Oceanía,
        count(matricula) as Total
        from matricula911
        where campus LIKE ? and descPrograma LIKE ?";

        $lugarResidencia = DB::select($sql1, array($campus, $carrera));
        return $lugarResidencia;
    }
    //Total de alumnos inscritos en la carrera en el ciclo ACTUAL por sexo, edad y grado de avance (distinguir primer ingreso a primer grado)
    public function carreraVI3($campus, $carrera)
    {
        //Para traer solo Nuevo Ingreso a primer grado
        $sql1="SELECT
        rangoEdad,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and rangoEdad like ?
        and tipoIngreso like 'Nuevo Ingreso' and gradoAvance like 'PRIMERO' GROUP BY rangoEdad";

        //Para traer solo Reinreso a primer grado
        $sql2="SELECT
        rangoEdad,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and rangoEdad like ?
        and tipoIngreso like 'Reingreso' and gradoAvance like 'PRIMERO' GROUP BY rangoEdad";

        //Para traer Reingreso y NI(si lo hubiere) a los demás grados
        $sql3="SELECT
        rangoEdad,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and rangoEdad like ?
        and gradoAvance like ? GROUP BY rangoEdad";

        //Para traer Total por Edad Hombres y Mujeres (Última columna vertical)
        $sql4="SELECT
        rangoEdad,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and rangoEdad like ? GROUP BY rangoEdad";


        //Total Horizontal (Última Fila)
        $sql5="SELECT
        'TOTAL' as gradoAvance,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres,
        count(matricula) Total,
        count(IF(tipoDiscapacidad != '0', 1, NULL)) Con_Discapacidad,
        count(IF(estadoOrigenNI = 'Estados Unidos' OR estadoOrigenNI = 'Otro país', 1, NULL)) Nacidos_fuera_de_México,
        count(IF(descBeca = 'COMPARTIR', 1, NULL)) Lenguas_Indigenas
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? GROUP BY descPrograma";

        //Se define arreglo de grados para iterar consulta
        $edades = array(
            'Menos de 18 años',
            '18 años',
            '19 años',
            '20 años',
            '21 años',
            '22 años',
            '23 años',
            '24 años',
            '25 años',
            '26 años',
            '27 años',
            '28 años',
            '29 años',
            '30 a 34 años',
            '35 a 39 años',
            '40 años o más',
        );

        //Objeto para sumarizar totales
        $TOTALES = [
        ];

        //Iteración de consulta por rango de edad NUEVO INGRESO A PRIMERO, si no hay datos se agrega la edad en ceros
        $hombresNI = 0;
        $mujeresNI = 0;
        foreach ($edades as $edad) {
            $consultaEdad = DB::select($sql1, array($campus, $carrera, $edad));
            if(empty($consultaEdad)){
                $PRIMERONI[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
                $TOTALES[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
            }else{
                $PRIMERONI[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $TOTALES[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $hombresNI += $consultaEdad[0]->Hombres;
                $mujeresNI += $consultaEdad[0]->Mujeres;
            }
        }
        $PRIMERONI[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombresNI,
            'Mujeres'=> $mujeresNI,
        ];
        $TOTALES[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombresNI,
            'Mujeres'=> $mujeresNI,
        ];


        //Iteración de consulta por rango de edad REINGRESO A PRIMERO, si no hay datos se agrega la edad en ceros
        $hombresRI = 0;
        $mujeresRI = 0;
        $index = 0;
        foreach ($edades as $edad) {
            $consultaEdad = DB::select($sql2, array($campus, $carrera, $edad));
            if(empty($consultaEdad)){
                $PRIMERORI[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
            }else{
                $PRIMERORI[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $hombresRI += $consultaEdad[0]->Hombres;
                $mujeresRI += $consultaEdad[0]->Mujeres;
                $TOTALES[$index]['Hombres'] += $consultaEdad[0]->Hombres;
                $TOTALES[$index]['Mujeres'] += $consultaEdad[0]->Mujeres;
            }
            $index++;
        }
        $PRIMERORI[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombresRI,
            'Mujeres'=> $mujeresRI,
        ];
        $TOTALES[$index]['Hombres'] += $hombresRI;
        $TOTALES[$index]['Mujeres'] += $mujeresRI;

        //Iteración de consulta por rango de edad SEGUNDO Grado, si no hay datos se agrega la edad en ceros
        $hombres2 = 0;
        $mujeres2 = 0;
        $index = 0;
        $gradoRestante = 'SEGUNDO';
        foreach ($edades as $edad) {
            $consultaEdad = DB::select($sql3, array($campus, $carrera, $edad, $gradoRestante));
            if(empty($consultaEdad)){
                $SEGUNDO[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
            }else{
                $SEGUNDO[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $hombres2 += $consultaEdad[0]->Hombres;
                $mujeres2 += $consultaEdad[0]->Mujeres;
                $TOTALES[$index]['Hombres'] += $consultaEdad[0]->Hombres;
                $TOTALES[$index]['Mujeres'] += $consultaEdad[0]->Mujeres;
            }
            $index++;
        }
        $SEGUNDO[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombres2,
            'Mujeres'=> $mujeres2,
        ];
        $TOTALES[$index]['Hombres'] += $hombres2;
        $TOTALES[$index]['Mujeres'] += $mujeres2;

        //Iteración de consulta por rango de edad TERCER Grado, si no hay datos se agrega la edad en ceros
        $hombres3 = 0;
        $mujeres3 = 0;
        $index = 0;
        $gradoRestante = 'TERCERO';
        foreach ($edades as $edad) {
            $consultaEdad = DB::select($sql3, array($campus, $carrera, $edad, $gradoRestante));
            if(empty($consultaEdad)){
                $TERCERO[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
            }else{
                $TERCERO[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $hombres3 += $consultaEdad[0]->Hombres;
                $mujeres3 += $consultaEdad[0]->Mujeres;
                $TOTALES[$index]['Hombres'] += $consultaEdad[0]->Hombres;
                $TOTALES[$index]['Mujeres'] += $consultaEdad[0]->Mujeres;
            }
            $index++;
        }
        $TERCERO[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombres3,
            'Mujeres'=> $mujeres3,
        ];
        $TOTALES[$index]['Hombres'] += $hombres3;
        $TOTALES[$index]['Mujeres'] += $mujeres3;

        //Iteración de consulta por rango de edad CUARTO Grado, si no hay datos se agrega la edad en ceros
        $hombres4 = 0;
        $mujeres4 = 0;
        $index = 0;
        $gradoRestante = 'CUARTO';
        foreach ($edades as $edad) {
            $consultaEdad = DB::select($sql3, array($campus, $carrera, $edad, $gradoRestante));
            if(empty($consultaEdad)){
                $CUARTO[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
            }else{
                $CUARTO[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $hombres4 += $consultaEdad[0]->Hombres;
                $mujeres4 += $consultaEdad[0]->Mujeres;
                $TOTALES[$index]['Hombres'] += $consultaEdad[0]->Hombres;
                $TOTALES[$index]['Mujeres'] += $consultaEdad[0]->Mujeres;
            }
            $index++;
        }
        $CUARTO[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombres4,
            'Mujeres'=> $mujeres4,
        ];
        $TOTALES[$index]['Hombres'] += $hombres4;
        $TOTALES[$index]['Mujeres'] += $mujeres4;

        //Iteración de consulta por rango de edad QUINTO Grado, si no hay datos se agrega la edad en ceros
        $hombres5 = 0;
        $mujeres5 = 0;
        $index = 0;
        $gradoRestante = 'QUINTO';
        foreach ($edades as $edad) {
            $consultaEdad = DB::select($sql3, array($campus, $carrera, $edad, $gradoRestante));
            if(empty($consultaEdad)){
                $QUINTO[] = [
                    'rangoEdad' => $edad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                ];
            }else{
                $QUINTO[] = [
                    'rangoEdad' => $consultaEdad[0]->rangoEdad,
                    'Hombres' => $consultaEdad[0]->Hombres,
                    'Mujeres'=> $consultaEdad[0]->Mujeres,
                ];
                $hombres5 += $consultaEdad[0]->Hombres;
                $mujeres5 += $consultaEdad[0]->Mujeres;
                $TOTALES[$index]['Hombres'] += $consultaEdad[0]->Hombres;
                $TOTALES[$index]['Mujeres'] += $consultaEdad[0]->Mujeres;
            }
            $index++;
        }
        $QUINTO[] = [
            'rangoEdad' => 'Total',
            'Hombres' => $hombres5,
            'Mujeres'=> $mujeres5,
        ];
        $TOTALES[$index]['Hombres'] += $hombres5;
        $TOTALES[$index]['Mujeres'] += $mujeres5;

        //Iteración de consulta por rango de edad SEXTO Grado, SE CONSIDERA QUE NO HAY ALUMNOS EN SEXTO GRADO

        foreach ($edades as $edad) {
            $SEXTO[] = [
                'rangoEdad' => $edad,
                'Hombres' => 0,
                'Mujeres'=> 0,
            ];
        }
        $SEXTO[] = [
            'rangoEdad' => 'Total',
            'Hombres' => 0,
            'Mujeres'=> 0,
        ];

        return [$PRIMERONI, $PRIMERORI, $SEGUNDO, $TERCERO, $CUARTO, $QUINTO, $SEXTO, $TOTALES];

    }
    //Total de alumnos inscritos en la carrera en el ciclo ACTUAL por tipo de discapacidad y sexo
    public function carreraVI4($campus, $carrera)
    {
        $sql1="SELECT
        tipoDiscapacidad,
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres,
        count(matricula) as Total
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and tipoDiscapacidad like ?
        group by tipoDiscapacidad";

        $discapacidades = array(
          'Motriz',
          'Intelectual',
          'Múltiple',
          'Hipoacusia',
          'Sordera',
          'Baja Visión' ,
          'Ceguera' ,
          'Psicosocial',
        );

        //Para última fila de totales
        $hombres = 0;
        $mujeres = 0;
        $total = 0;

        foreach ($discapacidades as $discapacidad) {
            $consulta = DB::select($sql1, array($campus, $carrera, $discapacidad));
            if(empty($consulta)){
                $tipoDiscapacidad[] = [
                    'tipoDiscapacidad' => $discapacidad,
                    'Hombres' => 0,
                    'Mujeres'=> 0,
                    'Total' => 0,
                ];
            }else{
                $tipoDiscapacidad[] = [
                    'tipoDiscapacidad' => $consulta[0]->tipoDiscapacidad,
                    'Hombres' => $consulta[0]->Hombres,
                    'Mujeres'=> $consulta[0]->Mujeres,
                    'Total'=> $consulta[0]->Total,
                ];
                $hombres += $consulta[0]->Hombres;
                $mujeres += $consulta[0]->Mujeres;
                $total += $consulta[0]->Total;
            }
        }
        //Agrega una última fila con los totales acumulados
        $tipoDiscapacidad[] = [
            'tipoDiscapacidad' => 'Total',
            'Hombres' => $hombres,
            'Mujeres'=> $mujeres,
            'Total'=> $total,
        ];

        return $tipoDiscapacidad;
    }
    //Total de alumnos inscritos en la carrera en el ciclo ACTUAL que son hablantes de lenguas indígenas
    public function carreraVI5($campus, $carrera)
    {
        //Hombres y Mujeres con Beca COMPARTIR
        $sql1="SELECT
        count(IF(sexo = 'M', 1, NULL)) Hombres,
        count(IF(sexo = 'F', 1, NULL)) Mujeres,
        count(matricula) as Total
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and descBeca like 'COMPARTIR'";

        //Hombres y Mujeres con Beca COMPARTIR y alguna DISCAPACIDAD
        $sql2="SELECT
        count(matricula) as conDiscapacidad
        from matricula911
        where campus LIKE ? and descPrograma LIKE ? and descBeca like 'COMPARTIR' and tipoDiscapacidad !='0'";

        //Se declara arreglo inicializado en ceros para almacenar los datos consultados
        $lenguaIndigena[] = [
            'Hombres' => 0,
            'Mujeres'=> 0,
            'Total' => 0,
            'conDiscapacidad' => 0,
        ];

        $consulta1 = DB::select($sql1, array($campus, $carrera));
        $consulta2 = DB::select($sql2, array($campus, $carrera));

        if(!empty($consulta1)){
            $lenguaIndigena[0]['Hombres'] = $consulta1[0]->Hombres;
            $lenguaIndigena[0]['Mujeres'] = $consulta1[0]->Mujeres;
            $lenguaIndigena[0]['Total'] = $consulta1[0]->Total;

        }
        if(!empty($consulta2)){
            $lenguaIndigena[0]['conDiscapacidad'] = $consulta2[0]->conDiscapacidad;
        }
        return $lenguaIndigena;
    }

    //VII-GASTO POR ALUMNO EN EDUCACIÓN
    //Gasto promedio anual en: 1.Cuotas Voluntarias, 2.Inscripción, 3.Colegiatura, 4.Materiales e insumos
    public function carreraVII1($campus, $carrera)
    {
        //
    }

    public function ObtenerCarreras($campus, $nivel)
    {
        $sql1="SELECT
        descPrograma
        from matricula911
        where campus LIKE ? and nivelAcademico like ? group by descPrograma order by descPrograma";

        $carreras = DB::select($sql1, array($campus, $nivel));

        return $carreras;

    }




}
