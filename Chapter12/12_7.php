<?php
	function destroy_session_and_data()
	{
		session_start();
		$_SESSION = aaray();
		setcookie(session_name(), '', time() - 2592000, '/');
		session_destroy();
	}
?>