<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

$url = get_post_meta(get_the_ID(), 'syndication_source_uri', true);
if(substr($url, -1) == '/') {
    $url = substr($url, 0, -1);
}

?>
<div class="posts">
	<img src="<?=$url?>/favicon.ico" class="feed-favicon">
	<span class="feed-url"><a href="<?=$url?>"><?=$url?></a></span>
	<a href="<?php the_permalink() ?>" class="feed-title"><?php the_title() ?></a>
	<div class="feed-excerpt"><?= wp_trim_excerpt() ?></div>

<?php

// the_content();
// wp_link_pages();

// the_category(', ');

// the_tags(__('Tagged with ', 'carrington-jam'), ', ', '');

// comments_popup_link(__('No comments', 'carrington-jam'), __('1 comment', 'carrington-jam'), __('% comments', 'carrington-jam'));

// edit_post_link(__('Edit This', 'carrington-jam'), '', '');

?>

</div>