<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $title
 * @property string $imageUrl
 * @property string $creationDate
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['creationDate'], 'safe'],
            [['title', 'imageUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'imageUrl' => 'Image Url',
            'creationDate' => 'Creation Date',
        ];
    }

    public function getFormatedDate()
    {
		return date( "D M j, Y",strtotime( $this->creationDate ) );
    }
}
