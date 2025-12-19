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
                "Entry Permit"              => 'Study enrollment certificate (for male children over than 18 years old@@@For Parents Visa - SALARY MUST BE 20000 AND IF LESS THAN THAT NEED APPROVAL FROM IMMIGRATION. (GDRFA-Festival City, Dubai@@@For Partner’s Family – (All points are same Except Labor contract)',
                "Change Status"             => 'Required Only For Visa Change Inside UAE Without Exiting The Country',
                "Change Profession"         => '',
                "Absconding"                => '',
                "Change Nationality"        => '',
                "Establishment Card"        => '',
                "PRO Card Registration"     => '',
                "Sponsorship Transfer"      => '',
                "Emirates ID"               => '',
                "Medical Insurance"         => '',
                "Residency - (New / Renew)" => 'Study enrollment certificate (for male children over than 18 years old@@@ For Partner’s Family – (All points are same Except Labor contract',
                "Immigration (GDRFA)"       => '',

                // "Data Modification" => '',
                // "Dubai Health Authority" => '',
                // "Ministry Of Health & Prevention" => '',

                // "Amer Services" => '',
                // "DET Services" => '',
                // "Tas-heel Services" => '',
                // "ICP Smart Service" => '',
                // "Attestation and Translation Services" => '',
                // "GDRFA Services" => '',
                // "Ejari Services" => '',
                // "Notary Typing"             => '',
                // "Overstay Fines"            => '',
            ],
            2 => [
                "Abu Dhabi Free Zone"   => '',
                "Trade License Renewal" => '',

                // "Business Setup in Dubai" => '',
                // "Abu Dhabi Mainland"      => '',
                // "Business Setup in UAE"   => '',
                // "Business Setup Service" => '',
                // "Company Formation in Saudi Arabia" => '',
                // "Business Setup Service in Abu Dhabi" => '',
            ],
            3 => [
                // "UAE Residence Visa" => '',
                // "Partner Visa Dubai" => '',
                // "Freelance Visa"     => '',

                "Family Visa Dubai"  => '',
                "UAE Visit Visa"     => '',
                "Work Visa"          => '',
                "New Born Baby Visa" => 'If Wife Sponsored the children, a non-objection certification issued from the father or custody proof must be attached (duly certified)@@@For Partner’s Family – (All Points Are Same Except Labor Contract)',
                "Visa Extension"     => '',
                "Visa Renewal"       => '',
                "Visa Cancellation"  => '',
                "MAID VISA"          => '',
                "Golden Visa"        => '',
            ],
        ];

        foreach ($data as $category_id => $sub_categories) {
            foreach ($sub_categories as $sub_category => $doc_notes) {
                \App\Models\SubCategory::create([
                    'category_id' => $category_id,
                    'name'        => $sub_category,
                    'slug'        => \Illuminate\Support\Str::slug($sub_category),
                    'doc_notes'   => $doc_notes,
                ]);
            }
        }
    }
}
