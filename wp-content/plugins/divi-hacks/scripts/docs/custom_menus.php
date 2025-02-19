<?php 

$class1 = "custom-menu";
$class2 = "align-left";
$class3 = "align-right";
$docs = "https://divihacks.com/docs/custom-menus/";

?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="<?php echo $class1; ?>" value="<?php echo $class1; ?>"><button data-copytarget="#<?php echo $class1; ?>">copy</button>
					<p><a href="<?php echo $docs; ?>" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=design_options#custom-menus' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Have more control over how the Menu module looks. This hack removes a lot of the default styling so you can apply your own inside the module settings.</p>
				<p><b>Setup:</b>
					<ol>
						<li>On a menu module, add the class <input readonly class="cls" type="text" id="<?php echo $class1; ?>" value="<?php echo $class1; ?>"><button data-copytarget="#<?php echo $class1; ?>">copy</button> to the <b>Menu Module's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
					</ol>
				</p>
				<p><b>Additional Styling:</b> The "Centered" Menu Layout can be customized further using the following classes:</p>
				<p><input readonly class="cls" type="text" id="<?php echo $class2; ?>" value="<?php echo $class2; ?>"><button data-copytarget="#<?php echo $class2; ?>">copy</button> Aligs the menu to the left side of the module.</p>
				<p><input readonly class="cls" type="text" id="<?php echo $class3; ?>" value="<?php echo $class3; ?>"><button data-copytarget="#<?php echo $class3; ?>">copy</button> Aligs the menu to the right side of the module.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;">
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--menu-container-background:<br />
--menu-width:<br />
--menu-max-width:
					</pre>
				</div>
			</td>
		</tr>
	</table>
</ul>