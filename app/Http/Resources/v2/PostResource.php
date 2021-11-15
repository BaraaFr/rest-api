<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return[
        'Post_number'=>$this->id,
        'Post_Name'=>$this->title,
        'Post_Content'=>$this->body
       ];
    }
}
