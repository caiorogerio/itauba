<?php
add_theme_support( 'post-thumbnails' );

add_action( 'init', function() {
    register_nav_menu('primary',__( 'Primary Menu' ));
//
//    register_taxonomy( 'line', [], [
//        'label' => 'Lines',
//        'hierarchical' => true,
//        'public' => true,
//        'rewrite' => [
//            'slug' => 'linhas'
//        ]
//    ]);

    register_taxonomy( 'furniture', [], [
        'label' => 'Furnitures',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => [
            'slug' => 'moveis'
        ]
    ]);

    register_post_type('product', [
        'label' => 'Products',
        'public' => true,
        'supports' => [
            'title',
            'thumbnail'
        ],
        'taxonomies' => [
            'line',
            'furniture'
        ],
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'produtos'
        ]
    ]);
});

add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'itauba-style', get_stylesheet_uri() );
});

register_sidebar([
    'name'          => __( 'Home sections', 'itauba' ),
    'id'            => 'home-sections',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<section id="%1$s" class="%2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>'
]);

register_sidebar([
    'name'          => __( 'Home banner', 'itauba' ),
    'id'            => 'home-banner',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li>',
    'after_widget'  => '</li>',
    'before_title'  => '<h1>',
    'after_title'   => '</h1>'
]);

class Banner extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'banner',
			__( 'Home banner', 'itauba' ),
			[
				'description' => __( 'Widget for banner items', 'itauba' ),
			]
		);
	}
	
	static private function fields() {
		$default = [
			'type' => 'text'
		];
		$fields = [
			'title' => __( 'Title:' ),
			'text' => [
				'label' => __( 'Text:' ),
				'type' => 'textarea',
			],
			'button' => __( 'Button:' ),
			'image' => __( 'Image:' ),
			'link' => __( 'Link:' ),
		];
		
		foreach ($fields as $id => $field) {
			if (!is_array($field)) {
				$newField = $default;
				$newField['label'] = $field;
			} else {
				$newField = array_merge($default, $field);
			}
			
			$fields[$id] = $newField;
		}
		
		return $fields;
	}
	
	static private function types($type, $id, $name, $value) {
		$types = [
			'text' => function($id, $name, $value) {
				?>
				<input class="widefat" id="<?= $id; ?>" name="<?= $name; ?>" type="text" value="<?= esc_attr( $value ); ?>">
				<?php
			},
			'textarea' => function($id, $name, $value) {
				?>
				<textarea class="widefat" id="<?= $id; ?>" name="<?= $name; ?>"><?= $value; ?></textarea>
				<?php
			}
		];
		return call_user_func($types[$type], $id, $name, $value);
	}
	
	public function form($instance) {
		$fields = self::fields();
		?>
		<?php foreach($fields as $id => $field): ?>
		<p>
		<label for="<?= $this->get_field_id( $id ); ?>"><?= $field['label']; ?></label> 
		<?php self::types($field['type'], $this->get_field_id( $id ), $this->get_field_name( $id ), $instance[$id]); ?>
		</p>
		<?php endforeach; ?>
		<?php
	}
	
	public function update($newInstance, $oldInstance) {
		return $newInstance;
	}
	
	public function widget($args, $instance) {
		?>
		<?= $args['before_widget']; ?>
		<div>
			<img src="<?= $instance['image'] ?>">
			<div class="info">
				<div>
					<h2><?= $instance['title'] ?></h2>
					<p><?= $instance['text'] ?></p>
					<p class="button"><a href="<?= esc_attr($instance['link']) ?>"><?= $instance['button'] ?></a></p>
				</div>
			</div>
		</div>
		<?= $args['after_widget']; ?>
		<?php
	}
}

add_action( 'widgets_init', function(){
     register_widget( 'Banner' );
});

add_action( 'wp_enqueue_scripts', function() {
	wp_register_script(
        'banner',
        get_stylesheet_directory_uri() . '/banner.js',
        ['jquery'],
        '1.0',
        true
    );

    wp_enqueue_script( 'banner' );
});

// create custom plugin settings menu
add_action('admin_menu', function() {
	
	$info = [
		'address1' => __('Address 1'),
		'address2' => __('Address 2'),
		'address3' => __('Address 3'),
		'phone' => __('Phone'),
		'email' => __('E-mail'),
	];
	
	//create new top-level menu
	add_menu_page('Itaúba Informações', 'Informações', 'administrator', __FILE__,
	function() use ($info) {
	?>
	<div class="wrap">
	<h2>Itaúba</h2>

	<form method="post" action="options.php">
	    <?php settings_fields( 'itauba-info' ); ?>
	    <?php do_settings_sections( 'itauba-info' ); ?>
	    <table class="form-table">
			<?php foreach($info as $id => $label): ?>
	        <tr valign="top">
	        <th scope="row"><?= $label ?></th>
	        <td><input type="text" class="regular-text" name="<?= esc_attr( $id ) ?>" value="<?= esc_attr( get_option($id) ); ?>" /></td>
	        </tr>
			<?php endforeach; ?>
	    </table>

	    <?php submit_button(); ?>

	</form>
	</div>
	<?php });

	//call register settings function
	add_action( 'admin_init', function() use ($info) {
		//register our settings
		foreach($info as $id => $label) {
			register_setting( 'itauba-info', $id );
		}
	});
});