<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Site;
use App\User;
use Laravel\Passport\Passport;

class SiteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_site_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/sites']);
        $site = factory(Site::class)->make();
        $data = $site->attributesToArray();
        $response = $this->json('POST','api/sites',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_site_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/sites']);
        $site = factory(Site::class)->create();
        $data = factory(Site::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/sites/'.$site->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_site_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/sites']);
        $site = factory(Site::class)->create();
        $response = $this->json('DELETE','api/sites/'.$site->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $site->refresh();
        $this->assertSoftDeleted('sites',['id' => $site->id]);

    }
}
