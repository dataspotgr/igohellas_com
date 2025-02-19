<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="custom-tabs" value="custom-tabs"><button data-copytarget="#custom-tabs">copy</button>
					<p><a href="https://divihacks.com/docs/custom-tabs/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=design_options#custom-tab-alignment' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> These classes allow you to align tabs on the top, right, left, or bottom of the tabs container. You can also align the text differently as well using additional classes.</p>
				<p><b>Setup:</b><br />
					<ol>
						<li>Add <input readonly class="cls" type="text" id="custom-tabs" value="custom-tabs"><button data-copytarget="#custom-tabs">copy</button> to the <b>Tab Module Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>Specify tab alignment with one of the following:<br />
							<input readonly class="cls" type="text" id="tabs-on-top" value="tabs-on-top"><button data-copytarget="#tabs-on-top">copy</button><br />
							<input readonly class="cls" type="text" id="tabs-on-bottom" value="tabs-on-bottom"><button data-copytarget="#tabs-on-bottom">copy</button><br />
							<input readonly class="cls" type="text" id="tabs-on-left" value="tabs-on-left"><button data-copytarget="#tabs-on-left">copy</button><br />
							<input readonly class="cls" type="text" id="tabs-on-right" value="tabs-on-right"><button data-copytarget="#tabs-on-right">copy</button>
						</li>
						<li>For <b>tabs-on-top</b> and <b>tabs-on-bottom</b> choose how you want the tabs to be aligned within the tabs container:<br />
							<input readonly class="cls" type="text" id="align-left" value="align-left"><button data-copytarget="#align-left">copy</button><br />
							<input readonly class="cls" type="text" id="align-center" value="align-center"><button data-copytarget="#align-center">copy</button><br />
							<input readonly class="cls" type="text" id="align-right" value="align-right"><button data-copytarget="#align-right">copy</button><br />
							<input readonly class="cls" type="text" id="align-justify" value="align-justify"><button data-copytarget="#align-justify">copy</button>
						</li>
						<li>Choose the tab text alignment:<br />
							<input readonly class="cls" type="text" id="text-left" value="text-left"><button data-copytarget="#text-left">copy</button><br />
							<input readonly class="cls" type="text" id="text-center" value="text-center"><button data-copytarget="#text-center">copy</button><br />
							<input readonly class="cls" type="text" id="text-right" value="text-right"><button data-copytarget="#text-right">copy</button>
						</li>
						<li>Additional optional classes:<br />
							<input readonly class="cls" type="text" id="no-wrap" value="no-wrap"><button data-copytarget="#no-wrap">copy</button> – Keep all tabs on one line<br />
							<input readonly class="cls" type="text" id="hyphenate" value="hyphenate"><button data-copytarget="#hyphenate">copy</button> – Hyphenate tab text if overflow occurs<br />
							<input readonly class="cls" type="text" id="link" value="link"><button data-copytarget="#link">copy</button> – Keep the active tab linked to the tab content at all times and jump to the first position.
						</li>
					</ol>
				</p>
			</td>
		</tr>
	</table>
</ul>