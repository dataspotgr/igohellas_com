<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="horizontal-modules" value="horizontal-modules"><button data-copytarget="#horizontal-modules">copy</button>
					<p><a href="https://divihacks.com/docs/row-layouts/#horizontal-modules" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#row-layouts' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Align any number of modules horizontally in a 1-column row.</p>
				<p><b>Setup:</b> Create a row with 1 column and add this class to  <b>Row Settings > Advanced tab > CSS ID & Classes > CSS Class.</b></p>
				<p><b>Details:</b> To stack the modules on mobile devices, also include the class <input readonly class="cls" type="text" id="stack-mobile" value="stack-mobile"><button data-copytarget="#stack-mobile">copy</button></p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="two-column-mobile" value="two-column-mobile"><button data-copytarget="#two-column-mobile">copy</button>
					<p><a href="https://divihacks.com/docs/row-layouts/#two-column-mobile" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#row-layouts' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Normally, a 2-column and a 4-column row stacks all columns on top of each other when viewed on a tablet or phone.  This hack changes that to show 2 columns on tablets and phones. </p>
				<p><b>Setup:</b> Create a row with 2 or 4 columns and add this class to  <b>Row Settings > Advanced tab > CSS ID & Classes > CSS Class.</b></p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="custom-row" value="custom-row"><button data-copytarget="#custom-row">copy</button>
					<p><a href="https://divihacks.com/docs/row-layouts/#custom-row" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=alignment_options#row-layouts' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Customize the width of the columns to create custom row layouts. You can also specify different sizes on different devices</p>
				<p><b>Setup:</b> Create a row and add this class to  <b>Row Settings > Advanced tab > CSS ID & Classes > CSS Class.</b><br />
				Below that we will add one or more of the following classes to each individual <b>Column CSS Class</b> box:<br />
				These classes are global, meaning they apply on all devices.<br />
				<input readonly class="cls" type="text" id="custom-column-1" value="custom-column-1"><button data-copytarget="#custom-column-1">copy</button> (1/12 of the width of the row)<br />
				<input readonly class="cls" type="text" id="custom-column-2" value="custom-column-2"><button data-copytarget="#custom-column-2">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-3" value="custom-column-3"><button data-copytarget="#custom-column-3">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-4" value="custom-column-4"><button data-copytarget="#custom-column-4">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-5" value="custom-column-5"><button data-copytarget="#custom-column-5">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-6" value="custom-column-6"><button data-copytarget="#custom-column-6">copy</button> (1/2 of the width of the row)<br />
				<input readonly class="cls" type="text" id="custom-column-7" value="custom-column-7"><button data-copytarget="#custom-column-7">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-8" value="custom-column-8"><button data-copytarget="#custom-column-8">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-9" value="custom-column-9"><button data-copytarget="#custom-column-9">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-10" value="custom-column-10"><button data-copytarget="#custom-column-10">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-11" value="custom-column-11"><button data-copytarget="#custom-column-11">copy</button><br />
				<input readonly class="cls" type="text" id="custom-column-12" value="custom-column-12"><button data-copytarget="#custom-column-12">copy</button> (100% width of the row)<br />
				These classes have the same properties as the global classes, but they will only apply on tablets:<br />
				<input readonly class="cls" type="text" id="tablet-col-1" value="tablet-col-1"><button data-copytarget="#tablet-col-1">copy</button> (1/12 of the width of the row)<br />
				<input readonly class="cls" type="text" id="tablet-col-2" value="tablet-col-2"><button data-copytarget="#tablet-col-2">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-3" value="tablet-col-3"><button data-copytarget="#tablet-col-3">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-4" value="tablet-col-4"><button data-copytarget="#tablet-col-4">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-5" value="tablet-col-5"><button data-copytarget="#tablet-col-5">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-6" value="tablet-col-6"><button data-copytarget="#tablet-col-6">copy</button> (1/2 of the width of the row)<br />
				<input readonly class="cls" type="text" id="tablet-col-7" value="tablet-col-7"><button data-copytarget="#tablet-col-7">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-8" value="tablet-col-8"><button data-copytarget="#tablet-col-8">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-9" value="tablet-col-9"><button data-copytarget="#tablet-col-9">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-10" value="tablet-col-10"><button data-copytarget="#tablet-col-10">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-11" value="tablet-col-11"><button data-copytarget="#tablet-col-11">copy</button><br />
				<input readonly class="cls" type="text" id="tablet-col-12" value="tablet-col-12"><button data-copytarget="#tablet-col-12">copy</button> (100% width of the row)<br />
				These classes have the same properties as the global classes, but they will only apply on phones:<br />
				<input readonly class="cls" type="text" id="phone-col-1" value="phone-col-1"><button data-copytarget="#phone-col-1">copy</button> (1/12 of the width of the row)<br />
				<input readonly class="cls" type="text" id="phone-col-2" value="phone-col-2"><button data-copytarget="#phone-col-2">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-3" value="phone-col-3"><button data-copytarget="#phone-col-3">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-4" value="phone-col-4"><button data-copytarget="#phone-col-4">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-5" value="phone-col-5"><button data-copytarget="#phone-col-5">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-6" value="phone-col-6"><button data-copytarget="#phone-col-6">copy</button> (1/2 of the width of the row)<br />
				<input readonly class="cls" type="text" id="phone-col-7" value="phone-col-7"><button data-copytarget="#phone-col-7">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-8" value="phone-col-8"><button data-copytarget="#phone-col-8">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-9" value="phone-col-9"><button data-copytarget="#phone-col-9">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-10" value="phone-col-10"><button data-copytarget="#phone-col-10">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-11" value="phone-col-11"><button data-copytarget="#phone-col-11">copy</button><br />
				<input readonly class="cls" type="text" id="phone-col-12" value="phone-col-12"><button data-copytarget="#phone-col-12">copy</button> (100% width of the row)</p>
				</div>
			</td>
		</tr>
	</table>
</ul>