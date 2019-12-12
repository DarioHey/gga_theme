<?php 
/* Loads Stroke 7 Icon Font. */
add_filter( 'vc_iconpicker-type-glyphicons', 'vc_iconpicker_type_glyphicons' );

/**
 * glyphicons icons from glyphicons.com/
 *
 * @param $icons - taken from filter - vc_map param field settings['source'] provided icons (default empty array).
 * If array categorized it will auto-enable category dropdown
 *
 * @since 4.4
 * @return array - of icons for iconpicker, can be categorized, or not.
 */
function vc_iconpicker_type_glyphicons( $icons ) {
	$glyphicons_icons = array(
		array( "glyphicon glyphicon-asterisk" => esc_html__( "Asterisk", "wp-experts" ) ),
		array( "glyphicon glyphicon-plus" => esc_html__( "Plus", "wp-experts" ) ),
		array( "glyphicon glyphicon-minus" => esc_html__( "Minus", "wp-experts" ) ),
		array( "glyphicon glyphicon-euro" => esc_html__( "Euro", "wp-experts" ) ),
		array( "glyphicon glyphicon-cloud" => esc_html__( "Cloud", "wp-experts" ) ),
		array( "glyphicon glyphicon-envelope" => esc_html__( "Envelope", "wp-experts" ) ),
		array( "glyphicon glyphicon-pencil" => esc_html__( "Pencil", "wp-experts" ) ),
		array( "glyphicon glyphicon-glass" => esc_html__( "Glass", "wp-experts" ) ),
		array( "glyphicon glyphicon-music" => esc_html__( "Music", "wp-experts" ) ),
		array( "glyphicon glyphicon-search" => esc_html__( "Search", "wp-experts" ) ),
		array( "glyphicon glyphicon-heart" => esc_html__( "Heart", "wp-experts" ) ),
		array( "glyphicon glyphicon-star" => esc_html__( "Star", "wp-experts" ) ),
		array( "glyphicon glyphicon-star-empty" => esc_html__( "Star Empty", "wp-experts" ) ),
		array( "glyphicon glyphicon-user" => esc_html__( "User", "wp-experts" ) ),
		array( "glyphicon glyphicon-film" => esc_html__( "Film", "wp-experts" ) ),
		array( "glyphicon glyphicon-th-large" => esc_html__( "Th Large", "wp-experts" ) ),
		array( "glyphicon glyphicon-th" => esc_html__( "Th", "wp-experts" ) ),
		array( "glyphicon glyphicon-th-list" => esc_html__( "Th List", "wp-experts" ) ),
		array( "glyphicon glyphicon-ok" => esc_html__( "Ok", "wp-experts" ) ),
		array( "glyphicon glyphicon-remove" => esc_html__( "Remove", "wp-experts" ) ),
		array( "glyphicon glyphicon-zoom-in" => esc_html__( "Zoom In", "wp-experts" ) ),
		array( "glyphicon glyphicon-zoom-out" => esc_html__( "Zoom Out", "wp-experts" ) ),
		array( "glyphicon glyphicon-off" => esc_html__( "Off", "wp-experts" ) ),
		array( "glyphicon glyphicon-signal" => esc_html__( "Signal", "wp-experts" ) ),
		array( "glyphicon glyphicon-cog" => esc_html__( "Cog", "wp-experts" ) ),
		array( "glyphicon glyphicon-trash" => esc_html__( "Trash", "wp-experts" ) ),
		array( "glyphicon glyphicon-home" => esc_html__( "Home", "wp-experts" ) ),
		array( "glyphicon glyphicon-file" => esc_html__( "File", "wp-experts" ) ),
		array( "glyphicon glyphicon-time" => esc_html__( "Time", "wp-experts" ) ),
		array( "glyphicon glyphicon-road" => esc_html__( "Road", "wp-experts" ) ),
		array( "glyphicon glyphicon-download-alt" => esc_html__( "Download Alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-download" => esc_html__( "Download", "wp-experts" ) ),
		array( "glyphicon glyphicon-upload" => esc_html__( "Upload", "wp-experts" ) ),
		array( "glyphicon glyphicon-inbox" => esc_html__( "Inbox", "wp-experts" ) ),
		array( "glyphicon glyphicon-play-circle" => esc_html__( "Play Circle", "wp-experts" ) ),
		array( "glyphicon glyphicon-repeat" => esc_html__( "Repeat", "wp-experts" ) ),
		array( "glyphicon glyphicon-refresh" => esc_html__( "Refresh", "wp-experts" ) ),
		array( "glyphicon glyphicon-list-alt" => esc_html__( "List Alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-lock" => esc_html__( "Lock", "wp-experts" ) ),
		array( "glyphicon glyphicon-flag" => esc_html__( "Flag", "wp-experts" ) ),
		array( "glyphicon glyphicon-headphones" => esc_html__( "Headphones", "wp-experts" ) ),
		array( "glyphicon glyphicon-volume-off" => esc_html__( "Volume Off", "wp-experts" ) ),
		array( "glyphicon glyphicon-volume-down" => esc_html__( "Volume Down", "wp-experts" ) ),
		array( "glyphicon glyphicon-volume-up" => esc_html__( "Volume Up", "wp-experts" ) ),
		array( "glyphicon glyphicon-qrcode" => esc_html__( "Qrcode", "wp-experts" ) ),
		array( "glyphicon glyphicon-barcode" => esc_html__( "Barcode", "wp-experts" ) ),
		array( "glyphicon glyphicon-tag" => esc_html__( "Tag", "wp-experts" ) ),
		array( "glyphicon glyphicon-tags" => esc_html__( "Tags", "wp-experts" ) ),
		array( "glyphicon glyphicon-book" => esc_html__( "Book", "wp-experts" ) ),
		array( "glyphicon glyphicon-bookmark" => esc_html__( "Bookmark", "wp-experts" ) ),
		array( "glyphicon glyphicon-print" => esc_html__( "Print", "wp-experts" ) ),
		array( "glyphicon glyphicon-camera" => esc_html__( "Camera", "wp-experts" ) ),
		array( "glyphicon glyphicon-font" => esc_html__( "Font", "wp-experts" ) ),
		array( "glyphicon glyphicon-bold" => esc_html__( "Bold", "wp-experts" ) ),
		array( "glyphicon glyphicon-italic" => esc_html__( "Italic", "wp-experts" ) ),
		array( "glyphicon glyphicon-text-height" => esc_html__( "Text Height", "wp-experts" ) ),
		array( "glyphicon glyphicon-text-width" => esc_html__( "Text Width", "wp-experts" ) ),
		array( "glyphicon glyphicon-align-left" => esc_html__( "align-left", "wp-experts" ) ),
		array( "glyphicon glyphicon-align-right" => esc_html__( "align-right", "wp-experts" ) ),
		array( "glyphicon glyphicon-align-center" => esc_html__( "align-center", "wp-experts" ) ),
		array( "glyphicon glyphicon-align-justify" => esc_html__( "align-justify", "wp-experts" ) ),
		array( "glyphicon glyphicon-list" => esc_html__( "List", "wp-experts" ) ),
		array( "glyphicon glyphicon-indent-left" => esc_html__( "indent-left", "wp-experts" ) ),
		array( "glyphicon glyphicon-indent-right" => esc_html__( "indent-right", "wp-experts" ) ),
		array( "glyphicon glyphicon-facetime-video" => esc_html__( "facetime-video", "wp-experts" ) ),
		array( "glyphicon glyphicon-picture" => esc_html__( "Picture", "wp-experts" ) ),
		array( "glyphicon glyphicon-map-marker" => esc_html__( "map-marker", "wp-experts" ) ),
		array( "glyphicon glyphicon-adjust" => esc_html__( "Adjust", "wp-experts" ) ),
		array( "glyphicon glyphicon-tint" => esc_html__( "Tint", "wp-experts" ) ),
		array( "glyphicon glyphicon-edit" => esc_html__( "Edit", "wp-experts" ) ),
		array( "glyphicon glyphicon-share" => esc_html__( "Share", "wp-experts" ) ),
		array( "glyphicon glyphicon-check" => esc_html__( "Check", "wp-experts" ) ),
		array( "glyphicon glyphicon-move" => esc_html__( "Move", "wp-experts" ) ),
		array( "glyphicon glyphicon-step-backward" => esc_html__( "step-backward", "wp-experts" ) ),
		array( "glyphicon glyphicon-fast-backward" => esc_html__( "fast-backward", "wp-experts" ) ),
		array( "glyphicon glyphicon-backward" => esc_html__( "Backward", "wp-experts" ) ),
		array( "glyphicon glyphicon-play" => esc_html__( "Play", "wp-experts" ) ),
		array( "glyphicon glyphicon-pause" => esc_html__( "Pause", "wp-experts" ) ),
		array( "glyphicon glyphicon-stop" => esc_html__( "Stop", "wp-experts" ) ),
		array( "glyphicon glyphicon-forward" => esc_html__( "Forward", "wp-experts" ) ),
		array( "glyphicon glyphicon-fast-forward" => esc_html__( "fast-forward", "wp-experts" ) ),
		array( "glyphicon glyphicon-step-forward" => esc_html__( "step-forward", "wp-experts" ) ),
		array( "glyphicon glyphicon-eject" => esc_html__( "Eject", "wp-experts" ) ),
		array( "glyphicon glyphicon-chevron-left" => esc_html__( "chevron-left", "wp-experts" ) ),
		array( "glyphicon glyphicon-chevron-right" => esc_html__( "chevron-right", "wp-experts" ) ),
		array( "glyphicon glyphicon-plus-sign" => esc_html__( "plus-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-minus-sign" => esc_html__( "minus-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-remove-sign" => esc_html__( "remove-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-ok-sign" => esc_html__( "ok-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-question-sign" => esc_html__( "question-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-info-sign" => esc_html__( "info-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-screenshot" => esc_html__( "Screenshot", "wp-experts" ) ),
		array( "glyphicon glyphicon-remove-circle" => esc_html__( "remove-circle", "wp-experts" ) ),
		array( "glyphicon glyphicon-ok-circle" => esc_html__( "ok-circle", "wp-experts" ) ),
		array( "glyphicon glyphicon-ban-circle" => esc_html__( "ban-circle", "wp-experts" ) ),
		array( "glyphicon glyphicon-arrow-left" => esc_html__( "arrow-left", "wp-experts" ) ),
		array( "glyphicon glyphicon-arrow-right" => esc_html__( "arrow-right", "wp-experts" ) ),
		array( "glyphicon glyphicon-arrow-up" => esc_html__( "arrow-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-arrow-down" => esc_html__( "arrow-down", "wp-experts" ) ),
		array( "glyphicon glyphicon-share-alt" => esc_html__( "share-alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-resize-full" => esc_html__( "resize-full", "wp-experts" ) ),
		array( "glyphicon glyphicon-resize-small" => esc_html__( "resize-small", "wp-experts" ) ),
		array( "glyphicon glyphicon-exclamation-sign" => esc_html__( "exclamation-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-gift" => esc_html__( "Gift", "wp-experts" ) ),
		array( "glyphicon glyphicon-leaf" => esc_html__( "Leaf", "wp-experts" ) ),
		array( "glyphicon glyphicon-fire" => esc_html__( "Fire", "wp-experts" ) ),
		array( "glyphicon glyphicon-eye-open" => esc_html__( "eye-open", "wp-experts" ) ),
		array( "glyphicon glyphicon-eye-close" => esc_html__( "eye-close", "wp-experts" ) ),
		array( "glyphicon glyphicon-warning-sign" => esc_html__( "warning-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-plane" => esc_html__( "plane", "wp-experts" ) ),
		array( "glyphicon glyphicon-random" => esc_html__( "random", "wp-experts" ) ),
		array( "glyphicon glyphicon-comment" => esc_html__( "comment", "wp-experts" ) ),
		array( "glyphicon glyphicon-magnet" => esc_html__( "magnet", "wp-experts" ) ),
		array( "glyphicon glyphicon-chevron-up" => esc_html__( "chevron-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-chevron-down" => esc_html__( "chevron-down", "wp-experts" ) ),
		array( "glyphicon glyphicon-share-alt" => esc_html__( "share-alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-resize-full" => esc_html__( "resize-full", "wp-experts" ) ),
		array( "glyphicon glyphicon-resize-small" => esc_html__( "resize-small", "wp-experts" ) ),
		array( "glyphicon glyphicon-exclamation-sign" => esc_html__( "exclamation-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-gift" => esc_html__( "gift", "wp-experts" ) ),
		array( "glyphicon glyphicon-leaf" => esc_html__( "leaf", "wp-experts" ) ),
		array( "glyphicon glyphicon-fire" => esc_html__( "fire", "wp-experts" ) ),
		array( "glyphicon glyphicon-eye-open" => esc_html__( "eye-open", "wp-experts" ) ),
		array( "glyphicon glyphicon-eye-close" => esc_html__( "eye-close", "wp-experts" ) ),
		array( "glyphicon glyphicon-warning-sign" => esc_html__( "warning-sign", "wp-experts" ) ),
		array( "glyphicon glyphicon-plane" => esc_html__( "plane", "wp-experts" ) ),
		array( "glyphicon glyphicon-calendar" => esc_html__( "calendar", "wp-experts" ) ),
		array( "glyphicon glyphicon-random" => esc_html__( "random", "wp-experts" ) ),
		array( "glyphicon glyphicon-comment" => esc_html__( "comment", "wp-experts" ) ),
		array( "glyphicon glyphicon-magnet" => esc_html__( "magnet", "wp-experts" ) ),
		array( "glyphicon glyphicon-chevron-up" => esc_html__( "chevron-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-chevron-down" => esc_html__( "chevron-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-retweet" => esc_html__( "retweet", "wp-experts" ) ),
		array( "glyphicon glyphicon-shopping-cart" => esc_html__( "shopping-cart", "wp-experts" ) ),
		array( "glyphicon glyphicon-folder-close" => esc_html__( "folder-close", "wp-experts" ) ),
		array( "glyphicon glyphicon-folder-open" => esc_html__( "folder-open", "wp-experts" ) ),
		array( "glyphicon glyphicon-resize-vertical" => esc_html__( "resize-vertical", "wp-experts" ) ),
		array( "glyphicon glyphicon-resize-horizontal" => esc_html__( "resize-horizontal", "wp-experts" ) ),
		array( "glyphicon glyphicon-hdd" => esc_html__( "hdd", "wp-experts" ) ),
		array( "glyphicon glyphicon-bullhorn" => esc_html__( "bullhorn", "wp-experts" ) ),
		array( "glyphicon glyphicon-bell" => esc_html__( "bell", "wp-experts" ) ),
		array( "glyphicon glyphicon-certificate" => esc_html__( "certificate", "wp-experts" ) ),
		array( "glyphicon glyphicon-thumbs-up" => esc_html__( "thumbs-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-thumbs-down" => esc_html__( "thumbs-down", "wp-experts" ) ),
		array( "glyphicon glyphicon-hand-right" => esc_html__( "hand-right", "wp-experts" ) ),
		array( "glyphicon glyphicon-hand-left" => esc_html__( "hand-left", "wp-experts" ) ),
		array( "glyphicon glyphicon-hand-up" => esc_html__( "hand-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-hand-down" => esc_html__( "hand-down", "wp-experts" ) ),
		array( "glyphicon glyphicon-circle-arrow-right" => esc_html__( "circle-arrow-right", "wp-experts" ) ),
		array( "glyphicon glyphicon-circle-arrow-left" => esc_html__( "circle-arrow-left", "wp-experts" ) ),
		array( "glyphicon glyphicon-circle-arrow-up" => esc_html__( "circle-arrow-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-circle-arrow-down" => esc_html__( "circle-arrow-down", "wp-experts" ) ),
		array( "glyphicon glyphicon-globe" => esc_html__( "globe", "wp-experts" ) ),
		array( "glyphicon glyphicon-wrench" => esc_html__( "wrench", "wp-experts" ) ),
		array( "glyphicon glyphicon-tasks" => esc_html__( "tasks", "wp-experts" ) ),
		array( "glyphicon glyphicon-filter" => esc_html__( "filter", "wp-experts" ) ),
		array( "glyphicon glyphicon-briefcase" => esc_html__( "briefcase", "wp-experts" ) ),
		array( "glyphicon glyphicon-fullscreen" => esc_html__( "fullscreen", "wp-experts" ) ),
		array( "glyphicon glyphicon-dashboard" => esc_html__( "dashboard", "wp-experts" ) ),
		array( "glyphicon glyphicon-paperclip" => esc_html__( "paperclip", "wp-experts" ) ),
		array( "glyphicon glyphicon-heart-empty" => esc_html__( "heart-empty", "wp-experts" ) ),
		array( "glyphicon glyphicon-link" => esc_html__( "link", "wp-experts" ) ),
		array( "glyphicon glyphicon-phone" => esc_html__( "phone", "wp-experts" ) ),
		array( "glyphicon glyphicon-pushpin" => esc_html__( "pushpin", "wp-experts" ) ),
		array( "glyphicon glyphicon-usd" => esc_html__( "usd", "wp-experts" ) ),
		array( "glyphicon glyphicon-gbp" => esc_html__( "gbp", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort" => esc_html__( "sort", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort-by-alphabet" => esc_html__( "sort-by-alphabet", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort-by-alphabet-alt" => esc_html__( "sort-by-alphabet-alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort-by-order" => esc_html__( "sort-by-order", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort-by-order-alt" => esc_html__( "sort-by-order-alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort-by-attributes" => esc_html__( "sort-by-attributes", "wp-experts" ) ),
		array( "glyphicon glyphicon-sort-by-attributes-alt" => esc_html__( "sort-by-attributes-alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-unchecked" => esc_html__( "unchecked", "wp-experts" ) ),
		array( "glyphicon glyphicon-expand" => esc_html__( "expand", "wp-experts" ) ),
		array( "glyphicon glyphicon-collapse-down" => esc_html__( "collapse-down", "wp-experts" ) ),
		array( "glyphicon glyphicon-collapse-up" => esc_html__( "collapse-up", "wp-experts" ) ),
		array( "glyphicon glyphicon-log-in" => esc_html__( "log-in", "wp-experts" ) ),
		array( "glyphicon glyphicon-flash" => esc_html__( "flash", "wp-experts" ) ),
		array( "glyphicon glyphicon-log-out" => esc_html__( "log-out", "wp-experts" ) ),
		array( "glyphicon glyphicon-new-window" => esc_html__( "new-window", "wp-experts" ) ),
		array( "glyphicon glyphicon-record" => esc_html__( "record", "wp-experts" ) ),
		array( "glyphicon glyphicon-save" => esc_html__( "save", "wp-experts" ) ),
		array( "glyphicon glyphicon-open" => esc_html__( "open", "wp-experts" ) ),
		array( "glyphicon glyphicon-saved" => esc_html__( "saved", "wp-experts" ) ),
		array( "glyphicon glyphicon-import" => esc_html__( "import", "wp-experts" ) ),
		array( "glyphicon glyphicon-export" => esc_html__( "export", "wp-experts" ) ),
		array( "glyphicon glyphicon-send" => esc_html__( "send", "wp-experts" ) ),
		array( "glyphicon glyphicon-floppy-disk	" => esc_html__( "floppy-disk", "wp-experts" ) ),
		array( "glyphicon glyphicon-floppy-saved" => esc_html__( "floppy-saved", "wp-experts" ) ),
		array( "glyphicon glyphicon-floppy-remove" => esc_html__( "floppy-remove", "wp-experts" ) ),
		array( "glyphicon glyphicon-floppy-save" => esc_html__( "floppy-save", "wp-experts" ) ),
		array( "glyphicon glyphicon-floppy-open" => esc_html__( "floppy-open", "wp-experts" ) ),
		array( "glyphicon glyphicon-credit-card" => esc_html__( "credit-card", "wp-experts" ) ),
		array( "glyphicon glyphicon-transfer" => esc_html__( "transfer", "wp-experts" ) ),
		array( "glyphicon glyphicon-cutlery" => esc_html__( "cutlery", "wp-experts" ) ),
		array( "glyphicon glyphicon-header" => esc_html__( "header", "wp-experts" ) ),
		array( "glyphicon glyphicon-compressed" => esc_html__( "compressed", "wp-experts" ) ),
		array( "glyphicon glyphicon-earphone" => esc_html__( "earphone", "wp-experts" ) ),
		array( "glyphicon glyphicon-phone-alt" => esc_html__( "phone-alt", "wp-experts" ) ),
		array( "glyphicon glyphicon-tower" => esc_html__( "tower", "wp-experts" ) ),
		array( "glyphicon glyphicon-stats" => esc_html__( "stats", "wp-experts" ) ),
		array( "glyphicon glyphicon-sd-video" => esc_html__( "sd-video", "wp-experts" ) ),
		array( "glyphicon glyphicon-hd-video" => esc_html__( "hd-video", "wp-experts" ) ),
		array( "glyphicon glyphicon-subtitles" => esc_html__( "subtitles", "wp-experts" ) ),
		array( "glyphicon glyphicon-sound-stereo" => esc_html__( "sound-stereo", "wp-experts" ) ),
		array( "glyphicon glyphicon-sound-dolby" => esc_html__( "sound-dolby", "wp-experts" ) ),
		array( "glyphicon glyphicon-sound-5-1" => esc_html__( "sound-5-1", "wp-experts" ) ),
		array( "glyphicon glyphicon-sound-6-1" => esc_html__( "sound-6-1", "wp-experts" ) ),
		array( "glyphicon glyphicon-sound-7-1" => esc_html__( "sound-7-1", "wp-experts" ) ),
		array( "glyphicon glyphicon-copyright-mark" => esc_html__( "copyright-mark", "wp-experts" ) ),
		array( "glyphicon glyphicon-registration-mark" => esc_html__( "registration-mark", "wp-experts" ) ),
		array( "glyphicon glyphicon-cloud-download" => esc_html__( "cloud-download", "wp-experts" ) ),
		array( "glyphicon glyphicon-cloud-upload" => esc_html__( "cloud-upload", "wp-experts" ) ),
		array( "glyphicon glyphicon-tree-conifer" => esc_html__( "tree-conifer", "wp-experts" ) ),
		array( "glyphicon glyphicon-tree-deciduous" => esc_html__( "tree-deciduous", "wp-experts" ) ),
	);

	return array_merge( $icons, $glyphicons_icons );
}
 ?>