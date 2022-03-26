<?php

namespace App\Http\Resources;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'label' => $this->label,
            'description' => $this->description,
            'email' => $this->user->email,
            'created_at' => Carbon::parse($this->created_at)->format('M d'),
            'badge' => Task::BADGES[$this->label]
        ];
    }
}
