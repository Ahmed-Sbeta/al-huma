<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\events; // Import the User model

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        events::create([
            'title' => ' دعم الشباب في المشاريع الصغري ',
            'description' => 'تهدف شركة الحومة بالتعاون مع الليبيانا والمدار الي توفير فرصه لرواد الاعمال لتطوير مشاريعهم و الوصول الي الناس المستهدفة لمشاريعهم انظمو لنا في ورشة عمل تهدف الي تطوير مهارات ادارة المشاريع الصغري و تهدف الي اطلاعكم علي كل المعلومات التي تحتاجها لتطوير مشروعك الخاص',
            'Event_start' => '2024-12-23 18:16:00',
            'Event_end' => '2024-12-23 18:16:00',
            'location'=>'المدينة القديمة امام قوس ماركوس',
            'image'=> 'public/123456.jpg',
            'capacity'=>50,
            'type'=>'workshop',
            'male_allowed'=>1,
            'Female_allowed'=>0,
            'organizerID'=>1
        ]);
        events::create([
            'title' => ' دعم الشابات في المشاريع الصغري ',
            'description' => 'تهدف شركة الحومة بالتعاون مع الليبيانا والمدار الي توفير فرصه لرواد الاعمال لتطوير مشاريعهم و الوصول الي الناس المستهدفة لمشاريعهم انظمو لنا في ورشة عمل تهدف الي تطوير مهارات ادارة المشاريع الصغري و تهدف الي اطلاعكم علي كل المعلومات التي تحتاجها لتطوير مشروعك الخاص',
            'Event_start' => '2024-12-23 18:16:00',
            'Event_end' => '2024-12-23 18:16:00',
            'location'=>'المدينة القديمة امام قوس ماركوس',
            'image'=> 'public/12345.jpg',
            'capacity'=>50,
            'type'=>'workshop',
            'male_allowed'=>0,
            'Female_allowed'=>1,
            'organizerID'=>1
        ]);
        events::create([
            'title' => ' دعم المشاريع الصغري ',
            'description' => 'تهدف شركة الحومة بالتعاون مع الليبيانا والمدار الي توفير فرصه لرواد الاعمال لتطوير مشاريعهم و الوصول الي الناس المستهدفة لمشاريعهم انظمو لنا في ورشة عمل تهدف الي تطوير مهارات ادارة المشاريع الصغري و تهدف الي اطلاعكم علي كل المعلومات التي تحتاجها لتطوير مشروعك الخاص',
            'Event_start' => '2024-12-23 18:16:00',
            'Event_end' => '2024-12-23 18:16:00',
            'location'=>'المدينة القديمة امام قوس ماركوس',
            'image'=> 'public/1234.jpg',
            'capacity'=>50,
            'type'=>'workshop',
            'male_allowed'=>1,
            'Female_allowed'=>1,
            'organizerID'=>1
        ]);
    }
}
