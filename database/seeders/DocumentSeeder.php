<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       Document::create(['key' => 'url', 'value'=> 'https://www.google.com',]);
       Document::create(['key' => 'who-us', 'value'=> 'جمعية خيرية غير هادفة للربح، تعنى بالمساهمة مع الأسرة المسلمة في اختيار الزوجة أو الزوج الكفء لأبنائهم وبناتهم، وفقاً للمعايير والشروط الشرعية.',]);
       Document::create(['key' => 'vision', 'value'=> 'الوجهة الآمنة و الموثوقة للراغبين في الزواج',]);
       Document::create(['key' => 'message', 'value'=> 'نمنح النصح و الاستشارة الآمنة ، بسرية تامة حول اختيار الشريك الكفؤ من خلال المعايير الدقيقة و الضوابط الشرعية لتحقيق التوافق الامثل و الاستدامة الاسرية بين الطرفين ',]);
       Document::create(['key' => 'our_value', 'value'=> 'المصداقية ، الامانة ، النزاهة ، الالتزام ، التميز و الاحترافية',]);
       Document::create(['key' => 'logo', 'value'=> ' حيث الاختيار الآمن',]);

    }
}
