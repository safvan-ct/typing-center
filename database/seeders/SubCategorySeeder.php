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
                "Data Modification",
                "Establishment Card (New / Renew)",
                "PRO Card Registration",
                "Sponsorship Transfer",

                "Emirates ID",
                "Dubai Health Authority",
                "Ministry Of Health & Prevention",
                "Medical Insurance",

                "Amer Services",
                "DET Services",
                "Tas-heel Services",
                "ICP Smart Service",
                "Attestation and Translation Services",
                "GDRFA Services",
                "Notary Typing",
                "Overstay Fines",
                "Ejari Services",
            ],
            2 => [
                "Business Setup Service",
                "Company Formation in Saudi Arabia",
                "Business Setup Service in Abu Dhabi",
                "Abu Dhabi Free Zone",
                "Abu Dhabi Mainland",
                "Business Setup in UAE",
                "Setting Up a Business in Dubai",
                "Trade License Renewal",
            ],
            3 => [
                "Golden Visa",
                "MAID VISA",
                "Family Visa Dubai",
                "Visa Cancellation",
                "UAE Residence Visa (New / Renew)",
                "Visa Extension",
                "Visa Renewal",
                "UAE Visit Visa",
                "Work Visa",
                "Partner Visa Dubai",
                "New Born Baby Visa",
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
