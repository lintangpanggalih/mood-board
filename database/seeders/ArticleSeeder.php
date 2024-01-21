<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Article::truncate();
            DB::beginTransaction();
            Article::insert([
                [
                    'content' => 'Kampanye 4 sehat 5 Sempurna ditetapkan oleh pemerintah sejak tahun 1955 agar masyarakat memahami pola makan yang benar Namun, saat ini prinsip makanan 4 sehat 5 sempurna sudah tak lagi digunakan karena dinilai tak sesuai dengan perkembangan dan permasalahan gizi saat ini. Pemerintah kemudian mengganti prinsip makanan 4 sehat 5 sempurna ini dengan
                "Tumpeng Gizi Seimbang"',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"4 Pilar Gizi Seimbang"
                • Konsumsi aneka ragam pangan
                • Biasakan Perilaku Hidup Bersih dan Sehat
                • Melakukan aktivitas fisik
                • Memantau berat badan dan tinggi badan secara teratur.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"Manfaat Mencukupi kebutuhan cairan tubuh"
                Dalam satu hari, manusia memerlukan 2,3 - 2,5 liter perhari atau setara dengan 8 gelas. Manfaatnya adalah 
                • Memelihara fungsi ginjal.
                • Menghindari dehidrasi 
                • Mengurangi risio kanker kandung kemih
                • Kesehatan kulit
                • Memperlancar Pencernaan',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"Kehebatan Karbohidrat"
                • Karbohidrat merupakan zat yang paling mudah di ubah menjadi energi dalam tubuh.
                • Perannya sebagai sumber energi pada tubuh, membantu kerja Otak. Sehingga apabila tubuh kekurangan karbohidrat akan menimbulkan masalah kesehatan.
                • Sumber Karbohidrat yang sering ditemui adalah nasi, singkong, kentang, jagung, dll.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"Serat sering dilupakan"
                • Serat banyak ditemukan pada sayur hijau dan buah-buahan.
                • Serat dalam tubuh tidak banyak diubah menjadi energi namun dibutuhkan tubuh untuk memelihara enzim yang ada di usus.
                • Serat juga dapat membuat kenyang lebih lama karena tidak bisa dicerna tubuh, sehingga bagus untuk mengontrol berat badan.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"Protein Pelindung Tubuh"
                • Protein bertugas untuk memperbaiki sel-sel tubuh yang rusak.
                • Protein juga dapat digunakan sebagai sumber energi namun memerlukan waktu yang lebih lama daripada karbohidrat.
                • Karena kehebatannya dalam membangun tubuh, protein sering dikonsumsi lebih oleh olahragawan sebagai cadangan energi ketika berolahraga.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"Protein Nabati tidak kalah penting"
                • Beberapa pangan nabati, mengandung protein yang cukup tinggi sehingga disebut sebagai protein nabati.
                • Protein nabati memiliki fungsi yang sama dengan protein hewani yaitu memperbaiki sel tubuh.
                • Namun, karena berasal dari tumbuhan yang juga mengandung serat, proses penyerapan protein nabati memerlukan waktu lebih lama dari protein hewani.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'content' => '"Batasan Asupan"
                Segala hal yang dikonsumsi secara berlebihan tidak baik bagi tubuh. Sehingga perlu disesuaikan dengan kebutuhan
                • Maksimal konsumsi gula adalah 4 sendok makan atau setara 50 gram perhari
                • Maksimal konsumsi garam adalah 1 sendok teh atau setara 5 gram perhari
                • Maksimal konsumsi lemak adalah 5 sendok makan atau setara 69 gram perhari',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            $this->command->error($th->getMessage());
        }
        DB::commit();
    }
}
