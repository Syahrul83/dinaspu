<?php

namespace App\Observers;

use App\Models\Header;
use Illuminate\Support\Facades\Storage;

class HeaderObserver
{
    /**
     * Handle the Header "created" event.
     */
    public function created(Header $header): void
    {
        //
    }

    /**
     * Handle the Header "updated" event.
     */
    public function updated(Header $header): void
    {
        if ($header->isDirty('image') && !is_null($header->getOriginal('image'))) {
            Storage::disk('public')->delete($header->getOriginal('image'));
        }
    }

    /**
     * Handle the Header "deleted" event.
     */
    public function deleted(Header $header): void
    {
        //
    }

    /**
     * Handle the Header "restored" event.
     */
    public function restored(Header $header): void
    {
        //
    }

    /**
     * Handle the Header "force deleted" event.
     */
    public function forceDeleted(Header $header): void
    {
        //
    }
}
