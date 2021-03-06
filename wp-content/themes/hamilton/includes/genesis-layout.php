<?php

add_action( 'genesis_setup', 'hamilton_remove_genesis_layouts', 15 );

function hamilton_remove_genesis_layouts()
{
	genesis_unregister_layout( 'sidebar-content' );
	genesis_unregister_layout( 'content-sidebar' );
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
}
