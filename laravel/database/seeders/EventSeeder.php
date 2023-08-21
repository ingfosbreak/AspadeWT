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
        $event->name = "เทศกาลอาหารโลกกรูเมต์";
        $event->num_member = 400;
        $event->num_staff = 30;
        $event->budget = 50000;
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('-5 days','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->location = "KU";
        $event->publish = "publish";
        $event->description = "โลกที่มีอาหารและวัตถุดิบที่พิสดารและมหัศจรรย์ที่มนุษย์ไม่เคยลิ้มลองมาก่อน";
        $event->save();

        $event = new Event();
        $event->name = "กิจกรรมวิ่งช่วยเหลือคนพิการทางสายตา";
        $event->num_member = 100;
        $event->num_staff = 15;
        $event->budget = 25000;
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('-5 days','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "วัดพระศรีมหาธาตุวรมหาวิหาร บางเขน ถนน พหลโยธิน แขวงอนุสาวรีย์ เขตบางเขน กรุงเทพมหานคร";
        $event->description = "เข้าร่วมกิจกรรมวิ่งเพื่อเปิดโอกาสให้ช่วยเหลือคนที่ต้องการบริจาคเงินให้กับคนพิการทางสายตา";
        $event->save();

        $event = new Event();
        $event->name = "เทศกาลอาหารโลกกรูเมต์o";
        $event->num_member = 160;
        $event->num_staff = 2000;
        $event->budget = 100000;
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "โลกกรูเมต์";
        $event->description = "คำอธิบาย: ถ้าโทริโกะรวบรวมฟูคอร์สได้สำเร็จจนครบทุกเมณู คุณก็ทำได้เหมือนกันเปิดประสบการการรับรสของคุณได้ที่เทศการนี้";
        $event->save();

        $event = new Event();
        $event->name = "งานฉายภาพยนตร์ใต้ดาว";
        $event->num_member = 200;
        $event->num_staff = 40;
        $event->budget = 30000;
        $event->category ="outdoor";
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "ชมภาพยนตร์เรื่องดังภายใต้ฟ้ากลางคืนที่ดวงดาวเต็มฟ้า";
        $event->save();

        $event = new Event();
        $event->name = "สัมมนาโยคะ";
        $event->num_member = 40;
        $event->num_staff = 7;
        $event->budget = 8000;
        $event->category ="indoor";
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "ฝึกฝนโยคะและสัมผัสความสงบใจผ่านนักบำบัดระดับป.เอก";
        $event->save();

        $event = new Event();
        $event->name = "เทศกาลวิทยาศาสตร์";
        $event->num_member = 400;
        $event->num_staff = 60;
        $event->budget = 100000;
        $event->category ="academic";
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "สนุกกับกิจกรรมทางวิทยาศาสตร์ต่างๆ ในเทศกาลวิทยาศาสตร์น่าสนใจ";
        $event->save();

        $event = new Event();
        $event->name = "คอร์สเต้นแอโรบิก";
        $event->num_member = 50;
        $event->num_staff = 5;
        $event->budget = 5000;
        $event->category ="indoor";
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "ได้เรียนรู้เต้นทุกรูปแบบกับคอร์สเต้นแอโรบิก";
        $event->save();

        $event = new Event();
        $event->name = "งานเปิดตัวหนังสือ";
        $event->num_member = 500;
        $event->num_staff = 100;
        $event->budget = 110000;
        $event->category ="academic";
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "ร่วมงานเปิดตัวหนังสือใหม่ๆก่อนใครที่นี่!!!";
        $event->save();

        $event = new Event();
        $event->name = "การแข่งขันถ่ายภาพ";
        $event->num_member = 100;
        $event->num_staff = 15;
        $event->budget = 5000;
        $event->category ="sport";
        $event->date_register = fake()->dateTimeBetween('-60 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "ส่งต่อฝีมือกับการถ่ายภาพในงานแข่งขัน";
        $event->save();

        $event = new Event();
        $event->name = "งานประชาสัมพันธ์เทคโนโลยี";
        $event->num_member = 100;
        $event->num_staff = 15;
        $event->budget = 20000;
        $event->category ="academic";
        $event->date_register = fake()->dateTimeBetween('-30 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "ติดตามเทคโนโลยีที่ก้าวไกลที่สุดในงานประชาสัมพันธ์นี้";
        $event->save();

        $event = new Event();
        $event->name = "คอร์สทำอาหาร";
        $event->num_member = 25;
        $event->num_staff = 5;
        $event->budget = 10000;
        $event->category ="academic";
        $event->date_register = fake()->dateTimeBetween('-30 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "เรียนรู้ศิลปะการทำอาหารอร่อยๆ กับคอร์สนี้";
        $event->save();

        $event = new Event();
        $event->name = "ค่ายออกกำลังกาย";
        $event->num_member = 30;
        $event->num_staff = 15;
        $event->budget = 10000;
        $event->category ="sport";
        $event->date_register = fake()->dateTimeBetween('-30 days','now');
        $event->date_start = fake()->dateTimeBetween('now','+7 days');
        $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
        $event->publish = "publish";
        $event->location = "KU";
        $event->description = "เสริมสร้างร่างกายด้วยค่ายออกกำลังกายในเส้นทางนี้";
        $event->save();

        for ($x = 1; $x <= 99; $x+=1) {
        
            $event = new Event();
            $event->name = fake()->sentence(5);
            $event->num_member = 30;
            $event->num_staff = 15;
            $event->budget = 10000;
            $event->category = randomElement(['outdoor','indoor','concert','academic','sport']);
            $event->date_register = fake()->dateTimeBetween('-30 days','now');
            $event->date_start = fake()->dateTimeBetween('now','+7 days');
            $event->date_close = fake()->dateTimeBetween('+7 days','+30 days');
            $event->publish = randomElement(['draft','publish']);
            $event->location = fake()->sentence(5);
            $event->description = fake()->sentence(5);
            $event->save();
        }
    }
}