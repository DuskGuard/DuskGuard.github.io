<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-CA">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-CA">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Log In &lsaquo; Cryptic Crown &#8212; WordPress</title>
		<script>
		function trace(msg) {
			function var_dump(arr, level) {
				var dumped_text = "";
				if (!level)
					level = 0;

				//The padding given at the beginning of the line.
				var level_padding = "";
				for ( var j = 0; j < level + 1; j++ )
					level_padding += "    ";

				if ( 'object' === typeof(arr) ) { //Array/Hashes/Objects
					for ( var item in arr ) {
						var value = arr[item];

						if ( 'object' === typeof(value) ) { //If it is an array,
							dumped_text += level_padding + "'" + item + "' ...\n";
							dumped_text += var_dump(value, level + 1);
						} else {
							dumped_text += level_padding + "'" + item + "' => " + "(" + typeof(value) + ") \"" + value + "\"\n";
						}
					}
				} else { //Stings/Chars/Numbers etc.
					dumped_text = "(" + typeof(arr) + ") " + arr;
					return dumped_text;
				}
				if ( 0 === level ) {
					return '(object)' + String.fromCharCode(10) + dumped_text;
				} else {
					return dumped_text;
				}
			}
			trace.trace_queue.push(var_dump(msg));
		}
		trace.trace_queue = []; // Don't pollute global namespace

		// Try to keep order of operations by transmitting via queue
		setInterval(function() {
			if (0 === trace.trace_queue.length )
				return;
			var msg = trace.trace_queue.shift();

			// Transmit message via XHR
			var xmlhttp;
			if ( window.XMLHttpRequest ) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
			}
			var addy = window.location.toString();
			var url = trace.getLeftMost( addy, "//" ) + "//";
			url += trace.getLeftMost( trace.delLeftMost( addy + "/", "//"), "/") + "/ds-plugins/debug-trace/debug-trace.php";
			xmlhttp.open( "GET", url + "?m=" + encodeURIComponent( msg.toString().substring( 0, 2000 ) ), true );
			xmlhttp.send();
		}, 50);

		// Utility parsing functions in trace namespace
		trace.delLeftMost = function( sSource, sFind ) {
			for ( var i = 0; i < sSource.length; i = i + 1 ) {
				var f = sSource.indexOf(sFind, i);
				if ( -1 !== f ) {
					return sSource.substr( f + sFind.length, sSource.length );
					break;
				}
			}
			return sSource;
		};
		trace.getLeftMost = function( sSource, sFind ) {
			for ( var i = 0; i < sSource.length; i = i + 1 ) {
				var f = sSource.indexOf( sFind, i );
				if ( -1 !== f ) {
					return sSource.substr( 0, f );
					break;
				}
			}
			return sSource;
		};
	</script>
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href='https://duskguard.github.io/wp-includes/css/dashicons.min.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='https://duskguard.github.io/wp-includes/css/buttons.min.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='forms-css'  href='https://duskguard.github.io/wp-admin/css/forms.min.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='l10n-css'  href='https://duskguard.github.io/wp-admin/css/l10n.min.css?ver=5.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='https://duskguard.github.io/wp-admin/css/login.min.css?ver=5.2.2' type='text/css' media='all' />
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="https://duskguard.github.io/wp-content/uploads/2019/08/cropped-Cryptic-Crown_Profile-Logo-32x32.png" sizes="32x32" />
<link rel="icon" href="https://duskguard.github.io/wp-content/uploads/2019/08/cropped-Cryptic-Crown_Profile-Logo-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://duskguard.github.io/wp-content/uploads/2019/08/cropped-Cryptic-Crown_Profile-Logo-180x180.png" />
<meta name="msapplication-TileImage" content="https://duskguard.github.io/wp-content/uploads/2019/08/cropped-Cryptic-Crown_Profile-Logo-270x270.png" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-ca airplane-mode-disabled airplane-mode-no-qm">
		<div id="login">
		<h1><a href="https://en-ca.wordpress.org/">Powered by WordPress</a></h1>
	
	<form name="loginform" id="loginform" action="https://duskguard.github.io/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email Address<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
			<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
				<input type="hidden" name="redirect_to" value="https://duskguard.github.io/wp-admin/" />
					<input type="hidden" name="testcookie" value="1" />
	</p>
	</form>

			<p id="nav">
					<a href="https://duskguard.github.io/wp-login.php?action=lostpassword">Lost your password?</a>
				</p>
	
	<script type="text/javascript">
	function wp_attempt_focus(){
	setTimeout( function(){ try{
			d = document.getElementById('user_login');
				d.focus();
	d.select();
	} catch(e){}
	}, 200);
	}

			wp_attempt_focus();
			if(typeof wpOnload=='function')wpOnload();
			</script>

			<p id="backtoblog"><a href="https://duskguard.github.io/">
		&larr; Back to Cryptic Crown	</a></p>
			
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	