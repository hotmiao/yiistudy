<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dragon_bank_deal".
 *
 * @property int $document_id
 * @property string $status
 * @property string $type
 * @property int $house_id
 * @property string $house_code
 * @property int $room_id
 * @property int $district_id
 * @property string $region
 * @property int $region_id
 * @property string $community
 * @property int $community_id
 * @property int $unit_id
 * @property string $room_code
 * @property string $direction
 * @property double $build_area
 * @property int $bedrooms
 * @property int $bathrooms
 * @property int $floor_code
 * @property int $top_floor
 * @property int $building_age
 * @property string $purpose
 * @property int $deal_date
 * @property int $start_date
 * @property int $end_date
 * @property string $price_way
 * @property double $contract_price
 * @property double $payed_price
 * @property double $deal_price
 * @property double $deposit
 * @property string $payee_bank
 * @property string $payee_name
 * @property string $payee_account
 * @property int $input_department_id
 * @property string $input_username
 * @property int $input_user_id
 * @property int $deal_department_id
 * @property string $deal_username
 * @property int $deal_user_id
 * @property string $contract_code
 * @property string $reject_reason
 * @property string $remarks
 * @property string $entrust_code
 * @property string $agreed_matters
 * @property int $if_deleted
 * @property int $company_id
 * @property int $create_time
 * @property int $update_time
 * @property string $room_number
 * @property int $living_room
 * @property int $galley_meter_number
 * @property int $galley_base_meter_number
 * @property int $electric_meter_number
 * @property int $electric_base_meter_number
 * @property int $gas_meter_number
 * @property int $gas_base_meter_number
 * @property int $toilet_meter_number
 * @property int $toilet_base_meter_number
 * @property string $price_date
 * @property string $client_profession
 * @property string $client_code
 * @property int $client_id
 * @property string $client_name
 * @property string $client_gender
 * @property string $client_id_card
 * @property string $district
 * @property int $block_id
 * @property string $block
 * @property string $unit_name
 * @property string $break_memo
 * @property double $next_rent_start_date
 * @property double $rented_money
 * @property int $deposit_month
 * @property int $price_month
 * @property string $ledger_code
 * @property string $property_address
 * @property int $bank_department_id
 * @property string $bank_username
 * @property int $bank_user_id
 * @property int $old_id
 * @property string $client_tel
 * @property int $if_renew
 * @property int $status_time
 * @property int $room_now
 * @property int $if_loan
 * @property int $if_apartment
 * @property int $out_bank
 * @property string $bank_address
 * @property int $if_out_deal
 * @property string $loan_company
 * @property double $loan_rate
 * @property double $loan_total
 * @property int $price_end_time
 * @property string $deal_mode
 * @property int $balcony
 * @property int $kitchen
 * @property int $living_room_now
 * @property int $washroom_now
 * @property int $balcony_now
 * @property int $kitchen_now
 * @property string $decoration
 * @property int $free_days
 * @property int $decoration_distributed_years
 * @property int $if_interest
 * @property double $interest
 * @property int $set_key_time
 * @property int $deal_period
 * @property int $set_rent_time
 * @property int $already_renew
 * @property int $renew_contract_id
 * @property int $client_public
 * @property int $empty_day_num
 * @property int $rent_key_empty_day_num
 * @property int $is_deposit_in_yeji
 * @property string $preferential_activity
 * @property int $room_empty_days
 * @property int $room_empty_start_time
 * @property string $charter_item
 * @property int $charter_broadband
 * @property int $charter_water
 * @property int $charter_gas
 * @property string $property
 * @property int $center_id
 * @property int $pre_days
 * @property string $heat_type
 * @property string $property_memo
 * @property string $heat_memo
 * @property string $old_client_ids
 * @property string $if_rent_refund
 * @property string $break_reason
 * @property int $if_short
 */
