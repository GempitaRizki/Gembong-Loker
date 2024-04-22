<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $skills = [
            'Programming',
            'Web Development',
            'Mobile App Development',
            'Database Management',
            'UI/UX Design',
            'Digital Marketing',
            'Content Writing',
            'Graphic Design',
            'Project Management',
            'Data Analysis',
            'PHP',
            'Laravel',
            'Javascript',
            'React',
            'Python',
            'Communication Skills',
            'Problem Solving',
            'Time Management',
            'Teamwork',
            'Leadership',
            'Adaptability',
            'Critical Thinking',
            'Customer Service',
            'Presentation Skills',
            'Organizational Skills',
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill,
            ]);
        }
    }
}