<?php 

$class1 = "showit-YYYY-MM-DD+00:00";
$class2 = "showit-YYYY-MM-DD";
$class3 = "showit-00:00";
$class4 = "hideit-YYYY-MM-DD+00:00";
$class5 = "hideit-YYYY-MM-DD";
$class6 = "hideit-00:00";
$class7 = "closeable";
$class8 = "keep-hidden-xxx";
$class9 = "hide-if-login";
$class10 = "hide-if-logout";
$class11 = "hide-if-subscriber";
$class12 = "hide-if-contributor";
$class13 = "hide-if-author";
$class14 = "hide-if-editor";
$class15 = "hide-if-admin";
$class16 = "hide-if-shop-manager";
$class17 = "close-button";

$docs = "https://divihacks.com/docs/hide-show-content-based-on-time-date/";


?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Hide/Show Content Based On Date/Time</b></p>
					<p><a href="<?php echo $docs ?>" target="_blank">View Examples & Documentation</a></p>
					<input readonly class="cls" type="text" id="<?php echo $class1; ?>" value="<?php echo $class1; ?>"><button data-copytarget="#<?php echo $class1; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class2; ?>" value="<?php echo $class2; ?>"><button data-copytarget="#<?php echo $class2; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class3; ?>" value="<?php echo $class3; ?>"><button data-copytarget="#<?php echo $class3; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class4; ?>" value="<?php echo $class4; ?>"><button data-copytarget="#<?php echo $class4; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class5; ?>" value="<?php echo $class5; ?>"><button data-copytarget="#<?php echo $class5; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class6; ?>" value="<?php echo $class6; ?>"><button data-copytarget="#<?php echo $class6; ?>">copy</button>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> This hack gives you the ability to hide or show content based on date, time, or date and time.</p>
				<p><b>Setup:</b> Add any of the classes to the left to show and hide the content. You must use the same date & time as specified in the classes below:<br />
				<br />
				<b>Showing Elements:</b><br />
				<table>
					<tr>
						<td><b>showit-YYYY-MM-DD+00:00</b></td>
						<td>Show on exact day and time (use military time)</td>
					</tr>
					<tr>
						<td><b>showit-YYYY-MM-DD</b></td>
						<td>Show on day only (starts on midnight local user time)</td>
					</tr>
					<tr>
						<td><b>showit-00:00</b></td>
						<td>Show at specific time every day (for repetetive events) (use military time)</td>
					</tr>
				</table>
				<br />
				<b>Hiding Elements:</b><br />
				<table>
					<tr>
						<td><b>hideit-YYYY-MM-DD+00:00</b></td>
						<td>Hide on exact day and time (use military time)</td>
					</tr>
					<tr>
						<td><b>hideit-YYYY-MM-DD</b></td>
						<td>Hide on day only (starts on midnight local user time)</td>
					</tr>
					<tr>
						<td><b>hideit-00:00</b></td>
						<td>Hide at specific time every day (for repetetive events) (use military time)</td>
					</tr>
				</table>
			</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
				    <p><b>Make Any Element Closeable</b></p>
					<p><a href="https://divihacks.com/docs/closeable-elements/" target="_blank">View Examples & Documentation</a></p>
					<input readonly class="cls" type="text" id="<?php echo $class7; ?>" value="<?php echo $class7; ?>"><button data-copytarget="#<?php echo $class7; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class8; ?>" value="<?php echo $class8; ?>"><button data-copytarget="#<?php echo $class8; ?>">copy</button>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> This hack gives the user the ability to close an element. Now you can add closeable sections, alerts, messages on your pages. Add the class <input readonly class="cls" type="text" id="<?php echo $class7; ?>" value="<?php echo $class7; ?>"><button data-copytarget="#<?php echo $class7; ?>">copy</button> to any element to add a close button in the top right of the element. The element will be hidden until you view/refresh the page.<br />
					<br />
					You can also create your own close button or link that will close the element. Just add the class <input readonly class="cls" type="text" id="<?php echo $class17; ?>" value="<?php echo $class17; ?>"><button data-copytarget="#<?php echo $class17; ?>">copy</button> to any element.
					<br />
					If you want to keep an element hidden until the browser session ends, add the class <input readonly class="cls" type="text" id="<?php echo $class8; ?>" value="<?php echo $class8; ?>"><button data-copytarget="#<?php echo $class8; ?>">copy</button>, changing xxx with any other value to identify any unique element that you want to keep hidden (example: keep-hidden-promo, keep-hidden-message, keep-hidden-warning).<br />
					<br />
					To style the close icon, use the following CSS variables in the Module's Custom CSS box:<br />
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--close-button-color: <br />
--close-button-height: <br />
--close-button-width: <br />
--close-button-size:
					</pre>
				</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Hide/Show Content by User Type & Login Status</b></p>
					<p><a href="https://divihacks.com/docs/admin-hacks/#hide-show" target="_blank">View Examples & Documentation</a></p>
					<input readonly class="cls" type="text" id="<?php echo $class9; ?>" value="<?php echo $class9; ?>"><button data-copytarget="#<?php echo $class9; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class10; ?>" value="<?php echo $class10; ?>"><button data-copytarget="#<?php echo $class10; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class11; ?>" value="<?php echo $class11; ?>"><button data-copytarget="#<?php echo $class11; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class12; ?>" value="<?php echo $class12; ?>"><button data-copytarget="#<?php echo $class12; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class13; ?>" value="<?php echo $class13; ?>"><button data-copytarget="#<?php echo $class13; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class14; ?>" value="<?php echo $class14; ?>"><button data-copytarget="#<?php echo $class14; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class15; ?>" value="<?php echo $class15; ?>"><button data-copytarget="#<?php echo $class15; ?>">copy</button><br />
					<input readonly class="cls" type="text" id="<?php echo $class16; ?>" value="<?php echo $class16; ?>"><button data-copytarget="#<?php echo $class16; ?>">copy</button><br />
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=other_options#hide-show' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Use these classes on any element (section, row, column, module, menu item) to hide content to users who are logged in or out. </p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
				    <p><b>Hide Header/Logo/Footer</b></p>
					<p><a href="https://divihacks.com/docs/admin-hacks/#hide-header" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> This hack requires you to add a custom field with with any value to your page or post. Here’s how:<br>
				Navigate to the backend of your post or page and find the Custom Fields meta box.<br>
				<table>
					<tr><th>Name</th><th>Value</th></tr>
					<tr><td>Hide Main Header</td><td>Yes</td></tr>
					<tr><td>Hide Top Header</td><td>Yes</td></tr>
					<tr><td>Hide Footer</td><td>Yes</td></tr>
					<tr><td>Hide Logo</td><td>Yes</td></tr>
				</table>
				</p>
			</td>
		</tr>
	</table>
</ul>