class DragonBankDeal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dragon_bank_deal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['house_id', 'room_id', 'district_id', 'region_id', 'community_id', 'unit_id', 'bedrooms', 'bathrooms', 'floor_code', 'top_floor', 'building_age', 'deal_date', 'start_date', 'end_date', 'input_department_id', 'input_user_id', 'deal_department_id', 'deal_user_id', 'if_deleted', 'company_id', 'create_time', 'update_time', 'living_room', 'galley_meter_number', 'galley_base_meter_number', 'electric_meter_number', 'electric_base_meter_number', 'gas_meter_number', 'gas_base_meter_number', 'toilet_meter_number', 'toilet_base_meter_number', 'client_id', 'block_id', 'deposit_month', 'price_month', 'bank_department_id', 'bank_user_id', 'old_id', 'if_renew', 'status_time', 'room_now', 'if_loan', 'if_apartment', 'out_bank', 'if_out_deal', 'price_end_time', 'balcony', 'kitchen', 'living_room_now', 'washroom_now', 'balcony_now', 'kitchen_now', 'free_days', 'decoration_distributed_years', 'if_interest', 'set_key_time', 'deal_period', 'set_rent_time', 'already_renew', 'renew_contract_id', 'client_public', 'empty_day_num', 'rent_key_empty_day_num', 'is_deposit_in_yeji', 'room_empty_days', 'room_empty_start_time', 'charter_broadband', 'charter_water', 'charter_gas', 'center_id', 'pre_days', 'if_short'], 'integer'],
            [['build_area', 'contract_price', 'payed_price', 'deal_price', 'deposit', 'next_rent_start_date', 'rented_money', 'loan_rate', 'loan_total', 'interest'], 'number'],
            [['status', 'type', 'direction', 'purpose', 'contract_code', 'ledger_code', 'loan_company', 'deal_mode', 'decoration', 'property', 'heat_type'], 'string', 'max' => 50],
            [['house_code', 'region', 'community', 'price_way', 'payee_bank', 'payee_name', 'payee_account', 'entrust_code', 'price_date', 'client_profession', 'client_code', 'client_name', 'client_id_card', 'district', 'block', 'unit_name', 'client_tel', 'bank_address'], 'string', 'max' => 100],
            [['room_code', 'room_number'], 'string', 'max' => 300],
            [['input_username', 'deal_username', 'bank_username'], 'string', 'max' => 20],
            [['reject_reason'], 'string', 'max' => 500],
            [['remarks'], 'string', 'max' => 1000],
            [['agreed_matters'], 'string', 'max' => 4000],
            [['client_gender', 'if_rent_refund', 'break_reason'], 'string', 'max' => 10],
            [['break_memo'], 'string', 'max' => 2000],
            [['property_address', 'charter_item', 'property_memo', 'heat_memo', 'old_client_ids'], 'string', 'max' => 200],
            [['preferential_activity'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'document_id' => 'Document ID',
            'status' => '状态',
            'type' => '类型',
            'house_id' => 'House ID',
            'house_code' => 'House Code',
            'room_id' => 'Room ID',
            'district_id' => 'District ID',
            'region' => 'Region',
            'region_id' => 'Region ID',
            'community' => 'Community',
            'community_id' => 'Community ID',
            'unit_id' => 'Unit ID',
            'room_code' => 'Room Code',
            'direction' => 'Direction',
            'build_area' => 'Build Area',
            'bedrooms' => 'Bedrooms',
            'bathrooms' => 'Bathrooms',
            'floor_code' => 'Floor Code',
            'top_floor' => 'Top Floor',
            'building_age' => 'Building Age',
            'purpose' => 'Purpose',
            'deal_date' => 'Deal Date',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'price_way' => 'Price Way',
            'contract_price' => 'Contract Price',
            'payed_price' => 'Payed Price',
            'deal_price' => 'Deal Price',
            'deposit' => 'Deposit',
            'payee_bank' => 'Payee Bank',
            'payee_name' => 'Payee Name',
            'payee_account' => 'Payee Account',
            'input_department_id' => 'Input Department ID',
            'input_username' => 'Input Username',
            'input_user_id' => 'Input User ID',
            'deal_department_id' => 'Deal Department ID',
            'deal_username' => 'Deal Username',
            'deal_user_id' => 'Deal User ID',
            'contract_code' => 'Contract Code',
            'reject_reason' => 'Reject Reason',
            'remarks' => 'Remarks',
            'entrust_code' => 'Entrust Code',
            'agreed_matters' => 'Agreed Matters',
            'if_deleted' => 'If Deleted',
            'company_id' => 'Company ID',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'room_number' => 'Room Number',
            'living_room' => 'Living Room',
            'galley_meter_number' => 'Galley Meter Number',
            'galley_base_meter_number' => 'Galley Base Meter Number',
            'electric_meter_number' => 'Electric Meter Number',
            'electric_base_meter_number' => 'Electric Base Meter Number',
            'gas_meter_number' => 'Gas Meter Number',
            'gas_base_meter_number' => 'Gas Base Meter Number',
            'toilet_meter_number' => 'Toilet Meter Number',
            'toilet_base_meter_number' => 'Toilet Base Meter Number',
            'price_date' => 'Price Date',
            'client_profession' => 'Client Profession',
            'client_code' => 'Client Code',
            'client_id' => 'Client ID',
            'client_name' => 'Client Name',
            'client_gender' => 'Client Gender',
            'client_id_card' => 'Client Id Card',
            'district' => 'District',
            'block_id' => 'Block ID',
            'block' => 'Block',
            'unit_name' => 'Unit Name',
            'break_memo' => 'Break Memo',
            'next_rent_start_date' => 'Next Rent Start Date',
            'rented_money' => 'Rented Money',
            'deposit_month' => 'Deposit Month',
            'price_month' => 'Price Month',
            'ledger_code' => 'Ledger Code',
            'property_address' => 'Property Address',
            'bank_department_id' => 'Bank Department ID',
            'bank_username' => 'Bank Username',
            'bank_user_id' => 'Bank User ID',
            'old_id' => 'Old ID',
            'client_tel' => 'Client Tel',
            'if_renew' => 'If Renew',
            'status_time' => 'Status Time',
            'room_now' => 'Room Now',
            'if_loan' => 'If Loan',
            'if_apartment' => 'If Apartment',
            'out_bank' => 'Out Bank',
            'bank_address' => 'Bank Address',
            'if_out_deal' => 'If Out Deal',
            'loan_company' => 'Loan Company',
            'loan_rate' => 'Loan Rate',
            'loan_total' => 'Loan Total',
            'price_end_time' => 'Price End Time',
            'deal_mode' => 'Deal Mode',
            'balcony' => 'Balcony',
            'kitchen' => 'Kitchen',
            'living_room_now' => 'Living Room Now',
            'washroom_now' => 'Washroom Now',
            'balcony_now' => 'Balcony Now',
            'kitchen_now' => 'Kitchen Now',
            'decoration' => 'Decoration',
            'free_days' => 'Free Days',
            'decoration_distributed_years' => 'Decoration Distributed Years',
            'if_interest' => 'If Interest',
            'interest' => 'Interest',
            'set_key_time' => 'Set Key Time',
            'deal_period' => 'Deal Period',
            'set_rent_time' => 'Set Rent Time',
            'already_renew' => 'Already Renew',
            'renew_contract_id' => 'Renew Contract ID',
            'client_public' => 'Client Public',
            'empty_day_num' => 'Empty Day Num',
            'rent_key_empty_day_num' => 'Rent Key Empty Day Num',
            'is_deposit_in_yeji' => 'Is Deposit In Yeji',
            'preferential_activity' => 'Preferential Activity',
            'room_empty_days' => 'Room Empty Days',
            'room_empty_start_time' => 'Room Empty Start Time',
            'charter_item' => 'Charter Item',
            'charter_broadband' => 'Charter Broadband',
            'charter_water' => 'Charter Water',
            'charter_gas' => 'Charter Gas',
            'property' => 'Property',
            'center_id' => 'Center ID',
            'pre_days' => 'Pre Days',
            'heat_type' => 'Heat Type',
            'property_memo' => 'Property Memo',
            'heat_memo' => 'Heat Memo',
            'old_client_ids' => 'Old Client Ids',
            'if_rent_refund' => 'If Rent Refund',
            'break_reason' => 'Break Reason',
            'if_short' => 'If Short',
            'inputuser.username' => '录入人',
            'inputdept.dept_name' => '录入部门',
        ];
    }

    public function getInputuser()
    {
        return $this->hasOne(DragonUser::className(), ['id' => 'input_user_id']);
    }

    public function getInputdept()
    {
        return $this->hasOne(DragonDepartment::className(), ['dept_id' => 'input_department_id']);
    }
}
