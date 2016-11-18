<?php
// no direct access
defined('_JEXEC') or die;

function cuter($text, $tag1, $tag2)
{
$pos1 = strpos($text, $tag1) + strlen($tag1);
$pos2 = strpos($text, $tag2);
$cuted = substr($text, $pos1, $pos2-$pos1);
return $cuted;
}

//echo'<pre>';print_r($basseins,0);echo'</pre>';
//echo'<pre>';print_r($townsFrom,0);echo'</pre>';
//echo'<pre>';print_r($townsTo,0);echo'</pre>';

?>


<div id="calc_dostavki">
	<table border="0">
		<tr>
			<td>
				<p>
					<span>Из города:</span><br />
					<span class="hidden" id="town_from"></span>
					<select name="townFrom">
						<?
							foreach($townsFrom as $k=>$t)	{
								echo'<option value="'.$k.'">'.$t.'</option>';
							}
						?>
					</select>
				</p>
			
			</td>
			<td>
				<p id="basseins">
					<span>Бассейн:</span><br />
					<span class="hidden" id="bassein"></span>
					<select name="Bassein">
						<?
							foreach($basseins as $k=>$t)	{
								echo'<option value="'.$t->id.'">'.$t->title.'</option>';
							}
						?>
					</select>
				</p>
			</td>
		</tr>
		<tr>
			<td>
				<p>
					<span>В город:</span><br />
					<span class="hidden" id="town_to"></span>
					<select name="townTo">
						<?
							foreach($townsTo as $k=>$t)	{
								echo'<option value="'.$k.'">'.$t['name'].'</option>';
							}
						?>
					</select>
				</p>
			</td>
			<td class="text">
				<p>Тариф: <b><span id="tarif">0.9</span>$ 1км</b></p>
				<p>Время доставки: <b>1-2 дня</b>.</p>
				<p>Сумма доставки: <b><span id="summa_dostavki"></span></b></p>
			</td>
		</tr>
	</table>
	
	<?
			foreach($townsFrom as $kf=>$tf)	{
				foreach($townsTo as $kt=>$tt)	{
					echo '<input type="hidden" name="km_'.$kf.'_'.$kt.'" value="'.$tt[$kf].'" />';
				}
			}
		
	?>
	<button id="print_res">Печать</button>
	
</div>