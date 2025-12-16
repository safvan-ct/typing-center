<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            1 => [
                "Entry Permit",
                "Change Status",
                "Change Profession",
                "Absconding",
                "Change Nationality",
                "Establishment Card",
                "PRO Card Registration",
                "Sponsorship Transfer",

                "Emirates ID",
                "Medical Insurance",
                "Notary Typing",
                "Overstay Fines",

                // "Data Modification",
                // "Dubai Health Authority",
                // "Ministry Of Health & Prevention",
                // "Amer Services",
                // "DET Services",
                // "Tas-heel Services",
                // "ICP Smart Service",
                // "Attestation and Translation Services",
                // "GDRFA Services",
                // "Ejari Services",
            ],
            2 => [
                "Business Setup in UAE",
                "Abu Dhabi Free Zone",
                "Abu Dhabi Mainland",
                "Business Setup in Dubai",
                "Trade License Renewal",

                // "Business Setup Service",
                // "Company Formation in Saudi Arabia",
                // "Business Setup Service in Abu Dhabi",
            ],
            3 => [
                "Golden Visa",
                "MAID VISA",
                "Family Visa Dubai",
                "UAE Residence Visa",
                "UAE Visit Visa",
                "Work Visa",
                "Partner Visa Dubai",
                "New Born Baby Visa",
                "Freelance Visa",
                "Visa Extension",
                "Visa Renewal",
                "Visa Cancellation",
            ],
        ];

        foreach ($data as $category_id => $sub_categories) {
            foreach ($sub_categories as $sub_category) {
                \App\Models\SubCategory::create([
                    'category_id' => $category_id,
                    'name'        => $sub_category,
                    'slug'        => \Illuminate\Support\Str::slug($sub_category),
                ]);
            }
        }
    }
}
