<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Preferencia;
use App\User;
use Laravel\Passport\Passport;

class PreferenciaControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_preferencia_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/preferencias']);
        $preferencia = factory(Preferencia::class)->make();
        $data = $preferencia->attributesToArray();
        $response = $this->json('POST','api/preferencias',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_preferencia_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/preferencias']);
        $preferencia = factory(Preferencia::class)->create();
        $data = factory(Preferencia::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/preferencias/'.$preferencia->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_preferencia_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/preferencias']);
        $preferencia = factory(Preferencia::class)->create();
        $response = $this->json('DELETE','api/preferencias/'.$preferencia->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $preferencia->refresh();
        $this->assertSoftDeleted('preferencias',['id' => $preferencia->id]);

    }
}
