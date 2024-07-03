<?php

namespace App\Observers;

use App\Models\Sda;
use Illuminate\Support\Facades\Storage;

class SdaObserver
{
    /**
     * Handle the Sda "created" event.
     */
    public function created(Sda $sda): void
    {
        //
    }

    /**
     * Handle the Sda "updated" event.
     */
    public function updated(Sda $sda): void
    {
        if ($sda->isDirty('file') && !is_null($sda->getOriginal('file'))) {
            Storage::disk('public')->delete($sda->getOriginal('file'));
        }
    }

    /**
     * Handle the Sda "deleted" event.
     */
    public function deleted(Sda $sda): void
    {
        if (!is_null($sda->file)) {
            Storage::disk('public')->delete($sda->file);
        }
    }

    /**
     * Handle the Sda "restored" event.
     */
    public function restored(Sda $sda): void
    {
        //
    }

    /**
     * Handle the Sda "force deleted" event.
     */
    public function forceDeleted(Sda $sda): void
    {
        //
    }
}
