<?php

namespace dcwq\extracms;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{

    /** @var array Model's map */
    private $_modelMap = [
        'CmsModel' => 'yii2mod\cms\models\CmsModel'
    ];

}
