<?php

namespace App\Observers;

use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoObserver
{
    /**
     * Handle the Video "created" event.
     */
    public function created(Video $video): void
    {
        //
    }

    /**
     * Handle the Video "updated" event.
     */
    public function updated(Video $video): void
    {
        if ($video->isDirty('image') && !is_null($video->getOriginal('image'))) {
            Storage::disk('public')->delete($video->getOriginal('image'));
        }
    }

    /**
     * Handle the Video "deleted" event.
     */
    public function deleted(Video $video): void
    {
        if (!is_null($video->image)) {
            Storage::disk('public')->delete($video->image);
        }
    }

    /**
     * Handle the Video "restored" event.
     */
    public function restored(Video $video): void
    {
        //
    }

    /**
     * Handle the Video "force deleted" event.
     */
    public function forceDeleted(Video $video): void
    {
        //
    }
}
