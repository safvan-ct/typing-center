<?php
namespace Database\Seeders;

use App\Models\SubCategory;
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
                "Amer Services"      => [
                    'short_desc'  => 'Simplifying Government Transactions for Dubai Residents',
                    'desc_title'  => 'Effortless Government Documentation with Amer',
                    'description' => 'Amer Typing Center Dubai provides a seamless and reliable solution for all your government documentation needs. We simplify complex UAE government procedures by offering fast, accurate, and centralized services under one roof. From visa processing to official applications, our expert team ensures a smooth, stress-free experience for residents and businesses across Dubai.',
                ],
                "DET Services"       => [
                    'short_desc'  => "Simplifying Business in Dubai",
                    'desc_title'  => "Experience Excellence with DET Services Dubai: Pioneering Tourism Innovation",
                    'description' => "DET Services Dubai delivers excellence by supporting tourism growth and innovation across the emirate. We help businesses and individuals navigate tourism-related services with clarity, efficiency, and expert guidance, contributing to Dubai’s vision as a world-class destination.",
                ],
                "Tas-heel Services"  => [
                    'short_desc'  => "Making labor-related processes easier for both the employer and the employee.",
                    'desc_title'  => "Simplify Your MOL Experience: Discover Tasheel Services Dubai",
                    'description' => "Tasheel Services Dubai makes Ministry of Labour (MOL) processes simple and stress-free. Our team provides accurate guidance and efficient support for all labour-related services, helping businesses and individuals complete their requirements smoothly and on time.",
                ],
                "ICP Smart Services" => [
                    'short_desc'  => "Simplifying residency, visa, and identity services for individuals and families.",
                    'desc_title'  => "Smart & Seamless ICP Services Dubai",
                    'description' => "ICP Smart Services Dubai provides easy access to federal residency, visa, Emirates ID, and citizenship-related services. Our expert team ensures accurate processing and smooth completion of all ICP requirements, saving you time and effort.",
                ],
                "Ejari Services"     => [
                    'short_desc'  => "Making tenancy registration and rental documentation simple and hassle-free.",
                    'desc_title'  => "Register Your Tenancy with Ease: Ejari Services Dubai",
                    'description' => "Ejari Services Dubai helps tenants and landlords complete tenancy registration and rental contract approvals smoothly. Our team ensures accurate documentation and quick processing in compliance with Dubai Land Department regulations.",
                ],
                "PRO Services"       => [
                    'short_desc'  => "Reliable support for business, visa, and government approvals in Dubai.",
                    'desc_title'  => "Trusted PRO Services in Dubai",
                    'description' => "Our PRO Services in Dubai handle all government-related documentation, approvals, and follow-ups on your behalf. We ensure smooth coordination with UAE authorities, helping businesses and individuals save time, avoid delays, and stay compliant.",
                ],

                // "GDRFA Services"    => [],
                // "Notary Typing"             => [],
                // "Overstay Fines"            => [],
                // "Attestation and Translation Services" => [],
            ],
            2 => [
                "Entry Permit"              => [
                    "doc_notes" => "Study enrollment certificate (for male children over than 18 years old@@@For Parents Visa - SALARY MUST BE 20000 AND IF LESS THAN THAT NEED APPROVAL FROM IMMIGRATION. (GDRFA-Festival City, Dubai@@@For Partner's Family - (All points are same Except Labor contract)",
                ],
                "Change Status"             => ['doc_notes' => 'Required Only For Visa Change Inside UAE Without Exiting The Country'],
                "Change Profession"         => [],
                "Absconding"                => [],
                "Change Nationality"        => [],
                "Establishment Card"        => [],
                "PRO Card Registration"     => [],
                "Sponsorship Transfer"      => [],
                "Emirates ID"               => [],
                "Medical Insurance"         => [],
                "Residency - (New / Renew)" => [
                    'doc_notes' => 'Study enrollment certificate (for male children over than 18 years old@@@ For Partner’s Family – (All points are same Except Labor contract',
                ],
                "Immigration (GDRFA)"       => [],

                // "Overstay Fine"             => [],
                // "Data Modification" => [],
                // "Dubai Health Authority" => [],
                // "Ministry Of Health & Prevention" => [],
            ],
            3 => [
                "Abu Dhabi Free Zone"   => [],
                "Trade License Renewal" => [],

                // "Business Setup in Dubai" => [],
                // "Abu Dhabi Mainland"      => [],
                // "Business Setup in UAE"   => [],
                // "Business Setup Service" => [],
                // "Company Formation in Saudi Arabia" => [],
                // "Business Setup Service in Abu Dhabi" => [],
            ],
            4 => [
                "Family Visa Dubai"  => [],
                "UAE Visit Visa"     => [],
                "Work Visa"          => [],
                "New Born Baby Visa" => [
                    'doc_notes' => "If Wife Sponsored the children, a non-objection certification issued from the father or custody proof must be attached (duly certified)@@@For Partner's Family - (All Points Are Same Except Labor Contract)",
                ],
                "Visa Extension"     => [],
                "Visa Renewal"       => [],
                "Visa Cancellation"  => [],
                "MAID VISA"          => [],
                "Golden Visa"        => [],

                // "UAE Residence Visa" => [],
                // "Partner Visa Dubai" => [],
                // "Freelance Visa"     => [],
            ],
        ];

        foreach ($data as $category_id => $sub_categories) {
            $firstKey = array_key_first($sub_categories);
            $lastKey  = array_key_last($sub_categories);

            foreach ($sub_categories as $sub_category => $datas) {
                SubCategory::create([
                    'category_id'    => $category_id,
                    'name'           => $sub_category,
                    'slug'           => \Illuminate\Support\Str::slug($sub_category),
                    'short_desc'     => $datas['short_desc'] ?? null,
                    'desc_title'     => $datas['desc_title'] ?? null,
                    'description'    => $datas['description'] ?? null,
                    'doc_notes'      => $datas['doc_notes'] ?? null,
                    'key_service'    => $firstKey == $sub_category,
                    'useful_service' => $lastKey == $sub_category,
                ]);
            }
        }
    }
}
