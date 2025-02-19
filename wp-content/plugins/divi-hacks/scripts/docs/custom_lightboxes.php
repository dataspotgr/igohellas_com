<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="lightbox-trigger-value" value="lightbox-trigger-value"><button data-copytarget="#lightbox-trigger-value">copy</button>
					<input readonly class="cls" type="text" id="lightbox-content-value" value="lightbox-content-value"><button data-copytarget="#lightbox-content-value">copy</button>
					<p><a href="https://divihacks.com/docs/custom-lightboxes/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>This hack is <span class="auto-on">auto on</span></p>
				<p><b>Description:</b> Trigger a lightbox on any element, and place any other element inside the lightbox.</p>
				<p><b>Setup:</b>
					<ol>
						<li>On the element that you want to trigger the lightbox, add 'lightbox-trigger-value' to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>On the Section, Row, or Module you want to appear inside the lightbox, add 'lightbox-content-value' to that <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</li>
						<li>Replace the word 'value' with anything. The trigger will find the content that has the same value.</li>
					</ol>
				</p>
				<p><b>Details:</b> The lightbox content must be on the page in order to appear in the lightbox. It will be hidden until triggered.</p>
				<p>You can customize the color of the background overlay and the Close icon by adding the following CSS variable to the <b>Lightbox Content Element Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
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