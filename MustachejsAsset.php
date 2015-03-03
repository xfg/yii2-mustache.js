<?php
/**
 * @link https://github.com/xfg/yii2-mustache.js
 * @license https://github.com/xfg/yii2-mustache.js/blob/master/README.md
 */

namespace xfg\mustachejs;

use yii\web\AssetBundle;

/**
 * Asset bundle for the mustache minimal templates for javascript.
 *
 * @author Timofey Suchkov <timofey.web@gmail.com>
 */
class MustachejsAsset extends AssetBundle
{
    public $sourcePath = '@bower/mustache.js';
    public $js = [
        'mustache.js',
    ];
}
