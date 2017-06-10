<?php
// source: /var/www/html/myposter/app/views/todo/index.latte

use Latte\Runtime as LR;

class Templated34b0f1366 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<html>
<head>
    <title>详情页</title>
</head>
<body>
<table>11
<?php
		$iterations = 0;
		foreach ($todos as $item) {
			?>        <tr id="<?php echo LR\Filters::escapeHtmlAttr($item->id) /* line 8 */ ?>"><td><?php echo LR\Filters::escapeHtmlText($item->id) /* line 8 */ ?></td></tr>
<?php
			$iterations++;
		}
?>
</table>

</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 7');
		
	}

}
