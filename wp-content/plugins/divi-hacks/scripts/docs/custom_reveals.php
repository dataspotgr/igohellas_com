<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="reveal-trigger-value" value="reveal-trigger-value"><button data-copytarget="#reveal-trigger-value">copy</button>
					<input readonly class="cls" type="text" id="reveal-content-value" value="reveal-content-value"><button data-copytarget="#reveal-content-value">copy</button>
					<p><a href="https://divihacks.com/docs/custom-reveals/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> Reveal any element when clicking on a trigger element, such as a button or CTA.</p>
				<p><b>Important:</b> The reveal-trigger-value class will reveal the reveal-content-value element, and will not close/hide any other reveals.</p>
				<p><b>Setup:</b>
					<ol>
						<li>On the element that you want to trigger the reveal, add 'reveal-trigger-value' to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>On the Section, Row, or Module you want to appear inside the reveal, add 'reveal-content-value' to that <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>Replace the word 'value' with anything. The trigger will find the content that has the same value.</li>
					</ol>
				</p>
				<p><b>Details:</b> The reveal content must be on the page in order to appear in the reveal. It will be hidden until triggered.</p>
				<p><b>Additional Classes:</b><br />
					<ol>
						<li>Add <input readonly class="cls" type="text" id="scroll" value="scroll"><button data-copytarget="#scroll">copy</button> to the trigger class to make the browser window scroll to the revealed element. This is useful if the element isn’t right next to the trigger, therefore some users may not see the revealed content. This is helpful on mobile devices.</li>
						<li>If you want to have a revealed section open when the page loads, add the class <input readonly class="cls" type="text" id="opened" value="opened"><button data-copytarget="#opened">copy</button> to both the trigger element and the content element.<br />
							<br />
							When the trigger element is clicked, the class “opened” gets added to that element.<br />
							<br />
							To style the opened trigger element, use the following CSS:<br />
							<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[class*="reveal-trigger-"].opened {
	// styles go here
}
							</pre>
						</li>
					</ol>
				</p>
				</div>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="reveal-only-trigger-value" value="reveal-only-trigger-value"><button data-copytarget="#reveal-only-trigger-value">copy</button>
					<input readonly class="cls" type="text" id="reveal-only-content-value" value="reveal-only-content-value"><button data-copytarget="#reveal-only-content-value">copy</button>
					<p><a href="https://divihacks.com/docs/custom-reveals/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> Reveal only 1 element when clicking on a trigger element, such as a button or CTA.</p>
				<p><b>Important:</b> The reveal-only-trigger-value class will reveal ONLY the reveal-only-content-value element, and will close/hide all other reveals.</p>
				<p><b>Additional Classes:</b><br />
					<ol>
						<li>Add <input readonly class="cls" type="text" id="scroll" value="scroll"><button data-copytarget="#scroll">copy</button> to the trigger class to make the browser window scroll to the revealed element. This is useful if the element isn’t right next to the trigger, therefore some users may not see the revealed content. This is helpful on mobile devices.</li>
						<li>If you want to have a revealed section open when the page loads, add the class <input readonly class="cls" type="text" id="opened" value="opened"><button data-copytarget="#opened">copy</button> to both the trigger element and the content element.<br />
							<br />
							When the trigger element is clicked, the class “opened” gets added to that element, and all other trigger elements will have the class removed.<br />
							<br />
							To style the opened trigger element, use the following CSS:<br />
							<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[class*="reveal-only-trigger-"].opened { 
   // styles go here 
}
							</pre>
						</li>
					</ol>
				</p>
				</div>
			</td>
		</tr>
	</table>
</ul>