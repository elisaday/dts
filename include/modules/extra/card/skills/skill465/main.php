<?php

namespace skill465
{
	function init() 
	{
		define('MOD_SKILL465_INFO','club;unique;');
		eval(import_module('clubbase'));
		$clubskillname[465] = '圣火';
	}
	
	function acquire465(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function lost465(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
	}
	
	function check_unlocked465(&$pa)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		return 1;
	}
	
	function calculate_ex_single_dmg_multiple(&$pa, &$pd, $active, $key)
	{
		if (eval(__MAGIC__)) return $___RET_VALUE;
		if (!\skillbase\skill_query(465,$pa) || ($key!='f' && $key!='u')) 
		{
			return $chprocess($pa, $pd, $active, $key);
		} else {
			eval(import_module('logger'));
			$pn = $active ? '你' : $pa['name'];
			$log .= '这不是火焰，这是「圣火」！'.$pn.'造成的伤害增加了50%！<br>';
			return $chprocess($pa, $pd, $active, $key)*1.5;
		}
	}	
}

?>
