<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Resume;

class ResumeSeeder extends Seeder
{
    public function run()
    {
        Resume::create([
            'name' => 'Reign Joseph C. Delos Santos',
            'objective' => 'Collaborative junior UX designer specializing in front-end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in Axure RP, Invision, Sketch, and Adobe CC. Seeking a UX designer position to expand skills and knowledge while facilitating company growth.',
            'skills_design' => json_encode([
                '1' => 'Developed collateral such as display, marketing and packaging materials to support product branding strategies.',
                '2' => 'Completed full redesigns of existing websites to improve navigation and enhance visuals increasing search engine rankings by 30%.',
                '3' => 'Designed, implemented and monitored web pages, plugins and functionality for continuous improvement.',
            ]),
            'skills_problem_solving' => json_encode([
                '1' => 'Analyzed user feedback to influence future design updates, ameliorating user concerns and pain points during subsequent patch cycles.',
                '2' => 'Created and updated trend boards, investigated changing conditions and recommended strategic adoptions to capitalize on projected changes.',
                '3' => 'Collected, defined and translated user requirements into project designs and implementation plans.',
            ]),
            'skills_management' => json_encode([
                '1' => 'Owned more than 100 projects per year from initial research and conceptual design through testing and implementation phases.',
                '2' => 'Coordinated, created and scheduled content, designs and periodic updates to company website.',
                '3' => 'Worked with five teams to gather and define requirements, establish scopes and manage project milestones.',
            ]),
            'certifications' => json_encode([
                '1' => "UX & UI Design Certificate - Noble Desktop's Online Bootcamp - 2023",
                '2' => 'Web Design & Development Certification - General Assembly\'s Immersive Bootcamp',
                '3' => 'Interactive Design Certificate - California Institute of the Arts (CalArts)',
            ]),
            'address' => 'B4 L1 Juniper St. Sabang Baliwag Bulacan',
            'phone' => '09694894696',
            'email' => '202211361@btech.ph.education',
            'additional_skills' => json_encode([
                '1' => 'Usability Testing',
                '2' => 'Visual Design',
                '3' => 'Problem-Solving',
                '4' => 'Communication',
                '5' => 'Time Management',
                '6' => 'Adobe PhotoShop & Illustrator',
                '7' => 'Sketch',
                '8' => 'HTML5 & CSS3',
            ]),
            'education' => json_encode([
                '1' => 'Bachelor of Science in Information Technology - 2023',
            ]),
            'work_history' => json_encode([
                '1' => 'Junior UX Designer, 02/2023 - Current GowraTech, LLC - Dallas, Texas',
                '2' => 'Graphic Designer Intern, 02/2022 - 02/2023 Paladin - Dallas, Texas',
            ]),
        ]);
    }
}
