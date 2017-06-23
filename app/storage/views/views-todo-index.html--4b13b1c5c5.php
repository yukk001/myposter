<?php
// source: /var/www/html/myposter/app/views/todo/index.html

use Latte\Runtime as LR;

class Template4b13b1c5c5 extends Latte\Runtime\Template
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
<table>
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
