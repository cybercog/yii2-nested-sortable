<?php

/**
 * @link http://www.datacentrix.org/
 * @package yii2-nested-sortable
 * @copyright Copyright (c) 2015 Data Centrix Ltd
 * @license GPL-3.0
 * @see LICENSE
 * @version 1.0
 */

namespace datacentrix\sortable;
use yii\web\AssetBundle;


/**
 * Asset bundle for NestedSortable Widget
 *
 * @author Stanimir Stoyanov <stanimir@datacentrix.org>
 * @since 1.0
 */
class NestedSortableAsset extends AssetBundle
{
    public $basePath = '@vendor/datacentrix/yii2-nested-sortable/assets';
    public $js = [
        'nested-sortable.js'
    ];
    public $depends = [
        'frontend\assets\AppAsset',
    ];
}
