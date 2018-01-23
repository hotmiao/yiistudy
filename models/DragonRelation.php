<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dragon_relation".
 *
 * @property int $id
 * @property int $my_dept_id
 * @property int $user_id
 *
 * @property DragonDepartment $myDept
 * @property DragonUser $user
 */
class DragonRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dragon_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'my_dept_id', 'user_id'], 'integer'],
            [['id'], 'unique'],
            [['my_dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => DragonDepartment::className(), 'targetAttribute' => ['my_dept_id' => 'dept_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => DragonUser::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'my_dept_id' => 'My Dept ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMyDept()
    {
        return $this->hasOne(DragonDepartment::className(), ['dept_id' => 'my_dept_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(DragonUser::className(), ['id' => 'user_id']);
    }
}
