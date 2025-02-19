<?php ?>
<ul>
	<table>
		<tr>
			<th>Classes</th>
			<th>Description</th>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<input readonly class="cls" type="text" id="custom-table" value="custom-table"><button data-copytarget="#custom-table">copy</button>
					<p><a href="https://divihacks.com/docs/custom-tables/" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in your <a href="<?php echo admin_url( 'admin.php?page=divi-hacks-settings&tab=design_options#custom-tables' ) ?>" target="_blank">Divi Hacks Settings Page</a></p>
				<p><b>Description:</b> This class enables a table to become responsive when viewed on a mobile device.</p>
				<p><b>Setup:</b><br />
					<ol>
						<li><p>Add <input readonly class="cls" type="text" id="custom-table" value="custom-table"><button data-copytarget="#custom-table">copy</button> to the <b>Text Module Settings > Advanced tab > CSS ID & Classes > CSS Classes</b> to activate the custom table. This will activate the CSS variables to allow you to style the table and automatically “stack” the row data vertically on mobile devices for better mobile responsiveness.  Sometimes, you may not want to stack the table data (for example, on tables with less than 3 columns and minimal data). In this case, you’ll want to disable the stacking by also including the class no-stacking.</p></li>
						<li><p>Insert a table in a text module through the visual builder.<br /><b>How to insert a table</b>: Under the visual tab on the text editor, click the button that looks like this: <img src="https://divihacks.com/wp-content/uploads/2018/08/add-tables.jpg" style="display:inline;">  Add as many rows and columns as you need. You can always add more later. You can also copy and paste in a table into the visual tab. Just make sure it’s not from a heavily formatted application like Microsoft Word.  Hint: on Mac, copy and paste tables into the Notes app, then highlight the whole table and paste it into the visual tab text editor. The Notes app does a good job of stripping unnecessary formatting.<br /><b>Troubleshooting</b>: If the table isn’t showing changes that you make, there may be some formatting in the table html.  Just highlight the whole table (in visual tab) and then click the button that looks like this <img src="https://divihacks.com/wp-content/uploads/2018/08/Screen-Shot-2018-08-28-at-12.45.45-PM.png" style="display:inline; width:20px;">. It will clear all custom formatting and inline styles found in the html.</p></li>
						<li><p>Customize the table with the CSS variables provided below.<br /><b>Note</b>: When editing in visual builder in tablet mode or phone mode, the table may not immediately change to the responsive table. To refresh the view, either hit the ‘save’ or ‘save draft’ button, or wait up to 60 seconds for the next ajax call which triggers the jQuery.</p></li>
					</ol>
				</p>
				<hr>
				<p style="font-weight:bold;font-size:18px;">Custom CSS Variables</p>
				<p>Use these like normal css properties like margin, padding, border, etc. Add these CSS properties to the <b>Text Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-border:<br />
--table-border-top:<br />
--table-border-right:<br />
--table-border-bottom:<br />
--table-border-left:<br />
--table-padding:<br />
--table-margin:<br />
--table-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Row Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-row-border:<br />
--table-row-border-top:<br />
--table-row-border-right:<br />
--table-row-border-bottom:<br />
--table-row-border-left:<br />
--table-row-padding:<br />
--table-row-margin:<br />
--table-row-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Data Styling &lt;td&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-data-border:<br />
--table-data-border-top:<br />
--table-data-border-right:<br />
--table-data-border-bottom:<br />
--table-data-border-left:<br />
--table-data-padding:<br />
--table-data-margin:<br />
--table-data-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Header Styling &lt;th&gt;</b><br />**The header will always default to the 1st row.</p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-row-header-border:<br />
--table-row-header-border-top:<br />
--table-row-header-border-right:<br />
--table-row-header-border-bottom:<br />
--table-row-header-border-left:<br />
--table-row-header-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Other Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-data-vertical-align:<br />
--table-row-odd-background:<br />
--table-row-even-background:<br />
--table-row-odd-color:<br />
--table-row-even-color:<br />
--table-column-hover-background:<br />
--table-row-hover-background:
					</pre>
				</div>
				<hr style="margin-top:20px;">
				<p style="font-weight:bold;font-size:18px;">Mobile CSS Variables</p>
				<p>Use these like normal css properties like margin, padding, border, etc. These CSS properties will override the above CSS variables on mobile devices. Add these CSS properties to the <b>Text Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-border:<br />
