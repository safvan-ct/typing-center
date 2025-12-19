<?php
namespace Database\Seeders;

use App\Models\DocumentCategory;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class DocumentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "emirates-id" => [
                "Renew / New Emirates ID"                                  => 'One Photo With White Background(Required Only For Child Below 15 Years Old)@@@For New Born Baby – Birth Certificate(Original)',
                "Emirates ID Replacement"                                  => 'One Photo With White Background(Required Only For Child Below 15 Years Old)',
                "Mobile Number Update"                                     => '', // Emirates ID
                "Renew / New Emirates ID UAE National"                     => 'One Photo with White Background (Required Only for Child Below 15 Years Old)@@@Father Emirates ID front and back (Required Only for Child Below 15 Years Old).@@@Registration details required from Emirates Identity Authority (Required only for New Born Baby - UAE National)',
                "Renew / New Emirates ID GCC National (Employee)"          => '',
                "Renew / New Emirates ID GCC National (Employee-Family)"   => '',
                "Renew / New Emirates ID GCC National (Partner)"           => '',
                "Renew / New Emirates ID GCC National (Partner-Family)"    => '',
                "Renew / New Emirates ID GCC National (Real Estate Owner)" => '',
            ],
        ];

        foreach ($data as $key => $item) {
            $subCategory = SubCategory::where("slug", $key)->first();

            foreach ($item as $k => $value) {
                DocumentCategory::create([
                    'sub_category_id' => $subCategory->id,
                    'name'            => $k,
                    'slug'            => str()->slug($k),
                    'notes'           => $value,
                ]);
            }
        }
    }
}
