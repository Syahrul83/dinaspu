<?php

namespace App\Observers;

use App\Models\PelayananPerijinan;

class PelayananPerijinanObserver
{
    /**
     * Handle the PelayananPerijinan "created" event.
     */
    public function created(PelayananPerijinan $pelayananPerijinan): void
    {
        //
    }

    /**
     * Handle the PelayananPerijinan "updated" event.
     */
    public function updated(PelayananPerijinan $pelayananPerijinan): void
    {
        if ($pelayananPerijinan->isDirty('file') && !is_null($pelayananPerijinan->getOriginal('file'))) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananPerijinan->getOriginal('file'));
        }
    }

    /**
     * Handle the PelayananPerijinan "deleted" event.
     */
    public function deleted(PelayananPerijinan $pelayananPerijinan): void
    {
        if (!is_null($pelayananPerijinan->file)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananPerijinan->file);
        }
    }

    /**
     * Handle the PelayananPerijinan "restored" event.
     */
    public function restored(PelayananPerijinan $pelayananPerijinan): void
    {
        //
    }

    /**
     * Handle the PelayananPerijinan "force deleted" event.
     */
    public function forceDeleted(PelayananPerijinan $pelayananPerijinan): void
    {
        //
    }
}
