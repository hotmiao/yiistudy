<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BankDealSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dragon-bank-deal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'document_id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'house_id') ?>

    <?= $form->field($model, 'house_code') ?>

    <?php // echo $form->field($model, 'room_id') ?>

    <?php // echo $form->field($model, 'district_id') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'community') ?>

    <?php // echo $form->field($model, 'community_id') ?>

    <?php // echo $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'room_code') ?>

    <?php // echo $form->field($model, 'direction') ?>

    <?php // echo $form->field($model, 'build_area') ?>

    <?php // echo $form->field($model, 'bedrooms') ?>

    <?php // echo $form->field($model, 'bathrooms') ?>

    <?php // echo $form->field($model, 'floor_code') ?>

    <?php // echo $form->field($model, 'top_floor') ?>

    <?php // echo $form->field($model, 'building_age') ?>

    <?php // echo $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'deal_date') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'price_way') ?>

    <?php // echo $form->field($model, 'contract_price') ?>

    <?php // echo $form->field($model, 'payed_price') ?>

    <?php // echo $form->field($model, 'deal_price') ?>

    <?php // echo $form->field($model, 'deposit') ?>

    <?php // echo $form->field($model, 'payee_bank') ?>

    <?php // echo $form->field($model, 'payee_name') ?>

    <?php // echo $form->field($model, 'payee_account') ?>

    <?php // echo $form->field($model, 'input_department_id') ?>

    <?php // echo $form->field($model, 'input_username') ?>

    <?php // echo $form->field($model, 'input_user_id') ?>

    <?php // echo $form->field($model, 'deal_department_id') ?>

    <?php // echo $form->field($model, 'deal_username') ?>

    <?php // echo $form->field($model, 'deal_user_id') ?>

    <?php // echo $form->field($model, 'contract_code') ?>

    <?php // echo $form->field($model, 'reject_reason') ?>

    <?php // echo $form->field($model, 'remarks') ?>

    <?php // echo $form->field($model, 'entrust_code') ?>

    <?php // echo $form->field($model, 'agreed_matters') ?>

    <?php // echo $form->field($model, 'if_deleted') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'room_number') ?>

    <?php // echo $form->field($model, 'living_room') ?>

    <?php // echo $form->field($model, 'galley_meter_number') ?>

    <?php // echo $form->field($model, 'galley_base_meter_number') ?>

    <?php // echo $form->field($model, 'electric_meter_number') ?>

    <?php // echo $form->field($model, 'electric_base_meter_number') ?>

    <?php // echo $form->field($model, 'gas_meter_number') ?>

    <?php // echo $form->field($model, 'gas_base_meter_number') ?>

    <?php // echo $form->field($model, 'toilet_meter_number') ?>

    <?php // echo $form->field($model, 'toilet_base_meter_number') ?>

    <?php // echo $form->field($model, 'price_date') ?>

    <?php // echo $form->field($model, 'client_profession') ?>

    <?php // echo $form->field($model, 'client_code') ?>

    <?php // echo $form->field($model, 'client_id') ?>

    <?php // echo $form->field($model, 'client_name') ?>

    <?php // echo $form->field($model, 'client_gender') ?>

    <?php // echo $form->field($model, 'client_id_card') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'block_id') ?>

    <?php // echo $form->field($model, 'block') ?>

    <?php // echo $form->field($model, 'unit_name') ?>

    <?php // echo $form->field($model, 'break_memo') ?>

    <?php // echo $form->field($model, 'next_rent_start_date') ?>

    <?php // echo $form->field($model, 'rented_money') ?>

    <?php // echo $form->field($model, 'deposit_month') ?>

    <?php // echo $form->field($model, 'price_month') ?>

    <?php // echo $form->field($model, 'ledger_code') ?>

    <?php // echo $form->field($model, 'property_address') ?>

    <?php // echo $form->field($model, 'bank_department_id') ?>

    <?php // echo $form->field($model, 'bank_username') ?>

    <?php // echo $form->field($model, 'bank_user_id') ?>

    <?php // echo $form->field($model, 'old_id') ?>

    <?php // echo $form->field($model, 'client_tel') ?>

    <?php // echo $form->field($model, 'if_renew') ?>

    <?php // echo $form->field($model, 'status_time') ?>

    <?php // echo $form->field($model, 'room_now') ?>

    <?php // echo $form->field($model, 'if_loan') ?>

    <?php // echo $form->field($model, 'if_apartment') ?>

    <?php // echo $form->field($model, 'out_bank') ?>

    <?php // echo $form->field($model, 'bank_address') ?>

    <?php // echo $form->field($model, 'if_out_deal') ?>

    <?php // echo $form->field($model, 'loan_company') ?>

    <?php // echo $form->field($model, 'loan_rate') ?>

    <?php // echo $form->field($model, 'loan_total') ?>

    <?php // echo $form->field($model, 'price_end_time') ?>

    <?php // echo $form->field($model, 'deal_mode') ?>

    <?php // echo $form->field($model, 'balcony') ?>

    <?php // echo $form->field($model, 'kitchen') ?>

    <?php // echo $form->field($model, 'living_room_now') ?>

    <?php // echo $form->field($model, 'washroom_now') ?>

    <?php // echo $form->field($model, 'balcony_now') ?>

    <?php // echo $form->field($model, 'kitchen_now') ?>

    <?php // echo $form->field($model, 'decoration') ?>

    <?php // echo $form->field($model, 'free_days') ?>

    <?php // echo $form->field($model, 'decoration_distributed_years') ?>

    <?php // echo $form->field($model, 'if_interest') ?>

    <?php // echo $form->field($model, 'interest') ?>

    <?php // echo $form->field($model, 'set_key_time') ?>

    <?php // echo $form->field($model, 'deal_period') ?>

    <?php // echo $form->field($model, 'set_rent_time') ?>

    <?php // echo $form->field($model, 'already_renew') ?>

    <?php // echo $form->field($model, 'renew_contract_id') ?>

    <?php // echo $form->field($model, 'client_public') ?>

    <?php // echo $form->field($model, 'empty_day_num') ?>

    <?php // echo $form->field($model, 'rent_key_empty_day_num') ?>

    <?php // echo $form->field($model, 'is_deposit_in_yeji') ?>

    <?php // echo $form->field($model, 'preferential_activity') ?>

    <?php // echo $form->field($model, 'room_empty_days') ?>

    <?php // echo $form->field($model, 'room_empty_start_time') ?>

    <?php // echo $form->field($model, 'charter_item') ?>

    <?php // echo $form->field($model, 'charter_broadband') ?>

    <?php // echo $form->field($model, 'charter_water') ?>

    <?php // echo $form->field($model, 'charter_gas') ?>

    <?php // echo $form->field($model, 'property') ?>

    <?php // echo $form->field($model, 'center_id') ?>

    <?php // echo $form->field($model, 'pre_days') ?>

    <?php // echo $form->field($model, 'heat_type') ?>

    <?php // echo $form->field($model, 'property_memo') ?>

    <?php // echo $form->field($model, 'heat_memo') ?>

    <?php // echo $form->field($model, 'old_client_ids') ?>

    <?php // echo $form->field($model, 'if_rent_refund') ?>

    <?php // echo $form->field($model, 'break_reason') ?>

    <?php // echo $form->field($model, 'if_short') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
