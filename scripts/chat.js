function sendMessage() {
	var $message = $( 'input[name=message]' ).val();
	$( 'input[name=message]' ).val( "" );
	$.post( 'scripts/chat.php', { "message" : $message } );
	//$( '#chatWindow' ).append( "<p>" + $message + "</p>" );
}

function updateChat() {
	$(document).ready( function() {
		$( "#chatWindow" ).load( "scripts/updateChat.php" );
	} );
}

window.setInterval( function() {
	$( "#chatWindow" ).load( "scripts/updateChat.php" );
	}, 400 );
