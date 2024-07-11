<?php

namespace App\Observers;

use App\Models\PelayananBencana;

class PelayananBencanaObserver
{
    /**
     * Handle the PelayananBencana "created" event.
     */
    public function created(PelayananBencana $pelayananBencana): void
    {
        //
    }

    /**
     * Handle the PelayananBencana "updated" event.
     */
    public function updated(PelayananBencana $pelayananBencana): void
    {
        if ($pelayananBencana->isDirty('file') && !is_null($pelayananBencana->getOriginal('file'))) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananBencana->getOriginal('file'));
        }
    }

    /**
     * Handle the PelayananBencana "deleted" event.
     */
    public function deleted(PelayananBencana $pelayananBencana): void
    {
        if (!is_null($pelayananBencana->file)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananBencana->file);
        }
    }

    /**
     * Handle the PelayananBencana "restored" event.
     */
    public function restored(PelayananBencana $pelayananBencana): void
    {
        //
    }

    /**
     * Handle the PelayananBencana "force deleted" event.
     */
    public function forceDeleted(PelayananBencana $pelayananBencana): void
    {
        //
    }
}
