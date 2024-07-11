<?php

namespace App\Observers;

use App\Models\KinerjaBalai;

class KinerjaBalaiObserver
{
    /**
     * Handle the KinerjaBalai "created" event.
     */
    public function created(KinerjaBalai $kinerjaBalai): void
    {
        //
    }

    /**
     * Handle the KinerjaBalai "updated" event.
     */
    public function updated(KinerjaBalai $kinerjaBalai): void
    {
        if ($kinerjaBalai->isDirty('file') && !is_null($kinerjaBalai->getOriginal('file'))) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($kinerjaBalai->getOriginal('file'));
        }
    }

    /**
     * Handle the KinerjaBalai "deleted" event.
     */
    public function deleted(KinerjaBalai $kinerjaBalai): void
    {
        if (!is_null($kinerjaBalai->file)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($kinerjaBalai->file);
        }
    }

    /**
     * Handle the KinerjaBalai "restored" event.
     */
    public function restored(KinerjaBalai $kinerjaBalai): void
    {
        //
    }

    /**
     * Handle the KinerjaBalai "force deleted" event.
     */
    public function forceDeleted(KinerjaBalai $kinerjaBalai): void
    {
        //
    }
}
