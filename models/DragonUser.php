<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "dragon_user".
 *
 * @property int $id
 * @property string $username
 * @property int $department_id
 * @property string $tel
 * @property string $pwd
 * @property int $company_id
 * @property string $gender
 * @property int $birthday
 * @property string $id_card_number
 * @property string $user_type
 * @property string $user_duty
 * @property string $user_code
 * @property string $email
 * @property int $enroll_date
 * @property int $reborn_date
 * @property int $new_enroll_date
 * @property int $resign_date
 * @property int $status
 * @property int $create_time
 * @property int $update_time
 * @property int $if_deleted
 * @property string $pri
 * @property int $role_id
 * @property string $master
 * @property int $master_id
 * @property int $account_type
 * @property string $bank_card_name
 * @property string $bank_card_num
 * @property int $bank_change_date
 * @property int $ascription_department_id
 * @property int $rank_id
 * @property int $user_integral
 * @property int $interview_date
 * @property int $internship_date
 * @property int $train_date
 * @property string $sign_url
 * @property int $teacher_id
 * @property string $teacher_name
 * @property int $manager_entry_user_id
 * @property int $manager_quit_user_id
 * @property string $maintainer
 * @property int $maintainer_id
 * @property int $functional_rank_id
 * @property int $group_user_id
 * @property int $restrict_login
 */
class DragonUser extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dragon_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id', 'company_id', 'birthday', 'enroll_date', 'reborn_date', 'new_enroll_date', 'resign_date', 'status', 'create_time', 'update_time', 'if_deleted', 'role_id', 'master_id', 'account_type', 'bank_change_date', 'ascription_department_id', 'rank_id', 'user_integral', 'interview_date', 'internship_date', 'train_date', 'teacher_id', 'manager_entry_user_id', 'manager_quit_user_id', 'maintainer_id', 'functional_rank_id', 'group_user_id', 'restrict_login'], 'integer'],
            [['pri'], 'string'],
            [['username', 'gender', 'user_type', 'user_duty', 'user_code', 'email', 'bank_card_num'], 'string', 'max' => 50],
            [['tel', 'pwd', 'master', 'teacher_name', 'maintainer'], 'string', 'max' => 100],
            [['id_card_number'], 'string', 'max' => 20],
            [['bank_card_name'], 'string', 'max' => 200],
            [['sign_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'department_id' => 'Department ID',
            'tel' => 'Tel',
            'pwd' => 'Pwd',
            'company_id' => 'Company ID',
            'gender' => 'Gender',
            'birthday' => 'Birthday',
            'id_card_number' => 'Id Card Number',
            'user_type' => 'User Type',
            'user_duty' => 'User Duty',
            'user_code' => 'User Code',
            'email' => 'Email',
            'enroll_date' => 'Enroll Date',
            'reborn_date' => 'Reborn Date',
            'new_enroll_date' => 'New Enroll Date',
            'resign_date' => 'Resign Date',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'if_deleted' => 'If Deleted',
            'pri' => 'Pri',
            'role_id' => 'Role ID',
            'master' => 'Master',
            'master_id' => 'Master ID',
            'account_type' => 'Account Type',
            'bank_card_name' => 'Bank Card Name',
            'bank_card_num' => 'Bank Card Num',
            'bank_change_date' => 'Bank Change Date',
            'ascription_department_id' => 'Ascription Department ID',
            'rank_id' => 'Rank ID',
            'user_integral' => 'User Integral',
            'interview_date' => 'Interview Date',
            'internship_date' => 'Internship Date',
            'train_date' => 'Train Date',
            'sign_url' => 'Sign Url',
            'teacher_id' => 'Teacher ID',
            'teacher_name' => 'Teacher Name',
            'manager_entry_user_id' => 'Manager Entry User ID',
            'manager_quit_user_id' => 'Manager Quit User ID',
            'maintainer' => 'Maintainer',
            'maintainer_id' => 'Maintainer ID',
            'functional_rank_id' => 'Functional Rank ID',
            'group_user_id' => 'Group User ID',
            'restrict_login' => 'Restrict Login',
        ];
    }

    /**
     * 根据给到的ID查询身份。
     *
     * @param string|integer $id 被查询的ID
     * @return IdentityInterface|null 通过ID匹配到的身份对象
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * 根据 token 查询身份。
     *
     * @param string $token 被查询的 token
     * @return IdentityInterface|null 通过 token 得到的身份对象
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string 当前用户ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string 当前用户的（cookie）认证密钥
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByTel($tel)
    {
        return self::find()->where("tel=:tel", [':tel' => $tel])->one();
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->pwd === $password;
    }

}
