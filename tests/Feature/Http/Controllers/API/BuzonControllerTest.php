<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Buzon;
use App\User;
use Laravel\Passport\Passport;

class BuzonControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_buzon_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/buzons']);
        $buzon = factory(Buzon::class)->make();
        $data = $buzon->attributesToArray();
        $response = $this->json('POST','api/buzons',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_buzon_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/buzons']);
        $buzon = factory(Buzon::class)->create();
        $data = factory(Buzon::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/buzons/'.$buzon->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_buzon_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/buzons']);
        $buzon = factory(Buzon::class)->create();
        $response = $this->json('DELETE','api/buzons/'.$buzon->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $buzon->refresh();
        $this->assertSoftDeleted('buzons',['id' => $buzon->id]);

    }
}
