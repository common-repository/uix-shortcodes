<?php
$iconName     = isset( $_POST['iconName'] ) ? $_POST[ 'iconName' ] : ''; //default value with ajax
$g            ='class="b social fontawesome"';
$icons        = array(
'<span '.$g.'><i class="fa fa-twitter"></i></span>',
'<span '.$g.'><i class="fa fa-twitter-square"></i></span>',
'<span '.$g.'><i class="fa fa-facebook"></i></span>',
'<span '.$g.'><i class="fa fa-facebook-official"></i></span>',
'<span '.$g.'><i class="fa fa-facebook-square"></i></span>',
'<span '.$g.'><i class="fa fa-flickr"></i></span>',
'<span '.$g.'><i class="fa fa-git"></i></span>',
'<span '.$g.'><i class="fa fa-git-square"></i></span>',
'<span '.$g.'><i class="fa fa-github"></i></span>',
'<span '.$g.'><i class="fa fa-github-alt"></i></span>',
'<span '.$g.'><i class="fa fa-github-square"></i></span>',
'<span '.$g.'><i class="fa fa-gittip"></i></span>',
'<span '.$g.'><i class="fa fa-google"></i></span>',
'<span '.$g.'><i class="fa fa-google-plus"></i></span>',
'<span '.$g.'><i class="fa fa-google-plus-square"></i></span>',
'<span '.$g.'><i class="fa fa-linkedin"></i></span>',
'<span '.$g.'><i class="fa fa-linkedin-square"></i></span>',
'<span '.$g.'><i class="fa fa-pinterest"></i></span>',
'<span '.$g.'><i class="fa fa-pinterest-p"></i></span>',
'<span '.$g.'><i class="fa fa-pinterest-square"></i></span>',
'<span '.$g.'><i class="fa fa-deviantart"></i></span>',
'<span '.$g.'><i class="fa fa-digg"></i></span>',
'<span '.$g.'><i class="fa fa-dribbble"></i></span>',
'<span '.$g.'><i class="fa fa-instagram"></i></span>',
'<span '.$g.'><i class="fa fa-behance"></i></span>',
'<span '.$g.'><i class="fa fa-behance-square"></i></span>',
'<span '.$g.'><i class="fa fa-vimeo"></i></span>',
'<span '.$g.'><i class="fa fa-vimeo-square"></i></span>',
'<span '.$g.'><i class="fa fa-youtube"></i></span>',
'<span '.$g.'><i class="fa fa-youtube-play"></i></span>',
'<span '.$g.'><i class="fa fa-youtube-square"></i></span>',
'<span '.$g.'><i class="fa fa-reddit"></i></span>',
'<span '.$g.'><i class="fa fa-reddit-square"></i></span>',
'<span '.$g.'><i class="fa fa-codepen"></i></span>',
'<span '.$g.'><i class="fa fa-qq"></i></span>',
'<span '.$g.'><i class="fa fa-skype"></i></span>',
'<span '.$g.'><i class="fa fa-tumblr"></i></span>',
'<span '.$g.'><i class="fa fa-tumblr-square"></i></span>',
'<span '.$g.'><i class="fa fa-wechat"></i></span>',
'<span '.$g.'><i class="fa fa-weibo"></i></span>',
'<span '.$g.'><i class="fa fa-weixin"></i></span>',
'<span '.$g.'><i class="fa fa-renren"></i></span>',
'<span '.$g.'><i class="fa fa-adn"></i></span>',
'<span '.$g.'><i class="fa fa-android"></i></span>',
'<span '.$g.'><i class="fa fa-angellist"></i></span>',
'<span '.$g.'><i class="fa fa-apple"></i></span>',
'<span '.$g.'><i class="fa fa-bitbucket"></i></span>',
'<span '.$g.'><i class="fa fa-bitbucket-square"></i></span>',
'<span '.$g.'><i class="fa fa-bitcoin"></i></span>',
'<span '.$g.'><i class="fa fa-btc"></i></span>',
'<span '.$g.'><i class="fa fa-buysellads"></i></span>',
'<span '.$g.'><i class="fa fa-twitch"></i></span>',
'<span '.$g.'><i class="fa fa-connectdevelop"></i></span>',
'<span '.$g.'><i class="fa fa-css3"></i></span>',
'<span '.$g.'><i class="fa fa-dashcube"></i></span>',
'<span '.$g.'><i class="fa fa-delicious"></i></span>',
'<span '.$g.'><i class="fa fa-dropbox"></i></span>',
'<span '.$g.'><i class="fa fa-drupal"></i></span>',
'<span '.$g.'><i class="fa fa-empire"></i></span>',
'<span '.$g.'><i class="fa fa-forumbee"></i></span>',
'<span '.$g.'><i class="fa fa-foursquare"></i></span>',
'<span '.$g.'><i class="fa fa-ge"></i></span>',
'<span '.$g.'><i class="fa fa-gratipay"></i></span>',
'<span '.$g.'><i class="fa fa-hacker-news"></i></span>',
'<span '.$g.'><i class="fa fa-html5"></i></span>',
'<span '.$g.'><i class="fa fa-ioxhost"></i></span>',
'<span '.$g.'><i class="fa fa-joomla"></i></span>',
'<span '.$g.'><i class="fa fa-jsfiddle"></i></span>',
'<span '.$g.'><i class="fa fa-lastfm"></i></span>',
'<span '.$g.'><i class="fa fa-lastfm-square"></i></span>',
'<span '.$g.'><i class="fa fa-leanpub"></i></span>',
'<span '.$g.'><i class="fa fa-linux"></i></span>',
'<span '.$g.'><i class="fa fa-maxcdn"></i></span>',
'<span '.$g.'><i class="fa fa-meanpath"></i></span>',
'<span '.$g.'><i class="fa fa-medium"></i></span>',
'<span '.$g.'><i class="fa fa-openid"></i></span>',
'<span '.$g.'><i class="fa fa-pagelines"></i></span>',
'<span '.$g.'><i class="fa fa-paypal"></i></span>',
'<span '.$g.'><i class="fa fa-pied-piper"></i></span>',
'<span '.$g.'><i class="fa fa-pied-piper-alt"></i></span>',
'<span '.$g.'><i class="fa fa-ra"></i></span>',
'<span '.$g.'><i class="fa fa-rebel"></i></span>',
'<span '.$g.'><i class="fa fa-sellsy"></i></span>',
'<span '.$g.'><i class="fa fa-share-alt"></i></span>',
'<span '.$g.'><i class="fa fa-share-alt-square"></i></span>',
'<span '.$g.'><i class="fa fa-shirtsinbulk"></i></span>',
'<span '.$g.'><i class="fa fa-simplybuilt"></i></span>',
'<span '.$g.'><i class="fa fa-skyatlas"></i></span>',
'<span '.$g.'><i class="fa fa-slack"></i></span>',
'<span '.$g.'><i class="fa fa-slideshare"></i></span>',
'<span '.$g.'><i class="fa fa-soundcloud"></i></span>',
'<span '.$g.'><i class="fa fa-spotify"></i></span>',
'<span '.$g.'><i class="fa fa-stack-exchange"></i></span>',
'<span '.$g.'><i class="fa fa-stack-overflow"></i></span>',
'<span '.$g.'><i class="fa fa-steam"></i></span>',
'<span '.$g.'><i class="fa fa-steam-square"></i></span>',
'<span '.$g.'><i class="fa fa-stumbleupon"></i></span>',
'<span '.$g.'><i class="fa fa-stumbleupon-circle"></i></span>',
'<span '.$g.'><i class="fa fa-tencent-weibo"></i></span>',
'<span '.$g.'><i class="fa fa-trello"></i></span>',
'<span '.$g.'><i class="fa fa-viacoin"></i></span>',
'<span '.$g.'><i class="fa fa-vine"></i></span>',
'<span '.$g.'><i class="fa fa-vk"></i></span>',
'<span '.$g.'><i class="fa fa-whatsapp"></i></span>',
'<span '.$g.'><i class="fa fa-windows"></i></span>',
'<span '.$g.'><i class="fa fa-wordpress"></i></span>',
'<span '.$g.'><i class="fa fa-xing"></i></span>',
'<span '.$g.'><i class="fa fa-xing-square"></i></span>',
'<span '.$g.'><i class="fa fa-yahoo"></i></span>',
'<span '.$g.'><i class="fa fa-yelp"></i></span>'
);

echo '<div class="uixscform-icon-selector uixscform-icon-selector-s">';
foreach ( $icons as $value ) {
	$v = str_replace( '"></i></span>', '', str_replace( '<span '.$g.'><i class="fa fa-', '', $value ) );
	if ( $v == $iconName ) {
		echo str_replace( 'class="b fontawesome"', 'class="b fontawesome active"', $value );
	} else {
		echo $value;
	}
}	
echo '</div>';