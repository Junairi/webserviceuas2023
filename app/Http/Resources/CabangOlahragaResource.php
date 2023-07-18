<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CabangOlahragaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Nama: ' => $this->nama,
            'Kategori: ' => $this->kategori,
            'Wasit: ' => $this->wasit
        ];
    }
}
