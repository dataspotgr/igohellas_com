	<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>RSS to Instragram Icon</b></p>
					<p><a href="https://divihacks.com/docs/icon-hacks/#rss-icon" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=icon_options#rss-replace-instagram' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>NOTE:</b> This hack no longer necessary. Instagram icon support has been added since Divi 3.20 release.</p>
				<p><b>Description:</b> This hack allows you to replace the RSS icon in the footer with the instagram icon.</p>
				<p><b>Details:</b> Assuming you aren’t using the RSS icon, add your instagram URL in Divi Theme Options where the RSS URL is.</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Instragram Icon Gradient</b></p>
					<p><a href="https://divihacks.com/docs/icon-hacks/#rss-icon" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=icon_options#new-insta-gradient' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack allows you to give the Instagram icon background color in the social media follow module the new gradient.</p>
				<p><b>Details:</b> Add the class <input readonly class="cls" type="text" id="insta-gradient" value="insta-gradient"><button data-copytarget="#insta-gradient">copy</button> to the Social Media Follow module.</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Font Awesome Icons in Lists</b> (Text Module)</p>
					<input readonly class="cls" type="text" id="fa-icon-list" value="fa-icon-list"><button data-copytarget="#fa-icon-list">copy</button>
					<p><b>Font Awesome Icons in Blurbs</b> (Blurb Module)</p>
					<input readonly class="cls" type="text" id="fa-blurb" value="fa-blurb"><button data-copytarget="#fa-blurb">copy</button>
					<p><b>Font Awesome Icons in Buttons</b> (CTA, Button, Email Optin, Subscribe Form, Contact Form, Post Slider, Slider, Pricing Tables, Login Form, Fullwidth Slider, & Fullwidth Post Slider Module)</p>
					<input readonly class="cls" type="text" id="fa-button" value="fa-button"><button data-copytarget="#fa-button">copy</button>
					<p><a href="https://divihacks.com/docs/icon-hacks/#font-awesome" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=icon_options#font-awesome-icons' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack allows you to add over 1,000 icons from Font Awesome. You can replace the default Divi icons by adding classes to the module that the icon is in. For example: CTA, button, slider, blurb, etc.</p>
				<p><b>Details:</b></p>
				<ol>
					<li>
						<p><b>Add one of the 3 classes on the left to the module.</b></p>
						<p><b>Details:</b> Add this class to the respective <b>Module Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
					</li>
					<li>
						<p>The Font Awesome icon will replace the Divi icon, so you need to make sure that you enable the icon, and choose any icon from the list of icons. This icon will be replaced with the Font Awesome icon in the next step.</p>
					<li>
						<p><b><a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank">Search for an Icon</a></b> Then, copy and paste that icon's classes in the <b>Module Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
						<p>Example: fas fa-leaf</p>
					</li>
					<li>
						<p><b>Optional: Additional Classes for Styling</b></p>
						<p>Add these to the <b>Module Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
						<p>Force icons to the right or left:</p>
						<input readonly class="cls" type="text" id="fa-pull-left" value="fa-pull-left"><button data-copytarget="#fa-pull-left">copy</button><br />
						<input readonly class="cls" type="text" id="fa-pull-right" value="fa-pull-right"><button data-copytarget="#fa-pull-right">copy</button>
						<p>Rotate the icon:</p>
						<input readonly class="cls" type="text" id="fa-rotate-90" value="fa-rotate-90"><button data-copytarget="#fa-rotate-90">copy</button><br />
						<input readonly class="cls" type="text" id="fa-rotate-180" value="fa-rotate-180"><button data-copytarget="#fa-rotate-180">copy</button><br />
						<input readonly class="cls" type="text" id="fa-rotate-270" value="fa-rotate-270"><button data-copytarget="#fa-rotate-270">copy</button>
						<p>Flip the icon:</p>
						<input readonly class="cls" type="text" id="fa-flip-horizontal" value="fa-flip-horizontal"><button data-copytarget="#fa-flip-horizontal">copy</button><br />
						<input readonly class="cls" type="text" id="fa-flip-vertical" value="fa-flip-vertical"><button data-copytarget="#fa-flip-vertical">copy</button>
						<p>Spin the icon:</p>
						<input readonly class="cls" type="text" id="fa-spin" value="fa-spin"><button data-copytarget="#fa-spin">copy</button><br />
						<input readonly class="cls" type="text" id="fa-pulse" value="fa-pulse"><button data-copytarget="#fa-pulse">copy</button>
					</li>
					<li>
						<p><b>Optional: CSS Variables for Styling</b></p>
						<p>Use additional CSS variables to modify the icon color, size, and hover color. Add this CSS to the <b>Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
						<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Additional CSS for Lists</b></p>
							<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
								--icon-color:<br />
								--icon-size:
							</pre>
						</div>
						<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Additional CSS for Blurbs</b></p>
							<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
								--icon-hover-color:<br />
								--icon-hover-size:<br />
								--icon-hover-margin:<br />
								--icon-margin:
							</pre>
						</div>
						<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Additional CSS for Buttons</b></p>
							<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
								--icon-size:<br />
								--icon-hover-color:
							</pre>
						</div>
					</li>
				</ol>
			</td>
		</tr>
	</table>
</ul>