<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BranchCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->transform(function ($branch) {
                return [
                    'id' => $branch->id,
                    'name' => $branch->name,
                    'country' => $branch->country,
                    'city' => $branch->city,
                    'address' => $branch->address,
                    'phone' => $branch->phone,
                    'email' => $branch->email,
                ];
            })->all(),
        ];
    }
}
