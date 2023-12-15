<?php

namespace Tests\Feature;

use DMO\SavingsBond\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfferControllerTest extends TestCase
{
    /**
     * @var Offer
     */
    private $offer;

    public function setUp(): void
    {
        parent::setUp();
        $this->offer = factory(Offer::class)->create();
    }

    /** @test */
    public function testIndex()
    {
        $response = $this->get(route('offers.index'));
        $response->assertStatus(200);
        $response->assertViewIs('dmo-savings-bond-module::pages.offers.index');
        $response->assertSee($this->offer->name);
    }

    /** @test */
    public function testCreate()
    {
        $response = $this->get(route('offers.create'));
        $response->assertStatus(200);
        $response->assertViewIs('dmo-savings-bond-module::pages.offers.create');
    }

    /** @test */
    public function testStore()
    {
        $data = factory(Offer::class)->make()->toArray();

        $response = $this->post(route('offers.store'), $data);
        $response->assertStatus(302);
        $response->assertRedirect(route('offers.index'));

        $this->assertDatabaseHas('offers', $data);
    }

    /** @test */
    public function testShow()
    {
        $response = $this->get(route('offers.show', $this->offer->id));
        $response->assertStatus(200);
        $response->assertViewIs('dmo-savings-bond-module::pages.offers.show');
        $response->assertSee($this->offer->name);
    }

    /** @test */
    public function testEdit()
    {
        $response = $this->get(route('offers.edit', $this->offer->id));
        $response->assertStatus(200);
        $response->assertViewIs('dmo-savings-bond-module::pages.offers.edit');
        $response->assertSee($this->offer->name);
    }

    /** @test */
    public function testUpdate()
    {
        $data = factory(Offer::class)->make()->toArray();

        $response = $this->put(route('offers.update', $this->offer->id), $data);
        $response->assertStatus(302);
        $response->assertRedirect(route('offers.index'));

        $this->assertDatabaseHas('offers', $data);
    }

    /** @test */
    public function testDestroy()
    {
        $response = $this->delete(route('offers.destroy', $this->offer->id));
        $response->assertStatus(302);
        $response->assertRedirect(route('offers.index'));

        $this->assertDatabaseMissing('offers', ['id' => $this->offer->id]);
    }

    /** @test */
    public function an_offer_belongs_to_an_organization()
    {
        $organization = Organization::factory()->create();
        $offer = Offer::factory()->create(['organization_id' => $organization->id]);

        $this->assertInstanceOf(Organization::class, $offer->organization);
    }
}
