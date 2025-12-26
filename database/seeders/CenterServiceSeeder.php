<?php
namespace Database\Seeders;

use App\Models\CenterService;
use Illuminate\Database\Seeder;

class CenterServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Entry Permit',
                'tagline'              => 'Apply for entry permits and residence visas for family members (spouse, children, parents).',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Status Change',
                'tagline'              => 'Change visa status without exiting the country.',
                'notes'                => 'Required Only For Visa Change Inside UAE Without Exiting The Country',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => null,
                'name'                 => 'Change Profession',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => null,
                'name'                 => 'Absconding',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => null,
                'name'                 => 'Change Nationality',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => null,
                'name'                 => 'Establishment Card',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => null,
                'name'                 => 'PRO Card Registration',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Sponsorship Transfer',
                'tagline'              => 'Transfer visa sponsorship from one employer to another.',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Emirates ID',
                'tagline'              => 'Typing and submission of Emirates ID applications.',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Medical Insurance',
                'tagline'              => 'Application for medical tests required for visa processing.',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Residency - (New / Renew)',
                'tagline'              => 'Stamping of residence permit in passport after visa approval.',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Immigration (GDRFA)',
                'tagline'              => 'GDRFA services including entry permits, file opening, and establishment card renewals.',
            ],
            [
                'menu_id'              => 2,
                'government_center_id' => 1,
                'name'                 => 'Fines Payment',
                'tagline'              => 'Inquiry and payment of overstay or visa-related fines.',
            ],
            [
                'menu_id'              => 3,
                'government_center_id' => null,
                'name'                 => 'Trade License Renewal',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => 1,
                'name'                 => 'Family Visa Dubai',
                'tagline'              => 'Sponsor spouse, children, or parents for residency in Dubai.',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => 1,
                'name'                 => 'UAE Visit Visa',
                'tagline'              => 'Short-term entry permit for visitors to the UAE.',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => null,
                'name'                 => 'Work Visa',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => null,
                'name'                 => 'New Born Baby Visa',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => null,
                'name'                 => 'Visa Extension',
            ],
            [
                'menu_id'              => null,
                'government_center_id' => 1,
                'name'                 => 'New Visa',
                'tagline'              => 'Apply for entry permits and residence visas for family members, employees, or domestic workers.',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => 1,
                'name'                 => 'Visa Renewal',
                'tagline'              => 'Renew residence visas for dependents, employees, or domestic staff.',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => 1,
                'name'                 => 'Visa Cancellation',
                'tagline'              => 'Cancel visas for dependents or employees when leaving UAE or changing sponsorship.',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => 1,
                'name'                 => 'MAID VISA',
                'tagline'              => 'Apply for domestic worker visas and residence permits.',
            ],
            [
                'menu_id'              => 4,
                'government_center_id' => 1,
                'name'                 => 'Golden Visa',
                'tagline'              => 'Long-term residency visa (5 or 10 years) for eligible categories in the UAE.',
            ],
            [
                'menu_id'              => null,
                'government_center_id' => 1,
                'name'                 => 'Corporate PRO Services',
                'tagline'              => 'Immigration and PRO support services for companies.',
            ],
        ];

        foreach ($data as $item) {
            $item['slug'] = str()->slug($item['name']);
            CenterService::create($item);
        }
    }
}
