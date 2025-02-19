<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom Dividers</b></p>
					<p><a href="https://divihacks.com/docs/custom-dividers/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=design_options#custom-dividers' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> These classes allow you to add shape dividers to sections, rows, columns, and modules. Add this class to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
				<p><b>Setup:</b><br />
					<ol>
						<li>
							<p>We need to construct the class you will use based on what part of the divider you want to use. First, you’ll choose the shape you’d like to use. The -top and -bottom after the shape indicate which part of the SVG graphic you want to use.</p>
							<div style="display:inline-block; min-width:49%; vertical-align:top;">
								<input readonly class="cls" type="text" id="arrow-top" value="arrow-top"><button data-copytarget="#arrow-top">copy</button><br />
								<input readonly class="cls" type="text" id="arrow-bottom" value="arrow-bottom"><button data-copytarget="#arrow-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="arrow2-top" value="arrow2-top"><button data-copytarget="#arrow2-top">copy</button><br />
								<input readonly class="cls" type="text" id="arrow2-bottom" value="arrow2-bottom"><button data-copytarget="#arrow2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="arrow3-top" value="arrow3-top"><button data-copytarget="#arrow3-top">copy</button><br />
								<input readonly class="cls" type="text" id="arrow3-bottom" value="arrow3-bottom"><button data-copytarget="#arrow3-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric-top" value="asymmetric-top"><button data-copytarget="#asymmetric-top">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric-bottom" value="asymmetric-bottom"><button data-copytarget="#asymmetric-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric2-top" value="asymmetric2-top"><button data-copytarget="#asymmetric2-top">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric2-bottom" value="asymmetric2-bottom"><button data-copytarget="#asymmetric2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric3-top" value="asymmetric3-top"><button data-copytarget="#asymmetric3-top">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric3-bottom" value="asymmetric3-bottom"><button data-copytarget="#asymmetric3-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric4-top" value="asymmetric4-top"><button data-copytarget="#asymmetric4-top">copy</button><br />
								<input readonly class="cls" type="text" id="asymmetric4-bottom" value="asymmetric4-bottom"><button data-copytarget="#asymmetric4-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="curve-top" value="curve-top"><button data-copytarget="#curve-top">copy</button><br />
								<input readonly class="cls" type="text" id="curve-bottom" value="curve-bottom"><button data-copytarget="#curve-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="curve2-top" value="curve2-top"><button data-copytarget="#curve2-top">copy</button><br />
								<input readonly class="cls" type="text" id="curve2-bottom" value="curve2-bottom"><button data-copytarget="#curve2-bottom">copy</button><br />
							</div>
							<div style="display:inline-block; min-width:49%; vertical-align:top;">
								<input readonly class="cls" type="text" id="clouds-top" value="clouds-top"><button data-copytarget="#clouds-top">copy</button><br />
								<input readonly class="cls" type="text" id="clouds-bottom" value="clouds-bottom"><button data-copytarget="#clouds-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="clouds2-top" value="clouds2-top"><button data-copytarget="#clouds2-top">copy</button><br />
								<input readonly class="cls" type="text" id="clouds2-bottom" value="clouds2-bottom"><button data-copytarget="#clouds2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="clouds3-top" value="clouds3-top"><button data-copytarget="#clouds3-top">copy</button><br />
								<input readonly class="cls" type="text" id="clouds3-bottom" value="clouds3-bottom"><button data-copytarget="#clouds3-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="clouds4-top" value="clouds4-top"><button data-copytarget="#clouds4-top">copy</button><br />
								<input readonly class="cls" type="text" id="clouds4-bottom" value="clouds4-bottom"><button data-copytarget="#clouds4-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="graph-top" value="graph-top"><button data-copytarget="#graph-top">copy</button><br />
								<input readonly class="cls" type="text" id="graph-bottom" value="graph-bottom"><button data-copytarget="#graph-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="graph2-top" value="graph2-top"><button data-copytarget="#graph2-top">copy</button><br />
								<input readonly class="cls" type="text" id="graph2-bottom" value="graph2-bottom"><button data-copytarget="#graph2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="graph3-top" value="graph3-top"><button data-copytarget="#graph3-top">copy</button><br />
								<input readonly class="cls" type="text" id="graph3-bottom" value="graph3-bottom"><button data-copytarget="#graph3-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="graph4-top" value="graph4-top"><button data-copytarget="#graph4-top">copy</button><br />
								<input readonly class="cls" type="text" id="graph4-bottom" value="graph4-bottom"><button data-copytarget="#graph4-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="mountains-top" value="mountains-top"><button data-copytarget="#mountains-top">copy</button><br />
								<input readonly class="cls" type="text" id="mountains-bottom" value="mountains-bottom"><button data-copytarget="#mountains-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="mountains2-top" value="mountains2-top"><button data-copytarget="#mountains2-top">copy</button><br />
								<input readonly class="cls" type="text" id="mountains2-bottom" value="mountains2-bottom"><button data-copytarget="#mountains2-bottom">copy</button>
							</div>
							<div style="display:inline-block; min-width:49%; vertical-align:top;">
								<input readonly class="cls" type="text" id="ramp-top" value="ramp-top"><button data-copytarget="#ramp-top">copy</button><br />
								<input readonly class="cls" type="text" id="ramp-bottom" value="ramp-bottom"><button data-copytarget="#ramp-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="ramp2-top" value="ramp2-top"><button data-copytarget="#ramp2-top">copy</button><br />
								<input readonly class="cls" type="text" id="ramp2-bottom" value="ramp2-bottom"><button data-copytarget="#ramp2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="slant-top" value="slant-top"><button data-copytarget="#slant-top">copy</button><br />
								<input readonly class="cls" type="text" id="slant-bottom" value="slant-bottom"><button data-copytarget="#slant-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="slant2-top" value="slant2-top"><button data-copytarget="#slant2-top">copy</button><br />
								<input readonly class="cls" type="text" id="slant2-bottom" value="slant2-bottom"><button data-copytarget="#slant2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="triangle-top" value="triangle-top"><button data-copytarget="#triangle-top">copy</button><br />
								<input readonly class="cls" type="text" id="triangle-bottom" value="triangle-bottom"><button data-copytarget="#triangle-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="triangle2-top" value="triangle2-top"><button data-copytarget="#triangle2-top">copy</button><br />
								<input readonly class="cls" type="text" id="triangle2-bottom" value="triangle2-bottom"><button data-copytarget="#triangle2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="wave-top" value="wave-top"><button data-copytarget="#wave-top">copy</button><br />
								<input readonly class="cls" type="text" id="wave-bottom" value="wave-bottom"><button data-copytarget="#wave-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="wave2-top" value="wave2-top"><button data-copytarget="#wave2-top">copy</button><br />
								<input readonly class="cls" type="text" id="wave2-bottom" value="wave2-bottom"><button data-copytarget="#wave2-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="waves-top" value="waves-top"><button data-copytarget="#waves-top">copy</button><br />
								<input readonly class="cls" type="text" id="waves-bottom" value="waves-bottom"><button data-copytarget="#waves-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="waves2-top" value="waves2-top"><button data-copytarget="#waves2-top">copy</button><br />
								<input readonly class="cls" type="text" id="waves2-bottom" value="waves2-bottom"><button data-copytarget="#waves2-bottom">copy</button>
							</div>
							<div style="display:inline-block; min-width:49%; vertical-align:top;">
								<input readonly class="cls" type="text" id="torn" value="torn"><button data-copytarget="#torn">copy</button><br />
								<input readonly class="cls" type="text" id="zigzag-top" value="zigzag-top"><button data-copytarget="#zigzag-top">copy</button><br />
								<input readonly class="cls" type="text" id="zigzag-bottom" value="zigzag-bottom"><button data-copytarget="#zigzag-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="castle-top" value="castle-top"><button data-copytarget="#castle-top">copy</button><br />
								<input readonly class="cls" type="text" id="castle-bottom" value="castle-bottom"><button data-copytarget="#castle-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="book-top" value="book-top"><button data-copytarget="#book-top">copy</button><br />
								<input readonly class="cls" type="text" id="book-bottom" value="book-bottom"><button data-copytarget="#book-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="lines-top" value="lines-top"><button data-copytarget="#lines-top">copy</button><br />
								<input readonly class="cls" type="text" id="lines-bottom" value="lines-bottom"><button data-copytarget="#lines-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="points-top" value="points-top"><button data-copytarget="#points-top">copy</button><br />
								<input readonly class="cls" type="text" id="points-bottom" value="points-bottom"><button data-copytarget="#points-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="bumps-top" value="bumps-top"><button data-copytarget="#bumps-top">copy</button><br />
								<input readonly class="cls" type="text" id="bumps-bottom" value="bumps-bottom"><button data-copytarget="#bumps-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="corners-top" value="corners-top"><button data-copytarget="#corners-top">copy</button><br />
								<input readonly class="cls" type="text" id="corners-bottom" value="corners-bottom"><button data-copytarget="#corners-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="checkers-top" value="checkers-top"><button data-copytarget="#checkers-top">copy</button><br />
								<input readonly class="cls" type="text" id="checkers-bottom" value="checkers-bottom"><button data-copytarget="#checkers-bottom">copy</button><br />
								<input readonly class="cls" type="text" id="fade-top" value="fade-top"><button data-copytarget="#fade-top">copy</button><br />
								<input readonly class="cls" type="text" id="fade-bottom" value="fade-bottom"><button data-copytarget="#fade-bottom">copy</button>
							</div>
						</li>
						<li>
							<p>Now add <input readonly class="cls" type="text" id="ontop" value="-ontop"><button data-copytarget="#ontop">copy</button> or <input readonly class="cls" type="text" id="onbottom" value="-onbottom"><button data-copytarget="#onbottom">copy</button> to the end of the shape class to indicate if you want the shape to appear on the top or bottom of that element.</p>
							<p>Example: <b>arrow-top-onbottom</b></p>
						</li>
					</ol>
				</p>
				<p><b>Details:</b> By default, the shapes will be grey. You can customize the color, height, width, and margin of the dividers by including any of the CSS variables below to the <b>Element's Settings > Advanced tab > CSS ID & Classes > Custom CSS > Main Element</b> CSS Box.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;">
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--top-divider-color:<br />
--bottom-divider-color:<br />
--top-divider-height:<br />
--bottom-divider-height:<br />
--top-divider-width:<br />
--bottom-divider-width:<br />
--top-divider-margin:<br />
--bottom-divider-margin:
					</pre>
				</div>
				<p>Hint: Most of the time you will use <b>-bottom-ontop</b> and <b>-top-onbottom</b>. Additionally, you can flip the top or bottom SVG horizontally, vertically, or both by also adding one of the following classes for each divider:</p>
				<p><b>Flip Vertically:</b></p>
				<input readonly class="cls" type="text" id="top-flip-y" value="top-flip-y"><button data-copytarget="#top-flip-y">copy</button><br />
				<input readonly class="cls" type="text" id="bottom-flip-y" value="bottom-flip-y"><button data-copytarget="#bottom-flip-y">copy</button>
				<p><b>Flip Horizontally:</b></p>
				<input readonly class="cls" type="text" id="top-flip-x" value="top-flip-x"><button data-copytarget="#top-flip-x">copy</button><br />
				<input readonly class="cls" type="text" id="bottom-flip-x" value="bottom-flip-x"><button data-copytarget="#bottom-flip-x">copy</button>
				<p><b>Flip Vertically and Horizontally:</b></p>
				<input readonly class="cls" type="text" id="top-flip-xy" value="top-flip-xy"><button data-copytarget="#top-flip-xy">copy</button><br />
				<input readonly class="cls" type="text" id="bottom-flip-xy" value="bottom-flip-xy"><button data-copytarget="#bottom-flip-xy">copy</button>
				<p><b>Notes:</b> In the visual builder, you’ll need to save your changes in order for the custom shape divider to appear. Once you add the class, save the changes in the element, then save the page changes. You will see the new shape added to that section.</p>
			</td>
		</tr>
	</table>
</ul> <?php
include('divider_shadows.php'); ?>