<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="exit-popup" value="exit-popup"><button data-copytarget="#exit-popup">copy</button>
					<p><a href="https://divihacks.com/docs/theme-customizations/#exit-popup" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable the page exit popup and the global exit popup in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_exit_popup_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> Enable a popup to display when the user moves their mouse off of the browser window. You can set a global exit popup in the Theme Customizer, or you can create an exit popup on a page-by-page basis following the steps below which will override the global exit popup if you have one set.</p>
				<p><b>Setup:</b>
					<ol>
						<li>On the element that you want to be the exit popup, add <input readonly class="cls" type="text" id="exit-popup" value="exit-popup"><button data-copytarget="#exit-popup">copy</button> to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
					</ol>
				</p>
				<p>You can customize the color of the background overlay and the Close icon by adding the following CSS variable to the <b>Exit Popup Element Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;">
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--overlay-background-color:<br />
--close-icon-color:<br />
--close-button-color:
					</pre>
				</div>
			</td>
		</tr>
	</table>
</ul>