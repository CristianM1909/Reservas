<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

class ReservaModelTest extends TestCase
{
    /** @var ReservaModel|MockObject */
    private $reservaModel;

    protected function setUp(): void
    {
        // Creamos un mock de la clase Query para simular la interacción con la base de datos
        $queryMock = $this->getMockBuilder(Query::class)
                          ->disableOriginalConstructor()
                          ->getMock();

        // Inicializamos el modelo de Reserva con el mock de Query
        $this->reservaModel = new ReservaModel($queryMock);
    }

    public function testGetDisponible()
    {
        // Definir valores de prueba
        $f_llegada = '2024-11-01';
        $f_salida = '2024-11-05';
        $habitacion = 1;

        // Definir el resultado esperado
        $expectedResult = [
            ['id_reserva' => 1, 'fecha_ingreso' => '2024-11-01', 'fecha_salida' => '2024-11-05']
        ];

        // Configurar el mock para devolver el resultado esperado
        $this->reservaModel->method('selectAll')
                           ->with("SELECT * FROM reservas WHERE fecha_ingreso <= '$f_salida' AND fecha_salida >= '$f_llegada' AND id_habitacion = $habitacion")
                           ->willReturn($expectedResult);

        // Ejecutar el método y verificar el resultado
        $result = $this->reservaModel->getDisponible($f_llegada, $f_salida, $habitacion);
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetReservasHabitacion()
    {
        // Definir valores de prueba
        $habitacion = 1;

        // Definir el resultado esperado
        $expectedResult = [
            ['id_reserva' => 1, 'id_habitacion' => 1, 'fecha_ingreso' => '2024-11-01', 'fecha_salida' => '2024-11-05']
        ];

        // Configurar el mock para devolver el resultado esperado
        $this->reservaModel->method('selectAll')
                           ->with("SELECT * FROM reservas WHERE id_habitacion = $habitacion")
                           ->willReturn($expectedResult);

        // Ejecutar el método y verificar el resultado
        $result = $this->reservaModel->getReservasHabitacion($habitacion);
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetHabitaciones()
    {
        // Definir el resultado esperado
        $expectedResult = [
            ['id' => 1, 'estado' => 1],
            ['id' => 2, 'estado' => 1]
        ];

        // Configurar el mock para devolver el resultado esperado
        $this->reservaModel->method('selectAll')
                           ->with("SELECT * FROM habitaciones WHERE estado = 1")
                           ->willReturn($expectedResult);

        // Ejecutar el método y verificar el resultado
        $result = $this->reservaModel->getHabitaciones();
        $this->assertEquals($expectedResult, $result);
    }

    public function testGetHabitacion()
    {
        // Definir valores de prueba
        $id_habitacion = 1;

        // Definir el resultado esperado
        $expectedResult = [
            'id' => 1, 'estado' => 1
        ];

        // Configurar el mock para devolver el resultado esperado
        $this->reservaModel->method('select')
                           ->with("SELECT * FROM habitaciones WHERE  id = $id_habitacion")
                           ->willReturn($expectedResult);

        // Ejecutar el método y verificar el resultado
        $result = $this->reservaModel->getHabitacion($id_habitacion);
        $this->assertEquals($expectedResult, $result);
    }
}
