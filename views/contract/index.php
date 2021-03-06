<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BankDealSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dragon Bank Deals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dragon-bank-deal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dragon Bank Deal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'document_id',
            'status',
            'type',
            'house_id',
            'house_code',
            'inputuser.username',
            'inputdept.dept_name',
            //'room_id',
            //'district_id',
            //'region',
            //'region_id',
            //'community',
            //'community_id',
            //'unit_id',
            //'room_code',
            //'direction',
            //'build_area',
            //'bedrooms',
            //'bathrooms',
            //'floor_code',
            //'top_floor',
            //'building_age',
            //'purpose',
            //'deal_date',
            //'start_date',
            //'end_date',
            //'price_way',
            //'contract_price',
            //'payed_price',
            //'deal_price',
            //'deposit',
            //'payee_bank',
            //'payee_name',
            //'payee_account',
            //'input_department_id',
            //'input_username',
            //'input_user_id',
            //'deal_department_id',
            //'deal_username',
            //'deal_user_id',
            //'contract_code',
            //'reject_reason',
            //'remarks',
            //'entrust_code',
            //'agreed_matters',
            //'if_deleted',
            //'company_id',
            //'create_time:datetime',
            //'update_time:datetime',
            //'room_number',
            //'living_room',
            //'galley_meter_number',
            //'galley_base_meter_number',
            //'electric_meter_number',
            //'electric_base_meter_number',
            //'gas_meter_number',
            //'gas_base_meter_number',
            //'toilet_meter_number',
            //'toilet_base_meter_number',
            //'price_date',
            //'client_profession',
            //'client_code',
            //'client_id',
            //'client_name',
            //'client_gender',
            //'client_id_card',
            //'district',
            //'block_id',
            //'block',
            //'unit_name',
            //'break_memo',
            //'next_rent_start_date',
            //'rented_money',
            //'deposit_month',
            //'price_month',
            //'ledger_code',
            //'property_address',
            //'bank_department_id',
            //'bank_username',
            //'bank_user_id',
            //'old_id',
            //'client_tel',
            //'if_renew',
            //'status_time:datetime',
            //'room_now',
            //'if_loan',
            //'if_apartment',
            //'out_bank',
            //'bank_address',
            //'if_out_deal',
            //'loan_company',
            //'loan_rate',
            //'loan_total',
            //'price_end_time:datetime',
            //'deal_mode',
            //'balcony',
            //'kitchen',
            //'living_room_now',
            //'washroom_now',
            //'balcony_now',
            //'kitchen_now',
            //'decoration',
            //'free_days',
            //'decoration_distributed_years',
            //'if_interest',
            //'interest',
            //'set_key_time:datetime',
            //'deal_period',
            //'set_rent_time:datetime',
            //'already_renew',
            //'renew_contract_id',
            //'client_public',
            //'empty_day_num',
            //'rent_key_empty_day_num',
            //'is_deposit_in_yeji',
            //'preferential_activity',
            //'room_empty_days',
            //'room_empty_start_time:datetime',
            //'charter_item',
            //'charter_broadband',
            //'charter_water',
            //'charter_gas',
            //'property',
            //'center_id',
            //'pre_days',
            //'heat_type',
            //'property_memo',
            //'heat_memo',
            //'old_client_ids',
            //'if_rent_refund',
            //'break_reason',
            //'if_short',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
