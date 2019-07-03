<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property int $id
 * @property string $result
 * @property string $postdate
 * @property int $province
 * @property int $date
 */
class DungChung extends \yii\db\ActiveRecord
{
//    public const MIEN_TRUNG = 2;
    public const QuangNam = 3;
    public const QuangNgai = 4;
    public static function SLUG_ARRAY($mt)
    {
        return [
            self::QuangNam => 'quang-nam',
            self::QuangNgai => 'quang-ngai',
        ];
    }
}
