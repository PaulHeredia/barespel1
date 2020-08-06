<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Menu;
use App\User;

class MenuControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_menu_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);

        $menu = factory(Menu::class)->make();
        $data = $menu->attributesToArray();
        $response = $this->post(route('menus.store'), $data);
        $response->assertRedirect(route('menus.index'));
        $response->assertSessionHas('status', 'Menu created!');
    }

    /**
     * @test
     */
    public function it_updates_menu_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $menu = factory(Menu::class)->create();
        $data = factory(Menu::class)->make()->attributesToArray();
        $response = $this->put(route('menus.update', ['menu' => $menu]), $data);
        $response->assertRedirect(route('menus.index'));
        $response->assertSessionHas('status', 'Menu updated!');
    }

    /**
     * @test
     */
    public function it_destroys_menu_and_redirects()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user);
        $menu = factory(Menu::class)->create();
        $response = $this->delete(route('menus.destroy', ['menu' => $menu]));
        $response->assertRedirect(route('menus.index'));
        $response->assertSessionHas('status', 'Menu destroyed!');
    }
}
