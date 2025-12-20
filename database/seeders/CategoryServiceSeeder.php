<?php
namespace Database\Seeders;

use App\Models\CategoryService;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class CategoryServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'amer-services'      => [
                [
                    'name' => 'New Visa Application',
                    'desc' => 'Apply for entry permits and residence visas for family members, employees, or domestic workers.',
                    'docs' => 'Applicant passport copy@@@Passport-size photo@@@Sponsor passport & Emirates ID@@@Ejari tenancy contract@@@Salary certificate / labor contract@@@Attested marriage / birth certificate',
                ],
                [
                    'name' => 'Visa Renewal',
                    'desc' => 'Renew residence visas for dependents, employees, or domestic staff.',
                    'docs' => 'Current passport@@@Existing visa@@@Emirates ID@@@Medical fitness certificate (if required)@@@Valid health insurance',
                ],
                [
                    'name' => 'Visa Cancellation',
                    'desc' => 'Cancel visas for dependents or employees when leaving UAE or changing sponsorship.',
                    'docs' => 'Applicant passport@@@Sponsor passport & Emirates ID@@@Visa cancellation form',
                ],
                [
                    'name' => 'Tourist Visa',
                    'desc' => 'Short-term entry permit for visitors to the UAE.',
                    'docs' => 'Original passport@@@Passport-size photo@@@Confirmed round-trip flight tickets@@@Bank statement or financial proof',
                ],
                [
                    'name' => 'New Entry Permit Visa for Dependents',
                    'desc' => 'Apply for entry permits and residence visas for family members (spouse, children, parents).',
                    'docs' => 'Applicant passport copy & photo@@@Ejari tenancy contract or electricity bill@@@Marriage certificate@@@Sponsor bank statement (if applicable)',
                ],
                [
                    'name' => 'Maid Visa',
                    'desc' => 'Apply for domestic worker visas and residence permits.',
                    'docs' => 'Domestic worker passport@@@Medical fitness report@@@Sponsor documents@@@NOC@@@Accommodation proof',
                ],
                [
                    'name' => 'Employee Sponsorship Transfer',
                    'desc' => 'Transfer visa sponsorship from one employer to another.',
                    'docs' => 'Sponsor original Emirates ID@@@Applicant passport copy@@@Current visa copy@@@Sponsor bank IBAN',
                ],
                [
                    'name' => 'Golden Visa',
                    'desc' => 'Long-term residency visa (5 or 10 years) for eligible categories in the UAE.',
                    'docs' => 'Valid passport copy@@@ICP Golden Visa nomination approval@@@Attested certificates@@@Passport-size photo with white background',
                ],
                [
                    'name' => 'Status Change',
                    'desc' => 'Change visa status without exiting the country.',
                    'docs' => 'Passport@@@Current visa or entry permit@@@Emirates ID (if available)',
                ],
                [
                    'name' => 'Residency Stamping',
                    'desc' => 'Stamping of residence permit in passport after visa approval.',
                    'docs' => 'Passport@@@Approved visa@@@Emirates ID application@@@Medical fitness certificate (if applicable)',
                ],
                [
                    'name' => 'Family Sponsorship',
                    'desc' => 'Sponsor spouse, children, or parents for residency in Dubai.',
                    'docs' => 'Sponsor passport & Emirates ID@@@Ejari tenancy contract@@@Salary certificate or labor contract@@@Attested relationship certificates@@@Photos',
                ],
                [
                    'name' => 'Emirates ID Typing',
                    'desc' => 'Typing and submission of Emirates ID applications.',
                    'docs' => 'Passport@@@Visa page@@@Recent passport photo',
                ],
                [
                    'name' => 'Medical Fitness Typing',
                    'desc' => 'Application for medical tests required for visa processing.',
                    'docs' => 'Passport copy@@@Visa copy@@@Emirates ID (if available)',
                ],
                [
                    'name' => 'Immigration (GDRFA) Services',
                    'desc' => 'GDRFA services including entry permits, file opening, and establishment card renewals.',
                    'docs' => 'Passport@@@Entry permit or visa details@@@Establishment card (for company services)',
                ],
                [
                    'name' => 'Fines Payment',
                    'desc' => 'Inquiry and payment of overstay or visa-related fines.',
                    'docs' => 'Passport or Emirates ID@@@Payment method',
                ],
                [
                    'name' => 'Corporate PRO Services',
                    'desc' => 'Immigration and PRO support services for companies.',
                    'docs' => 'Trade license@@@Establishment card@@@Employee passport copies@@@Labor approvals',
                ],
                [
                    'name' => 'Visit Visa for Dependents',
                    'desc' => 'Apply for a visit visa for dependent family members.',
                    'docs' => 'Sponsor passport & UAE residence visa@@@Sponsor Emirates ID@@@Proof of accommodation@@@Health insurance@@@Dependent passport copy@@@Medical clearance (18+)@@@NOC from father (if applicable)@@@Application form',
                ],
                [
                    'name' => 'Certified Translation',
                    'desc' => 'Official Arabic translation of documents approved by UAE authorities.',
                    'docs' => 'Original documents@@@Educational certificates@@@Passport & Emirates ID@@@Business documents@@@Immigration & visa documents',
                ],
            ],
            'det-services'       => [
                [
                    'name' => 'Trade Name Reservation',
                    'desc' => 'Reserve a unique trade name for a new business before starting the licensing process.',
                    'docs' => 'Passport copy of owner/partners@@@Proposed trade names@@@Initial approval form',
                ],
                [
                    'name' => 'Initial Approval',
                    'desc' => 'Obtain official permission to proceed with the company licensing process.',
                    'docs' => 'Passport copies@@@Trade name reservation certificate@@@Business activity details',
                ],
                [
                    'name' => 'Business License Issuance',
                    'desc' => 'Issue a new trade license for commercial, professional, or industrial activities.',
                    'docs' => 'Initial approval@@@Tenancy (Ejari) contract@@@MOA (if applicable)@@@Passport copies of shareholders',
                ],
                [
                    'name' => 'Business License Renewal',
                    'desc' => 'Renew an existing trade license to legally continue business operations.',
                    'docs' => 'Current trade license@@@Tenancy (Ejari) contract@@@Passport copies',
                ],
                [
                    'name' => 'Modification of License',
                    'desc' => 'Update license details such as activities, partners, or company information.',
                    'docs' => 'Current license@@@Amendment forms@@@Required approvals@@@Supporting documents (MOA, passports)',
                ],
                [
                    'name' => 'License Cancellation',
                    'desc' => 'Officially cancel a business license and close company records.',
                    'docs' => 'Current license@@@Clearance from authorities (labor/immigration)@@@Passport copies',
                ],
                [
                    'name' => 'Issue of Branch License',
                    'desc' => 'Register a branch of a local or foreign company in Dubai.',
                    'docs' => 'Parent company documents@@@Board resolution@@@MOA@@@Trade license copy@@@Passport copies',
                ],
                [
                    'name' => 'Activity Addition Approval',
                    'desc' => 'Get approval to add new business activities to an existing license.',
                    'docs' => 'Current trade license@@@Activity list@@@Supporting approvals (if regulated activity)',
                ],
                [
                    'name' => 'Instant License Service',
                    'desc' => 'Obtain an instant business license without office space, valid for one year.',
                    'docs' => 'Passport copies@@@Trade name reservation@@@E-signature (if applicable)',
                ],
                [
                    'name' => 'Commercial Permits',
                    'desc' => 'Issue permits for events, promotions, signage, and commercial activities.',
                    'docs' => 'Passport or trade license@@@Event details@@@Location details@@@Design or layout approvals (if required)',
                ],
                [
                    'name' => 'Regulatory Approvals',
                    'desc' => 'Coordinate approvals from relevant Dubai authorities for regulated activities.',
                    'docs' => 'Documents depend on activity type (health, food, tourism, etc.)',
                ],
                [
                    'name' => 'Tourism License Services (DET)',
                    'desc' => 'Issue or renew licenses for travel agencies, tour operators, and tourism businesses.',
                    'docs' => 'Tourism license application@@@Trade name reservation@@@Tenancy contract@@@Insurance@@@Qualification certificates (if required)',
                ],
            ],
            'tas-heel-services'  => [
                [
                    'name' => 'New Employment Contract Typing',
                    'desc' => 'Typing and submission of Ministry of Labor employment contracts for newly hired employees.',
                    'docs' => 'Passport copy@@@Visa / Entry permit@@@Offer letter',
                ],

                [
                    'name' => 'Labor Card Application',
                    'desc' => 'Issuing a labor card for newly employed staff as per Ministry of Labor requirements.',
                    'docs' => 'Passport@@@Visa@@@Photograph@@@Signed employment contract',
                ],

                [
                    'name' => 'Labor Card Renewal',
                    'desc' => 'Renewal of expired or expiring labor cards to ensure continued legal employment.',
                    'docs' => 'Passport@@@Current labor card@@@Valid visa@@@Photograph',
                ],

                [
                    'name' => 'Work Permit Application',
                    'desc' => 'Issuing a new work permit for employees inside or outside the UAE.',
                    'docs' => 'Passport@@@Visa / Entry permit@@@Medical fitness certificate@@@Photograph',
                ],

                [
                    'name' => 'Work Permit Renewal',
                    'desc' => 'Renewing an existing work permit before its expiry date.',
                    'docs' => 'Passport@@@Current work permit@@@Valid visa',
                ],

                [
                    'name' => 'Work Permit Cancellation',
                    'desc' => 'Cancellation of an employee’s work permit when leaving or changing employment.',
                    'docs' => 'Passport copy@@@Labor card@@@Visa copy@@@Cancellation form',
                ],

                [
                    'name' => 'Salary Transfer (WPS) Registration',
                    'desc' => 'Registering companies under the Wage Protection System (WPS) for salary compliance.',
                    'docs' => 'Trade license@@@Establishment card@@@Passport of owner or manager',
                ],

                [
                    'name' => 'PRO / Labor Office Transactions',
                    'desc' => 'Handling general Ministry of Labor applications, updates, and official transactions.',
                    'docs' => 'Relevant company and employee documents as per service',
                ],
            ],
            'icp-smart-services' => [
                [
                    'name' => 'Visa Entry Permit Issuance',
                    'desc' => 'Issuing an entry permit for residency, visit, or employment.',
                    'docs' => 'Passport copy@@@Applicant photo@@@Sponsor’s documents',
                ],
                [
                    'name' => 'Visa Renewal',
                    'desc' => 'Renewal of residence visas through the ICP portal.',
                    'docs' => 'Passport@@@Current visa@@@Emirates ID@@@Medical fitness certificate',
                ],
                [
                    'name' => 'Visa Cancellation',
                    'desc' => 'Cancelling residence visas via the ICP system.',
                    'docs' => 'Passport@@@Visa copy@@@Emirates ID',
                ],
                [
                    'name' => 'Emirates ID Application',
                    'desc' => 'New, renewal, or replacement Emirates ID requests.',
                    'docs' => 'Passport@@@Visa or entry permit@@@Applicant photo',
                ],
                [
                    'name' => 'Family Visa Services',
                    'desc' => 'Applying, renewing, or cancelling family residence visas.',
                    'docs' => 'Sponsor’s documents@@@Relationship proof@@@Passport copies@@@Ejari tenancy contract',
                ],
                [
                    'name' => 'Fines Inquiry & Payment',
                    'desc' => 'Checking and paying ICP fines for overstay or visa violations.',
                    'docs' => 'Passport or Emirates ID',
                ],
                [
                    'name' => 'Status Change Application',
                    'desc' => 'Changing visa type or status without exiting the UAE.',
                    'docs' => 'Passport@@@Current visa or entry permit',
                ],
            ],
            'pro-services'       => [
                [
                    'name' => 'Visa Processing for Employees',
                    'desc' => 'Handling employee visas from application to stamping.',
                    'docs' => 'Passport copies@@@Photos@@@Job offer letter@@@Trade license@@@Establishment card',
                ],

                [
                    'name' => 'License Renewal Assistance',
                    'desc' => 'Renewal of trade licenses through DED or Free Zone.',
                    'docs' => 'Current license@@@Ejari contract@@@Passport copies',
                ],

                [
                    'name' => 'Document Clearing',
                    'desc' => 'Processing approvals from government departments.',
                    'docs' => 'Relevant original documents@@@ID copies',
                ],

                [
                    'name' => 'Immigration & Labor Card Processing',
                    'desc' => 'Applying or renewing immigration establishment cards and labor cards.',
                    'docs' => 'Trade license@@@Passport copies@@@Establishment card',
                ],

                [
                    'name' => 'Corporate Bank Account Assistance',
                    'desc' => 'Liaising with banks to open corporate accounts.',
                    'docs' => 'Trade license@@@MOA@@@Passport copies@@@Business plan (if required)',
                ],
            ],
            'ejari-services'     => [
                [
                    'name' => 'Ejari Registration',
                    'desc' => 'Register a new tenancy contract through the official Ejari system to validate your rental agreement.',
                    'docs' => 'Signed tenancy contract@@@Emirates ID copy@@@Passport copy with valid visa page@@@DEWA green bill or account number@@@Property title deed copy',
                ],
                [
                    'name' => 'Ejari Renewal',
                    'desc' => 'Renew your Ejari annually or when contract details change to avoid fines and service disruptions.',
                    'docs' => 'Signed tenancy contract@@@Emirates ID copy@@@Passport copy with valid visa page@@@DEWA green bill or account number@@@Property title deed copy',
                ],
                [
                    'name' => 'Ejari Cancellation',
                    'desc' => 'Cancel an existing Ejari contract when vacating a property or terminating the tenancy.',
                    'docs' => 'Existing Ejari certificate@@@Final DEWA bill or clearance@@@Landlord NOC@@@Power of Attorney (if applicable)',
                ],
                [
                    'name' => 'Ejari Verification & Certificate',
                    'desc' => 'Verify Ejari registration and obtain the official certificate for utilities, visas, or business licensing.',
                    'docs' => 'Ejari contract number or certificate@@@Emirates ID copy@@@Passport copy with valid visa page',
                ],
            ],
        ];

        foreach ($data as $key => $services) {
            if (empty($services)) {
                continue;
            }

            $subCategory = SubCategory::where("slug", $key)->first();

            foreach ($services as $item) {
                CategoryService::create([
                    'sub_category_id' => $subCategory->id,
                    'name'            => $item['name'],
                    'description'     => $item['desc'],
                    'documents'       => $item['docs'],
                ]);
            }
        }
    }
}
