<?php
/**
 *  Template name: Event calendar
 */

class PageCalendar extends \DustPress\Model {

	public function Events() {
    $date_now = date('Y-m-d H:i:s');

    $args = array(
      'posts_per_page'	=> -1,
    	'post_type'			=> 'tapahtumat',
      'meta_query' 		=> array(
    		array(
    	        'key'			=> 'paattymisaika',
    	        'compare'		=> '>=',
    	        'value'			=> $date_now,
    	        'type'			=> 'DATETIME'
  	    )
      ),
    	'order'				=> 'ASC',
    	'orderby'			=> 'meta_value',
    	'meta_key'			=> 'alkamisaika',
    	'meta_type'			=> 'DATETIME'
    );

		return \DustPress\Query::get_acf_posts($args);
	}

  public function EventsAll() {

    $args = array(
      'posts_per_page'	=> -1,
      'post_type'			  => 'tapahtumat',
      'order'				    => 'DESC',
      'orderby'			    => 'meta_value',
      'meta_key'			  => 'alkamisaika',
      'meta_type'			  => 'DATETIME'
    );

    return \DustPress\Query::get_acf_posts($args);
  }

}
