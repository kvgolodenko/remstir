<div class="tabels">
	<table>
		<?php foreach ($tabels as $t){?>
			<tr>
    			<td><?php echo $t->category?></td>
    			<td><?php echo $t->monday?></td>
    			<td><?php echo $t->tuesday?></td>
    			<td><?php echo $t->wednesday?></td>
    			<td><?php echo $t->thirthday?></td>
    			<td><?php echo $t->friday?></td>
    			<td><?php echo $t->saturday?></td>
    			<td><?php echo $t->sunday?></td>
  			</tr>
		<?php }?>
	</table>
</div>