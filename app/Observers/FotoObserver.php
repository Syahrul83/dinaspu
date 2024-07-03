<?php

namespace App\Observers;

use App\Models\Foto;
use Illuminate\Support\Facades\Storage;

class FotoObserver
{
    /**
     * Handle the Foto "created" event.
     */
    public function created(Foto $foto): void
    {
        //
    }

    /**
     * Handle the Foto "updated" event.
     */
    public function updated(Foto $foto): void
    {
        if ($foto->isDirty('image') && !is_null($foto->getOriginal('image'))) {
            Storage::disk('public')->delete($foto->getOriginal('image'));
        }
    }

    /**
     * Handle the Foto "deleted" event.
     */
    public function deleted(Foto $foto): void
    {
        if (!is_null($foto->image)) {
            Storage::disk('public')->delete($foto->image);
        }
    }

    /**
     * Handle the Foto "restored" event.
     */
    public function restored(Foto $foto): void
    {
        //
    }

    /**
     * Handle the Foto "force deleted" event.
     */
    public function forceDeleted(Foto $foto): void
    {
        //
    }
}
