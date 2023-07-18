<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WasitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Nama Wasit: ' => $this->nama,
            'Wasit Cabang Olahraga: ' => $this->cabang_olahraga
        ];
    }
}
