<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dragon_department".
 *
 * @property int $dept_id
 * @property string $dept_name
 * @property int $pid
 * @property int $company_id
 * @property string $address
 * @property string $tel
 * @property string $email
 * @property string $dept_type
 * @property int $if_deleted
 * @property int $create_time
 * @property int $end_time
 * @property int $update_time
 * @property int $manager_user_id
 * @property string $manager_user_name
 * @property string $inter_dept_authority
 * @property int $center_id
 * @property string $center_name
 * @property string $is_recruit_department
 * @property int $incubation_user_id
 * @property string $incubation_username
 * @property int $indirect_incubation_user_id
 * @property string $indirect_incubation_username
 * @property int $administrator_user_id
 * @property string $administrator_username
 *
 * @property DragonRelation[] $dragonRelations
 */
class DragonDepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dragon_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'company_id', 'if_deleted', 'create_time', 'end_time', 'update_time', 'manager_user_id', 'center_id', 'incubation_user_id', 'indirect_incubation_user_id', 'administrator_user_id'], 'integer'],
            [['dept_name', 'center_name'], 'string', 'max' => 100],
            [['address', 'incubation_username', 'indirect_incubation_username', 'administrator_username'], 'string', 'max' => 500],
            [['tel', 'email', 'manager_user_name', 'is_recruit_department'], 'string', 'max' => 50],
            [['dept_type'], 'string', 'max' => 20],
            [['inter_dept_authority'], 'string', 'max' => 2000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => 'Dept ID',
            'dept_name' => 'Dept Name',
            'pid' => 'Pid',
            'company_id' => 'Company ID',
            'address' => 'Address',
            'tel' => 'Tel',
            'email' => 'Email',
            'dept_type' => 'Dept Type',
            'if_deleted' => 'If Deleted',
            'create_time' => 'Create Time',
            'end_time' => 'End Time',
            'update_time' => 'Update Time',
            'manager_user_id' => 'Manager User ID',
            'manager_user_name' => 'Manager User Name',
            'inter_dept_authority' => 'Inter Dept Authority',
            'center_id' => 'Center ID',
            'center_name' => 'Center Name',
            'is_recruit_department' => 'Is Recruit Department',
            'incubation_user_id' => 'Incubation User ID',
            'incubation_username' => 'Incubation Username',
            'indirect_incubation_user_id' => 'Indirect Incubation User ID',
            'indirect_incubation_username' => 'Indirect Incubation Username',
            'administrator_user_id' => 'Administrator User ID',
            'administrator_username' => 'Administrator Username',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDragonRelations()
    {
        return $this->hasMany(DragonRelation::className(), ['my_dept_id' => 'dept_id']);
    }
}
