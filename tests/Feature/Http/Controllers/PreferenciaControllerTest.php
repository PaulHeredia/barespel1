<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Preferencia;
use App\User;

class PreferenciaControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_preferencia_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $preferencia = factory(Preferencia::class)->make();
        $data = $preferencia->attributesToArray();
        $response = $this->post(route('preferencias.store'), $data);
        $response->assertRedirect(route('preferencias.index'));
        $response->assertSessionHas('status', 'Preferencia created!');
    }

    /**
     * @test
     */
    public function it_updates_preferencia_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $preferencia = factory(Preferencia::class)->create();
        $data = factory(Preferencia::class)->make()->attributesToArray();
        $response = $this->put(route('preferencias.update', ['preferencia' => $preferencia]), $data);
        $response->assertRedirect(route('preferencias.index'));
        $response->assertSessionHas('status', 'Preferencia updated!');
    }

    /**
     * @test
     */
    public function it_destroys_preferencia_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $preferencia = factory(Preferencia::class)->create();
        $response = $this->delete(route('preferencias.destroy', ['preferencia' => $preferencia]));
        $response->assertRedirect(route('preferencias.index'));
        $response->assertSessionHas('status', 'Preferencia destroyed!');
    }
}
