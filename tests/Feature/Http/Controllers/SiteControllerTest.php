<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Site;
use App\User;

class SiteControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_site_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $site = factory(Site::class)->make();
        $data = $site->attributesToArray();
        $response = $this->post(route('sites.store'), $data);
        $response->assertRedirect(route('sites.index'));
        $response->assertSessionHas('status', 'Site created!');
    }

    /**
     * @test
     */
    public function it_updates_site_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $site = factory(Site::class)->create();
        $data = factory(Site::class)->make()->attributesToArray();
        $response = $this->put(route('sites.update', ['site' => $site]), $data);
        $response->assertRedirect(route('sites.index'));
        $response->assertSessionHas('status', 'Site updated!');
    }

    /**
     * @test
     */
    public function it_destroys_site_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $site = factory(Site::class)->create();
        $response = $this->delete(route('sites.destroy', ['site' => $site]));
        $response->assertRedirect(route('sites.index'));
        $response->assertSessionHas('status', 'Site destroyed!');
    }
}
