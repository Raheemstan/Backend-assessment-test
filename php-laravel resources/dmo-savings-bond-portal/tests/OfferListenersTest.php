<?php

namespace Tests\Unit;

use DMO\SavingsBond\Events\OfferCreated;
use DMO\SavingsBond\Events\OfferDeleted;
use DMO\SavingsBond\Events\OfferUpdated;
use DMO\SavingsBond\Listeners\OfferCreatedListener;
use DMO\SavingsBond\Listeners\OfferDeletedListener;
use DMO\SavingsBond\Listeners\OfferUpdatedListener;
use DMO\SavingsBond\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class OfferListenersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_handles_offer_created_event()
    {
        $offer = Offer::factory()->create();

        $listenerMock = $this->getMockBuilder(OfferCreatedListener::class)
            ->onlyMethods(['handle'])
            ->getMock();

        $listenerMock->expects($this->once())
            ->method('handle')
            ->with($this->isInstanceOf(OfferCreated::class));

        Event::fake();
        Event::assertNotDispatched(OfferCreated::class);

        event(new OfferCreated($offer));

        Event::assertDispatched(OfferCreated::class, function ($event) use ($offer) {
            return $event->offer->id === $offer->id;
        });
    }

    /** @test */
    public function it_handles_offer_updated_event()
    {
        $offer = Offer::factory()->create();

        $listenerMock = $this->getMockBuilder(OfferUpdatedListener::class)
            ->onlyMethods(['handle'])
            ->getMock();

        $listenerMock->expects($this->once())
            ->method('handle')
            ->with($this->isInstanceOf(OfferUpdated::class));

        Event::fake();
        Event::assertNotDispatched(OfferUpdated::class);

        event(new OfferUpdated($offer));

        Event::assertDispatched(OfferUpdated::class, function ($event) use ($offer) {
            return $event->offer->id === $offer->id;
        });
    }

    /** @test */
    public function it_handles_offer_deleted_event()
    {
        $offer = Offer::factory()->create();

        $listenerMock = $this->getMockBuilder(OfferDeletedListener::class)
            ->onlyMethods(['handle'])
            ->getMock();

        $listenerMock->expects($this->once())
            ->method('handle')
            ->with($this->isInstanceOf(OfferDeleted::class));

        Event::fake();
        Event::assertNotDispatched(OfferDeleted::class);

        event(new OfferDeleted($offer));

        Event::assertDispatched(OfferDeleted::class, function ($event) use ($offer) {
            return $event->offer->id === $offer->id;
        });
    }
}
