<?php

namespace App\Observers;

use App\Models\PelayananSda;

class PelayananSdaObserver
{
    /**
     * Handle the PelayananSda "created" event.
     */
    public function created(PelayananSda $pelayananSda): void
    {
        //
    }

    /**
     * Handle the PelayananSda "updated" event.
     */
    public function updated(PelayananSda $pelayananSda): void
    {
        if ($pelayananSda->isDirty('file') && !is_null($pelayananSda->getOriginal('file'))) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananSda->getOriginal('file'));
        }

    }

    /**
     * Handle the PelayananSda "deleted" event.
     */
    public function deleted(PelayananSda $pelayananSda): void
    {
        if (!is_null($pelayananSda->file)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananSda->file);
        }
    }

    /**
     * Handle the PelayananSda "restored" event.
     */
    public function restored(PelayananSda $pelayananSda): void
    {
        //
    }

    /**
     * Handle the PelayananSda "force deleted" event.
     */
    public function forceDeleted(PelayananSda $pelayananSda): void
    {
        //
    }
}
