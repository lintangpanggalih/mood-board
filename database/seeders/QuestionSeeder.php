<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            $question1 = Question::create([
                'question' => 'Pedoman gizi seimbang yang sesuai dengan anjuran Kementrian Kesehatan Republik Indonesia adalah...',
                'order' => 1
            ]);
            $question1->answers()->saveMany([
                new Answer(['option' => '4 shat 5 sempurna', 'is_correct' => false]),
                new Answer(['option' => 'Tumpeng Gizi Seimbang', 'is_correct' => true]),
                new Answer(['option' => 'Jiwa Sehat Raga Kuat', 'is_correct' => false]),
                new Answer(['option' => 'Labu', 'is_correct' => false]),
            ]);

            $question2 = Question::create([
                'question' => 'Dibawah ini yang bukan merupakan bagian dari 4 pilar gizi seimbang adalah...',
                'order' => 2
            ]);
            $question2->answers()->saveMany([
                new Answer(['option' => 'Melakukan aktifitas fisik', 'is_correct' => false]),
                new Answer(['option' => 'Memantau berat & tinggi badan berkala', 'is_correct' => false]),
                new Answer(['option' => 'Perilaku hidup bersih & sehat', 'is_correct' => true]),
                new Answer(['option' => 'Puasa & olahraga 1 jam perhari', 'is_correct' => false]),
            ]);

            $question3 = Question::create([
                'question' => 'Dalam satu hari, manusia memerlukan air putih minimal sebanyak ...... untuk memenuhi kebutuhan tubuhnya.',
                'order' => 3
            ]);
            $question3->answers()->saveMany([
                new Answer(['option' => '1 botol', 'is_correct' => false]),
                new Answer(['option' => '1 galon kecil', 'is_correct' => false]),
                new Answer(['option' => '8 gelas', 'is_correct' => true]),
                new Answer(['option' => '4 gelas', 'is_correct' => false]),
            ]);

            $question4 = Question::create([
                'question' => 'Sumber karbohidrat di Indonesia beragam macamnya. Diantaranya adalah...',
                'order' => 4
            ]);
            $question4->answers()->saveMany([
                new Answer(['option' => 'Roti & Pisang', 'is_correct' => false]),
                new Answer(['option' => 'Papeda & Jagung', 'is_correct' => true]),
                new Answer(['option' => 'Susu & Tepung', 'is_correct' => false]),
                new Answer(['option' => 'Bubur & Kacang Hijau', 'is_correct' => false]),
            ]);

            $question5 = Question::create([
                'question' => 'Berikut yang termasuk ke dalam sumber serat adalah...',
                'order' => 5
            ]);
            $question5->answers()->saveMany([
                new Answer(['option' => 'Daging Sapi', 'is_correct' => false]),
                new Answer(['option' => 'Brokoli', 'is_correct' => true]),
                new Answer(['option' => 'Singkong', 'is_correct' => false]),
                new Answer(['option' => 'Labu', 'is_correct' => false]),
            ]);

            $question6 = Question::create([
                'question' => 'Protein hewani sering dikaitkan dengan sumber lemak. Yang tidak termasuk protein hewani adalah...',
                'order' => 6
            ]);
            $question6->answers()->saveMany([
                new Answer(['option' => 'Daging', 'is_correct' => false]),
                new Answer(['option' => 'Susu Kedelai', 'is_correct' => true]),
                new Answer(['option' => 'Telur', 'is_correct' => false]),
                new Answer(['option' => 'Ikan Pari', 'is_correct' => false]),
            ]);

            $question7 = Question::create([
                'question' => 'Berikut yang termasuk ke dalam sumber protein nabati adalah...',
                'order' => 7
            ]);
            $question7->answers()->saveMany([
                new Answer(['option' => 'Margarin', 'is_correct' => false]),
                new Answer(['option' => 'Jagung', 'is_correct' => false]),
                new Answer(['option' => 'Kacang Kedelai', 'is_correct' => true]),
                new Answer(['option' => 'Labu', 'is_correct' => false]),
            ]);

            $question8 = Question::create([
                'question' => 'Jumlah maksimal konsumsi gula perhari adalah...',
                'order' => 8
            ]);
            $question8->answers()->saveMany([
                new Answer(['option' => '2 sendok makan', 'is_correct' => false]),
                new Answer(['option' => '50 gram', 'is_correct' => true]),
                new Answer(['option' => '100 gram', 'is_correct' => false]),
                new Answer(['option' => '1 gelas', 'is_correct' => false]),
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->error($th->getMessage());
        }
        DB::commit();
    }
}
