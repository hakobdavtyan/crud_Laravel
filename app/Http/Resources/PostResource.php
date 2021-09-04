<?php

namespace App\Http\Resources;

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
        return parent::toArray($request);

        return [
            'id'=>$title->$id,
            'title'=>$this->$title,
            'body'=>$this->$body,
        ];
    }

    public function with($request){
        return[
            'version'=>'1.0.0',
            'autho_url'=>url('https://testapiurl.com')
        ];
    }
}
