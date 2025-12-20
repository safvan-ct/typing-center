<?php
namespace Database\Seeders;

use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nonGroupedDocs = [
            'absconding'            => [
                "Sponsor Emirates ID (Original)"                       => '',
                "Employee passport copy"                               => '',
                "VISA Copy"                                            => '',
                "Immigration card copy"                                => '',
                "Company License copy"                                 => '',
                "Absconding Labour Approval"                           => '',
                "Applicant Passport Copy"                              => '',
                "Company Bank Account IBAN Number (AE xxxx xxxxxxxxx)" => '',
            ],
            'change-nationality'    => [
                "Old Passport"                                         => '',
                "New Passport"                                         => '',
                "Visa copy"                                            => '',
                "Applicant Photo With White Background"                => '',
                "Sponsor Emirates ID (Original)"                       => '',
                "Sponsor Bank Account IBAN Number (AE xxxx xxxxxxxxx)" => '',
            ],
            'change-profession'     => [
                "New Labour Card No"                                   => '',
                "Company License Copy"                                 => '',
                "Immigration Card Copy"                                => '',
                "Emirates ID of Sponsor Original"                      => '',
                "Applicant passport"                                   => '',
                "Applicant Visa"                                       => '',
                "Applicant One photo with white background"            => '',
                "Company Bank Account IBAN number (AE xxxx xxxxxxxxx)" => '',
            ],
            'change-status'         => [
                "Sponsor Passport Copy"        => '',
                "Sponsor Visa Copy"            => '',
                "Sponsor Original Emirates ID" => '',
                "Applicant Visa copy"          => '',
                "Applicant Passport copy"      => '',
                "Photograph"                   => '',
            ],
            'entry-permit'          => [
                "Sponsor’s passport color copy."                                                                                                             => "",
                "Sponsor’s Visa color copy."                                                                                                                 => "",
                "Emirates ID Sponsor (Original)."                                                                                                            => "",
                "Electricity Bill."                                                                                                                          => "",
                "Sponsor’s Labor Contract for 2 years visa. (If 3 years visa salary certificate is required-FZCO)."                                          => "",
                "Sponsor Bank Account IBAN number (AE xxxx xxxxxxxxx)."                                                                                      => "",
                "Marriage / Birth Certificate Attested from Ministry of foreign Affairs (MoFA)."                                                             => "",
                "Applicant Photo with white background."                                                                                                     => "",
                "Applicant passport color copy."                                                                                                             => "",
                "National ID Card Copy (Only for Pakistan Nationality)."                                                                                     => "",
                "No Marriage Certificate (If the daughter is over than 18 years old)."                                                                       => "",
                "If the wife sponsored the children, a non-objection certificate issued from the father or custody proof must be attached (duly certified)." => "",
                "Affidavit from Consulate or Embassy."                                                                                                       => "",
                "AED 2561 Bank Guarantee for each parent should be deposited at Immigration through Amer centre."                                            => "",
                "Bank Statement of 3 months."                                                                                                                => "",
                "Memorandum."                                                                                                                                => "",
                "Company License Copy."                                                                                                                      => "",
                "AED 1500 Deposit required (If sponsor is Partner / Investor)."                                                                              => "",
            ],
            'establishment-card'    => [
                "Sponsor Emirates ID (Original)"                       => '',
                "Applicant Passport copy"                              => '',
                "Visa Copy"                                            => '',
                "Sponsor Bank Account IBAN Number (AE xxxx xxxxxxxxx)" => '',
            ],
            'medical-insurance'     => [
                "Original Passport" => '',
                "Visa Copy"         => '',
                "Photograph"        => '',
            ],
            'pro-card-registration' => [
                "Sponsor Emirates ID (Original)"                       => '',
                "Applicant Passport copy"                              => '',
                "Visa Copy"                                            => '',
                "Sponsor Bank Account IBAN Number (AE xxxx xxxxxxxxx)" => '',
            ],
            'sponsorship-transfer'  => [
                "Sponsor Emirates ID (Original)"                       => '',
                "Applicant Passport copy"                              => '',
                "Visa Copy"                                            => '',
                "Sponsor Bank Account IBAN Number (AE xxxx xxxxxxxxx)" => '',
            ],
            'residency-new-renew'   => [
                "Emirates ID Application"                                                                          => '',
                "Sponsor Emirates ID (Original)"                                                                   => '',
                "Sponsor Bank Account IBAN number (AE xxxx xxxxxxxxx)"                                             => '',
                "Medical Result (The age below 18 years not required medical)"                                     => '',
                "Medical Insurance Application or card (applicant)"                                                => '',
                "One Photo with White Background"                                                                  => '',
                "Applicant Passport"                                                                               => '',
                "Applicant Visa"                                                                                   => '',
                "Sponsor Passport copy"                                                                            => '',
                "Sponsor Visa Copy"                                                                                => '',
                "Tenancy Contract / Ejari and Electricity bill"                                                    => '',
                "Sponsor’s Labor Contract for 2 years visa. (If 3 years visa salary certificate is required-FZCO)" => '',
                "No Marriage Certificate (If the daughter is over than 18 years old)"                              => '',
                "Memorandum"                                                                                       => '',
                "Company License Copy"                                                                             => '',
            ],
            'immigration-gdrfa'     => [
                "Passport"                                  => '',
                "Entry permit/visa details"                 => '',
                "Establishment card (for company services)" => '',
            ],

            'abu-dhabi-free-zone'   => [
                "Company Application Form"                                                 => '',
                "Passport copies of the shareholders"                                      => '',
                "Passport-size photographs with white background"                          => '',
                "2-3 suggested names for the new company"                                  => '',
                "Specifications of the business activity"                                  => '',
                "Number of visas required"                                                 => '',
                "2 x Proofs of Address (dated within three months)"                        => '',
                "Bank or Professional Reference Letter"                                    => '',
                "Curriculum Vitae (summary of professional history) for freelance license" => '',
            ],
            'trade-license-renewal' => [
                "Completed BR/1 application form"                                      => '',
                "Tenancy contract or Ejari Certificate with at least 1-month validity" => '',
                "Current trade license copy"                                           => '',
                "Passport, visa, and Emirates ID copies of the business owner"         => '',
            ],

            'maid-visa'             => [
                "Domestic’s passport" => '',
                "Medical fitness"     => '',
                "Sponsor's documents" => '',
                "NOC"                 => '',
                "Accommodation proof" => '',
            ],
            'golden-visa'           => [
                "Copy of valid passport"                     => '',
                "ICP nomination approval for Golden Visa"    => '',
                "Attested certificates"                      => '',
                "Passport-sized photo with white background" => '',
            ],
            'family-visa-dubai'     => [
                "Passports"               => "Colored copies of passports for all family members.",
                "Photos"                  => "Passport-size photographs with a white background (around 15 copies).",
                "Sponsor’s Documents"     => "Original Emirates ID.",
                "Marriage Certificate"    => "Attested by the issuing authority, UAE Embassy, and sponsor’s home country. Arabian Business Center assists with attestations .",
                "Birth Certificate"       => "Attested by the issuing authority, UAE Embassy, and UAE Ministry of Foreign Affairs. Attestation services are also available",
                "EJARI Certificate"       => "Required for sponsoring parents",
                "MOL Contract"            => "Meeting the minimum salary requirement of AED 4,000 or AED 3,000 plus housing. This can be printed at any TASHEEL Center.",
                "Salary Certificate"      => "Required for government employees and individuals in Free Zones.",
                "IBAN and Bank Statement" => "Stamped and signed bank statements covering the last three months (applicable while sponsoring parents).",
                "Confirmation Letter"     => "An Arabic letter confirming unmarried status for females above 18 years.",
            ],
            'new-born-baby-visa'    => [
                "Sponsor Passport (Original)"                   => '',
                "Emirates ID of Sponsor (Original)"             => '',
                "Sponsor Visa Copy"                             => '',
                "Birth certificate (original) in Arabic"        => '',
                "Baby Clear photo with white background"        => '',
                "Baby passport"                                 => '',
                "Baby Emirates ID Application form"             => '',
                "Tenancy Contract / Ejari (if living in DUBAI)" => '',
                "Electricity Bill"                              => '',
                "Sponsor’s Labor Contract For 2 Years Visa . (if 3 Years Visa Salary Certificate Is Required - FZCO) {
                    "                           => '',
                "Mother passportcopy"                           => '',
                "Mother VISAcopy"                               => '',
                "Sponsor BankAccountIBANnumber(AE xxxxxxxxxxxxx) {
                        "                       => '',
                "Medical Insurance"                             => '',
                "Memorandum"                                    => '',
                "Company LicenseCopy"                           => '',
            ],
            'uae-visit-visa'        => [
                "Passport Front & Back copy" => '',
                "White BackgroundPhotograph" => '',
            ],
            'visa-cancellation'     => [
                "Emirates ID of Sponsor (Original)"                   => '',
                "Passport copy of the Sponsor"                        => '',
                "Visa copy of the Sponsor"                            => '',
                "Sponsor Bank Account IBAN number (AE xxxxxxxxxxxxx)" => '',
                "Family Passport copy"                                => '',
                "Family Visa copy"                                    => '',
            ],
            'visa-renewal'          => [
                "Current passport"                          => '',
                "Existing visa"                             => '',
                "Emirates ID"                               => '',
                "Medical fitness certificate (if required)" => '',
                "Valid health insurance"                    => '',
            ],
            'visa-extension'        => [
                "Sponsor Emirates ID (Original)"                      => '',
                "Applicant Passport copy"                             => '',
                "Visa Copy"                                           => '',
                "Sponsor Bank Account IBAN Number (AE xxxxxxxxxxxxx)" => '',
            ],
            'work-visa'             => [
                "Valid passport (minimum 6 months validity)"             => '',
                "Job offer letter/contract from a licensed UAE employer" => '',
                "Passport-sized photographs (with white background)"     => '',
                "Educational and professional credentials (attested)"    => '',
                "Medical fitness certificate (post-arrival in UAE)"      => '',
                "Emirates ID application"                                => '',
                "Employer’s trade license copy"                          => '',
            ]
        ];

        foreach ($nonGroupedDocs as $key => $docs) {
            if (empty($docs)) {
                continue;
            }

            $subCategory = SubCategory::where("slug", $key)->first();

            foreach ($docs as $k => $value) {
                Document::create([
                    'sub_category_id' => $subCategory->id,
                    'title'           => $k,
                    'notes'           => $value,
                ]);
            }
        }

        $groupedDocs = [
            'renew-new-emirates-id'                                => [
                "Applicant OriginalPassport" => '',
                "Applicant Visacopy"         => '',
                "Sponsor VisaCopy"           => '',
            ],
            'emirates-id-replacement'                              => [
                "Applicant OriginalPassport" => '',
                "Applicant Visacopy"         => '',
            ],
            'mobile-number-update'                                 => [
                "Applicant OriginalPassport" => '',
                "Applicant Visacopy"         => '',
                "Applicant EmiratesIDCopy"   => '',
            ],
            'renew-new-emirates-id-gcc-national-employee'          => [
                "Applicant GCCPassport(Original)"   => '',
                "ID fromGCCCountry"                 => '',
                "Employment Contract"               => '',
                "Employee UIDNumberfromImmigration" => '',
            ],
            'renew-new-emirates-id-gcc-national-employee-family'   => [
                "Proof ofKinship(Birth Certificate, the countryFamilybookequivalentdocument, Marriage Certificate, Proof ofratios, proof ofdependency . Should beissuedfromoutsideUAE and Officially attested) . " => '',
                "Applicant GCCPassport(Original"                                                                                                                                                                   => '',
                "GCC IDforApplicant or Applicant father"                                                                                                                                                           => '',
                "Employment Contract"                                                                                                                                                                              => '',
                "Applicant UIDNumberfromImmigration"                                                                                                                                                               => '',
                "Employee EmiratesIDCard"                                                                                                                                                                          => '',
            ],
            'renew-new-emirates-id-gcc-national-partner'           => [
                "Applicant GCCPassport(Original) {
                            "        => '',
                "ID fromGCCCountry"                  => '',
                "Applicant UIDNumberfromImmigration" => '',
                "Company LicenseCopy"                => '',
                "Memorandum Copy"                    => '',
            ],
            'renew-new-emirates-id-gcc-national-partner-family'    => [
                "Proof ofKinship(Birth Certificate, the countryFamilybookequivalentdocument, Marriage Certificate, Proof ofratios, proof ofdependency . Should beissuedfromoutsideUAE and Officially attested) . " => '',
                "Applicant GCCPassport(Original)"                                                                                                                                                                  => '',
                "GCC IDforApplicant or Applicant father"                                                                                                                                                           => '',
                "Applicant UIDNumberfromImmigration"                                                                                                                                                               => '',
                "Company LicenseCopy"                                                                                                                                                                              => '',
                "Memorandum Copy"                                                                                                                                                                                  => '',
                "Partner EmiratesID"                                                                                                                                                                               => '',
            ],
            'renew-new-emirates-id-gcc-national-real-estate-owner' => [
                "Applicant GCCPassport(Original) {
                                "    => '',
                "ID fromGCCCountry"                  => '',
                "Applicant UIDNumberfromImmigration" => '',
                "Title Deed"                         => '',
            ],
            'renew-new-emirates-id-uae-national'                   => [
                "Applicant UAEPassport(Original)"         => '',
                "Family BookCopy"                         => '',
                "Old EmiratesID(Required OnlyforRenewal)" => '',
            ],
        ];

        foreach ($groupedDocs as $key => $docs) {
            if (empty($docs)) {
                continue;
            }

            $docCategory = DocumentCategory::where("slug", $key)->first();

            foreach ($docs as $k => $value) {
                Document::create([
                    'sub_category_id'      => $docCategory->sub_category_id,
                    'document_category_id' => $docCategory->id,
                    'title'                => $k,
                    'notes'                => $value,
                ]);
            }
        }
    }
}
