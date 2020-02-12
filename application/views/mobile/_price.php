<div class="price">
	<h2><?php echo HTML::chars('Цены на абонементы')?></h2>
	<table>
		<?php foreach ($prices as $p){?>
			<tr>
    			<td><?php echo $p->category?></td>
    			<td><?php echo $p->count?></td>
    			<td><?php echo $p->price?></td>
  			</tr>
		<?php }?>
	</table>
</div>