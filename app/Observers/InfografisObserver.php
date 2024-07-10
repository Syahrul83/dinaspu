<?php

namespace App\Observers;

use App\Models\Infografis;
use Illuminate\Support\Facades\Storage;

class InfografisObserver
{
    /**
     * Handle the Infografis "created" event.
     */
    public function created(Infografis $infografis): void
    {
        //
    }

    /**
     * Handle the Infografis "updated" event.
     */
    public function updated(Infografis $infografis): void
    {
        if ($infografis->isDirty('image') && !is_null($infografis->getOriginal('image'))) {
            Storage::disk('public')->delete($infografis->getOriginal('image'));
        }
    }

    /**
     * Handle the Infografis "deleted" event.
     */
    public function deleted(Infografis $infografis): void
    {
        //
    }

    /**
     * Handle the Infografis "restored" event.
     */
    public function restored(Infografis $infografis): void
    {
        //
    }

    /**
     * Handle the Infografis "force deleted" event.
     */
    public function forceDeleted(Infografis $infografis): void
    {
        //
    }
}
