<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = new Event();
        $event->name = "คอนเสิร์ตเพลง";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "สนุกกับคอนเสิร์ตเพลงสดๆ กับศิลปินที่มีชื่อเสียง";
        $event->save();

        $event = new Event();
        $event->name = "กิจกรรมวิ่งกองกำลังช่วยเหลือ";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "เข้าร่วมกิจกรรมวิ่งเพื่อเปิดโอกาสให้ช่วยเหลือคนที่ต้องการ";
        $event->save();

        $event = new Event();
        $event->name = "เทศกาลอาหาร";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "คำอธิบาย: สำรวจอาหารอร่อยจากวัฒนธรรมต่างๆ ในเทศกาลอาหารที่น่าตื่นเต้น";
        $event->save();

        $event = new Event();
        $event->name = "งานฉายภาพยนตร์ใต้ดาว";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ชมภาพยนตร์เรื่องดังภายใต้ฟ้ากลางคืน";
        $event->save();

        $event = new Event();
        $event->name = "สัมมนาโยคะ";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ฝึกฝนโยคะและสัมผัสความสงบใจ";
        $event->save();

        $event = new Event();
        $event->name = "เทศกาลวิทยาศาสตร์";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "สนุกกับกิจกรรมทางวิทยาศาสตร์ต่างๆ ในเทศกาลวิทยาศาสตร์น่าสนใจ";
        $event->save();

        $event = new Event();
        $event->name = "คอร์สเต้นแอโรบิก";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ได้เรียนรู้เต้นทุกรูปแบบกับคอร์สเต้นแอโรบิก";
        $event->save();

        $event = new Event();
        $event->name = "งานเปิดตัวหนังสือ";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ร่วมงานเปิดตัวหนังสือใหม่ๆ";
        $event->save();

        $event = new Event();
        $event->name = "การแข่งขันถ่ายภาพ";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ส่งต่อฝีมือกับการถ่ายภาพในงานแข่งขัน";
        $event->save();

        $event = new Event();
        $event->name = "งานประชาสัมพันธ์เทคโนโลยี";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ติดตามเทคโนโลยีที่ก้าวไกลที่สุดในงานประชาสัมพันธ์นี้";
        $event->save();

        $event = new Event();
        $event->name = "คอร์สทำอาหาร";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "เรียนรู้ศิลปะการทำอาหารอร่อยๆ กับคอร์สนี้";
        $event->save();

        $event = new Event();
        $event->name = "ค่ายออกกำลังกาย";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "เสริมสร้างร่างกายด้วยค่ายออกกำลังกายในเส้นทางนี้";
        $event->save();

        $event = new Event();
        $event->name = "งานเปิดตัวหนังสือ";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ร่วมงานเปิดตัวหนังสือใหม่ๆ";
        $event->save();

        $event = new Event();
        $event->name = "การแข่งขันถ่ายภาพ";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ส่งต่อฝีมือกับการถ่ายภาพในงานแข่งขัน";
        $event->save();

        $event = new Event();
        $event->name = "งานประชาสัมพันธ์เทคโนโลยี";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "ติดตามเทคโนโลยีที่ก้าวไกลที่สุดในงานประชาสัมพันธ์นี้";
        $event->save();

        $event = new Event();
        $event->name = "คอร์สทำอาหาร";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "เรียนรู้ศิลปะการทำอาหารอร่อยๆ กับคอร์สนี้";
        $event->save();

        $event = new Event();
        $event->name = "ค่ายออกกำลังกาย";
        $event->num_member = 20;
        $event->num_staff = 20;
        $event->budget = 5000;
        $event->date = fake()->dateTimeBetween('-1 week','+1 week');
        $event->location = "KU";
        $event->description = "เสริมสร้างร่างกายด้วยค่ายออกกำลังกายในเส้นทางนี้";
        $event->save();
    }
}
