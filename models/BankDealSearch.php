<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DragonBankDeal;

/**
 * BankDealSearch represents the model behind the search form of `app\models\DragonBankDeal`.
 */
class BankDealSearch extends DragonBankDeal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document_id', 'house_id', 'room_id', 'district_id', 'region_id', 'community_id', 'unit_id', 'bedrooms', 'bathrooms', 'floor_code', 'top_floor', 'building_age', 'deal_date', 'start_date', 'end_date', 'input_department_id', 'input_user_id', 'deal_department_id', 'deal_user_id', 'if_deleted', 'company_id', 'create_time', 'update_time', 'living_room', 'galley_meter_number', 'galley_base_meter_number', 'electric_meter_number', 'electric_base_meter_number', 'gas_meter_number', 'gas_base_meter_number', 'toilet_meter_number', 'toilet_base_meter_number', 'client_id', 'block_id', 'deposit_month', 'price_month', 'bank_department_id', 'bank_user_id', 'old_id', 'if_renew', 'status_time', 'room_now', 'if_loan', 'if_apartment', 'out_bank', 'if_out_deal', 'price_end_time', 'balcony', 'kitchen', 'living_room_now', 'washroom_now', 'balcony_now', 'kitchen_now', 'free_days', 'decoration_distributed_years', 'if_interest', 'set_key_time', 'deal_period', 'set_rent_time', 'already_renew', 'renew_contract_id', 'client_public', 'empty_day_num', 'rent_key_empty_day_num', 'is_deposit_in_yeji', 'room_empty_days', 'room_empty_start_time', 'charter_broadband', 'charter_water', 'charter_gas', 'center_id', 'pre_days', 'if_short'], 'integer'],
            [['status', 'type', 'house_code', 'region', 'community', 'room_code', 'direction', 'purpose', 'price_way', 'payee_bank', 'payee_name', 'payee_account', 'input_username', 'deal_username', 'contract_code', 'reject_reason', 'remarks', 'entrust_code', 'agreed_matters', 'room_number', 'price_date', 'client_profession', 'client_code', 'client_name', 'client_gender', 'client_id_card', 'district', 'block', 'unit_name', 'break_memo', 'ledger_code', 'property_address', 'bank_username', 'client_tel', 'bank_address', 'loan_company', 'deal_mode', 'decoration', 'preferential_activity', 'charter_item', 'property', 'heat_type', 'property_memo', 'heat_memo', 'old_client_ids', 'if_rent_refund', 'break_reason'], 'safe'],
            [['build_area', 'contract_price', 'payed_price', 'deal_price', 'deposit', 'next_rent_start_date', 'rented_money', 'loan_rate', 'loan_total', 'interest'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DragonBankDeal::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'document_id' => $this->document_id,
            'house_id' => $this->house_id,
            'room_id' => $this->room_id,
            'district_id' => $this->district_id,
            'region_id' => $this->region_id,
            'community_id' => $this->community_id,
            'unit_id' => $this->unit_id,
            'build_area' => $this->build_area,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'floor_code' => $this->floor_code,
            'top_floor' => $this->top_floor,
            'building_age' => $this->building_age,
            'deal_date' => $this->deal_date,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'contract_price' => $this->contract_price,
            'payed_price' => $this->payed_price,
            'deal_price' => $this->deal_price,
            'deposit' => $this->deposit,
            'input_department_id' => $this->input_department_id,
            'input_user_id' => $this->input_user_id,
            'deal_department_id' => $this->deal_department_id,
            'deal_user_id' => $this->deal_user_id,
            'if_deleted' => $this->if_deleted,
            'company_id' => $this->company_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'living_room' => $this->living_room,
            'galley_meter_number' => $this->galley_meter_number,
            'galley_base_meter_number' => $this->galley_base_meter_number,
            'electric_meter_number' => $this->electric_meter_number,
            'electric_base_meter_number' => $this->electric_base_meter_number,
            'gas_meter_number' => $this->gas_meter_number,
            'gas_base_meter_number' => $this->gas_base_meter_number,
            'toilet_meter_number' => $this->toilet_meter_number,
            'toilet_base_meter_number' => $this->toilet_base_meter_number,
            'client_id' => $this->client_id,
            'block_id' => $this->block_id,
            'next_rent_start_date' => $this->next_rent_start_date,
            'rented_money' => $this->rented_money,
            'deposit_month' => $this->deposit_month,
            'price_month' => $this->price_month,
            'bank_department_id' => $this->bank_department_id,
            'bank_user_id' => $this->bank_user_id,
            'old_id' => $this->old_id,
            'if_renew' => $this->if_renew,
            'status_time' => $this->status_time,
            'room_now' => $this->room_now,
            'if_loan' => $this->if_loan,
            'if_apartment' => $this->if_apartment,
            'out_bank' => $this->out_bank,
            'if_out_deal' => $this->if_out_deal,
            'loan_rate' => $this->loan_rate,
            'loan_total' => $this->loan_total,
            'price_end_time' => $this->price_end_time,
            'balcony' => $this->balcony,
            'kitchen' => $this->kitchen,
            'living_room_now' => $this->living_room_now,
            'washroom_now' => $this->washroom_now,
            'balcony_now' => $this->balcony_now,
            'kitchen_now' => $this->kitchen_now,
            'free_days' => $this->free_days,
            'decoration_distributed_years' => $this->decoration_distributed_years,
            'if_interest' => $this->if_interest,
            'interest' => $this->interest,
            'set_key_time' => $this->set_key_time,
            'deal_period' => $this->deal_period,
            'set_rent_time' => $this->set_rent_time,
            'already_renew' => $this->already_renew,
            'renew_contract_id' => $this->renew_contract_id,
            'client_public' => $this->client_public,
            'empty_day_num' => $this->empty_day_num,
            'rent_key_empty_day_num' => $this->rent_key_empty_day_num,
            'is_deposit_in_yeji' => $this->is_deposit_in_yeji,
            'room_empty_days' => $this->room_empty_days,
            'room_empty_start_time' => $this->room_empty_start_time,
            'charter_broadband' => $this->charter_broadband,
            'charter_water' => $this->charter_water,
            'charter_gas' => $this->charter_gas,
            'center_id' => $this->center_id,
            'pre_days' => $this->pre_days,
            'if_short' => $this->if_short,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'house_code', $this->house_code])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'room_code', $this->room_code])
            ->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'purpose', $this->purpose])
            ->andFilterWhere(['like', 'price_way', $this->price_way])
            ->andFilterWhere(['like', 'payee_bank', $this->payee_bank])
            ->andFilterWhere(['like', 'payee_name', $this->payee_name])
            ->andFilterWhere(['like', 'payee_account', $this->payee_account])
            ->andFilterWhere(['like', 'input_username', $this->input_username])
            ->andFilterWhere(['like', 'deal_username', $this->deal_username])
            ->andFilterWhere(['like', 'contract_code', $this->contract_code])
            ->andFilterWhere(['like', 'reject_reason', $this->reject_reason])
            ->andFilterWhere(['like', 'remarks', $this->remarks])
            ->andFilterWhere(['like', 'entrust_code', $this->entrust_code])
            ->andFilterWhere(['like', 'agreed_matters', $this->agreed_matters])
            ->andFilterWhere(['like', 'room_number', $this->room_number])
            ->andFilterWhere(['like', 'price_date', $this->price_date])
            ->andFilterWhere(['like', 'client_profession', $this->client_profession])
            ->andFilterWhere(['like', 'client_code', $this->client_code])
            ->andFilterWhere(['like', 'client_name', $this->client_name])
            ->andFilterWhere(['like', 'client_gender', $this->client_gender])
            ->andFilterWhere(['like', 'client_id_card', $this->client_id_card])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'block', $this->block])
            ->andFilterWhere(['like', 'unit_name', $this->unit_name])
            ->andFilterWhere(['like', 'break_memo', $this->break_memo])
            ->andFilterWhere(['like', 'ledger_code', $this->ledger_code])
            ->andFilterWhere(['like', 'property_address', $this->property_address])
            ->andFilterWhere(['like', 'bank_username', $this->bank_username])
            ->andFilterWhere(['like', 'client_tel', $this->client_tel])
            ->andFilterWhere(['like', 'bank_address', $this->bank_address])
            ->andFilterWhere(['like', 'loan_company', $this->loan_company])
            ->andFilterWhere(['like', 'deal_mode', $this->deal_mode])
            ->andFilterWhere(['like', 'decoration', $this->decoration])
            ->andFilterWhere(['like', 'preferential_activity', $this->preferential_activity])
            ->andFilterWhere(['like', 'charter_item', $this->charter_item])
            ->andFilterWhere(['like', 'property', $this->property])
            ->andFilterWhere(['like', 'heat_type', $this->heat_type])
            ->andFilterWhere(['like', 'property_memo', $this->property_memo])
            ->andFilterWhere(['like', 'heat_memo', $this->heat_memo])
            ->andFilterWhere(['like', 'old_client_ids', $this->old_client_ids])
            ->andFilterWhere(['like', 'if_rent_refund', $this->if_rent_refund])
            ->andFilterWhere(['like', 'break_reason', $this->break_reason]);

        return $dataProvider;
    }
}
