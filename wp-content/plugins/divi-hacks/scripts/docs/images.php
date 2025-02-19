<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom SVG Shapes</b></p>
					<p><a href="https://divihacks.com/docs/custom-svgs/" target="_blank">View Examples & Documentation</a></p>
					<input readonly class="cls" type="text" id="custom-svg" value="custom-svg"><button data-copytarget="#custom-svg">copy</button>			
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=blog_options#custom-svgs' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Create your own SVG graphics by putting the SVG path inside a code module and adding the class <input readonly class="cls" type="text" id="custom-svg" value="custom-svg"><button data-copytarget="#custom-svg">copy</button></p>
				<p><b>Setup:</b><br />
					<ol>
						<li>Add the class <input readonly class="cls" type="text" id="custom-svg" value="custom-svg"><button data-copytarget="#custom-svg">copy</button> to a <strong>code module</strong>.</li>
						<li>Create an SVG shape below, and then copy string of numbers and letters located in the bottom right corner of the SVG creator below. (Example: M 0 600 L 400 0 L 800 600 Z)</li>
						<li>Paste this string of numbers inside the code module.</li>
					</ol>
					<p><b>Details:</b> You can customize the color of the SVG by adding the following CSS variable to the <b>Code Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;">
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--svg-color:
					</pre>
				</div>
				</p>
			</td>
		</tr>
	</table>
</ul>
<iframe height="265" style="width: 100%; min-height:80vh" scrolling="no" title="SVG Path Builder" src="https://codepen.io/charlie-wedel/embed/preview/VwYygWQ?height=265&theme-id=light&default-tab=result" frameborder="no" allowtransparency="true" allowfullscreen="true"></iframe>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Image Shapes</b></p>
					<p><a href="https://divihacks.com/docs/image-shapes/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=design_options#image-shapes' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> These classes will turn the image module into a shape. Add any of the classes to <b>Image Module Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
				<p><b>Classes:</b><br />
					<div style="display:inline-block; min-width:49%; vertical-align:top;">
						<input readonly class="cls" type="text" id="image-wide-bottom-trapezoid" value="image-wide-bottom-trapezoid"><button data-copytarget="#image-wide-bottom-trapezoid">copy</button><br />
						<input readonly class="cls" type="text" id="image-wide-top-trapezoid" value="image-wide-top-trapezoid"><button data-copytarget="#image-wide-top-trapezoid">copy</button><br />
						<input readonly class="cls" type="text" id="image-wide-right-trapezoid" value="image-wide-right-trapezoid"><button data-copytarget="#image-wide-right-trapezoid">copy</button><br />
						<input readonly class="cls" type="text" id="image-wide-left-trapezoid" value="image-wide-left-trapezoid"><button data-copytarget="#image-wide-left-trapezoid">copy</button><br />
						<input readonly class="cls" type="text" id="image-polygon-top-left" value="image-polygon-top-left"><button data-copytarget="#image-polygon-top-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-polygon-top-right" value="image-polygon-top-right"><button data-copytarget="#image-polygon-top-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-polygon-bottom-left" value="image-polygon-bottom-left"><button data-copytarget="#image-polygon-bottom-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-polygon-bottom-right" value="image-polygon-bottom-right"><button data-copytarget="#image-polygon-bottom-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-vertical-skew-right" value="image-vertical-skew-right"><button data-copytarget="#image-vertical-skew-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-vertical-skew-left" value="image-vertical-skew-left"><button data-copytarget="#image-vertical-skew-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-horizontal-skew-right" value="image-horizontal-skew-right"><button data-copytarget="#image-horizontal-skew-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-horizontal-skew-left" value="image-horizontal-skew-left"><button data-copytarget="#image-horizontal-skew-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-chevron-right" value="image-chevron-right"><button data-copytarget="#image-chevron-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-chevron-left" value="image-chevron-left"><button data-copytarget="#image-chevron-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-chevron-up" value="image-chevron-up"><button data-copytarget="#image-chevron-up">copy</button><br />
						<input readonly class="cls" type="text" id="image-chevron-down" value="image-chevron-down"><button data-copytarget="#image-chevron-down">copy</button>
					</div>
					<div style="display:inline-block; min-width:49%; vertical-align:top;">
						<input readonly class="cls" type="text" id="image-point-up" value="image-point-up"><button data-copytarget="#image-point-up">copy</button><br />
						<input readonly class="cls" type="text" id="image-point-down" value="image-point-down"><button data-copytarget="#image-point-down">copy</button><br />
						<input readonly class="cls" type="text" id="image-point-left" value="image-point-left"><button data-copytarget="#image-point-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-point-right" value="image-point-right"><button data-copytarget="#image-point-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-up-right" value="image-slant-up-right"><button data-copytarget="#image-slant-up-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-up-left" value="image-slant-up-left"><button data-copytarget="#image-slant-up-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-down-right" value="image-slant-down-right"><button data-copytarget="#image-slant-down-right">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-down-left" value="image-slant-down-left"><button data-copytarget="#image-slant-down-left">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-right-top" value="image-slant-right-top"><button data-copytarget="#image-slant-right-top">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-right-bottom" value="image-slant-right-bottom"><button data-copytarget="#image-slant-right-bottom">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-left-top" value="image-slant-left-top"><button data-copytarget="#image-slant-left-top">copy</button><br />
						<input readonly class="cls" type="text" id="image-slant-left-bottom" value="image-slant-left-bottom"><button data-copytarget="#image-slant-left-bottom">copy</button><br />
						<input readonly class="cls" type="text" id="image-vertical-hexagon" value="image-vertical-hexagon"><button data-copytarget="#image-vertical-hexagon">copy</button><br />
						<input readonly class="cls" type="text" id="image-horizonal-hexagon" value="image-horizonal-hexagon"><button data-copytarget="#image-horizonal-hexagon">copy</button><br />
						<input readonly class="cls" type="text" id="image-star" value="image-star"><button data-copytarget="#image-star">copy</button><br />
						<input readonly class="cls" type="text" id="image-warp-square" value="image-warp-square"><button data-copytarget="#image-warp-square">copy</button><br />
						<input readonly class="cls" type="text" id="image-diamond" value="image-diamond"><button data-copytarget="#image-diamond">copy</button>
					</div>
				</p>
				<p><b>Details:</b> These hacks use the css clip-path property to ‘crop’ out the edges to give the image a new shape. Add one of the classes to <b>Image Settings > Advanced tab > CSS ID & Classes > CSS Class</b>.</p>
				<p><b>Note:</b> These shapes will NOT show up on Internet Explorer or Microsoft Edge because these browsers don’t support the clip-path css property. Instead, it will just show the element without the shape.</p>
				<p><b>Add a Drop Shadow:</b> Box shadows settings don’t work on these shapes. Instead, add the filter CSS property to the <b>Element's Settings > Advanced tab > Custom CSS > Main Element Custom CSS</b>.<br />
				<pre style="font-family:monospace !important; padding:10px; background-color:#4e5764; color:#fff;">filter: drop-shadow(0px 3px 5px rgba(0,0,0,0.5));<br />-webkit-filter: drop-shadow(0px 3px 5px rgba(0,0,0,0.5));</pre></p>
			</td>
		</tr>
	</table>
</ul>