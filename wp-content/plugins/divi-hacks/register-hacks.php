<?php

// ------------------------------------------- START -----------------------------------------------------------

$dh_switch_matrix = Array(

    Array(
        "title"         => "Wrap Elements in Shortcodes",
        "description"   => "Wrap any Section, Row, Column, or Module inside a shortcode. (Works great with plugins like Custom Content Shortcode and Shortcodes Ultimate).<br />
        <br />
        Add the first part of an enclosing shortcode to the element's CSS Classes box. Example: if the shortcode is [my_shortcode option=yes]content[/my_shortcode], you would put the first part - [my_shortcode option=yes] in the CSS Classes box like it's a class. Make sure you include the brackets [].<br />
        <br />
        <a href='https://divihacks.com/docs/wrap-shortcodes/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "other auto-on",
        "option"        => "wrap-shortcodes",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Stacked Login Form",
        "description"   => "Allow the login module title, body text, and login form to be stacked vertically.<br />
        <br />
        Add the class <b>stack</b> to the login module to activate the hack.<br />
        <br />
        You may also use the CSS variable <b>--forgot-pass-align:</b> to customize the text alignment of the Forgot Password link. Add this to the Custom CSS box of the login module.<br />
        <br />
        <a href='https://divihacks.com/docs/other-designs/#stacked-login' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "stacked-login",
        "class"         => "divi-hacks-stacked-login",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Background Effects",
        "description"   => "Add custom effects (CSS Transform & Filter) to the element's background image by default, and also on hover.<br />
        <br />
        Add the class <b>bg-effects</b> to activate the custom styles, then use CSS Variables to style the images.<br />
        <br />
        <a href='https://divihacks.com/docs/background-effects/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "background",
        "option"        => "bg-effects",
        "class"         => "divi-hacks-bg-effects",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom SVGs",
        "description"   => "Create your own SVG graphics by putting the SVG path inside a code module and adding the class <b>custom-svg</b>. <br />
        <br />
        <a href='https://divihacks.com/docs/custom-svgs/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "icon",
        "option"        => "custom-svgs",
        "class"         => "divi-hacks-custom-svgs",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Show Admin Bar/Menu on Theme Builder",
        "description"   => "Hover your mouse over the top edge and left edge of the page when you are designing in the Theme Builder and the admin bar and admin menu will appear respectively giving you access to other areas in the Admin Dashboard including the Divi Hacks Documentation.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#show-adminbar-tb' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin auto-on",
        "option"        => "adminbar-theme-builder",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Menus",
        "description"   => "Have more control over how the Menu module looks. This hack removes a lot of the default styling so you can apply your own inside the module settings.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-menus/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "custom-menus",
        "class"         => "divi-hacks-custom-menus",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Closeable Elements",
        "description"   => "This hack gives the user the ability to close an element. Now you can add closeable sections, alerts, messages on your pages. Add the class <b>closeable</b> to any element to add a close button. The element will be hidden until you view/refresh the page.<br />
        <br />
        If you want to keep an element hidden until the browser session ends, add the class <b>keep-hidden-xxx</b>, changing xxx with any other value to identify any unique element that you want to keep hidden (example: keep-hidden-promo, keep-hidden-message, keep-hidden-warning).<br />
        <br />
        <a href='https://divihacks.com/docs/closeable-elements/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "other auto-on",
        "option"        => "closeable-elements",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Hide/Show Content By Date/Time",
        "description"   => "This hack gives you the ability to hide or show content based on date, time, or date and time. Add one of the \"showit-\" classes and one of the \"hideit-\" classes to any element.<br />
        <br />
        <strong>Showing Elements:</strong><br />
        <b>showit-YYYY-MM-DD+00:00</b> Show on exact day and time (use military time)<br />
        <b>showit-YYYY-MM-DD</b> Show on day only (starts on midnight local user time)<br />
        <b>showit-00:00</b> Show at specific time every day (for repetitive events) (use military time)<br />
        <br />
        <strong>Hiding Elements:</strong><br />
        <b>hideit-YYYY-MM-DD+00:00</b> Hide on exact day and time (use military time)<br />
        <b>hideit-YYYY-MM-DD</b> Hide on day only (starts on midnight local user time)<br />
        <b>hideit-00:00</b> Hide at specific time every day (for repetitive events) (use military time)<br />
        <br />
        <a href='https://divihacks.com/docs/hide-show-content-based-on-time-date/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "other auto-on",
        "option"        => "showhidecontent",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Dim the Visual Builder Controls",
        "description"   => "This hack dims the visual builder controls to 10% opacity when you aren't using them so you can see the full page better.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#dim-vb-controls' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin",
        "option"        => "dim-controls",
        "class"         => "divi-hacks-dim-controls",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Exit Popups",
        "description"   => "Enable a popup to display when the user moves their mouse off of the browser window. You can set a global exit popup in the Theme Customizer, or you can create an exit popup on a page-by-page basis by adding the class <b>exit-popup</b> to an element. This element will override the global exit popup if you have one set.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#exit-popup' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> <span class='code'>PHP</span> <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_exit_popups' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "popups",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Per-Page Code",
        "description"   => "This hack gives you the ability to add custom HTML, CSS, Javascript, or any other custom code (except PHP) to the &lt;head&gt; or &lt;/body&gt; elements on a per-page basis.<br />
        <br />
        <b>Head Code</b>
        <b>Body Code</b><br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#page-code' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span>",
        "category"      => "other auto-on",
        "option"        => "page-code",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Tooltips",
        "description"   => "Create tooltips that display different modules<br />
        <br />
        <a href='https://divihacks.com/docs/tooltips' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> <span class='code'>jQuery</span>",
        "category"      => "alignment auto-on",
        "option"        => "tooltips",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Scrollbars",
        "description"   => "Customize the default scrollbars on WebKit enabled browsers<br />
        <br />
        <a href='https://divihacks.com/docs/custom-scrollbars' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_scrollbars' ) . "'>Edit</a>",
        "category"      => "design customizer",
        "option"        => "scrollbars",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Equal Height Modules",
        "description"   => "This hack sets any number of elements to the height of the largest element of that same class. You can have up to 12 different groups of modules set at the same height as the other modules in that same set. Add one of the following classes to the modules that you want to be the same height.<br />
        <br />
        <b>equal-1</b>
        <b>equal-2</b>
        <b>equal-3</b>
        <b>equal-4</b>
        <b>equal-5</b>
        <b>equal-6</b>
        <b>equal-7</b>
        <b>equal-8</b>
        <b>equal-9</b>
        <b>equal-10</b>
        <b>equal-11</b>
        <b>equal-12</b>
        <br />
        <a href='https://divihacks.com/docs/other-alignment/#equal-height' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "alignment",
        "option"        => "equal-height",
        "class"         => "divi-hacks-equal-height",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Reveals",
        "description"   => "This hack gives you the ability to hide & expand, or reveal any section, module, or row<br />
        <br />
        To activate, use the class <b>reveal-trigger-&lt;value&gt;</b> on any element that triggers the opening up the revealed element when clicked. It can be anything, but works best on buttons, CTA modules, blurbs, and images. Replace &lt;value&gt; with any word. <br />
        <br />
        To set a section, row, or module as the content to reveal, add the class <b>reveal-content-&lt;value&gt;</b> to that element. Replace &lt;value&gt; with the same word as the reveal-trigger-&lt;value&gt;. <br />
        <br />
        <a href='https://divihacks.com/docs/custom-reveals/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "auto-on",
        "option"        => "custom-reveals",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Always Show Hover/Responsive Styling Buttons",
        "description"   => "This hack makes the responsive and hover style buttons always visible in the visual builder, rather than only showing them when hovering over the label.<br />
        <br />
        <a href='https://divihacks.com/docs/always-show-buttons' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin",
        "option"        => "show-hovres-buttons",
        "class"         => "divi-hacks-show-hovres-buttons",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Add Featured Image column to Divi Library",
        "description"   => "This hack enables the featured image column in the Divi Library.",
        "more"          => "Made with <span class='code'>PHP</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_functions_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "dh-shortcode",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Search Results",
        "description"   => "Create a custom page to replace the default search results page.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#search' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_search_options' ) . "'>Edit</a>",
        "category"      => "blog customizer",
        "option"        => "search-archive",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Author Archives",
        "description"   => "Create custom pages for author archives.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#author' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_author_options' ) . "'>Edit</a>",
        "category"      => "blog customizer",
        "option"        => "author-archive",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Post Types Archives",
        "description"   => "Create custom pages for CPT archives.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#cpt' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_cptarchive_options' ) . "'>Edit</a>",
        "category"      => "blog customizer",
        "option"        => "cpt-archive",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Tag Archives",
        "description"   => "Create custom pages for tag archives.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#tag' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_tag_options' ) . "'>Edit</a>",
        "category"      => "blog customizer",
        "option"        => "tag-archive",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Category Archives",
        "description"   => "Create custom pages for category archives.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#category' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_category_options' ) . "'>Edit</a>",
        "category"      => "blog customizer",
        "option"        => "category-archive",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Default Posts Archives",
        "description"   => "Create a custom page for the default posts archive.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#default' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_archive_options' ) . "'>Edit</a>",
        "category"      => "blog customizer",
        "option"        => "posts-archive",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Preloader",
        "description"   => "Enable a full-screen preloading element that fades in and out when you navigate between different pages on your webite.<br />
        <br />
        <a href='https://divihacks.com/docs/preloader' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_preloader_options' ) . "'>Edit</a>",
        "category"      => "design customizer",
        "option"        => "preloader",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Parallax on Mobile",
        "description"   => "This hack enables the background image parallax effect on mobile devices. Just add the class <b>mobile-parallax</b> to the element and enable parallax on the background image.<br />
        <br />
        <a href='https://divihacks.com/docs/mobile-parallax' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span>",
        "category"      => "mobile",
        "option"        => "parallax-mobile",
        "class"         => "divi-hacks-mobile-parallax",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Parallax Elements",
        "description"   => "Give any section, row, column, or module a scrolling parallax effect.<br />
        <br />
        <a href='https://divihacks.com/docs/parallax-elements' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span>",
        "category"      => "alignment",
        "option"        => "parallax",
        "class"         => "divi-hacks-parallax",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Open Header/Footer Social Links in new tab",
        "description"   => "This hack opens social media links in the header and footer, and the footer credit links in a new tab. No configuration necessary.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#open-links' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "admin",
        "option"        => "open-links",
        "class"         => "divi-hacks-open-links",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Dividers",
        "description"   => "This hack allows you to add section dividers to any section, row, column or module. We've included a few other shape dividers in addition to the ones Divi already provides.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-dividers' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span>",
        "category"      => "design",
        "option"        => "custom-dividers",
        "class"         => "divi-hacks-custom-dividers",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Wider VB Popup",
        "description"   => "This hack makes it easier to browse the modules in the visual builder by making the add module popup wider.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#wider-popup' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin",
        "option"        => "wider-popup",
        "class"         => "divi-hacks-wider-popup",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Open Footer Credits and Social Media Links in New Tab",
        "description"   => "This hack opens social media links in the header and footer, and the footer credit links in a new tab.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#open-links' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "other",
        "option"        => "open-links",
        "class"         => "divi-hacks-open-links",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Better Password Protected Login Screen",
        "description"   => "Adds some custom styling to improve the password form for password-protected post types.<br />
        <br />
        <a href='https://divihacks.com/docs/other-designs/#better-pw' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "password-protected",
        "class"         => "divi-hacks-password-protected",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Footer",
        "description"   => "Use a Divi Library global section as a custom footer.<br />
        <br />
        <ol>
        <li>Set the footer widgets layout to 1 column in the theme customizer.</li>
        <li>Create a global section in the Divi Library that you will use as your custom footer</li>
        <li>Use the 'modules inside modules' hack to create a shortcode for your custom footer section.</li>
        <li>Place that shortcode inside a Text widget in Footer Widget Area #1 and Save.</li>
        </ol>
        <a href='https://divihacks.com/docs/custom-footer/' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>PHP</span>",
        "category"      => "footer",
        "option"        => "custom-footer",
        "class"         => "divi-hacks-custom-footer",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Custom Tables",
        "description"   => "Customize tables with CSS variables and automatic responsiveness.<br />
        <br />
        Use <b>custom-table</b> on a text module that contains the table. Then use the custom CSS variables to modify the table styling, alongside the regular text module settings under the design tab.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-tables/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> & <span class='code'>jQuery</span>",
        "category"      => "design",
        "option"        => "custom-tables",
        "class"         => "divi-hacks-custom-tables",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Custom Dropdowns",
        "description"   => "Add any global item from the Divi Library as a dropdown.<br />
        <br />
        <a href='https://divihacks.com/docs/shortcodes-in-menus/#custom-dropdowns' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> & <span class='code'>jQuery</span>",
        "category"      => "other",
        "option"        => "custom-dropdowns",
        "class"         => "divi-hacks-custom-dropdowns",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "White Label",
        "description"   => "Replace the word 'Hacks' with any other word. This will affect the strings 'Divi Hacks' & 'Hacks Customizer'<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#white-label' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_white_label_options' ) . "'>Edit</a>",
        "category"      => "design customizer",
        "option"        => "whitelabel",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Space Between Classes",
        "description"   => "This simple hack lets you view and edit classes easier in the visual builder by adding space between the classes.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#space' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin",
        "option"        => "class-space",
        "class"         => "divi-hacks-class-space",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Device-Specific Alignment",
        "description"   => "This hack gives you the ability to customize how rows, modules, and text are aligned on different devices.<br />
        <br />
        By default, what you configure in the page builder will apply to desktops. Then you can add the following classes to customize the alignment on tablets and phones too.<br />
        <br />
        <b>tablet-row-align-left</b><br />
        <b>tablet-row-align-center</b><br />
        <b>tablet-row-align-right</b><br />
        <b>tablet-module-align-left</b><br />
        <b>tablet-module-align-center</b><br />
        <b>tablet-module-align-right</b><br />
        <b>tablet-text-align-left</b><br />
        <b>tablet-text-align-center</b><br />
        <b>tablet-text-align-right</b><br />
        <br />
        <b>phone-row-align-left</b><br />
        <b>phone-row-align-center</b><br />
        <b>phone-row-align-right</b><br />
        <b>phone-module-align-left</b><br />
        <b>phone-module-align-center</b><br />
        <b>phone-module-align-right</b><br />
        <b>phone-text-align-left</b><br />
        <b>phone-text-align-center</b><br />
        <b>phone-text-align-right</b><br />
        <br />
        <a href='https://divihacks.com/docs/device-specific-alignment/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "alignment",
        "option"        => "device-specific-alignment",
        "class"         => "divi-hacks-device-specific-alignment",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Reveal Main Footer",
        "description"   => "This hack sticks the main footer to the bottom of window and reveals itself when you scroll to the bottom of the page.<br />
        <br />
        <a href='https://divihacks.com/docs/reveal-footer/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> & <span class='code'>jQuery</span>",
        "category"      => "footer",
        "option"        => "reveal-main-footer",
        "class"         => "divi-hacks-reveal-main-footer",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Reveal Custom Footer",
        "description"   => "This hack sticks a custom footer to the bottom of window and reveals itself when you scroll to the bottom of the page.<br />
        <br />
        Create your own custom section as the footer and add the class <strong>reveal-footer</strong> to it. <br />
        <br />
        <a href='https://divihacks.com/docs/reveal-footer/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> & <span class='code'>jQuery</span>",
        "category"      => "footer",
        "option"        => "reveal-custom-footer",
        "class"         => "divi-hacks-reveal-custom-footer",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Custom Lightboxes",
        "description"   => "This hack gives you the ability to put any section, module, or row in a lightbox, or popup. <br />
        <br />
        To activate, use the class <b>lightbox-trigger-&lt;value&gt;</b> on any element that triggers the lightbox/popup when clicked. It can be anything, but works best on buttons, CTA modules, blurbs, and images. Replace &lt;value&gt; with any word. <br />
        <br />
        To set a section, row, or module as the lightbox content, add the class <b>lightbox-content-&lt;value&gt;</b> to that element. Replace &lt;value&gt; with the same word as the lightbox-trigger-&lt;value&gt;. <br />
        <br />
        <a href='https://divihacks.com/docs/custom-lightboxes/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> & <span class='code'>jQuery</span>",
        "category"      => "design auto-on",
        "option"        => "lightbox-anything",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Current User Meta Shortcodes",
        "description"   => "This hack gives you some shortcodes to display user meta data of the <strong>currently logged-in user</strong>.<br />
        <br />
        <b>[user-display-name]</b>
        <b>[user-first-name]</b>
        <b>[user-last-name]</b>
        <b>[user-username]</b>
        <b>[user-email]</b>
        <b>[user-avatar]</b><br />
        <br />
        [user-avatar] allows the following attributes:<br />
        <ul>
        <li>size (in px, defaults to 50)</li>
        <li>style (any custom css)</li>
        <li>class (add 'circle' to make it a circle)</li>
        </ul>
        Example: <b>[user-avatar size=\"100\" class=\"circle\" style=\"border:2px solid #000\"]</b><br />
        <br />
        **Nothing will show if the current user is logged out**<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#current-user-shortcodes' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span>",
        "category"      => "other auto-on",
        "option"        => "current-user-shortcodes",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Custom Tabs",
        "description"   => "This hack allows you to align the tabs on the top, bottom, left or right side of the tabs container, along with some other alignment hacks for tabs.<br />
        <br />
        1. Use <b>custom-tabs</b> to activate the custom tabs.<br />
        2. Specify tab alignment with one of the following:<br />
        <b>tabs-on-top</b>
        <b>tabs-on-bottom</b>
        <b>tabs-on-left</b>
        <b>tabs-on-right</b><br />
        3. For <strong>tabs-on-top</strong> and <strong>tabs-on-bottom</strong> choose how you want the tabs to be aligned within the tabs container:<br />
        <b>align-left</b>
        <b>align-center</b>
        <b>align-right</b>
        <b>align-justify</b><br />
        4. Choose the tab text alignment:<br />
        <b>text-left</b>
        <b>text-center</b>
        <b>text-right</b><br />
        5. Additional optional classes:<br />
        <b>no-wrap</b> - Keep all tabs on one line<br />
        <b>hyphenate</b> - Hyphenate tab text if overflow occurs<br />
        <b>link</b> - Keep the active tab linked to the tab content at all times and jump to the first position.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-tabs' target='_blank'>Examples and Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "custom-tab-alignment",
        "class"         => "divi-hacks-custom-tabs",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Auto Hide/Show the Admin bar",
        "description"   => "The black admin bar get in the way of designing sometimes, so this hack hides it until you need it.   Just hover your mouse over the top 10px of the browser window.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#autohide-admin-bar' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span>",
        "category"      => "admin",
        "option"        => "autohide-admin-bar",
        "class"         => "divi-hacks-autohide-admin-bar",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Make All Posts full width by default",
        "description"   => "This hack hides the sidebar and makes the content full width on all posts.<br />
        <br />
        <a href='https://divihacks.com/docs/other-alignment/#full-width-posts' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "alignment",
        "option"        => "full-width-posts",
        "class"         => "divi-hacks-full-width-posts",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Columns in Menu Dropdowns",
        "description"   => "This hack enables columns inside menu dropdowns. Follow the instructions on the documentation to learn how to set up the column structure.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#columns' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "alignment",
        "option"        => "nav-columns",
        "class"         => "divi-hacks-nav-columns",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Hide Header/Footer/Logo on Page-by-Page Basis",
        "description"   => "This hack helps you hide the main header, top header, footer, and logo on a page to page basis. All you need to do is add one of the following Custom Fields to the page/post.<br />
        <br />
        <b>Hide Main Header</b>
        <b>Hide Top Header</b>
        <b>Hide Footer</b>
        <b>Hide Logo</b><br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#hide-header' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "other auto-on",
        "option"        => "page-by-page",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Add Font Awesome Icons to Menus and Modules",
        "description"   => "This hack enables you to choose from over 1,100 icons from Font Awesome to add to your navigation menus in the main header, top header, footer, lists, blurbs, and any other module that has a button option.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#icons' target='_blank'>Icons in Menus Documentation</a><br /><a href='https://divihacks.com/docs/icon-hacks/#font-awesome' target='_blank'>Font Awesome Documentation</a><br /><a href='https://fontawesome.com/icons?d=gallery&m=free' target='_blank'>Browse Font Awesome Icons</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "icon",
        "option"        => "font-awesome-icons",
        "class"         => "divi-hacks-font-awesome-icons",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),

    Array(
        "title"         => "Custom Login Page",
        "description"   => "Create your own custom Login page using the login module in the Divi Builder.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#custom-login' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_login_page' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "login-page",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom 404 Page",
        "description"   => "Create your own custom 404 page.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#custom-pages' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_custom_404_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "fourohfour-page",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Maintenance Mode",
        "description"   => "Create your own custom maintenance mode/coming soon page.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#custom-pages' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_maintenance_mode_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "maintenance-mode",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
     Array(
        "title"         => "Duplicate Pages and Posts",
        "description"   => "Easily duplicate pages, posts, and Divi Library items from the admin dashboard.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#duplicate' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_functions_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "duplicate-items",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Enable SVG Uploads",
        "description"   => "Enables the ability to upload SVGs to the media library.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#svg' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span>",
        "category"      => "admin auto-on",
        "option"        => "svg-uploads",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Device-Specific CSS",
        "description"   => "These body classes are automatically enabled with this plugin. Depending on the screen size, the following classes will be added to the body.<br />
        <br />
        <b>is-phone</b>
        <b>is-tablet</b>
        <b>is-mobile</b>
        <b>is-desktop</b><br />
        <br />
        Now you can easily add custom css for any specific device in the Divi Custom CSS without needing to know the various media queries.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#device-classes' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "admin auto-on",
        "option"        => "device-classes",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Current User Body Classes",
        "description"   => "These body classes are automatically enabled with this plugin. The currently logged-in user's role(s) and id will be added to the body classes.<br />
        <br />
        User id classes will look like: <b>user-id-354</b><br />
        <br />
        Now you can easily add custom css for any specific user based on their role or ID in the frontend and backend.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#user-classes' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_functions_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "user-classes",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Section Divider Shadows",
        "description"   => "Add elegant shadows to section dividers. Use the classes:<br />
        <br />
        <b>top-divider-shadow-10</b>
        <b>bottom-divider-shadow-10</b>
        <b>top-divider-shadow-5</b>
        <b>bottom-divider-shadow-5</b>
        <b>top-divider-shadow-3</b>
        <b>bottom-divider-shadow-3</b><br />
        <br />
        <a href='https://divihacks.com/docs/section-divider-shadows/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "divider-shadows",
        "class"         => "divi-hacks-divider-shadows",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Collapse Mobile Submenus",
        "description"   => "Collapse navigation submenus on mobile devices<br />
        <br />
        <a href='https://divihacks.com/docs/collapse-mobile-submenus/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span>",
        "category"      => "mobile",
        "option"        => "collapse-mobile-submenus",
        "class"         => "divi-hacks-collapse-mobile-submenus",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom Row Layouts",
        "description"   => "Create custom column layouts with this hack. Use the following classes:<br />
        <b>horizontal-modules</b>
        <b>two-column-mobile</b>
        <b>custom-row</b><br />
        <br/>
        For <b>custom-row</b> see the documentation for all the available classes.<br />
        <br />
        <a href='https://divihacks.com/docs/row-layouts/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "alignment",
        "option"        => "row-layouts",
        "class"         => "divi-hacks-row-layouts",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Divi Theme Options Tweaks",
        "description"   => "Adds customizations to the Divi Theme Options page to make adding Custom CSS easier:<br />
        <ol>
        <li>The SAVE CHANGES button floats on the bottom of the page so you don’t need to scroll down to it everytime you make changes.</li>
        <li>The Custom CSS Box is set to 90% of the browser window’s height to make it easier to add custom CSS.</li>
        </ol><br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#theme-options' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin auto-on",
        "option"        => "theme-options",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Open pages in visual builder from your dashboard.",
        "description"   => "Adds 'Edit in Visual Builder' link to pages, posts, and Divi Library items in the admin dashboard.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#open-vb' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_functions_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "vb-link",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Visual Builder Module Hover",
        "description"   => "Make it easier to edit your modules in the visual builder hover mode without the grey module popups getting in the way.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#module-hover' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "admin",
        "option"        => "vb-module-hover",
        "class"         => "divi-hacks-vb-module-hover",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Sticky Element",
        "description"   => "Make any section, row, column, or module sticky by adding these classes to their respective elements:<br />
        Use <b>sticky-section</b> on sections<br />
        Use <b>sticky-row</b> on rows<br />
        Use <b>sticky-column</b> on columns<br />
        Use <b>sticky-module</b> on modules<br />
        <br />
        Then configure the top offset in the Theme Customizer.<br />
        <br />
        Use <b>sticky-element</b> on any element.  The top offset is automatically calculated for this element, and it will stick to the bottom of the navigation header when the header has fixed postioning, or the top of the browser window when the header isn't fixed.<br />
        <br />
        <a href='https://divihacks.com/docs/sticky-element/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "alignment",
        "option"        => "sticky",
        "class"         => "divi-hacks-sticky",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Reverse Columns on Mobile",
        "description"   => "This hack enables you to reverse the order of columns on a mobile device. Just use the class <b>mobile-reverse</b> on the row.<br />
        <br />
        <a href='https://divihacks.com/docs/other-alignment/#mobile-reverse' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "alignment",
        "option"        => "mobile-reverse",
        "class"         => "divi-hacks-mobile-reverse",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Blurb Effects",
        "description"   => "Adds effects when you hover over the blurb images. Use the following classes:<br />
        <b>blurb-effect-1</b>
        <b>blurb-effect-2</b>
        <b>blurb-effect-3</b>
        <b>blurb-effect-4</b>
        <b>blurb-effect-5</b>
        <b>blurb-effect-6</b>
        <b>blurb-effect-7</b>
        <b>blurb-effect-8</b>
        <b>blurb-effect-9</b>
        <b>blurb-effect-10</b>
        <b>blurb-effect-11</b>
        <b>blurb-effect-12</b><br />
        <br />
        <a href='https://divihacks.com/docs/blurb-effects/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "animation",
        "option"        => "blurb-effects",
        "class"         => "divi-hacks-blurb-effects",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Testimonial Styles",
        "description"   => "Adds extra stying to testimonial. Use the following classes:<br />
        <b>event-box</b><br />
        <br />
        <a href='https://divihacks.com/docs/other-designs/#event-box' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span>",
        "category"      => "design",
        "option"        => "testimonial-styles",
        "class"         => "divi-hacks-testimonial-styles",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Blurb Styles",
        "description"   => "Adds extra stying to blurbs. Use the following classes:<br />
        <b>circle-blurb</b>
        <b>heading-banner</b><br />
        <br />
        <a href='https://divihacks.com/docs/other-designs/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "blurb-styles",
        "class"         => "divi-hacks-blurb-styles",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Module Styles",
        "description"   => "Adds extra stying to elements. Use the following classes:<br />
        <b>bottom-corners-shadow</b>
        <b>bottom-right-shadow</b>
        <b>bottom-left-shadow</b>
        <b>vertical-bend-shadow</b>
        <b>horizontal-bend-shadow</b>
        <b>round-bevel</b>
        <b>inset-bevel</b>
        <b>frame-border</b>
        <b>fractal</b><br />
        <br />
        <a href='https://divihacks.com/docs/other-designs/#module-styles' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "module-styles",
        "class"         => "divi-hacks-module-styles",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Fixed Mobile Header",
        "description"   => "Fixes the header to the top of the mobile device, rather than scrolling with the page.<br />
        <br />
        <a href='https://divihacks.com/docs/mobile-header/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "mobile",
        "option"        => "fixed-header",
        "class"         => "divi-hacks-fixed-mobile-header",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Fancy text styles",
        "description"   => "Make titles pop with these awesome design hacks. Use any of the following classes:<br />
        <b>pop-light-text</b>
        <b>pop-dark-text</b>
        <b>left-shadow</b>
        <b>right-shadow</b>
        <b>inset</b>
        <b>emboss</b>
        <b>cutout</b>
        <b>outline</b><br />
        <br />
        <a href='https://divihacks.com/docs/text-styles/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "text-styles",
        "class"         => "divi-hacks-text-styles",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Elegant sidebar shadow",
        "description"   => "Add a soft inside shadow to the sidebar to make it pop<br />
        <br />
        <a href='https://divihacks.com/docs/other-designs/#elegant-sidebar' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "sidebar-shadow",
        "class"         => "divi-hacks-sidebar-shadow",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Hide content to logged in/out users and user roles",
        "description"   => "Hide content to users based on if they are logged in or not, and also based on what user roles they are. Just add one of the following classes to the element:<br />
        <b>hide-if-login</b>
        <b>hide-if-logout</b><br />
        <br />
        And you can add any combination of these classes:<br />
        <br />
        <b>hide-if-subscriber</b>
        <b>hide-if-contributor</b>
        <b>hide-if-author</b>
        <b>hide-if-editor</b>
        <b>hide-if-admin</b>
        <b>hide-if-customer</b>
        <b>hide-if-shop-manager</b><br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#hide-show' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "other",
        "option"        => "hide-show",
        "class"         => "divi-hacks-hide-show",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Custom full-width blog designs",
        "description"   => "Set a blog module to use the full-width layout and add one of the following classes to the blog module: <br />
        <b>short-list-style</b>
        <b>featured-grid-style</b>
        <b>square-grid-style</b><br />
        <br />
        <a href='https://divihacks.com/docs/blog-styles/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "blog",
        "option"        => "blog-styles",
        "class"         => "divi-hacks-blog-styles",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Archive Grid",
        "description"   => "The default posts page shows a list of the most recent blog posts, and it really isn't very pretty.  This hack creates a beautiful grid layout for your default blog archive. Note: 3 columns will only show if the 'Remove Sidebar from Archives' hack is turned ON.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#archive-grid' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "blog",
        "option"        => "archive-grid",
        "class"         => "divi-hacks-archive-grid",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Remove Sidebar from Archives",
        "description"   => "The default archive pages have a sidebar on the right side (or left side, depending on what you set in the Divi Theme Options).  This hack removes that sidebar and gives the archives a full width.<br />
        <br />
        <a href='https://divihacks.com/docs/custom-archives/#remove-sidebar' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "blog",
        "option"        => "full-width-archive",
        "class"         => "divi-hacks-full-width-archive",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Make the backend builder mobile friendly",
        "description"   => "You can do some basic editing on your mobile device with the visual builder, but the backend builder works better than the frontend builder on a mobile device (although you can't see your changes in real-time).  This hacks makes the backend builder mobile-friendly so you can quickly edit pages on the go.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#mobile-friendly' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "mobile auto-on",
        "option"        => "mobile-backend",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Divi Library Item Shortcode",
        "description"   => "Sometimes it's nice to be able to put modules inside other modules, such as tabs or accordions. To do this, follow these steps:<br /><br /><ol><li>Create your module (or row) and save it to the Divi library as a GLOBAL module</li><li>Go to the Divi Library and find the shortcode that looks like <code>[dh_module id=&quot;x&quot;]</code> in the shortcode column.</li><li>Paste the shortcode wherever you want that module to appear. This also works on rows and sections.</li></ol><br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#modules' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_functions_options' ) . "'>Edit</a>",
        "category"      => "admin customizer",
        "option"        => "dh-shortcode",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Add quick links to admin bar",
        "description"   => "When you're on your mobile device, the 'edit in visual builder' button is gone. This hack puts 'edit in visual builder', 'edit in backend', 'theme options', and 'divi hacks' in the admin bar menu to easily access these pages from the front end.<br />
        <br />
        <a href='https://divihacks.com/docs/admin-hacks/#quick-links' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>PHP</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=dh_functions_options' ) . "'>Edit</a>",
        "category"      => "mobile customizer",
        "option"        => "add-links",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Device-Specific CSS",
        "description"   => "Set custom CSS for different screen sizes.<br />
        <br />
        <a href='https://divihacks.com/docs/theme-customizations/#device-css' target='_blank'>Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> and <span class='code'>jQuery</span> <a class='customize' target='_blank' href='" . admin_url( 'customize.php?autofocus[section]=custom_css_options' ) . "'>Edit</a>",
        "category"      => "design customizer",
        "option"        => "preloader",
        "class"         => "",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "App-Style Header on Mobile",
        "description"   => "If you are using the 'Default', 'Centered Inline', or 'Centered' header style, this hack replaces the ugly mobile header with an app-style header. This hack provides the cleaner, app-style header for the default header style, too.<br />
        <br />
        <a href='https://divihacks.com/docs/mobile-header/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "mobile",
        "option"        => "app-mobile-header",
        "class"         => "divi-hacks-app-mobile-header",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Image shapes",
        "description"   => "These hacks add shapes to your images. Add one of these classes to image:<br />
        <br />
        <b>image-wide-bottom-trapezoid</b>
        <b>image-wide-top-trapezoid</b>
        <b>image-wide-right-trapezoid</b>
        <b>image-wide-left-trapezoid</b>
        <b>image-vertical-hexagon</b>
        <b>image-horizonal-hexagon</b>
        <b>image-vertical-skew-right</b>
        <b>image-vertical-skew-left</b>
        <b>image-horizontal-skew-right</b>
        <b>image-horizontal-skew-left</b>
        <b>image-chevron-right</b>
        <b>image-chevron-left</b>
        <b>image-warp-square</b>
        <b>image-diamond</b>
        <b>image-star</b>
        <b>image-slant-up-right</b>
        <b>image-slant-up-left</b>
        <b>image-slant-down-right</b>
        <b>image-slant-down-left</b>
        <b>image-polygon-top-left</b>
        <b>image-polygon-top-right</b>
        <b>image-polygon-bottom-left</b>
        <b>image-polygon-bottom-right</b><br />
        <br />
        <a href='https://divihacks.com/docs/image-shapes/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "image-shapes",
        "class"         => "divi-hacks-image-shapes",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Replace RSS icon with Instagram icon in footer",
        "description"   => "Assuming you aren't using the RSS icon, we can replace it with the instagram icon, which most people prefer to have included in their footer. Just add your instagram URL in Divi Theme Options where RSS URL is.<br />
        <br />
        <a href='https://divihacks.com/docs/icon-hacks/#rss-icon' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "footer icon",
        "option"        => "rss-replace-instagram",
        "class"         => "divi-hacks-rss-insta",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Hover Animations",
        "description"   => "These hacks allow you to animate your element when you hover over it. Add one of these classes to your element:<br />
        <br />
        <b>hover-rubberBand</b>
        <b>hover-pulse</b>
        <b>hover-tada</b>
        <b>hover-grow</b>
        <b>hover-bounce</b>
        <b>hover-swing</b>
        <b>hover-wobble</b>
        <b>hover-shake</b>
        <b>hover-headShake</b>
        <b>hover-jello</b>
        <b>hover-flash</b><br />
        <br />
        <a href='https://divihacks.com/docs/animations/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "animation",
        "option"        => "hover-animations",
        "class"         => "divi-hacks-hover",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Module shapes",
        "description"   => "These hacks use the :before element to add shapes behind your element, inheriting the background color you set in that row, column or module. <strong>NOTE:</strong> these shapes will NOT show up on Internet Explorer or Microsoft Edge because they don't support the clip-path css property. :( Instead, you could alert those users on those browsers to download Google Chrome, Safari, or Firefox.<br /><br /> Add one of these classes to your row, column, or module, and then adjust the background color or gradient in the row, column, or module settings.<br />
        <br />
        <b>wide-bottom-trapezoid</b>
        <b>wide-top-trapezoid</b>
        <b>wide-right-trapezoid</b>
        <b>wide-left-trapezoid</b>
        <b>vertical-hexagon</b>
        <b>horizonal-hexagon</b>
        <b>vertical-skew-right</b>
        <b>vertical-skew-left</b>
        <b>horizontal-skew-right</b>
        <b>horizontal-skew-left</b>
        <b>chevron-right</b>
        <b>chevron-left</b>
        <b>chevron-up</b>
        <b>chevron-down</b>
        <b>speech-bubble-left</b>
        <b>speech-bubble-right</b>
        <b>speech-bubble-right-top</b>
        <b>speech-bubble-right-bottom</b>
        <b>speech-bubble-left-top</b>
        <b>speech-bubble-left-bottom</b>
        <b>warp-square</b>
        <b>diamond</b>
        <b>star</b>
        <b>slant-up-right</b>
        <b>slant-up-left</b>
        <b>slant-down-right</b>
        <b>slant-down-left</b>
        <b>slant-right-top</b>
        <b>slant-right-bottom</b>
        <b>slant-left-top</b>
        <b>slant-left-bottom</b>
        <b>polygon-top-left</b>
        <b>polygon-top-right</b>
        <b>polygon-bottom-left</b>
        <b>polygon-bottom-right</b><br />
        <br />
        <a href='https://divihacks.com/docs/module-shapes/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "element-shapes",
        "class"         => "divi-hacks-shapes",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Parallax Overlays",
        "description"   => "By default, the gradient overlays option doesn't work on sections that have parallaxed backgrounds. This hack fixes that. All you have to do is add <b>gradient-overlay</b> to the section's css classes box. Then, make sure parallax is enabled, and then configure BOTH the background color, and background gradient tab. If you only want a gradient, make sure the background color has 0% opacity set. Or you can be creative and set both!<br />
        <br />
        You can use the :after psuedo element to mirror the gradient overlay to create a 'reflected' look.<br />
        <br />
        These copy the :before element styles to the :after element and then rotates the :after element either 90, 180, or 270 degrees:<br />
        <b>gradient-overlay-rotate-90</b>
        <b>gradient-overlay-rotate-180</b>
        <b>gradient-overlay-rotate-270</b><br />
        <br />
        Just add one of these classes to the section's css classes box.<br />
        <br />
        <a href='https://divihacks.com/docs/parallax-overlays/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "background",
        "option"        => "gradient-overlay-parallax",
        "class"         => "divi-hacks-gradient-overlay",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "New Instagram gradient in social follow modules",
        "description"   => "The Divi social follow media's instagram icon is a solid pinkish color. This hacks gives that icon the cool new instagram gradient.<br />
        <br />
        <a href='https://divihacks.com/docs/icon-hacks/#instagram-gradient' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "icon",
        "option"        => "new-insta-gradient",
        "class"         => "divi-hacks-insta-gradient",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Blur background images",
        "description"   => "Set a background image for any element. This works on regular and parallaxed backgrounds. Add one of these classes to the section's css classes box. 1 = smallest blur. 6 = largest blur.</br></br> 
                           <b>blur1</b>
                           <b>blur2</b>
                           <b>blur3</b>
                           <b>blur4</b>
                           <b>blur5</b>
                           <b>blur6</b><br />
        <br />
        <a href='https://divihacks.com/docs/blur-parallax-backgrounds/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "background",
        "option"        => "blur-parallax-bg",
        "class"         => "divi-hacks-blur-bg",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Blog grid corner shadows",
        "description"   => "This hacks gives a grow on hover and corner shadows on the blog posts in grid mode. Works with the Filterable Blog Posts plugin too.<br />
        <br />
        <a href='https://divihacks.com/docs/blog-grid-corner-shadows/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "blog pro",
        "option"        => "post-it-shadow",
        "class"         => "divi-hacks-blog-style",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Footer on Bottom",
        "description"   => "This hack makes sure the footer always stays on the bottom of the window.<br />
        <br />
        <a href='https://divihacks.com/docs/other-alignment/#force-footer' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span> <span class='code'>jQuery</span>",
        "category"      => "footer alignment",
        "option"        => "footer-on-bottom",
        "class"         => "divi-hacks-footer-on-bottom",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Dynamic Full window height",
        "description"   => "This hack sets any element's height to the full height of the browser. You can also choose to subtract the height of the #main-footer, #main-header, and #top-header. Just add one of these classes:<br />
        <b>full-height</b>
        <b>full-height-minus-main-header</b>
        <b>full-height-minus-main-footer</b>
        <b>full-height-minus-top-header</b>
        <b>full-height-minus-both-headers</b><br />
        <br />
        <a href='https://divihacks.com/docs/other-alignment/#full-height' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>jQuery</span>",
        "category"      => "alignment",
        "option"        => "full-height-section",
        "class"         => "divi-hacks-full-height",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Vertically Center Modules in Sections, Rows, and Modules",
        "description"   => "This hack will vertically center rows inside sections, modules inside a row's columns, and the content inside modules. Put <b>valign-center</b> in the section's, row's, and module's css classes box. <strong>Note:</strong> This hack is disabled in Internet Explorer 10 and 11 because these versions of IE lack the needed capabilities.<br />
        <br />
        <a href='https://divihacks.com/docs/center-alignment/#valign-center-row' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "alignment",
        "option"        => "vertical-center-row",
        "class"         => "divi-hacks-valign-center",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Instagram Filters",
        "description"   => "This hack will give any section, row, or module a cool instagram filter. Just add one or more of the classes below to the css classes box.<br /><a href='https://picturepan2.github.io/instagram.css/' target='_blank'>View the filters here.</a><br /><br />Keep in mind that some of these filters utilize the :before element so if you already have some custom css for that element, the filter may not show.<br /><br />
        <b>filter-1977</b>
        <b>filter-aden</b>
        <b>filter-amaro</b>
        <b>filter-ashby</b>
        <b>filter-brannan</b>
        <b>filter-brooklyn</b>
        <b>filter-charmes</b>
        <b>filter-clarendon</b>
        <b>filter-crema</b>
        <b>filter-dogpatch</b>
        <b>filter-earlybird</b>
        <b>filter-gingham</b>
        <b>filter-ginza</b>
        <b>filter-hefe</b>
        <b>filter-helena</b>
        <b>filter-hudson</b>
        <b>filter-inkwell</b>
        <b>filter-juno</b>
        <b>filter-kelvin</b>
        <b>filter-lark</b>
        <b>filter-lofi</b>
        <b>filter-ludwig</b>
        <b>filter-maven</b>
        <b>filter-mayfair</b>
        <b>filter-moon</b>
        <b>filter-nashville</b>
        <b>filter-perpetua</b>
        <b>filter-poprocket</b>
        <b>filter-reyes</b>
        <b>filter-rise</b>
        <b>filter-sierra</b>
        <b>filter-skyline</b>
        <b>filter-slumber</b>
        <b>filter-stinson</b>
        <b>filter-sutro</b>
        <b>filter-toaster</b>
        <b>filter-valencia</b>
        <b>filter-vesper</b>
        <b>filter-walden</b>
        <b>filter-willow</b>
        <b>filter-xpro-ii</b><br />
        <br />
        <a href='https://divihacks.com/docs/instagram-filters/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "category"      => "design",
        "option"        => "instagram-filters",
        "class"         => "divi-hacks-instagram-filters",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    
    Array(
        "title"         => "Animate Anything",
        "description"   => "First, add <b>animate</b> to the css classes box to activate the animation css. Then, add one of the animations below to the css classes box (next to animate, separated by a space. example: 'animate bounce'). Also, you can include the class <b>infinite</b> to make the animation loop continuously. <a href='https://daneden.github.io/animate.css/' target='_blank'>Try out the animations here</a>.<br>
        <b>animate-bounce</b>
        <b>animate-flash</b>
        <b>animate-pulse</b>
        <b>animate-rubberBand</b>
        <b>animate-shake</b>
        <b>animate-headShake</b>
        <b>animate-swing</b>
        <b>animate-tada</b>
        <b>animate-wobble</b>
        <b>animate-jello</b>
        <b>animate-bounceIn</b>
        <b>animate-bounceInDown</b>
        <b>animate-bounceInLeft</b>
        <b>animate-bounceInRight</b>
        <b>animate-bounceInUp</b>
        <b>animate-lightSpeedIn</b>
        <b>animate-hinge</b>
        <b>animate-jackInTheBox</b><br />
        <br />
        <a href='https://divihacks.com/docs/animations/' target='_blank'>Examples & Documentation</a>",
        "more"          => "Made with <span class='code'>CSS</span>",
        "option"        => "animate-anything",
        "class"         => "divi-hacks-animate-anything",
        "category"      => "animation",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    ),
    Array(
        "title"         => "Admin Dashboard Custom CSS",
        "description"   => "In this section, you can add custom CSS for your WordPress admin dasboard.",
        "more"          => "",
        "category"      => "admin dh-admin-css",
        "option"        => "admin-dashboard-custom-css",
        "class"         => "divi-hacks-admin-custom-css",
        "image"         => "images/app-style.png",
        "admin"         => true,
        "client"        => true
    )

);

// ------------------------------------------- END -----------------------------------------------------------

function dh_switch_classes($classes) {
    global $dh_switch_matrix;
    $ia = is_admin();
    for ( $i = 0; $i < count($dh_switch_matrix); $i++ ) {
        $obj = $dh_switch_matrix[$i];
        $via = $obj['admin'];
        $vic = $obj['client'];
        $opt = isset($obj['option'])?$obj['option']:"unknown_{$n}";
        $enabled = dh_switch_setting_get($opt, '0');
        
        if ( $ia && $via && $enabled == '1' ) {
            $classes[] = $obj['class'];
        }
        if ( !$ia && $vic && $enabled == '1' ) {
            $classes[] = $obj['class'];
        }
    }
    
    return $classes;
}