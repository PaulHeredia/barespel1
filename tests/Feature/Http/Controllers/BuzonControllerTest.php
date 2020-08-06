<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Buzon;
use App\User;

class BuzonControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_buzon_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $buzon = factory(Buzon::class)->make();
        $data = $buzon->attributesToArray();
        $response = $this->post(route('buzons.store'), $data);
        $response->assertRedirect(route('buzons.index'));
        $response->assertSessionHas('status', 'Buzon created!');
    }

    /**
     * @test
     */
    public function it_updates_buzon_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $buzon = factory(Buzon::class)->create();
        $data = factory(Buzon::class)->make()->attributesToArray();
        $response = $this->put(route('buzons.update', ['buzon' => $buzon]), $data);
        $response->assertRedirect(route('buzons.index'));
        $response->assertSessionHas('status', 'Buzon updated!');
    }

    /**
     * @test
     */
    public function it_destroys_buzon_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $buzon = factory(Buzon::class)->create();
        $response = $this->delete(route('buzons.destroy', ['buzon' => $buzon]));
        $response->assertRedirect(route('buzons.index'));
        $response->assertSessionHas('status', 'Buzon destroyed!');
    }
}
