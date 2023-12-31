<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SummativeTest;
use App\Models\TeacherTopic;
use App\Models\Teacher;
use App\Models\Topic;

class SummativeTestFactory extends Factory
{
    public function definition(): array
    {
        $teacherId = Teacher::firstWhere('name', 'userT1 teacher')->id;
        $topicId = Topic::firstWhere('name', 'Opțiunile politice în perioada neutralității')->id;

        $teacherTopicId = TeacherTopic::where('teacher_id', $teacherId)
                                         ->where('topic_id', $topicId)
                                         ->first()->id;

        return [
            'teacher_topic_id' => $teacherTopicId,
        ];
    }
}
