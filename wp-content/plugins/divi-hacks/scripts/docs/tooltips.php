<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="tooltip-trigger-value" value="tooltip-trigger-value"><button data-copytarget="#tooltip-trigger-value">copy</button>
					<input readonly class="cls" type="text" id="tooltip-content-value" value="tooltip-content-value"><button data-copytarget="#tooltip-content-value">copy</button>
					<p><a href="https://divihacks.com/docs/tooltips/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> Reveal a tooltip of any element when hovering or clicking on a trigger element, such as a button or CTA.</p>
				<p><b>Setup:</b>
					<ol>
						<li>On the element that you want to trigger the tooltip, add 'tooltip-trigger-value' to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>On the Section, Row, or Module you want to appear inside the tooltip, add 'tooltip-content-value' to that <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>Replace the word 'value' with anything. The trigger will find the content that has the same value.</li>
					</ol>
				</p>
				<p><b>Details:</b> The tooltip content must be on the page in order to appear in the tooltip. It will be hidden until triggered.</p>
				<p><b>Additional Classes:</b> Add <input readonly class="cls" type="text" id="click" value="click"><button data-copytarget="#click">copy</button> to the trigger class to enable the tooltip content to appear when you click the trigger element.</p>
				</div>
			</td>
		</tr>
	</table>
</ul>