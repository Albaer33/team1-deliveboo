<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'nome' => $this->nome,
            'slug' => $this->slug,
            'descrizione' => $this->descrizione,
            'prezzo' => $this->prezzo,
            'immagine' => $this->immagine,
            'visibile' => $this->visibile,
            'ingredienti' => $this->ingredienti,
            'restaurants_id' => $this->restaurants_id,
            'categories_id' => $this->categories_id

        ];
    }
}
