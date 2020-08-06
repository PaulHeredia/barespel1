<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Bar;
use App\User;
use Laravel\Passport\Passport;

class BarControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_bar_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/bars']);
        $bar = factory(Bar::class)->make();
        $data = $bar->attributesToArray();
        $response = $this->json('POST','api/bars',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_bar_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/bars']);
        $bar = factory(Bar::class)->create();
        $data = factory(Bar::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/bars/'.$bar->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_bar_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/bars']);
        $bar = factory(Bar::class)->create();
        $response = $this->json('DELETE','api/bars/'.$bar->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $bar->refresh();
        $this->assertSoftDeleted('bars',['id' => $bar->id]);

    }
}
