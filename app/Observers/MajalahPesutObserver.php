<?php

namespace App\Observers;

use App\Models\MajalahPesut;
use Illuminate\Support\Facades\Storage;

class MajalahPesutObserver
{
    /**
     * Handle the MajalahPesut "created" event.
     */
    public function created(MajalahPesut $majalahPesut): void
    {
        //
    }

    /**
     * Handle the MajalahPesut "updated" event.
     */
    public function updated(MajalahPesut $majalahPesut): void
    {
        if ($majalahPesut->isDirty('file') && !is_null($majalahPesut->getOriginal('file'))) {
            Storage::disk('public')->delete($majalahPesut->getOriginal('file'));
        }
    }

    /**
     * Handle the MajalahPesut "deleted" event.
     */
    public function deleted(MajalahPesut $majalahPesut): void
    {
        if (!is_null($majalahPesut->file)) {
            Storage::disk('public')->delete($majalahPesut->file);
        }
    }

    /**
     * Handle the MajalahPesut "restored" event.
     */
    public function restored(MajalahPesut $majalahPesut): void
    {
        //
    }

    /**
     * Handle the MajalahPesut "force deleted" event.
     */
    public function forceDeleted(MajalahPesut $majalahPesut): void
    {
        //
    }
}
