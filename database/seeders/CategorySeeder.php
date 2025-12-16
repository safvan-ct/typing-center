<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Services',
            'Business Setup',
            'Visa',
        ];

        foreach ($data as $key => $item) {
            $service             = new Category();
            $service->name       = $item;
            $service->slug       = str()->slug($item);
            $service->is_menu    = true;
            $service->sort_order = $key + 1;
            $service->save();
        }
    }
}
