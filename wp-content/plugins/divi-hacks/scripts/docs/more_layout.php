<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="mobile-reverse" value="mobile-reverse"><button data-copytarget="#mobile-reverse">copy</button>
					<p><a href="https://divihacks.com/docs/other-alignment/#mobile-reverse" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#mobile-reverse' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This class allows you to reverse the order of columns in a row on both tablets and phones. Add this class to <b>Row Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="full-height" value="full-height"><button data-copytarget="#full-height">copy</button>
					<p><a href="https://divihacks.com/docs/other-alignment/#full-height" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#full-height-section' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This class allows you to set any element to be the full height of the browser window. Add this class to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
				<p><b>Details:</b> Customize the full-height even further by subtracting the height of the header and footer using the following classes:</p>
				<input readonly class="cls" type="text" id="full-height-minus-main-header" value="full-height-minus-main-header"><button data-copytarget="#full-height-minus-main-header">copy</button><br />
				<input readonly class="cls" type="text" id="full-height-minus-main-footer" value="full-height-minus-main-footer"><button data-copytarget="#full-height-minus-main-footer">copy</button><br />
				<input readonly class="cls" type="text" id="full-height-minus-top-header" value="full-height-minus-top-header"><button data-copytarget="#full-height-minus-top-header">copy</button><br />
				<input readonly class="cls" type="text" id="full-height-minus-both-headers" value="full-height-minus-both-headers"><button data-copytarget="#full-height-minus-both-headers">copy</button>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Full Width Blog Posts by Default</b></p>
					<p><a href="https://divihacks.com/docs/other-alignment/#full-width-posts" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#full-width-posts' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack removes the sidebar from blog posts and makes the blog content full width. There is no class for this hack.</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Equal Height Modules</b></p>
					<p><a href="https://divihacks.com/docs/other-alignment/#equal-height" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#equal-height' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This hack sets any number of elements to the height of the largest element of that same class. You can have up to 12 different groups of modules set at the same height as the other modules in that same set. Add one of the following classes to the modules that you want to be the same height.<br />
					<input readonly class="cls" type="text" id="equal-1" value="equal-1"><button data-copytarget="#equal-1">copy</button><br />
					<input readonly class="cls" type="text" id="equal-2" value="equal-2"><button data-copytarget="#equal-2">copy</button><br />
					<input readonly class="cls" type="text" id="equal-3" value="equal-3"><button data-copytarget="#equal-3">copy</button><br />
					<input readonly class="cls" type="text" id="equal-4" value="equal-4"><button data-copytarget="#equal-4">copy</button><br />
					<input readonly class="cls" type="text" id="equal-5" value="equal-5"><button data-copytarget="#equal-5">copy</button><br />
					<input readonly class="cls" type="text" id="equal-6" value="equal-6"><button data-copytarget="#equal-6">copy</button><br />
					<input readonly class="cls" type="text" id="equal-7" value="equal-7"><button data-copytarget="#equal-7">copy</button><br />
					<input readonly class="cls" type="text" id="equal-8" value="equal-8"><button data-copytarget="#equal-8">copy</button><br />
					<input readonly class="cls" type="text" id="equal-9" value="equal-9"><button data-copytarget="#equal-9">copy</button><br />
					<input readonly class="cls" type="text" id="equal-10" value="equal-10"><button data-copytarget="#equal-10">copy</button><br />
					<input readonly class="cls" type="text" id="equal-11" value="equal-11"><button data-copytarget="#equal-11">copy</button><br />
					<input readonly class="cls" type="text" id="equal-12" value="equal-12"><button data-copytarget="#equal-12">copy</button><br />
				</p>
			</td>
		</tr>
	</table>
</ul>
<div style="font-size:16px;font-weight:bold; background:#000; color:#fff; padding:20px; width:100%;">Device-Specific Alignment (now included in Divi)</div>
<?php  include('device_alignment.php'); ?>