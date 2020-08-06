<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Snack;
use App\User;
use Laravel\Passport\Passport;

class SnackControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_snack_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/snacks']);
        $snack = factory(Snack::class)->make();
        $data = $snack->attributesToArray();
        $response = $this->json('POST','api/snacks',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_snack_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/snacks']);
        $snack = factory(Snack::class)->create();
        $data = factory(Snack::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/snacks/'.$snack->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_snack_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/snacks']);
        $snack = factory(Snack::class)->create();
        $response = $this->json('DELETE','api/snacks/'.$snack->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $snack->refresh();
        $this->assertSoftDeleted('snacks',['id' => $snack->id]);

    }
}
