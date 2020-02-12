<?php
use Zend\Json\Expr;
?>
<main id="gallery">
	<div class="content">
	
<?php 
	$k=1;
foreach($albums as $a){ 
	$i = $a->id;
	$foto = Model_Gallery_Image::factory()
		->where('album_id','=',$i)
		->cached()
		->order_by('id','DESC')
		->limit(5)
		->find_all();
	
	$foto_count = Model_Gallery_Image::factory()
		->where('album_id','=',$i)
		->cached()
		->count_all();
	
	echo View::factory('public/_album_teaser',array('a'=>$a, 'p' => $foto,'k' =>$k, 'f'=>$foto_count));
	$k++;
}?>
	</div>
</main>