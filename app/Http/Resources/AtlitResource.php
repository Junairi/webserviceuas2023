<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AtlitResource extends JsonResource
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
          'Umur: ' => $this->umur,
          'Jenis Kelamin: ' => $this->jenis_kelamin,
          'Atlit Cabang Olahraga: ' => $this->cabang_olehraga,
          'Team: ' => $this->team
        ];
    }
}
