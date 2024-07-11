<?php

namespace App\Observers;

use App\Models\PelayananPegadaan;

class PelayananPegadaanObserver
{
    /**
     * Handle the PelayananPegadaan "created" event.
     */
    public function created(PelayananPegadaan $pelayananPegadaan): void
    {
        //
    }

    /**
     * Handle the PelayananPegadaan "updated" event.
     */
    public function updated(PelayananPegadaan $pelayananPegadaan): void
    {
        if ($pelayananPegadaan->isDirty('file') && !is_null($pelayananPegadaan->getOriginal('file'))) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananPegadaan->getOriginal('file'));
        }
    }

    /**
     * Handle the PelayananPegadaan "deleted" event.
     */
    public function deleted(PelayananPegadaan $pelayananPegadaan): void
    {
        if (!is_null($pelayananPegadaan->file)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananPegadaan->file);
        }
    }

    /**
     * Handle the PelayananPegadaan "restored" event.
     */
    public function restored(PelayananPegadaan $pelayananPegadaan): void
    {
        //
    }

    /**
     * Handle the PelayananPegadaan "force deleted" event.
     */
    public function forceDeleted(PelayananPegadaan $pelayananPegadaan): void
    {
        //
    }
}
