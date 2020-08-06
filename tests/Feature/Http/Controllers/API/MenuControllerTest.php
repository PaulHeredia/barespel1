<?php

namespace Tests\Feature\Http\API\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Menu;
use App\User;
use Laravel\Passport\Passport;

class MenuControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_stores_menu_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/menus']);
        $menu = factory(Menu::class)->make();
        $data = $menu->attributesToArray();
        $response = $this->json('POST','api/menus',$data);
        $response->assertStatus(201)->assertJson(['created_at'=>true]);
    }

    /**
     * @test
     */
    public function it_updates_menu_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/menus']);
        $menu = factory(Menu::class)->create();
        $data = factory(Menu::class)->make()->attributesToArray();
        $response = $this->json('PUT','api/menus/'.$menu->id,$data);
        $response->assertStatus(200)->assertJson(['updated_at'=>true]);
    }

    /**
     * @test
     */
    public function it_destroys_menu_api()
    {
        Passport::actingAs(factory(User::class)->create(), ['api/menus']);
        $menu = factory(Menu::class)->create();
        $response = $this->json('DELETE','api/menus/'.$menu->id);
        $response->assertStatus(200)->assertJson(['deleted_at'=>true]);
        $menu->refresh();
        $this->assertSoftDeleted('menus',['id' => $menu->id]);

    }
}
