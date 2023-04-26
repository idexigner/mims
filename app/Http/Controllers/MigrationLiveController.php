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
                            'strength_updated_at' => now(),
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
