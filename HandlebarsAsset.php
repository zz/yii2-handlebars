<?
namespace x1\handlebars;

class HandlebarsAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/bower/handlebars';
	
	public $js         = [
		'handlebars.js' => 'handlebars.min.js',
	];

	public $css        = [
	];

	public $depends = [
	];
}
?>