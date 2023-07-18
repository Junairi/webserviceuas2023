<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PelatihResource extends JsonResource
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
            'Jenis Kelamin: ' => $this->jenis_kelamin,
            'Pelatih Team: ' => $this->team
        ];
    }
}
