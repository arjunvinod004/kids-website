<?php

namespace Database\Seeders;

use App\Models\AppContent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(AdminUserSeeder::class);
    }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        AppContent::create([
            'key' => 'app_data',
            'value' => [
                'T' => [
                    'selTitle' => '🌟 WonderLand',
                    'selSub' => 'Choose your age to begin the adventure!',
                    'tinyRange' => 'Ages 3 – 5',
                    'tinyLabel' => 'Tiny Tots',
                    'tinyDesc' => 'Big pictures · Simple taps · Colourful games',
                    'midRange' => 'Ages 6 – 9',
                    'midLabel' => 'Little Explorers',
                    'midDesc' => 'Short stories · MCQs · Memory games',
                    'bigRange' => 'Ages 10 – 13',
                    'bigLabel' => 'Young Thinkers',
                    'bigDesc' => 'Chapter stories · Science quizzes · Word puzzles',
                    'selParentLink' => '🔐 Parent / Guardian Settings',
                    'backAge' => 'Age',
                    'logoSuffix' => 'WonderLand',
                ],
                'AGES' => [
                    'tiny' => [
                        'label_en' => 'Ages 3–5',
                        'label_ml' => '3–5 വയസ്സ്',
                        'name_en' => 'Tiny Tots',
                        'name_ml' => 'കൊച്ചു മക്കൾ',
                        'cls' => 'age-tiny',
                        'logo_en' => '🐣 WonderLand',
                        'logo_ml' => '🐣 വണ്ടർലാൻഡ്',
                        'sessionMin' => 20,
                        'breakMin' => 8,
                    ],
                    'mid' => [
                        'label_en' => 'Ages 6–9',
                        'label_ml' => '6–9 വയസ്സ്',
                        'name_en' => 'Little Explorers',
                        'name_ml' => 'ചെറിയ പര്യവേഷകർ',
                        'cls' => 'age-mid',
                        'logo_en' => '🚀 WonderLand',
                        'logo_ml' => '🚀 വണ്ടർലാൻഡ്',
                        'sessionMin' => 30,
                        'breakMin' => 10,
                    ],
                    'big' => [
                        'label_en' => 'Ages 10–13',
                        'label_ml' => '10–13 വയസ്സ്',
                        'name_en' => 'Young Thinkers',
                        'name_ml' => 'യുവ ചിന്തകർ',
                        'cls' => 'age-big',
                        'logo_en' => '🔬 WonderLand',
                        'logo_ml' => '🔬 വണ്ടർലാൻഡ്',
                        'sessionMin' => 40,
                        'breakMin' => 12,
                    ],
                ],
            ],
        ]);
    }
}
