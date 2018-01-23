<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DragonBankDeal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dragon-bank-deal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_id')->textInput() ?>

    <?= $form->field($model, 'house_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'community')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'community_id')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'room_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'build_area')->textInput() ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'bathrooms')->textInput() ?>

    <?= $form->field($model, 'floor_code')->textInput() ?>

    <?= $form->field($model, 'top_floor')->textInput() ?>

    <?= $form->field($model, 'building_age')->textInput() ?>

    <?= $form->field($model, 'purpose')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deal_date')->textInput() ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'end_date')->textInput() ?>

    <?= $form->field($model, 'price_way')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_price')->textInput() ?>

    <?= $form->field($model, 'payed_price')->textInput() ?>

    <?= $form->field($model, 'deal_price')->textInput() ?>

    <?= $form->field($model, 'deposit')->textInput() ?>

    <?= $form->field($model, 'payee_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payee_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payee_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'input_department_id')->textInput() ?>

    <?= $form->field($model, 'input_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'input_user_id')->textInput() ?>

    <?= $form->field($model, 'deal_department_id')->textInput() ?>

    <?= $form->field($model, 'deal_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deal_user_id')->textInput() ?>

    <?= $form->field($model, 'contract_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reject_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'entrust_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agreed_matters')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'if_deleted')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'room_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_room')->textInput() ?>

    <?= $form->field($model, 'galley_meter_number')->textInput() ?>

    <?= $form->field($model, 'galley_base_meter_number')->textInput() ?>

    <?= $form->field($model, 'electric_meter_number')->textInput() ?>

    <?= $form->field($model, 'electric_base_meter_number')->textInput() ?>

    <?= $form->field($model, 'gas_meter_number')->textInput() ?>

    <?= $form->field($model, 'gas_base_meter_number')->textInput() ?>

    <?= $form->field($model, 'toilet_meter_number')->textInput() ?>

    <?= $form->field($model, 'toilet_base_meter_number')->textInput() ?>

    <?= $form->field($model, 'price_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_id')->textInput() ?>

    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_id_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'block_id')->textInput() ?>

    <?= $form->field($model, 'block')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'break_memo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'next_rent_start_date')->textInput() ?>

    <?= $form->field($model, 'rented_money')->textInput() ?>

    <?= $form->field($model, 'deposit_month')->textInput() ?>

    <?= $form->field($model, 'price_month')->textInput() ?>

    <?= $form->field($model, 'ledger_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'property_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_department_id')->textInput() ?>

    <?= $form->field($model, 'bank_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bank_user_id')->textInput() ?>

    <?= $form->field($model, 'old_id')->textInput() ?>

    <?= $form->field($model, 'client_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'if_renew')->textInput() ?>

    <?= $form->field($model, 'status_time')->textInput() ?>

    <?= $form->field($model, 'room_now')->textInput() ?>

    <?= $form->field($model, 'if_loan')->textInput() ?>

    <?= $form->field($model, 'if_apartment')->textInput() ?>

    <?= $form->field($model, 'out_bank')->textInput() ?>

    <?= $form->field($model, 'bank_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'if_out_deal')->textInput() ?>

    <?= $form->field($model, 'loan_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loan_rate')->textInput() ?>

    <?= $form->field($model, 'loan_total')->textInput() ?>

    <?= $form->field($model, 'price_end_time')->textInput() ?>

    <?= $form->field($model, 'deal_mode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balcony')->textInput() ?>

    <?= $form->field($model, 'kitchen')->textInput() ?>

    <?= $form->field($model, 'living_room_now')->textInput() ?>

    <?= $form->field($model, 'washroom_now')->textInput() ?>

    <?= $form->field($model, 'balcony_now')->textInput() ?>

    <?= $form->field($model, 'kitchen_now')->textInput() ?>

    <?= $form->field($model, 'decoration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'free_days')->textInput() ?>

    <?= $form->field($model, 'decoration_distributed_years')->textInput() ?>

    <?= $form->field($model, 'if_interest')->textInput() ?>

    <?= $form->field($model, 'interest')->textInput() ?>

    <?= $form->field($model, 'set_key_time')->textInput() ?>

    <?= $form->field($model, 'deal_period')->textInput() ?>

    <?= $form->field($model, 'set_rent_time')->textInput() ?>

    <?= $form->field($model, 'already_renew')->textInput() ?>

    <?= $form->field($model, 'renew_contract_id')->textInput() ?>

    <?= $form->field($model, 'client_public')->textInput() ?>

    <?= $form->field($model, 'empty_day_num')->textInput() ?>

    <?= $form->field($model, 'rent_key_empty_day_num')->textInput() ?>

    <?= $form->field($model, 'is_deposit_in_yeji')->textInput() ?>

    <?= $form->field($model, 'preferential_activity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_empty_days')->textInput() ?>

    <?= $form->field($model, 'room_empty_start_time')->textInput() ?>

    <?= $form->field($model, 'charter_item')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'charter_broadband')->textInput() ?>

    <?= $form->field($model, 'charter_water')->textInput() ?>

    <?= $form->field($model, 'charter_gas')->textInput() ?>

    <?= $form->field($model, 'property')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'center_id')->textInput() ?>

    <?= $form->field($model, 'pre_days')->textInput() ?>

    <?= $form->field($model, 'heat_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'property_memo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'heat_memo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_client_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'if_rent_refund')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'break_reason')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'if_short')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
