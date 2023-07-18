<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Nama Team: ' => $this->nama,
            'Jumlah Atlit: ' => $this->jumlah_atlit,
            'Jumlah Pelatih: ' => $this->jumlah_pelatih
        ];
    }
}
