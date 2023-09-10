<?php

namespace App\Jobs;

use App\Models\Movie;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GenerateMoviePdf implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Movie $movie;
    /**
     * Create a new job instance.
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->movie->pdf_link) {
            Storage::disk('public')->delete($this->movie->pdf_link);
        }

        $base64_image = base64_encode(Storage::disk('public')->get($this->movie->cover_image));

        $pdf = Pdf::loadView('pdf.movie', [
            'movie' => $this->movie,
            'base64_image' => $base64_image,
        ]);

        $filename = Str::kebab($this->movie->title) . '_' . date('YmdHis') . '.pdf';
        $path = 'pdfs/' . $filename;

        Storage::disk('public')->put($path, $pdf->output());

        $this->movie->pdf_link = Storage::disk('public')->url($path);
        $this->movie->save();
    }
}
