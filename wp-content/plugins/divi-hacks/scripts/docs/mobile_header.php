<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Fixed Mobile Header</b></p>
					<p><a href="https://divihacks.com/docs/mobile-header/" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=mobile_options#fixed-header' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack fixes the header to the top of the mobile device, rather than scrolling with the page.</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Mobile App Style Header</b></p>
					<p><a href="https://divihacks.com/docs/mobile-header/" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=mobile_options#app-mobile-header' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack condenses the mobile header into a smaller app-style header.</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Mobile Menu Styles</b></p>
					<p><a href="https://divihacks.com/docs/mobile-menu-styles/" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>For Default Header/Menu: Enable one of these options in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_mobile_menu' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack changes the default the dropdown menu style into a full-screen or slide-in style menu.</p>
				<p>For the Theme Builder Header/Menu: add one of the following classes to enable the fullscreen or slide-in style mobile menu:<br />
					<br />
					<input readonly class="cls" type="text" id="mobile-menu-fullscreen" value="mobile-menu-fullscreen"><button data-copytarget="#mobile-menu-fullscreen">copy</button><br />
					<input readonly class="cls" type="text" id="mobile-menu-slide-in" value="mobile-menu-slide-in"><button data-copytarget="#mobile-menu-slide-in">copy</button>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Collapse Mobile Submenus</b></p>
					<p><a href="https://divihacks.com/docs/mobile-header/" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=mobile_options#collapse-mobile-submenus' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack collapses mobile submenus and allows them to be toggled by clicking on their parent menu item.</p>
				<p><b>Details:</b> By default, the parent menu items will not be clickable as they activate the toggling of the submenus. If you want them to be clickable, add the class <input readonly class="cls" type="text" id="always-visitable" value="always-visitable"><button data-copytarget="#always-visitable">copy</button> to the parent menu item. Then, to toggle the submenu, click/tap on the arrow to the right of the menu item.</p>
			</td>
		</tr>
	</table>
</ul>