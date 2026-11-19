<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StuinfSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            [
                'stuno' => '5577',
                'stname' => 'Ahmed Ali',
                'faclutly' => 'Faculty of Information Technology',
                'department' => 'Computer Science',
                'semster' => 'First',
            ],
            [
                'stuno' => '3358',
                'stname' => 'Sara Mohamed',
                'faclutly' => 'Faculty of Information Technology',
                'department' => 'Software Engineering',
                'semster' => 'Second',
            ],
            [
                'stuno' => '7788',
                'stname' => 'Mariam Khaled',
                'faclutly' => 'Faculty of Engineering',
                'department' => 'Civil Engineering',
                'semster' => 'Third',
            ],
            [
                'stuno' => '9900',
                'stname' => 'Fatima Salem',
                'faclutly' => 'Faculty of Engineering',
                'department' => 'Electrical Engineering',
                'semster' => 'Fourth',
            ],
            [
                'stuno' => '2233',
                'stname' => 'Aisha Omar',
                'faclutly' => 'Faculty of Information Technology',
                'department' => 'Cybersecurity',
                'semster' => 'Fifth',
            ],
            [
                'stuno' => '7766',
                'stname' => 'Noor Ibrahim',
                'faclutly' => 'Faculty of Information Technology',
                'department' => 'Information Systems',
                'semster' => 'Sixth',
            ],
            [
                'stuno' => '9999',
                'stname' => 'Hala Mahmoud',
                'faclutly' => 'Faculty of Engineering',
                'department' => 'Mechanical Engineering',
                'semster' => 'Second',
            ],
            [
                'stuno' => '6678',
                'stname' => 'Salma Adel',
                'faclutly' => 'Faculty of Engineering',
                'department' => 'Architecture',
                'semster' => 'Seventh',
            ],
            [
                'stuno' => '5568',
                'stname' => 'Rana Younis',
                'faclutly' => 'Faculty of Information Technology',
                'department' => 'Computer Networks',
                'semster' => 'Third',
            ],
            [
                'stuno' => '6767',
                'stname' => 'Aala Mustafa',
                'faclutly' => 'Faculty of Engineering',
                'department' => 'Chemical Engineering',
                'semster' => 'Eighth',
            ],
            [
                'stuno' => '8974',
                'stname' => 'Amal Hassan',
                'faclutly' => 'Faculty of Information Technology',
                'department' => 'Information Technology',
                'semster' => 'Fourth',
            ],
            [
                'stuno' => '3424',
                'stname' => 'Reem Fathi',
                'faclutly' => 'Faculty of Engineering',
                'department' => 'Communications Engineering',
                'semster' => 'Fifth',
            ],
        ];

        foreach ($students as $student) {
            DB::table('stuinf')->updateOrInsert(
                ['stuno' => $student['stuno']],
                array_merge($student, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
