<?php

namespace App\Http\Resources\Dairy;

use Illuminate\Http\Resources\Json\JsonResource;

class DairyUser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'First_name'=>$this->f_name,
            'Last_name'=>$this->l_name,
            'User_id'=>$this->user_id,
             // 'data'=>$this->collection
        ];
    }
}
