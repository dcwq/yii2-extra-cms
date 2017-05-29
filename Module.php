<?php

namespace dcwq\extracms;

/**
 * Class Module
 *
 * @property array $modelMap
 *
 * @author Dominik Cwiklik <dcwiklik@gmail.com>
 */
class Module extends \yii\base\Module
{
    /** @var array Model map */
    public $modelMap = [];

    /**
     * @var string the namespace that controller classes are in
     */
    public $controllerNamespace = 'dcwq\extracms\controllers';

    public $cmsModelClass = '\yii2mod\cms\models\CmsModel';
}
