<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "{{%mst_users}}".
 *
 * @property integer $id
 * @property integer $mst_institution_id
 * @property string $user_type
 * @property integer $userref_id
 * @property string $username
 * @property string $password
 * @property string $displayname
 * @property integer $is_common_user
 * @property integer $status
 * @property integer $is_deleted
 * @property string $created_date
 * @property integer $created_by
 * @property string $modified_date
 * @property integer $modified_by
 * @property string $usr_last_access_ip
 * @property string $usr_last_access
 * @property string $user_email_id
 * @property string $reset_password_token
 * @property string $token_created_at
 * @property string $usr_status
 * @property integer $first_visited
 * @property string $second_password
 * @property string $email_confirm_token
 * @property integer $is_email_confirm
 * @property string $tmp_password
 * @property integer $is_account_activated
 * @property integer $is_mail_avail
 * @property integer $login_attempt_count
 * @property integer $is_account_locked
 * @property integer $ext_no
 */
class MstUsers extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mst_users}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mst_institution_id', 'userref_id', 'is_common_user', 'status', 'is_deleted', 'created_by', 'modified_by', 'first_visited', 'is_email_confirm', 'is_account_activated', 'is_mail_avail', 'login_attempt_count', 'is_account_locked', 'ext_no'], 'integer'],
            [['created_date', 'modified_date', 'usr_last_access', 'token_created_at'], 'safe'],
            [['reset_password_token', 'email_confirm_token'], 'string'],
            [['user_type', 'username', 'password', 'displayname', 'user_email_id', 'second_password', 'tmp_password'], 'string', 'max' => 150],
            [['usr_last_access_ip'], 'string', 'max' => 100],
            [['usr_status'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_institution_id' => 'Mst Institution ID',
            'user_type' => 'User Type',
            'userref_id' => 'Userref ID',
            'username' => 'Username',
            'password' => 'Password',
            'displayname' => 'Displayname',
            'is_common_user' => 'Is Common User',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_date' => 'Modified Date',
            'modified_by' => 'Modified By',
            'usr_last_access_ip' => 'Usr Last Access Ip',
            'usr_last_access' => 'Usr Last Access',
            'user_email_id' => 'User Email ID',
            'reset_password_token' => 'Reset Password Token',
            'token_created_at' => 'Token Created At',
            'usr_status' => 'Usr Status',
            'first_visited' => 'First Visited',
            'second_password' => 'Second Password',
            'email_confirm_token' => 'Email Confirm Token',
            'is_email_confirm' => 'Is Email Confirm',
            'tmp_password' => 'Tmp Password',
            'is_account_activated' => 'Is Account Activated',
            'is_mail_avail' => 'Is Mail Avail',
            'login_attempt_count' => 'Login Attempt Count',
            'is_account_locked' => 'Is Account Locked',
            'ext_no' => 'Ext No',
        ];
    }
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['lower(username)'=>strtolower($username)]);
    }


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
//        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->status;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        //return Yii::$app->security->validatePassword($password, $this->password);
        return (md5($password)=== $this->password);
    }

}