--mob-table-border-top:<br />
--mob-table-border-right:<br />
--mob-table-border-bottom:<br />
--mob-table-border-left:<br />
--mob-table-padding:<br />
--mob-table-margin:<br />
--mob-table-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Row Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-row-border:<br />
--mob-table-row-border-top:<br />
--mob-table-row-border-right:<br />
--mob-table-row-border-bottom:<br />
--mob-table-row-border-left:<br />
--mob-table-row-padding:<br />
--mob-table-row-margin:<br />
--mob-table-row-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Data Styling &lt;td&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-data-border:<br />
--mob-table-data-border-top:<br />
--mob-table-data-border-right:<br />
--mob-table-data-border-bottom:<br />
--mob-table-data-border-left:<br />
--mob-table-data-padding:<br />
--mob-table-data-margin:<br />
--mob-table-data-background:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Header Styling</b><br />**The header (1st row) is hidden on mobile devices. Instead, each heading is placed in the table data’s :before pseudo-element as a label. Here you can customize the labels.</p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-label-width:<br />
--mob-label-min-width:<br />
--mob-label-max-width:<br />
--mob-label-color:<br />
--mob-label-text-align:<br />
--mob-label-font-weight:<br />
--mob-label-font-family:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Other Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-row-odd-background:<br />
--mob-table-row-even-background:<br />
--mob-table-row-odd-color:<br />
--mob-table-row-even-color:
					</pre>
				</div>
				<hr style="margin-top:20px;">
				<p style="font-weight:bold;font-size:18px;">Gradient CSS Variables</p>
				<p>To enable gradient backgrounds you need to add additional classes to the text module (next to <b>custom-table</b> like in step 1 above).</p>
				<p>Example: If you want rows to have horizontal gradients, data to have vertical gradients, and the header to have a vertical gradient, you would add these classes to the text module which will set the direction of each gradient:<br /><br /><b>custom-table  horizontal-gradient-row  vertical-gradient-data  vertical-gradient-header</b></p>
				<div style="max-width: 49%; width: auto; display: inline-block; margin-right: 20px;"><p><b>Vertical Gradient Classes</b></p>
					<input readonly class="cls" type="text" id="vertical-gradient-table" value="vertical-gradient-table"><button data-copytarget="#vertical-gradient-table">copy</button><br />
					<input readonly class="cls" type="text" id="vertical-gradient-header" value="vertical-gradient-header"><button data-copytarget="#vertical-gradient-header">copy</button><br />
					<input readonly class="cls" type="text" id="vertical-gradient-row" value="vertical-gradient-row"><button data-copytarget="#vertical-gradient-row">copy</button><br />
					<input readonly class="cls" type="text" id="vertical-gradient-data" value="vertical-gradient-data"><button data-copytarget="#vertical-gradient-data">copy</button><br />
				</div>
				<div style="max-width: 49%; width: auto; display: inline-block; margin-right: 20px;"><p><b>Vertical Gradient Classes</b></p>
					<input readonly class="cls" type="text" id="horizontal-gradient-table" value="horizontal-gradient-table"><button data-copytarget="#horizontal-gradient-table">copy</button><br />
					<input readonly class="cls" type="text" id="horizontal-gradient-header" value="horizontal-gradient-header"><button data-copytarget="#horizontal-gradient-header">copy</button><br />
					<input readonly class="cls" type="text" id="horizontal-gradient-row" value="horizontal-gradient-row"><button data-copytarget="#horizontal-gradient-row">copy</button><br />
					<input readonly class="cls" type="text" id="horizontal-gradient-data" value="horizontal-gradient-data"><button data-copytarget="#horizontal-gradient-data">copy</button><br />
				</div>
				<p>Next, you will choose the start and end colors of each gradient.</p>
				<p>Add these CSS properties to the <b>Text Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Gradient Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-gradient-start-color:<br />
--table-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Row Gradient Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-row-gradient-start-color:<br />
--table-row-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Data Gradient Styling &lt;td&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-data-gradient-start-color:<br />
--table-data-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Odd Row Gradient Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-row-odd-gradient-start-color:<br />
--table-row-odd-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Even Row Gradient Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-row-even-gradient-start-color:<br />
--table-row-even-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Table Header Gradient Styling &lt;th&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--table-header-gradient-start-color:<br />
--table-header-gradient-end-color:
					</pre>
				</div>
				<hr style="margin-top:20px;">
				<p style="font-weight:bold;font-size:18px;">Mobile Gradient CSS Variables</p>
				<p>These gradient CSS properties will override the above gradient CSS variables on mobile devices.</p>
				<p>Add these CSS properties to the <b>Text Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Gradient Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-gradient-start-color:<br />
--mob-table-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Row Gradient Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-row-gradient-start-color:<br />
--mob-table-row-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Data Gradient Styling &lt;td&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-data-gradient-start-color:<br />
--mob-table-data-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Odd Row Gradient Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-row-odd-gradient-start-color:<br />
--mob-table-row-odd-gradient-end-color:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Mobile Table Even Row Gradient Styling &lt;tr&gt;</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
--mob-table-row-even-gradient-start-color:<br />
--mob-table-row-even-gradient-end-color:
					</pre>
				</div>
			</td>
		</tr>
	</table>
</ul>