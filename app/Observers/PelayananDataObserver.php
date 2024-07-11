<?php

namespace App\Observers;

use App\Models\PelayananData;

class PelayananDataObserver
{
    /**
     * Handle the PelayananData "created" event.
     */
    public function created(PelayananData $pelayananData): void
    {
        //
    }

    /**
     * Handle the PelayananData "updated" event.
     */
    public function updated(PelayananData $pelayananData): void
    {
        if ($pelayananData->isDirty('file') && !is_null($pelayananData->getOriginal('file'))) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananData->getOriginal('file'));
        }
    }

    /**
     * Handle the PelayananData "deleted" event.
     */
    public function deleted(PelayananData $pelayananData): void
    {
        if (!is_null($pelayananData->file)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($pelayananData->file);
        }
    }

    /**
     * Handle the PelayananData "restored" event.
     */
    public function restored(PelayananData $pelayananData): void
    {
        //
    }

    /**
     * Handle the PelayananData "force deleted" event.
     */
    public function forceDeleted(PelayananData $pelayananData): void
    {
        //
    }
}
