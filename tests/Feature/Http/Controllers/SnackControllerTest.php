<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Snack;
use App\User;

class SnackControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_snack_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $snack = factory(Snack::class)->make();
        $data = $snack->attributesToArray();
        $response = $this->post(route('snacks.store'), $data);
        $response->assertRedirect(route('snacks.index'));
        $response->assertSessionHas('status', 'Snack created!');
    }

    /**
     * @test
     */
    public function it_updates_snack_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $snack = factory(Snack::class)->create();
        $data = factory(Snack::class)->make()->attributesToArray();
        $response = $this->put(route('snacks.update', ['snack' => $snack]), $data);
        $response->assertRedirect(route('snacks.index'));
        $response->assertSessionHas('status', 'Snack updated!');
    }

    /**
     * @test
     */
    public function it_destroys_snack_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $snack = factory(Snack::class)->create();
        $response = $this->delete(route('snacks.destroy', ['snack' => $snack]));
        $response->assertRedirect(route('snacks.index'));
        $response->assertSessionHas('status', 'Snack destroyed!');
    }
}
