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

?>
<div class="company">
	<h3><a href="<?=get_post_meta(get_the_ID(), 'website', true);?>"><?php the_title(); ?></a></h3>
	<div class="meta foundation">Founded on <?=get_post_meta(get_the_ID(), 'founded', true);?></div>
	<?the_excerpt();?>
	<div class="meta website"><a href="<?=get_post_meta(get_the_ID(), 'website', true);?>"><?=get_post_meta(get_the_ID(), 'website', true);?></a></div>
	<div class="meta twitter"><a href="http://twitter.com/<?=get_post_meta(get_the_ID(), 'twitter', true);?>">@<?=get_post_meta(get_the_ID(), 'twitter', true);?></a></div>
</div><!-- .excerpt -->