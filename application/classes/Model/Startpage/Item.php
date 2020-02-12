<?php
class Model_Startpage_Item extends ORM {
	
	public function get_url() {
		return URL::site('/item/'.$this->url_title, true);
	}
}