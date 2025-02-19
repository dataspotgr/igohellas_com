<?php 

$class1 = "bg-effects";
$docs = "https://divihacks.com/docs/background-effects/";

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
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=design_options#bg-effects' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> Add custom effects (CSS Transform & Filter) to the element's background image by default, and also on hover.</p>
				<p><b>Setup:</b>
					<ol>
						<li>Add the class <input readonly class="cls" type="text" id="<?php echo $class1; ?>" value="<?php echo $class1; ?>"><button data-copytarget="#<?php echo $class1; ?>">copy</button> to the <b>Element's Settings > Advanced tab > CSS ID & Classes > CSS Class</b> and that will enable the styles on the background image. This works with parallax images too.</li>
						<li>If you aren't familiar with manually setting CSS Transform and Filter styles, please take a look at the <a href="<?php echo $docs; ?>" target="_blank">documentation</a>.
					</ol>
				</p>
				<p><b>Default and Hover Styling:</b> Add the following CSS Variables to the <b>Element's Settings > Advanced tab > Custom CSS > Main Element</b>:</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;">
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--background-transform:<br />
--background-hover-transform:<br />
--background-filter:<br />
--background-hover-filter:<br />
--transition-duration:;
					</pre>
				</div>
				<p><strong>–background-transform</strong> and <strong>–background-hover-transform</strong> options:</p>
				<table>
					<tbody>
						<tr>
							<th>Transform Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td>matrix(<i>n,n,n,n,n,n</i>)</td>
							<td>Defines a 2D transformation, using a matrix of six values</td>
						</tr>
						<tr>
							<td>matrix3d<br> (<i>n,n,n,n,n,n,n,n,n,n,n,n,n,n,n,n</i>)</td>
							<td>Defines a 3D transformation, using a 4×4 matrix of 16 values</td>
						</tr>
						<tr>
							<td>translate(<i>x,y</i>)</td>
							<td>Defines a 2D translation</td>
						</tr>
						<tr>
							<td>translate3d(<i>x,y,z</i>)</td>
							<td>Defines a 3D translation</td>
						</tr>
						<tr>
							<td>translateX(<i>x</i>)</td>
							<td>Defines a translation, using only the value for the X-axis</td>
						</tr>
						<tr>
							<td>translateY(<i>y</i>)</td>
							<td>Defines a translation, using only the value for the Y-axis</td>
						</tr>
						<tr>
							<td>translateZ(<i>z</i>)</td>
							<td>Defines a 3D translation, using only the value for the Z-axis</td>
						</tr>
						<tr>
							<td>scale(<i>x,y</i>)</td>
							<td>Defines a 2D scale transformation</td>
						</tr>
						<tr>
							<td>scale3d(<i>x,y,z</i>)</td>
							<td>Defines a 3D scale transformation</td>
						</tr>
						<tr>
							<td>scaleX(<i>x</i>)</td>
							<td>Defines a scale transformation by giving a value for the X-axis</td>
						</tr>
						<tr>
							<td>scaleY(<i>y</i>)</td>
							<td>Defines a scale transformation by giving a value for the Y-axis</td>
						</tr>
						<tr>
							<td>scaleZ(<i>z</i>)</td>
							<td>Defines a 3D scale transformation by giving a value for the Z-axis</td>
						</tr>
						<tr>
							<td>rotate(<i>angle</i>)</td>
							<td>Defines a 2D rotation, the angle is specified in the parameter</td>
						</tr>
						<tr>
							<td>rotate3d(<i>x,y,z,angle</i>)</td>
							<td>Defines a 3D rotation</td>
						</tr>
						<tr>
							<td>rotateX(<i>angle</i>)</td>
							<td>Defines a 3D rotation along the X-axis</td>
						</tr>
						<tr>
							<td>rotateY(<i>angle</i>)</td>
							<td>Defines a 3D rotation along the Y-axis</td>
						</tr>
						<tr>
							<td>rotateZ(<i>angle</i>)</td>
							<td>Defines a 3D rotation along the Z-axis</td>
						</tr>
						<tr>
							<td>skew(<i>x-angle,y-angle</i>)</td>
							<td>Defines a 2D skew transformation along the X- and the Y-axis</td>
						</tr>
						<tr>
							<td>skewX(<i>angle</i>)</td>
							<td>Defines a 2D skew transformation along the X-axis</td>
						</tr>
						<tr>
							<td>skewY(<i>angle</i>)</td>
							<td>Defines a 2D skew transformation along the Y-axis</td>
						</tr>
						<tr>
							<td>perspective(<i>n</i>)</td>
							<td>Defines a perspective view for a 3D transformed element</td>
						</tr>
					</tbody>
				</table>
				<p><strong>–background-filter</strong> and <strong>–background-hover-filter</strong> options:</p>
				<table>
					<tbody>
						<tr>
							<th>Filter Property</th>
							<th>Description</th>
						</tr>
						<tr>
							<td>blur(px)</td>
							<td>
								<p>Applies a blur effect to the image. A larger value will create more blur.</p>
								<p>If no value is specified, 0 is used.</p>
							</td>
						</tr>
						<tr>
							<td>brightness(%)</td>
							<td>
								<p>Adjusts the brightness of the image.</p>
								<p>0% will make the image completely black.<br> 100% (1) is default and represents the original image.<br> Values over 100% will provide brighter results.</p>
							</td>
						</tr>
						<tr>
							<td>contrast(%)</td>
							<td>
								<p>Adjusts the contrast of the image.</p>
								<p>0% will make the image completely black.<br> 100% (1) is default, and represents the original image.<br> Values over 100% will provide results with more contrast.</p>
							</td>
						</tr>
						<tr>
							<td>drop-shadow(h-shadow v-shadow blur spread color)</td>
							<td>
								<p>Applies a drop shadow effect to the image.</p>
								<p>Possible values:<br> h-shadow&nbsp;– Required. Specifies a pixel value for the horizontal shadow. Negative values place the shadow to the left of the image.</p>
								<p>v-shadow&nbsp;– Required. Specifies a pixel value for the vertical shadow. Negative values place the shadow above the image.</p>
								<p>blur&nbsp;– Optional. This is the third value, and must be in pixels. Adds a blur effect to the shadow. A larger value will create more blur (the shadow becomes bigger and lighter). Negative values are not allowed. If no value is specified, 0 is used (the shadow’s edge is sharp).</p>
								<p>spread&nbsp;– Optional. This is the fourth value, and must be in pixels. Positive values will cause the shadow to expand and grow bigger, and negative values will cause the shadow to shrink. If not specified, it will be 0 (the shadow will be the same size as the element).<br> Note:&nbsp;Chrome, Safari and Opera, and maybe other browsers, do not support this 4th length; it will not render if added.</p>
								<p>color&nbsp;– Optional. Adds a color to the shadow. If not specified, the color depends on the browser (often black).</p>
								<p>An example of creating a red shadow, which is 8px big both horizontally and vertically, with a blur effect of 10px:</p>
								<p>filter: drop-shadow(8px 8px 10px red);</p>
							</td>
						</tr>
						<tr>
							<td>grayscale(%)</td>
							<td>
								<p>Converts the image to grayscale.</p>
								<p>0% (0) is default and represents the original image.<br> 100% will make the image completely gray (used for black and white images).</p>
								<p>Note:&nbsp;Negative values are not allowed.</p>
							</td>
						</tr>
						<tr>
							<td>hue-rotate(deg)</td>
							<td>
								<p>Applies a hue rotation on the image. The value defines the number of degrees around the color circle the image samples will be adjusted. 0deg is default, and represents the original image.</p>
								<p>Note:&nbsp;Maximum value is 360deg.</p>
							</td>
						</tr>
						<tr>
							<td>invert(%)</td>
							<td>
								<p>Inverts the samples in the image.</p>
								<p>0% (0) is default and represents the original image.<br> 100% will make the image completely inverted.</p>
								<p>Note:&nbsp;Negative values are not allowed.</p>
							</td>
						</tr>
						<tr>
							<td>opacity(%)</td>
							<td>
								<p>Sets the opacity level for the image. The opacity-level describes the transparency-level, where:</p>
								<p>0% is completely transparent.<br> 100% (1) is default and represents the original image (no transparency).</p>
								<p>Note:&nbsp;Negative values are not allowed.</p>
							</td>
						</tr>
						<tr>
							<td>saturate(%)</td>
							<td>
								<p>Saturates the image.</p>
								<p>0% (0) will make the image completely un-saturated.<br> 100% is default and represents the original image.<br> Values over 100% provides super-saturated results.</p>
								<p>Note:&nbsp;Negative values are not allowed.</p>
							</td>
						</tr>
						<tr>
							<td>sepia(%)</td>
							<td>
								<p>Converts the image to sepia.</p>
								<p>0% (0) is default and represents the original image.<br> 100% will make the image completely sepia.</p>
								<p>Note:&nbsp;Negative values are not allowed.</p>
							</td>
						</tr>
						<tr>
							<td>url()</td>
							<td>
								<p>The url() function takes the location of an XML file that specifies an SVG filter, and may include an anchor to a specific filter element. Example:</p>
								<p>filter: url(svg-url#element-id)</p>
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</table>
</ul>