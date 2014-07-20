<?php
/**
 * @link      https://github.com/SDKiller/yii2-imperavi-redactor
 * @package   zyx\yii2-imperavi-redactor
 * @copyright Copyright (c) 2014 Serge Postrash, Copyright (c) 2010-2014 by YiiExt contributors
 * @license   BSD 3-Clause, see LICENSE.md
 */

namespace zyx\widgets;

use Yii;
use yii\web\AssetBundle;


class RedactorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/zyx/yii2-imperavi-redactor/assets';

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'redactor.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'redactor.css',
    ];

    /**
     * @inheritdoc
     */
    public $jsOptions = [];

    /**
     * @inheritdoc
     */
    public $cssOptions = [];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (YII_DEBUG) {
            $this->js[0] = 'redactor.js';
        }
    }

}
