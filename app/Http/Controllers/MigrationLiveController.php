<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MigrationLiveController extends Controller
{
    public function index(){

        // $this->migrate_generic();
        // $this->migrate_dosageform();
        // $this->migrate_strength();
        // $this->migrate_packsize();
        // $this->migrate_manufacturer();
        // $this->migrate_brand();

        // $this->migrate_location();

        // $this->migrate_country();
        // $this->migrate_state();
        // $this->migrate_city();
        // $this->migrate_doctor();
        // $this->migrate_job();
        // $this->migrate_news();
    }

    function migrate_news(){
        try{
            DB::connection('mysql')->table('news')->truncate();
                    // Get the data from the source table
                    $newss = DB::connection('db_live')->select('SELECT * FROM mims_newsinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($news) {
                        return [
                            'news_id' => $news->ID,
                            'news_title' => $news->Title,
                            'news_description' => $news->Description,
                            'news_image' => $news->ImagePath,
                            'news_publish_date' => $news->PublishDateTime,
                            'news_unpublish_date' => $news->UnpublishedDateTime,
                            'news_is_active' => 1,
                            'news_is_deleted' => $news->IsDeleted,
                            'news_created_by' => 1,
                            'news_created_at' => $news->LastUpdate,
                            'news_updated_by' => 0,
                            'news_updated_at' => $news->LastUpdate,
                        ];
                    }, $newss);

            // Insert the data into the destination table
            DB::connection('mysql')->table('news')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_job(){
        try{
            DB::connection('mysql')->table('job')->truncate();
                    // Get the data from the source table
                    $jobs = DB::connection('db_live')->select('SELECT * FROM mims_jobinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($job) {

                        $job_category = $job->JobCategory;
                        if($job_category == 1){
                            $job_category = "Pharma";
                        }else{
                            $job_category = "Medical";
                        }
                        return [
                            'job_id' => $job->ID,
                            'job_category' => $job_category,
                            'job_title' => $job->Title,
                            'job_description' => $job->Description,
                            'job_organization' => $job->Organization,
                            'job_organization_logo' => $job->OrganizationLogo,
                            'job_position' => $job->Position,
                            'job_application_deadline' => $job->ApplicationDeadline,
                            'job_salary' => $job->Salary,
                            'job_educational_requirement' => $job->EducationalRequirement,
                            'job_experience_requirement' => $job->ExperienceRequirement,
                            'job_vacancy' => $job->NumberOfVacancy,
                            'job_age_limit' => $job->AgeLimit,
                            'job_location' => $job->Location,
                            'job_source' => $job->JobSource,
                            'job_type' => $job->JobType,
                            'job_employment_type' => $job->EmploymentType,
                            'job_nature' => $job->JobNature,
                            'job_application_procedure' => $job->ApplyingProcedure,
                            'job_publish_date' => $job->PublishDate,
                            'job_image' => $job->JobCircularImagePath,
                            'job_is_active' => 1,
                            'job_is_deleted' => $job->IsDeleted,
                            'job_created_by' => 1,
                            'job_created_at' => $job->LastUpdate,
                            'job_updated_by' => 0,
                            'job_updated_at' => $job->LastUpdate,
                        ];
                    }, $jobs);

            // Insert the data into the destination table
            DB::connection('mysql')->table('job')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_doctor(){
        try{
            DB::connection('mysql')->table('doctor')->truncate();
                    // Get the data from the source table
                    $doctors = DB::connection('db_live')->select('SELECT * FROM mims_doctorinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($doctor) {
                        return [
                            'doctor_id' => $doctor->ID,
                            'doctor_name' => $doctor->Name,
                            'doctor_email' => $doctor->email_id,
                            'doctor_specialization' => $doctor->Specialization,
                            'doctor_experience' => $doctor->experiance,
                            'doctor_achievement' => $doctor->achievement,
                            'doctor_address' => $doctor->clinic_address,
                            // 'doctor_name' => $doctor->clinic_line1,
                            // 'doctor_name' => $doctor->clinic_line2,
                            'doctor_country_id' => $doctor->clinic_country_id,
                            'doctor_state_id' => $doctor->clinic_state_id,
                            'doctor_city_id' => $doctor->clinic_city_id,
                            'doctor_zip_code' => $doctor->clinic_zipcode,
                            'doctor_profession_degree' => $doctor->ProfessionDegree,
                            'doctor_gender' => $doctor->Gender,
                            'doctor_image' => $doctor->ImagePath,
                            'doctor_certificate' => $doctor->certificate,
                            'doctor_bio_notes' => $doctor->bio_notes,
                            // 'doctor_name' => $doctor->HomeAddressID,
                            // 'doctor_name' => $doctor->ChamberAddressID,
                            'doctor_phone_personal' => $doctor->PhoneNo,
                            'doctor_phone_clinic' => $doctor->clinic_phone,
                            // 'doctor_name' => $doctor->MobileNo1,
                            // 'doctor_name' => $doctor->MobileNo2,
                            // 'doctor_name' => $doctor->MobileNo3,
                            // 'doctor_name' => $doctor->Hotline,                            
                            'doctor_is_active' => 1,
                            'doctor_is_deleted' => $doctor->IsDeleted,
                            'doctor_created_by' => 1,
                            'doctor_created_at' => $doctor->LastUpdate,
                            'doctor_updated_by' => 0,
                            'doctor_updated_at' => $doctor->LastUpdate,
                        ];
                    }, $doctors);

            // Insert the data into the destination table
            DB::connection('mysql')->table('doctor')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_city(){
        try{
            DB::connection('mysql')->table('city')->truncate();
                    // Get the data from the source table
                    $citys = DB::connection('db_live')->select('SELECT * FROM mims_city');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($city) {
                        return [
                            'city_id' => $city->ID,
                            'city_name' => $city->Name,
                            'city_state_id' => $city->StateID,
                            'city_is_active' => 1,
                            'city_is_deleted' => $city->IsDeleted,
                            'city_created_by' => 1,
                            'city_created_at' => $city->LastUpdate,
                            'city_updated_by' => 0,
                            'city_updated_at' => $city->LastUpdate,
                        ];
                    }, $citys);

            // Insert the data into the destination table
            DB::connection('mysql')->table('city')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_state(){
        try{
            DB::connection('mysql')->table('state')->truncate();
                    // Get the data from the source table
                    $states = DB::connection('db_live')->select('SELECT * FROM mims_state');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($state) {
                        return [
                            'state_id' => $state->ID,
                            'state_name' => $state->Name,
                            'state_country_id' => $state->CountryID,
                            'state_is_active' => 1,
                            'state_is_deleted' => $state->IsDeleted,
                            'state_created_by' => 1,
                            'state_created_at' => $state->LastUpdate,
                            'state_updated_by' => 0,
                            'state_updated_at' => $state->LastUpdate,
                        ];
                    }, $states);

            // Insert the data into the destination table
            DB::connection('mysql')->table('state')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_country(){
        try{
            DB::connection('mysql')->table('country')->truncate();
                    // Get the data from the source table
                    $countrys = DB::connection('db_live')->select('SELECT * FROM mims_countryinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($country) {
                        return [
                            'country_id' => $country->ID,
                            'country_name' => $country->Name,
                            'country_is_active' => 1,
                            'country_is_deleted' => $country->IsDeleted,
                            'country_created_by' => 1,
                            'country_created_at' => $country->LastUpdate,
                            'country_updated_by' => 0,
                            'country_updated_at' => $country->LastUpdate,
                        ];
                    }, $countrys);

            // Insert the data into the destination table
            DB::connection('mysql')->table('country')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_location(){
        try{
            DB::connection('mysql')->table('location')->truncate();
                    // Get the data from the source table
                    $locations = DB::connection('db_live')->select('SELECT * FROM mims_location');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($location) {
                        return [
                            'location_id' => $location->ID,
                            'location_country_id' => $location->CountryID,
                            'location_state_id' => $location->StateID,
                            'location_city_id' => $location->CityID,
                            'location_address' => $location->Address,
                            'location_longitude' => $location->Longitude,
                            'location_latitude' => $location->Latitude,                     
                            'location_is_active' => 1,
                            'location_is_deleted' => $location->IsDeleted,
                            'location_created_by' => 1,
                            'location_created_at' => $location->LastUpdate,
                            'location_updated_by' => 0,
                            'location_updated_at' => $location->LastUpdate,
                        ];
                    }, $locations);

            // Insert the data into the destination table
            DB::connection('mysql')->table('location')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }


    function migrate_brand(){
        try{
            DB::connection('mysql')->table('brand')->truncate();
                    // Get the data from the source table
                    $brands = DB::connection('db_live')->select('SELECT * FROM mims_brandinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($brand) {
                        return [
                            'brand_id' => $brand->ID,
                            'brand_name' => $brand->Name,
                            'brand_type' => $brand->ProductType,
                            'brand_generic_id' => $brand->GenericID,
                            'brand_manufacturer_id' => $brand->ManufacturerID,
                            'brand_dosage_form_id' => $brand->DosageFormID,
                            'brand_strength_id' => $brand->StrengthID,
                            'brand_pack_size_id' => $brand->PackSizeID,
                            'brand_image' => $brand->ImagePath,
                            'brand_price' => $brand->PriceInBDT,
                            'brand_is_hightlight' => $brand->IsHighlighted,
                            'brand_is_new_product' => $brand->IsNewProduct,
                            'brand_is_new_brand' => $brand->IsNewBrand,
                            'brand_is_new_presentation' => $brand->IsNewPresentation,
                            'brand_is_active' => $brand->IsActive,
                            'brand_is_deleted' => $brand->IsDeleted,
                            'brand_created_by' => 1,
                            'brand_created_at' => $brand->LastUpdate,
                            'brand_updated_by' => 0,
                            'brand_updated_at' => now(),
                        ];
                    }, $brands);

            // Insert the data into the destination table
            DB::connection('mysql')->table('brand')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_manufacturer(){
        try{
            DB::connection('mysql')->table('manufacturer')->truncate();
                    // Get the data from the source table
                    $manufacturers = DB::connection('db_live')->select('SELECT * FROM mims_manufacturerinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($manufacturer) {
                        return [
                            'manufacturer_id' => $manufacturer->ID,
                            'manufacturer_name' => $manufacturer->Name,
                            'manufacturer_location_id' => $manufacturer->AddressID,
                            'manufacturer_email' => $manufacturer->EmailID,
                            'manufacturer_phone' => $manufacturer->PhoneNo,
                            'manufacturer_mobile' => $manufacturer->MobileNo,
                            'manufacturer_fax' => $manufacturer->FaxNo,
                            'manufacturer_is_active' => $manufacturer->IsActive,
                            'manufacturer_is_deleted' => $manufacturer->IsDeleted,
                            'manufacturer_created_by' => 1,
                            'manufacturer_created_at' => $manufacturer->LastUpdate,
                            'manufacturer_updated_by' => 0,
                            'manufacturer_updated_at' => now(),
                        ];
                    }, $manufacturers);

            // Insert the data into the destination table
            DB::connection('mysql')->table('manufacturer')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_packsize(){
        try{
            DB::connection('mysql')->table('packsize')->truncate();
                    // Get the data from the source table
                    $packsizes = DB::connection('db_live')->select('SELECT * FROM mims_packsizeinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($packsize) {
                        return [
                            'packsize_id' => $packsize->ID,
                            'packsize_name' => $packsize->Name,
                            'packsize_is_active' => $packsize->IsActive,
                            'packsize_is_deleted' => $packsize->IsDeleted,
                            'packsize_created_by' => 1,
                            'packsize_created_at' => $packsize->LastUpdate,
                            'packsize_updated_by' => 0,
                            'packsize_updated_at' => now(),
                        ];
                    }, $packsizes);

            // Insert the data into the destination table
            DB::connection('mysql')->table('packsize')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_strength(){
        try{
            DB::connection('mysql')->table('strength')->truncate();
                    // Get the data from the source table
                    $strengths = DB::connection('db_live')->select('SELECT * FROM mims_strengthinformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($strength) {
                        return [
                            'strength_id' => $strength->ID,
                            'strength_name' => $strength->Name,
                            'strength_is_active' => $strength->IsActive,
                            'strength_is_deleted' => $strength->IsDeleted,
                            'strength_created_by' => 1,
                            'strength_created_at' => $strength->LastUpdate,
                            'strength_updated_by' => 0,
                            'strength_updated_at' => $strength->LastUpdate,
                        ];
                    }, $strengths);

            // Insert the data into the destination table
            DB::connection('mysql')->table('strength')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }

    function migrate_dosageform(){
        try{
            DB::connection('mysql')->table('dosageform')->truncate();
                    // Get the data from the source table
                    $dosageForms = DB::connection('db_live')->select('SELECT * FROM mims_dosageforminformation');

                    // Map the columns to match the destination table
                    $mappedData = array_map(function ($dosageForm) {
                        return [
                            'dosageform_id' => $dosageForm->ID,
                            'dosageform_name' => $dosageForm->Name,
                            'dosageform_is_active' => $dosageForm->IsActive,
                            'dosageform_is_deleted' => $dosageForm->IsDeleted,
                            'dosageform_created_by' => 1,
                            'dosageform_created_at' => $dosageForm->LastUpdate,
                            'dosageform_updated_by' => 0,
                            'dosageform_updated_at' => now(),
                        ];
                    }, $dosageForms);

            // Insert the data into the destination table
            DB::connection('mysql')->table('dosageform')->insert($mappedData);
        }catch(Exception $ex){
            dd($ex->getMessage());
        }
    }
    function migrate_generic(){
        // Get the data from the source table (mims_genericinformation)
        $data = DB::connection('db_live')->table('mims_genericinformation')->get();

                
        // Map the column names from the source table to the destination table
        $map = [
            'ID' => 'generic_id',
            'Name' => 'generic_name',
            'Classification' => 'generic_classification',
            'SafetyRemark' => 'generic_safety_remark',
            'Indication' => 'generic_indication',
            'IndicationTags' => 'generic_indication_tags',
            'DosageAdministration' => 'generic_dosage_administration',
            'ContraindicationPrecaution' => 'generic_contraindication_precaution',
            'Composition' => 'generic_composition',
            'Pharmacology' => 'generic_pharmacology',
            'Interaction' => 'generic_interaction',
            'SideEffect' => 'generic_side_effect',
            'OverdoseEffect' => 'generic_overdose_effect',
            'StorageCondition' => 'generic_storage_condition',
            'PregnancyLactation' => 'generic_pregnancy_lactation',
            'LastUpdate' => 'generic_updated_at',
            'CreatedBy' => 'generic_created_by',
            'IsActive' => 'generic_is_active',
            'IsDeleted' => 'generic_is_deleted',
        ];

        // Map the data to the destination columns and add the created/updated timestamps
        $processedData = $data->map(function ($item) use ($map) {
            $newItem = [];
            foreach ($item as $key => $value) {
                $newKey = $map[$key] ?? $key;
                $newValue = $value;
                if ($key === 'LastUpdate') {
                    $newKey = 'generic_updated_at';
                    $newValue = date('Y-m-d H:i:s', strtotime($value));
                } elseif ($key === 'CreatedBy') {
                    $newKey = 'generic_created_by';
                    $newValue = (int) $value;
                }
                $newItem[$newKey] = $newValue;
            }
            $newItem['generic_created_at'] = now();
            $newItem['generic_updated_by'] = 0;
            $newItem['generic_updated_at'] = now();
            return $newItem;
        });

        // dd($processedData[0]);
        // Set the connection to the destination database (default MySQL connection)

        try{
            // Insert the processed data into the destination table (generic)
            DB::connection('mysql')->table('generic')->insert($processedData->toArray());

        }catch(\Exception $ex){
            dd($ex->getMessage());
        }

    }
}
