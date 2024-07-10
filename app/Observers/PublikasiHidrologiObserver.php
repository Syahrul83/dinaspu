<?php

namespace App\Observers;

use App\Models\PublikasiHidrologi;
use Illuminate\Support\Facades\Storage;

class PublikasiHidrologiObserver
{
    /**
     * Handle the PublikasiHidrologi "created" event.
     */
    public function created(PublikasiHidrologi $publikasiHidrologi): void
    {

    }

    /**
     * Handle the PublikasiHidrologi "updated" event.
     */
    public function updated(PublikasiHidrologi $publikasiHidrologi): void
    {
        if ($publikasiHidrologi->isDirty('file') && !is_null($publikasiHidrologi->getOriginal('file'))) {
            Storage::disk('public')->delete($publikasiHidrologi->getOriginal('file'));
        }
    }

    /**
     * Handle the PublikasiHidrologi "deleted" event.
     */
    public function deleted(PublikasiHidrologi $publikasiHidrologi): void
    {
        if (!is_null($publikasiHidrologi->file)) {
            Storage::disk('public')->delete($publikasiHidrologi->file);
        }
    }

    /**
     * Handle the PublikasiHidrologi "restored" event.
     */
    public function restored(PublikasiHidrologi $publikasiHidrologi): void
    {
        //
    }

    /**
     * Handle the PublikasiHidrologi "force deleted" event.
     */
    public function forceDeleted(PublikasiHidrologi $publikasiHidrologi): void
    {
        //
    }
}
