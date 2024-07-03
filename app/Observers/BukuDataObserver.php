<?php

namespace App\Observers;

use App\Models\BukuData;
use Illuminate\Support\Facades\Storage;

class BukuDataObserver
{
    /**
     * Handle the BukuData "created" event.
     */
    public function created(BukuData $bukuData): void
    {
        //
    }

    /**
     * Handle the BukuData "updated" event.
     */
    public function updated(BukuData $bukuData): void
    {
        if ($bukuData->isDirty('file') && !is_null($bukuData->getOriginal('file'))) {
            Storage::disk('public')->delete($bukuData->getOriginal('file'));
        }
    }

    /**
     * Handle the BukuData "deleted" event.
     */
    public function deleted(BukuData $bukuData): void
    {
        if (!is_null($bukuData->file)) {
            Storage::disk('public')->delete($bukuData->file);
        }
    }

    /**
     * Handle the BukuData "restored" event.
     */
    public function restored(BukuData $bukuData): void
    {
        //
    }

    /**
     * Handle the BukuData "force deleted" event.
     */
    public function forceDeleted(BukuData $bukuData): void
    {
        //
    }
}
