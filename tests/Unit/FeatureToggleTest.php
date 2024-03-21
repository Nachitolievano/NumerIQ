<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\DB;

use App\Models\Toggle;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;

class FeatureToggleTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    use RefreshDatabase;

    
    

    /** @test */
    public function it_can_get_all_toggles()
    {
        
        $toggle = DB::table('toggles')->get();
        return response($toggle);
    }

        /** @test */
    public function it_can_toggle_on()
    {
        // Crea un toggle en la base de datos con estatus apagado (0)
        $toggle = Toggle::factory()->create(['id_estatus' => 0]);

        // Enciende el toggle
        $toggle->toggleOn();

        // Verifica que el estatus del toggle se haya actualizado a encendido (1)
        $this->assertEquals(1, $toggle->id_estatus);
    }

    /** @test */
    public function it_can_toggle_off()
    {
        // Crea un toggle en la base de datos con estatus encendido (1)
        $toggle = Toggle::factory()->create(['id_estatus' => 1]);

        // Apaga el toggle
        $toggle->toggleOff();

        // Verifica que el estatus del toggle se haya actualizado a apagado (0)
        $this->assertEquals(0, $toggle->id_estatus);
    }

    /** @test */
    public function it_can_update_toggle_status()
    {
        // Crea un toggle en la base de datos con estatus apagado (0)
        $toggle = Toggle::factory()->create(['id_estatus' => 0]);

        // Actualiza el estatus del toggle a encendido (1)
        $toggle->updateToggleStatus(1);

        // Verifica que el estatus del toggle se haya actualizado a encendido (1)
        $this->assertEquals(1, $toggle->id_estatus);
    }

    /** @test */
    public function it_refreshes_cache_after_crud_operations()
    {
        // Crea un toggle en la base de datos
        $toggle = Toggle::factory()->create();

        // Limpia la caché existente
        Cache::flush();

        // Verifica que la caché esté vacía
        $this->assertFalse(Cache::has('toggles'));

        // Actualiza el toggle
        $toggle->update(['ticket' => 'Updated Ticket']);

        // Verifica que la caché se haya actualizado después de la operación de actualización
        $this->assertTrue(Cache::has('toggles'));
    } 
}
