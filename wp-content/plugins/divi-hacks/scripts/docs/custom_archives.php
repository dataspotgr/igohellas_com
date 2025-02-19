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
					<p><b>Default Posts Archive</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#default" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_custom_archive_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack enables you to create custom pages for the default posts archive.</p>
				<p><b>How to Set it Up:</b><br />
					<ol>
						<li>Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear.</li>
						<li>Select the page you created in the <b>Theme Customizer > Divi Hacks > Custom Posts Archive Page</b> panel.</li>
					</ol>
				</p>
				<p><b>Customize the Archive:</b><br />
					<ol>
						<li>Refer to the table below to hide/show various elements of the post archive using the shortcode <b>[dh-archive]</b> and it’s many attributes.</li>
						<li>(Optional) Customize the look of the articles even further by adding custom CSS variables (located at the bottom).</li>
					</ol>
				</p>
				<p><b>Shortcodes:</b><br />
					<ul>
						<li><b>[posts-found]</b> = shows the number of total posts found in the archive</li>
						<li><b>[dh-archive]</b> = shows the default archive and sidebar (specifically the #page-container element from the archive page).<br />
							Set optional attributes to customize the default archive layout:<br />
							<table>
								<tbody>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><b>Attribute</b></span></td>
										<td data-th="Value"><span class="bt-content"><b>Value</b></span></td>
										<td data-th="Description"><span class="bt-content"><b>Description</b></span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">style</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">default, grid</span></td>
										<td data-th="Description"><span class="bt-content">choose between the default list, or a grid layout</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">sidebar</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the sidebar</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the 'read more' button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button-align</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">left, center, right</span></td>
										<td data-th="Description"><span class="bt-content">align the button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">posts</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">1, 2, 3, 4, 5, etc...</span></td>
										<td data-th="Description"><span class="bt-content">shows the specified number of posts</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">meta</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the all the meta data</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">date</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post date</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">author</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post author</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">comments</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post comments</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">categories</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the categories</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">pagination</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the pagination</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">image</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post featured image</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">excerpt</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the excerpt</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">columns</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">set how many columns in the grid. *this only applies when style=grid</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">offset</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4, 5...</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">offset the number of posts</span></td>
									</tr>
								</tbody>
							</table>
							<p><b>Shortcode Example</b><br />
								<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[dh-archive button="show" button-align="center" style="grid" posts="4" meta="show" columns="3" author="hide" date="show" comments="hide" categories="show" excerpt="show" image="show" pagination="hide"]
								</pre>
							</p>
						</li>
					</ul>
				</p>
				</div>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom Category Archive(s)</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#category" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_custom_category_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack enables you to create custom pages for category archives.</p>
				<p><b>How to Set it Up:</b><br />
					<ol>
						<li>Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear.</li>
						<li>Select the page you created in the <b>Theme Customizer > Divi Hacks > Custom Category Archive Page</b> panel.</li>
					</ol>
				</p>
				<p><b>Customize the Archive:</b><br />
					<ol>
						<li>Refer to the table below to hide/show various elements of the post archive using the shortcode <b>[dh-archive]</b> and it’s many attributes.</li>
						<li>(Optional) Customize the look of the articles even further by adding custom CSS variables (located at the bottom).</li>
					</ol>
				</p>
				<p><b>Shortcodes:</b><br />
					<ul>
						<li><b>[category-title]</b> = shows the name of the category of the currently displayed category archive</li>
						<li><b>[category-description]</b> = shows the description of the category</li>
						<li><b>[posts-found]</b> = shows the number of total posts found in the archive</li>
						<li><b>[dh-archive]</b> = shows the default archive and sidebar (specifically the #page-container element from the archive page).<br />
							Set optional attributes to customize the default archive layout:<br />
							<table>
								<tbody>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><b>Attribute</b></span></td>
										<td data-th="Value"><span class="bt-content"><b>Value</b></span></td>
										<td data-th="Description"><span class="bt-content"><b>Description</b></span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">style</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">default, grid</span></td>
										<td data-th="Description"><span class="bt-content">choose between the default list, or a grid layout</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">sidebar</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the sidebar</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the 'read more' button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button-align</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">left, center, right</span></td>
										<td data-th="Description"><span class="bt-content">align the button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">posts</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">1, 2, 3, 4, 5, etc...</span></td>
										<td data-th="Description"><span class="bt-content">shows the specified number of posts</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">meta</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the all the meta data</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">date</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post date</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">author</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post author</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">comments</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post comments</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">categories</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the categories</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">pagination</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the pagination</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">image</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post featured image</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">excerpt</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the excerpt</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">columns</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">set how many columns in the grid. *this only applies when style=grid</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">offset</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4, 5...</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">offset the number of posts</span></td>
									</tr>
								</tbody>
							</table>
							<p><b>Shortcode Example</b><br />
								<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[dh-archive button="show" button-align="center" style="grid" posts="4" meta="show" columns="3" author="hide" date="show" comments="hide" categories="show" excerpt="show" image="show" pagination="hide"]
								</pre>
							</p>
						</li>
					</ul>
					<p><b>Optional: Set a Different Page for Each Category</b></p>
					<p><b>How it Works:</b><br />
						Divi Hacks will first look for a page with the slug <b>archive_category_###</b> (### = slug of the category). If the page is not found for that category, the custom category archive page you set in the Theme Customizer will be displayed instead.</p>
					<p><b>How to Set it Up:</b>
						<ol>
							<li>Create a new page (or just duplicate the default category page you created) and give it the slug <b>archive_category_###</b>, replacing ### with the SLUG of the category.</li>
							<li>Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page, using the same attributes in the table above, and any of the other shortcodes available on custom category archives.</li>
						</ol>
					</p>
					<p><b>Important:</b><br />
						When you’re setting up your categories, make sure the category slugs do NOT contain underscores (_).
					</p>
				</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom Tag Archive(s)</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#tag" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_custom_tag_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack enables you to create custom pages for tag archives.</p>
				<p><b>How to Set it Up:</b><br />
					<ol>
						<li>Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear.</li>
						<li>Select the page you created in the <b>Theme Customizer > Divi Hacks > Custom Tag Archive Page</b> panel.</li>
					</ol>
				</p>
				<p><b>Customize the Archive:</b><br />
					<ol>
						<li>Refer to the table below to hide/show various elements of the post archive using the shortcode <b>[dh-archive]</b> and it’s many attributes.</li>
						<li>(Optional) Customize the look of the articles even further by adding custom CSS variables (located at the bottom).</li>
					</ol>
				</p>
				<p><b>Shortcodes:</b><br />
					<ul>
						<li><b>[tag-title]</b> = shows the name of the tag of the currently displayed tag archive</li>
						<li><b>[tag-description]</b> = shows the description of the tag</li>
						<li><b>[posts-found]</b> = shows the number of total posts found in the archive</li>
						<li><b>[dh-archive]</b> = shows the default archive and sidebar (specifically the #page-container element from the archive page).<br />
							Set optional attributes to customize the default archive layout:<br />
							<table>
								<tbody>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><b>Attribute</b></span></td>
										<td data-th="Value"><span class="bt-content"><b>Value</b></span></td>
										<td data-th="Description"><span class="bt-content"><b>Description</b></span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">style</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">default, grid</span></td>
										<td data-th="Description"><span class="bt-content">choose between the default list, or a grid layout</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">sidebar</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the sidebar</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the 'read more' button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button-align</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">left, center, right</span></td>
										<td data-th="Description"><span class="bt-content">align the button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">posts</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">1, 2, 3, 4, 5, etc...</span></td>
										<td data-th="Description"><span class="bt-content">shows the specified number of posts</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">meta</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the all the meta data</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">date</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post date</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">author</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post author</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">comments</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post comments</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">categories</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the categories</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">pagination</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the pagination</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">image</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post featured image</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">excerpt</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the excerpt</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">columns</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">set how many columns in the grid. *this only applies when style=grid</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">offset</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4, 5...</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">offset the number of posts</span></td>
									</tr>
								</tbody>
							</table>
							<p><b>Shortcode Example</b><br />
								<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[dh-archive button="show" button-align="center" style="grid" posts="4" meta="show" columns="3" author="hide" date="show" comments="hide" categories="show" excerpt="show" image="show" pagination="hide"]
								</pre>
							</p>
						</li>
					</ul>
					<p><b>Optional: Set a Different Page for Each Tag</b></p>
					<p><b>How it Works:</b><br />
						Divi Hacks will first look for a page with the slug <b>archive_tag_###</b> (### = slug of the tag). If the page is not found for that tag, the custom tag archive page you set in the Theme Customizer will be displayed instead.</p>
					<p><b>How to Set it Up:</b>
						<ol>
							<li>Create a new page (or just duplicate the default tag page you created) and give it the slug <b>archive_tag_###</b>, replacing ### with the SLUG of the tag.</li>
							<li>Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page, using the same attributes in the table above, and any of the other shortcodes available on custom tag archives.</li>
						</ol>
					</p>
					<p><b>Important:</b><br />
						When you’re setting up your tags, make sure the tag slugs do NOT contain underscores (_).
					</p>
				</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom Custom Post Type Archive(s)</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#cpt" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_custom_cptarchive_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack enables you to create custom pages for custom post type archives.</p>
				<p><b>How to Set it Up:</b><br />
					<ol>
						<li>Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear.</li>
						<li>Select the page you created in the <b>Theme Customizer > Divi Hacks > Custom CPT Archive Page</b> panel.</li>
					</ol>
				</p>
				<p><b>Customize the Archive:</b><br />
					<ol>
						<li>Refer to the table below to hide/show various elements of the post archive using the shortcode <b>[dh-archive]</b> and it’s many attributes.</li>
						<li>(Optional) Customize the look of the articles even further by adding custom CSS variables (located at the bottom).</li>
					</ol>
				</p>
				<p><b>Shortcodes:</b><br />
					<ul>
						<li><b>[cpt-name-plural]</b> = shows the plural name of the custom post type</li>
						<li><b>[cpt-name-singular]</b> = shows the singular name of the custom post type</li>
						<li><b>[posts-found]</b> = shows the number of total posts found in the archive</li>
						<li><b>[dh-archive]</b> = shows the default archive and sidebar (specifically the #page-container element from the archive page).<br />
							Set optional attributes to customize the default archive layout:<br />
							<table>
								<tbody>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><b>Attribute</b></span></td>
										<td data-th="Value"><span class="bt-content"><b>Value</b></span></td>
										<td data-th="Description"><span class="bt-content"><b>Description</b></span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">style</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">default, grid</span></td>
										<td data-th="Description"><span class="bt-content">choose between the default list, or a grid layout</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">sidebar</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the sidebar</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the 'read more' button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button-align</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">left, center, right</span></td>
										<td data-th="Description"><span class="bt-content">align the button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">posts</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">1, 2, 3, 4, 5, etc...</span></td>
										<td data-th="Description"><span class="bt-content">shows the specified number of posts</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">meta</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the all the meta data</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">date</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post date</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">author</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post author</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">comments</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post comments</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">categories</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the categories</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">pagination</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the pagination</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">image</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post featured image</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">excerpt</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the excerpt</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">columns</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">set how many columns in the grid. *this only applies when style=grid</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">offset</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4, 5...</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">offset the number of posts</span></td>
									</tr>
								</tbody>
							</table>
							<p><b>Shortcode Example</b><br />
								<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[dh-archive button="show" button-align="center" style="grid" posts="4" meta="show" columns="3" author="hide" date="show" comments="hide" categories="show" excerpt="show" image="show" pagination="hide"]
								</pre>
							</p>
						</li>
					</ul>
					<p><b>Optional: Set a Different Page for Each CPT</b></p>
					<p><b>How it Works:</b><br />
						Divi Hacks will first look for a page with the slug <b>archive_cpt_###</b> (### = slug of the CPT). If the page is not found for that CPT, the custom CPT archive page you set in the Theme Customizer will be displayed instead.</p>
					<p><b>How to Set it Up:</b>
						<ol>
							<li>Create a new page (or just duplicate the default CPT page you created) and give it the slug <b>archive_cpt_###</b>, replacing ### with the SLUG of the CPT.</li>
							<li>Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page, using the same attributes in the table above, and any of the other shortcodes available on custom CPT archives.</li>
						</ol>
					</p>
					<p><b>Important:</b><br />
						When you’re setting up your Custom Post Type, make sure the CPT slugs do NOT contain underscores (_).
					</p>
				</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom Author Archive(s)</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#author" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_custom_author_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack enables you to create custom pages for author archives.</p>
				<p><b>How to Set it Up:</b><br />
					<ol>
						<li>Create a page using the page builder and add the shortcode <b>[dh-archive]</b> where you want the posts to appear.</li>
						<li>Select the page you created in the <b>Theme Customizer > Divi Hacks > Custom Author Archive Page</b> panel.</li>
					</ol>
				</p>
				<p><b>Customize the Archive:</b><br />
					<ol>
						<li>Refer to the table below to hide/show various elements of the post archive using the shortcode <b>[dh-archive]</b> and it’s many attributes.</li>
						<li>(Optional) Customize the look of the articles even further by adding custom CSS variables (located at the bottom).</li>
					</ol>
				</p>
				<p><b>Shortcodes:</b><br />
					<ul>
						<li><b>[author-name]</b> = shows the name of the author of the currently displayed author archive</li>
						<li><b>[author-avatar]</b> = shows the avatar of the author</li>
						<li><b>[posts-found]</b> = shows the number of total posts found in the archive</li>
						<li><b>[dh-archive]</b> = shows the default archive and sidebar (specifically the #page-container element from the archive page).<br />
							Set optional attributes to customize the default archive layout:<br />
							<table>
								<tbody>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><b>Attribute</b></span></td>
										<td data-th="Value"><span class="bt-content"><b>Value</b></span></td>
										<td data-th="Description"><span class="bt-content"><b>Description</b></span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">style</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">default, grid</span></td>
										<td data-th="Description"><span class="bt-content">choose between the default list, or a grid layout</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">sidebar</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the sidebar</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the 'read more' button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button-align</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">left, center, right</span></td>
										<td data-th="Description"><span class="bt-content">align the button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">posts</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">1, 2, 3, 4, 5, etc...</span></td>
										<td data-th="Description"><span class="bt-content">shows the specified number of posts</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">meta</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the all the meta data</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">date</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post date</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">author</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post author</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">comments</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post comments</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">categories</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the categories</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">pagination</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the pagination</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">image</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post featured image</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">excerpt</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the excerpt</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">columns</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">set how many columns in the grid. *this only applies when style=grid</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">offset</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4, 5...</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">offset the number of posts</span></td>
									</tr>
								</tbody>
							</table>
							<p><b>Shortcode Example</b><br />
								<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[dh-archive button="show" button-align="center" style="grid" posts="4" meta="show" columns="3" author="hide" date="show" comments="hide" categories="show" excerpt="show" image="show" pagination="hide"]
								</pre>
							</p>
						</li>
					</ul>
					<p><b>Optional: Set a Different Page for Each Author</b></p>
					<p><b>How it Works:</b><br />
						Divi Hacks will first look for a page with the slug <b>archive_author_###</b> (### = USERNAME of the author). If the page is not found for that author, the custom author archive page you set in the Theme Customizer will be displayed instead.</p>
					<p><b>How to Set it Up:</b>
						<ol>
							<li>Create a new page (or just duplicate the default author page you created) and give it the slug <b>archive_author_###</b>, replacing ### with the USERNAME of the author.</li>
							<li>Using the page builder, add the shortcode <b>[dh-archive]</b> where you want the posts to appear on that page, using the same attributes in the table above, and any of the other shortcodes available on custom author archives.</li>
						</ol>
					</p>
					<p><b>Important:</b><br />
						When you’re creating new authors, make sure the usernames do NOT contain underscores (_).
					</p>
				</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom Search Results</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#search" target="_blank">View Examples & Documentation</a></p>
				</div>
			</td>
			<td class="hack_desc">
				<p>Enable this hack in the <a href="<?php echo admin_url( 'customize.php?autofocus[section]=dh_custom_search_options' ) ?>" target="_blank">Theme Customizer</a></p>
				<p><b>Description:</b> This hack enables you to create a custom page for search results.</p>
				<p><b>How to Set it Up:</b><br />
					<ol>
						<li>Create a page using the page builder and add the shortcode <b>[search-results]</b> where you want the posts to appear.</li>
						<li>Select the page you created in the <b>Theme Customizer > Divi Hacks > Custom Search Results Page</b> panel.</li>
					</ol>
				</p>
				<p><b>Customize the Archive:</b><br />
					<ol>
						<li>Refer to the table below to hide/show various elements of the post archive using the shortcode <b>[dh-archive]</b> and it’s many attributes.</li>
						<li>(Optional) Customize the look of the articles even further by adding custom CSS variables (located at the bottom).</li>
					</ol>
				</p>
				<p><b>Shortcodes:</b><br />
					<ul>
						<li><b>[search-term]</b> = shows the term that was searched for</li>
						<li><b>[posts-found]</b> = shows the number of total posts found in the archive</li>
						<li><b>[search-results]</b> = shows the default archive and sidebar (specifically the #page-container element from the archive page).<br />
							Set optional attributes to customize the default archive layout:<br />
							<table>
								<tbody>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><b>Attribute</b></span></td>
										<td data-th="Value"><span class="bt-content"><b>Value</b></span></td>
										<td data-th="Description"><span class="bt-content"><b>Description</b></span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">style</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">default, grid</span></td>
										<td data-th="Description"><span class="bt-content">choose between the default list, or a grid layout</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">sidebar</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the sidebar</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the 'read more' button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">button-align</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">left, center, right</span></td>
										<td data-th="Description"><span class="bt-content">align the button</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">posts</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">1, 2, 3, 4, 5, etc...</span></td>
										<td data-th="Description"><span class="bt-content">shows the specified number of posts</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">meta</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the all the meta data</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">date</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post date</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">author</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post author</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">comments</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post comments</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">categories</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the categories</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">pagination</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the pagination</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">image</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the post featured image</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">excerpt</span></strong></span></td>
										<td data-th="Value"><span class="bt-content">show, hide</span></td>
										<td data-th="Description"><span class="bt-content">show or hide the excerpt</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">columns</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">set how many columns in the grid. *this only applies when style=grid</span></td>
									</tr>
									<tr>
										<td data-th="Attribute"><span class="bt-content"><strong><span class="bt-content">offset</span></strong></span></td>
										<td data-th="Value" class="bt-hide"><span class="bt-content">1, 2, 3, 4, 5...</span></td>
										<td data-th="Description" class="bt-hide"><span class="bt-content">offset the number of posts</span></td>
									</tr>
								</tbody>
							</table>
							<p><b>Shortcode Example</b><br />
								<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
[search-results button="show" button-align="center" style="grid" posts="4" meta="show" columns="3" author="hide" date="show" comments="hide" categories="show" excerpt="show" image="show" pagination="hide"]
								</pre>
							</p>
						</li>
					</ul>
				</p>
			</td>
		</tr>
		<tr>
			<td class="hack_cls">
				<div class="dh_sticky">
					<p><b>Custom CSS Variables</b></p>
					<p><a href="https://divihacks.com/docs/custom-archives/#archive-variables" target="_blank">View Documentation</a></p>
				</div>
			</td>
			<td>
				<p><b>Customizing the Archive Articles even further…</b></p>
				<p>Use these like normal css properties like margin, padding, border, etc. Add these CSS properties to the <b>Text Module Settings > Advanced tab > Custom CSS > Main Element</b>.</p>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Article Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
-–article-shadow:<br />
-–article-border-radius:<br />
-–article-border-top:<br />
-–article-border-right:<br />
-–article-border-bottom:<br />
-–article-border-left:<br />
-–article-padding:<br />
-–article-margin:<br />
-–article-display:<br />
-–article-width:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Post Meta Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
-–postmeta-size:<br />
-–postmeta-weight:<br />
-–postmeta-color:<br />
-–postmeta-align:<br />
-–postmeta-transform:
					</pre>
				</div>
				<div style="max-width: 300px; width: auto; display: inline-block; margin: 20px 20px 0px 0px; vertical-align:top;"><p><b>Post Meta Link Styling</b></p>
					<pre style="font-family: monospace; padding:10px; background-color:#4e5764; color:#fff;">
-–postmeta-link-size:<br />
-–postmeta-link-weight:<br />
-–postmeta-link-color:<br />
-–postmeta-link-decoration:<br />
-–postmeta-link-transform:
					</pre>
				</div>
			</td>
		</tr>
	</table>
</ul>