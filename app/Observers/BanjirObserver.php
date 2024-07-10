<?php

namespace App\Observers;

use App\Models\Banjir;
use Illuminate\Support\Facades\Storage;

class BanjirObserver
{
    /**
     * Handle the Banjir "created" event.
     */
    public function created(Banjir $banjir): void
    {
        //
    }

    /**
     * Handle the Banjir "updated" event.
     */
    public function updated(Banjir $banjir): void
    {
        if ($banjir->isDirty('file') && !is_null($banjir->getOriginal('file'))) {
            Storage::disk('public')->delete($banjir->getOriginal('file'));
        }
    }

    /**
     * Handle the Banjir "deleted" event.
     */
    public function deleted(Banjir $banjir): void
    {
        if (!is_null($banjir->file)) {
            Storage::disk('public')->delete($banjir->file);
        }
    }

    /**
     * Handle the Banjir "restored" event.
     */
    public function restored(Banjir $banjir): void
    {
        //
    }

    /**
     * Handle the Banjir "force deleted" event.
     */
    public function forceDeleted(Banjir $banjir): void
    {
        //
    }
}
