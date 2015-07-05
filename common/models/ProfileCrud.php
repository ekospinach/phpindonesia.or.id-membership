<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\db\ActiveRecord;
use common\models\Profile;
use yii\db\Query;

class ProfileCrud extends Profile
{
    public function behaviors()
    {
         return [
            'phpid\behaviors\AutoTimestamp',
            'phpid\behaviors\AutoUser',
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'fullname' => 'Fullname',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'province' => 'Province',
            'city' => 'City',
            'district' => 'District',
            'subdistrict' => 'Subdistrict',
            'postcode' => 'Postcode',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By'
        ];
    }
}