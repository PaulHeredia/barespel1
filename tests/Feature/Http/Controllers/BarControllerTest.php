<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Bar;
use App\User;

class BarControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_bar_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $bar = factory(Bar::class)->make();
        $data = $bar->attributesToArray();
        $response = $this->post(route('bars.store'), $data);
        $response->assertRedirect(route('bars.index'));
        $response->assertSessionHas('status', 'Bar created!');
    }

    /**
     * @test
     */
    public function it_updates_bar_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $bar = factory(Bar::class)->create();
        $data = factory(Bar::class)->make()->attributesToArray();
        $response = $this->put(route('bars.update', ['bar' => $bar]), $data);
        $response->assertRedirect(route('bars.index'));
        $response->assertSessionHas('status', 'Bar updated!');
    }

    /**
     * @test
     */
    public function it_destroys_bar_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $bar = factory(Bar::class)->create();
        $response = $this->delete(route('bars.destroy', ['bar' => $bar]));
        $response->assertRedirect(route('bars.index'));
        $response->assertSessionHas('status', 'Bar destroyed!');
    }
}
