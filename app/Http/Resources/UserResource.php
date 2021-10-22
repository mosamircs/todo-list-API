<?php

namespace App\Http\Resources;
use App\Models\Todo;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //dd(TodoResource::collection($this->todos));
        return [
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'todos'=>TodoResource::collection($this->todos),
            //'todos'=>$this->todos,
        ];
    }
}
