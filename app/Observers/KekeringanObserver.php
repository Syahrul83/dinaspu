<?php

namespace App\Observers;

use App\Models\Kekeringan;
use Illuminate\Support\Facades\Storage;

class KekeringanObserver
{
    /**
     * Handle the Kekeringan "created" event.
     */
    public function created(Kekeringan $kekeringan): void
    {
        //
    }

    /**
     * Handle the Kekeringan "updated" event.
     */
    public function updated(Kekeringan $kekeringan): void
    {
        if ($kekeringan->isDirty('file') && !is_null($kekeringan->getOriginal('file'))) {
            Storage::disk('public')->delete($kekeringan->getOriginal('file'));
        }
    }

    /**
     * Handle the Kekeringan "deleted" event.
     */
    public function deleted(Kekeringan $kekeringan): void
    {
        if (!is_null($kekeringan->file)) {
            Storage::disk('public')->delete($kekeringan->file);
        }
    }

    /**
     * Handle the Kekeringan "restored" event.
     */
    public function restored(Kekeringan $kekeringan): void
    {
        //
    }

    /**
     * Handle the Kekeringan "force deleted" event.
     */
    public function forceDeleted(Kekeringan $kekeringan): void
    {
        //
    }
}
