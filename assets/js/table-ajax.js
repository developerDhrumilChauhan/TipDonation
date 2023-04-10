jQuery(document).ready(function($) {
list = {
	init: function() {
		var timer;
		var delay = 500;
		
		// Pagination links, sortable link
		$('.tablenav-pages a, .manage-column.sortable a, .manage-column.sorted a').click(function(e) {
			// We don't want to actually follow these links
			e.preventDefault();
			// Simple way: use the URL to extract our needed variables
			var query = this.search.substring( 1 );
			
			var data = {
				paged: list.__query( query, 'paged' ) || '1',
				order: list.__query( query, 'order' ) || 'asc',
				orderby: list.__query( query, 'orderby' ) || 'order_id'
			};
			list.update( data );
		});
		
		// Page number input
		$('input[name=paged]').on('keyup', function(e) {
			if ( 13 == e.which )
				e.preventDefault();

			// This time we fetch the variables in inputs
			var data = {
				paged: parseInt( $('input[name=paged]').val() ) || '1',
				order: $('input[name=order]').val() || 'asc',
				orderby: $('input[name=orderby]').val() || 'order_id'
			};
			window.clearTimeout( timer );
			timer = window.setTimeout(function() {
				list.update( data );
			}, delay);
		});
	},

	update: function( data ) {
		$.ajax({
			// /wp-admin/admin-ajax.php
			url: tgdffw_2.ajaxurl,
			// Add action and nonce to our collected data
			data: $.extend(
				{
					ajax_custom_list_nonce: $('#ajax_custom_list_nonce').val(),
					action: 'ajax_fetch_custom_list',
				},
				data
			),
			// Handle the successful result
			success: function( response ) {
				// WP_List_Table::ajax_response() returns json
				var response = $.parseJSON( response );
                //alert("The Response "+response);
				// Add the requested rows
				if ( response.rows.length )
					$('#the-list').html( response.rows );
				// Update column headers for sorting
				if ( response.column_headers.length )
					$('thead tr, tfoot tr').html( response.column_headers );
				// Update pagination for navigation
				if ( response.pagination.bottom.length )
					$('.tablenav.top .tablenav-pages').html( $(response.pagination.top).html() );
				if ( response.pagination.top.length )
					$('.tablenav.bottom .tablenav-pages').html( $(response.pagination.bottom).html() );
				// Init back our event handlers
				list.init();
			}
		});
	},
	__query: function( query, variable ) {

		var vars = query.split("&");
		for ( var i = 0; i <vars.length; i++ ) {
			var pair = vars[ i ].split("=");
			if ( pair[0] == variable )
				return pair[1];
		}
		return false;
	},
}

// Show time!
list.init();

});
