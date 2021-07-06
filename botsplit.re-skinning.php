<?php function reskinning_splitter_admin_page(){ ?>
	<div class="wrap">
		<div id="poststuff">
			<div id="post-body" class="metabox-holder columns-2">
				<div id="post-body-content" style="position: relative">
					<div class="stuffbox" style="padding:20px">		
						<h1>
							<img src="<?php echo plugin_dir_url( __FILE__ ) . '/imgs/icon.png'; ?>" /> Re-skinning URL splitter By Mohammed Cha
						</h1>
						<hr>
						<p class="description"><b><code>NB :</code> The sum of the percentages divided on the links must equal 100%</b> <code>Ex : 20 - 30 - 30 - 20</code></p>
						<b>use Shortcode <code>[reskinning_splitter]</code> to display your button where you want</b>
						<hr>
					<form method="post" action="options.php">
						<?php
							settings_fields("reskinning_splitter_section");
							do_settings_sections("reskinning_splitter_options");      
							submit_button(); 
						?>          
					</form>
						<br class="clear">
						<span style="float:right;">Re-skinning URL splitter coded with <b style="color:red; font-size:20px;">&hearts;</b> By <a target="_blank" color="brown" href="https://re-skinning.com"> Mohammed Cha </a></span>
						<br class="clear">
					</div>	
				</div>	
				<div id="postbox-container-1" class="postbox-container">
					<div class="postbox">
						<h2 style="font-size:19px;" class="hndle ui-sortable-handle"><strong>Re-skinning URL splitter</strong></h2>
						<div class="inside">
							<div class="main">
							<img style="max-width: 100%;" class="maxwidth" src="<?php echo plugin_dir_url( __FILE__ ) . '/imgs/logo.png'; ?>">
								<hr>
									<p>Divide / Split your Wordpress Blog visitors into 4 links by using Re-skinning URL splitter.</p>
									<p>Re-skinning URL splitter By <a href="https://cutt.ly/NmvJcDE" target="_blank">Mohammed Cha</a></p>
									<hr>
									<h3>How to !</h3>
									<b>use Shortcode <code>[reskinning_splitter]</code> to display your button where you want</b>
							</div>
						</div>
					</div>
				</div>		
			</div>	
		</div>		
	</div>
	<br class="clear">
<?php }	
error_reporting(0);
function detectBot_sp($USER_AGENT) {
	$crawlers_agents = strtolower('Bloglines subscriber|Dumbot|Sosoimagespider|QihooBot|FAST-WebCrawler|Superdownloads Spiderman|LinkWalker|msnbot|ASPSeek|WebAlta Crawler|Lycos|FeedFetcher-Google|Yahoo|YoudaoBot|AdsBot-Google|Googlebot|Scooter|Gigabot|Charlotte|eStyle|AcioRobot|GeonaBot|msnbot-media|Baidu|CocoCrawler|Google|Charlotte t|Yahoo! Slurp China|Sogou web spider|YodaoBot|MSRBOT|AbachoBOT|Sogou head spider|AltaVista|IDBot|Sosospider|Yahoo! Slurp|Java VM|DotBot|LiteFinder|Yeti|Rambler|Scrubby|Baiduspider|accoona');
	$crawlers = explode("|", $crawlers_agents);
	if(is_array($crawlers)) {
		foreach($crawlers as $crawler) {
			if (strpos(strtolower($USER_AGENT), trim($crawler)) !== false) {
				return true;
			}
		}
	}
	return false;
}
$enable_reskinning_cloaker = get_option('enable_reskinning_cloaker');
if ($enable_reskinning_cloaker == 1){
	function reskinning_splitter() {
		if(detectBot_sp($_SERVER['HTTP_USER_AGENT'])) {} else {
			$linkone = get_option('reskinning_url_one');
			if (empty($linkone)) { $linkone = "#"; }else{ $linkone = get_option('reskinning_url_one'); }
			$linkonepercent = get_option('reskinning_url_one_percent');
			if (empty($linkonepercent)) { $linkonepercent = "0"; }else{ $linkonepercent = get_option('reskinning_url_one_percent'); }
			$linktwo = get_option('reskinning_url_two');
			if (empty($linktwo)) { $linktwo = "#"; }else{ $linktwo = get_option('reskinning_url_two'); }
			$linktwopercent = get_option('reskinning_url_two_percent');
			$linkthree = get_option('reskinning_url_three');
			if (empty($linkthree)) { $linkthree = "#"; }else{ $linkthree = get_option('reskinning_url_three'); }
			$linkthreepercent = get_option('reskinning_url_three_percent');
			if (empty($linkthreepercent)) { $linkthreepercent = "0"; }else{ $linkthreepercent = get_option('reskinning_url_three_percent'); }
			$linkfour = get_option('reskinning_url_four');
			if (empty($linkfour)) { $linkfour = "#"; }else{ $linkfour = get_option('reskinning_url_four'); }
			$linkfourpercent = get_option('reskinning_url_four_percent');
			if (empty($linkfourpercent)) { $linkfourpercent = "0"; }else{ $linkfourpercent = get_option('reskinning_url_four_percent'); }
			$link[0] = array('link' => $linkone, 'percent' => $linkonepercent);
			$link[1] = array('link' => $linktwo, 'percent' => $linktwopercent);
			$link[2] = array('link' => $linkthree, 'percent' => $linkthreepercent);
			$link[3] = array('link' => $linkfour, 'percent' => $linkfourpercent);
			$percent_arr = array();
			foreach($link as $k => $_l) {
				$percent_arr = array_merge($percent_arr, array_fill(0, $_l['percent'], $k));
			}
			$random_key = $percent_arr[mt_rand(0,count($percent_arr)-1)];
			$redirectlink = $link[$random_key]['link'];
			$btn_splitter_bg_color = get_option('reskinning_splitter_button_color');
			return '
			<style>
				.reskinning_splitter_btn { text-align:center; }
				.reskinning_splitter_btn a { background-color: #'.$btn_splitter_bg_color.'; border: none; border-radius:4px; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 1em;}
			</style>
			<div class="reskinning_splitter_btn">
				<p>'.get_option('reskinning_splitter_button_description').'</p>
				<a href="'.$redirectlink.'" target="_blank">'.get_option('reskinning_splitter_button_text').'123</a>
			</div>';
		}
	}add_shortcode('reskinning_splitter', 'reskinning_splitter');
	class reskinning_splitter_widget extends WP_Widget {
		public function __construct() {
			$options = array(
				'classname' => 'reskinning_splitter_cost_widget',
				'description' => 'Re-Skinning Url Splitter Widget',
			);
			parent::__construct(
				'reskinning_splitter_cost_widget', 'Re-Skinning URL Splitter', $options
			);
		}
		public function widget( $args, $instance ) {
			echo $args['before_widget'];
			if(detectBot_sp($_SERVER['HTTP_USER_AGENT'])) {} else {
			echo do_shortcode('[reskinning_splitter]');
			}
			echo $args['after_widget'];
		}
	}
	function reskinning_splitter_widget_add() {
		register_widget( 'reskinning_splitter_widget' );
	}add_action( 'widgets_init', 'reskinning_splitter_widget_add' );
}else{
	function reskinning_splitter() {
		$linkone = get_option('reskinning_url_one');
		if (empty($linkone)) { $linkone = "#"; }else{ $linkone = get_option('reskinning_url_one'); }
		$linkonepercent = get_option('reskinning_url_one_percent');
		if (empty($linkonepercent)) { $linkonepercent = "0"; }else{ $linkonepercent = get_option('reskinning_url_one_percent'); }
		$linktwo = get_option('reskinning_url_two');
		if (empty($linktwo)) { $linktwo = "#"; }else{ $linktwo = get_option('reskinning_url_two'); }
		$linktwopercent = get_option('reskinning_url_two_percent');
		$linkthree = get_option('reskinning_url_three');
		if (empty($linkthree)) { $linkthree = "#"; }else{ $linkthree = get_option('reskinning_url_three'); }
		$linkthreepercent = get_option('reskinning_url_three_percent');
		if (empty($linkthreepercent)) { $linkthreepercent = "0"; }else{ $linkthreepercent = get_option('reskinning_url_three_percent'); }
		$linkfour = get_option('reskinning_url_four');
		if (empty($linkfour)) { $linkfour = "#"; }else{ $linkfour = get_option('reskinning_url_four'); }
		$linkfourpercent = get_option('reskinning_url_four_percent');
		if (empty($linkfourpercent)) { $linkfourpercent = "0"; }else{ $linkfourpercent = get_option('reskinning_url_four_percent'); }
		$link[0] = array('link' => $linkone, 'percent' => $linkonepercent);
		$link[1] = array('link' => $linktwo, 'percent' => $linktwopercent);
		$link[2] = array('link' => $linkthree, 'percent' => $linkthreepercent);
		$link[3] = array('link' => $linkfour, 'percent' => $linkfourpercent);
		$percent_arr = array();
		foreach($link as $k => $_l) {
			$percent_arr = array_merge($percent_arr, array_fill(0, $_l['percent'], $k));
		}
		$random_key = $percent_arr[mt_rand(0,count($percent_arr)-1)];
		$redirectlink = $link[$random_key]['link'];
		$btn_splitter_bg_color = get_option('reskinning_splitter_button_color');
		return '
		<style>
			.reskinning_splitter_btn { text-align:center; }
			.reskinning_splitter_btn a { background-color: #'.$btn_splitter_bg_color.'; border: none; border-radius:4px; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 1em;}
		</style>
		<div class="reskinning_splitter_btn">
			<p>'.get_option('reskinning_splitter_button_description').'</p>
			<a href="'.$redirectlink.'" target="_blank">'.get_option('reskinning_splitter_button_text').'</a>
		</div>';
	}add_shortcode('reskinning_splitter', 'reskinning_splitter');
	class reskinning_splitter_widget extends WP_Widget {
		public function __construct() {
			$options = array(
				'classname' => 'reskinning_splitter_cost_widget',
				'description' => 'Re-Skinning Url Splitter Widget',
			);
			parent::__construct(
				'reskinning_splitter_cost_widget', 'Re-Skinning URL Splitter', $options
			);
		}
		public function widget( $args, $instance ) {
			echo $args['before_widget'];
				echo do_shortcode('[reskinning_splitter]');
			echo $args['after_widget'];
		}
	}
	function reskinning_splitter_widget_add() {
		register_widget( 'reskinning_splitter_widget' );
	}add_action( 'widgets_init', 'reskinning_splitter_widget_add' );
}
