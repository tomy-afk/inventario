<?php

namespace App\Observers;

use App\Models\Lechuga;

class LechugaObserver
{
    /**
     * Handle the Lechuga "created" event.
     */
    public function created(Lechuga $lechuga): void
    {
        $lechuga->CREATED_ID = auth()->user()->id;
    }

    /**
     * Handle the Lechuga "updated" event.
     */
    public function updated(Lechuga $lechuga): void
    {
        $lechuga->CREATED_ID = auth()->user()->id;
    }

    /**
     * Handle the Lechuga "deleted" event.
     */
    public function deleted(Lechuga $lechuga): void
    {
        $lechuga->CREATED_ID = auth()->user()->id;
        $lechuga->save();
    }

    /**
     * Handle the Lechuga "restored" event.
     */
    public function restored(Lechuga $lechuga): void
    {
        //
    }

    /**
     * Handle the Lechuga "force deleted" event.
     */
    public function forceDeleted(Lechuga $lechuga): void
    {
        //
    }
}
