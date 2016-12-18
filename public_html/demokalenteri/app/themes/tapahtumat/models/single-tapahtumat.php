<?php
class SingleTapahtumat extends \DustPress\Model {

	public function Event() {
		return \DustPress\Query::get_acf_post(  get_the_ID() );
	}

}
