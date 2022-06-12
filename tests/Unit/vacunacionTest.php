<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\citas;
use App\Models\usuarios;
use App\Models\vacunacion;

class vacunacionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * cuamdo es sin datos
     *
     * @return void
     */

    public function testConsultaEstudiante3()
    {
        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();


        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '102');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);


        $pattern = "/id no valido/i";
        $query = $this->get('ConsultaIndividual/abcde', ['Content-type: application/json']);
        $bodyContent = $query->getContent();
        $this->assertEquals(1, preg_match($pattern, $bodyContent));
    }

    public function testConsultaEstudiante2()
    {
        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();


        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '102');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);


        $pattern = "/1 dosis/i";
        $query = $this->get('ConsultaIndividual/102', ['Content-type: application/json']);
        $bodyContent = $query->getContent();
        $this->assertEquals(1, preg_match($pattern, $bodyContent));
    }

    public function testConsultaEstudiante1()
    {
        $pattern = "/no existe/i";
        $query = $this->get('ConsultaIndividual/100', ['Content-type: application/json']);
        $bodyContent = $query->getContent();
        $this->assertEquals(1, preg_match($pattern, $bodyContent));
    }


    public function testPorcentajeEstudiantesR2()
    {
        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();


        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '102');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);


        $pattern = "/33 %/i";
        $query = $this->get('ConsultaVarios/1', ['Content-type: application/json']);
        $bodyContent = $query->getContent();
        $this->assertEquals(1, preg_match($pattern, $bodyContent));
    }

    public function testPorcentajeEstudiantesR3()
    {
        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();


        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '1', 'a2' => '7-1-2022', 'a1' => '102');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '100');
        $response = $this->post('store-form', $data);
        $data = array('a3' => 'Moderna”', 'a4' => '2', 'a2' => '7-1-2022', 'a1' => '101');
        $response = $this->post('store-form', $data);


        $pattern = "/67 %/i";
        $query = $this->get('ConsultaVarios/2', ['Content-type: application/json']);
        $bodyContent = $query->getContent();
        $this->assertEquals(1, preg_match($pattern, $bodyContent));
    }


    public function testPorcentajeEstudiantesR1()
    {
        $pattern = "/0 %/i";
        $query = $this->get('ConsultaVarios/2', ['Content-type: application/json']);
        $bodyContent = $query->getContent();
        $this->assertEquals(1, preg_match($pattern, $bodyContent));
    }



    public function testRegistrarDosis2()
    {
        $post = new vacunacion;
        $post->a3 = "Pfizer";
        $post->a4 = "1";
        $post->a2 = "7-1-2022";
        $post->a1 = "101";
        $data = array('a3' => $post->a3, 'a4' => $post->a4, 'a2' => $post->a2, 'a1' => $post->a1);

        $response = $this->post('store-form', $data);
        $vacuna2 = vacunacion::where('persona', '101')->first();
        $this->assertNull($vacuna2);
    }
    public function testRegistrarDosis3()
    {
        $post = new vacunacion;
        $post->a3 = "Pfizer";
        $post->a4 = "1";
        $post->a2 = "7-1-2022";
        $post->a1 = "abc";
        $data = array('a3' => $post->a3, 'a4' => $post->a4, 'a2' => $post->a2, 'a1' => $post->a1);

        $response = $this->post('store-form', $data);
        $vacuna2 = vacunacion::where('persona', 'abc')->first();
        $this->assertNull($vacuna2);
    }

    public function testRegistrarDosis1()
    {

        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();

        $post = new vacunacion;
        $post->a3 = "Pfizer";
        $post->a4 = "1";
        $post->a2 = "7-1-2022";
        $post->a1 = "100";
        $data = array('a3' => $post->a3, 'a4' => $post->a4, 'a2' => $post->a2, 'a1' => $post->a1);

        $response = $this->post('store-form', $data);
        $vacuna2 = vacunacion::where('persona', '100')->first();
        $this->assertNotNull($vacuna2);
    }






    public function testRegistrarCita3()
    {
        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $post = new citas;
        $post->b4 = "1";
        $post->b3 = "8:30";
        $post->b2 = "7-10-2022";
        $post->b1 = "999";
        $data = array('b3' => $post->b3, 'b4' => $post->b4, 'b2' => $post->b2, 'b1' => $post->b1);

        $response = $this->post('store-form1', $data);
        $cita2 = citas::where('persona', '999')->first();
        $this->assertNull($cita2);
    }
    public function testRegistrarCita2()
    {

        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();

        $post = new citas;
        $post->b4 = "1";
        $post->b3 = "8:30";
        $post->b2 = "7-10-2020";
        $post->b1 = "101";
        $data = array('b3' => $post->b3, 'b4' => $post->b4, 'b2' => $post->b2, 'b1' => $post->b1);

        $response = $this->post('store-form1', $data);
        $cita2 = citas::where('persona', '101')->first();
        $this->assertNull($cita2);
    }

    public function testRegistrarCita1()
    {

        $user1 = new usuarios;
        $user1->id = "100";
        $user1->nombreCompleto = "Adriana";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "101";
        $user1->nombreCompleto = "Jefferson";
        $user1->save();

        $user1 = new usuarios;
        $user1->id = "102";
        $user1->nombreCompleto = "Samuel";
        $user1->save();

        $post = new citas;
        $post->b4 = "1";
        $post->b3 = "8:30";
        $post->b2 = "7-10-2022";
        $post->b1 = "100";
        $data = array('b3' => $post->b3, 'b4' => $post->b4, 'b2' => $post->b2, 'b1' => $post->b1);

        $response = $this->post('store-form1', $data);
        $cita2 = citas::where('persona', '100')->first();
        $this->assertNotNull($cita2);
    }

}
