<?php
/**
 * @link https://github.com/borodulin/yii2-knob
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-knob/blob/master/LICENSE
 */

namespace conquer\knob;

class KnobAsset extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/jquery-knob';
	
	public $js = [
		'js\jquery.knob.js ',
	];
	
	public $depends = [
		'yii\web\JqueryAsset',
		'conquer\excanvas\ExcanvasAsset',
	];
}