<?php

namespace App\Domain\Lessons\Resources;

use App\Domain\Subjects\Resources\SubjectResource;
use App\Domain\Teachers\Resources\TeacherResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subject_name' => $this->subject_name,
            'title' => $this->title,
            'url' => $this->url,
            'date' => $this->date,
            'created_at' => $this->created_at,
            'teacher' => new TeacherResource($this->teacher),
            'subject' => new SubjectResource($this->subject),
        ];
    }
}
