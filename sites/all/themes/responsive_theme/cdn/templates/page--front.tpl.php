<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
global $base_url;
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">

      <?php if (!empty($page['toper'])): ?>
        <div id="toopbar">
        <?php print render($page['toper']); ?>
        </div>
      <?php endif; ?>

  <!--Top Navigation -->
  <nav class="navbar navbar-inverse nav-first">
      <div class="container-fluid">
<div  class="navbar-collapse collapse">
<div class="nav-firstli">
          <ul class="nav navbar-nav navbar-right ">

            <li> <a href="#">Buyer Protection</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="fa fa-yelp"> </span> Help </a>
              <ul class="dropdown-menu">
              <li><a href="#"> Customer Service</a></li>
              <li><a href="#"> Dispute & Repots </a></li>
              </ul>
            </li>
            <li><a href="#">Save big on your app</a></li>
            <li><a href="#">Ship to PAK/ USD </a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="fa fa-language"></span> Languages</a>
              <ul class="dropdown-menu">
              <li><a href="#"> English</a></li>
              <li><a href="#"> Arabic </a></li>
              <li><a href="#"> French </a></li>
              </ul>
            </li>
            <ul>
              <?php if (!empty($page['language'])): ?>
              <?php print render($page['language']); ?>
              <?php endif; ?>
            </ul>
          </ul>
          </div>
         </div>
      </div>
</nav>
<!--Search Bar and headbar 1-->

 <!--  <div class="<?php print $container_class; ?>"> -->
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <!-- <nav role="navigation"> -->
          <?php if (!empty($primary_nav)): ?>
            <?php // print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php // print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        <!-- </nav> -->
      </div>
    <?php endif; ?>
  </div>
<!--Search Bar End-->

              <div class="overflow" id="header">
              <?php if (!empty($page['header'])): ?>
                  <div class="col-md-2 lfloat" id="header-right">CATEGORIES<a href="#"> See All</a></div>
                  <div class="col-md-10 lfloat" id="header-left">
                    <?php print render($page['header']); ?>
                  </div>
                <?php endif; ?>
              </div>
</header>

<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>

    <?php endif; ?>


  </header> <!-- /#page-header -->

  <div class="row">
    <?php if (!empty($page['slide_show'])): ?>
      <aside class="col-sm-6" role="complementary">
        <?php print render($page['slide_show']); ?>
      </aside>  <!-- /#slide_show -->
    <?php endif; ?>
</div>





    <?php if (!empty($page['sidebar_first'])): ?>




      <aside class="col-sm-3 " role="complementary">
        <div id="sidebar-first">
        <?php print render($page['sidebar_first']); ?>
        </div>
      </aside>
        <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>


      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

            <?php if (!empty($page['tech_slider'])): ?>

            <div class="col-md-8 tech_slider">
            <?php print render($page['tech_slider']); ?>

            </div>
              <!-- /#slide_show -->
      <?php endif; ?>
      <?php if (!empty($page['content']) && !($is_front)): ?>
        <div class="back">
      <?php print render($page['content']); ?>
      </div>
      <?php endif; ?>

    </section>


    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>


    <?php if (!empty($page['footer_1st'])): ?>
        <div class="col-sm-12">
        <?php print render($page['footer_1st']); ?>
        </div>
        <!-- /bottom_footer -->
    <?php endif; ?>



        <?php if (!empty($page['footer_2nd(a)'])): ?>
      <aside class="footer_2nd col-sm-3 " role="complementary">
        <div id="">
        <?php print render($page['footer_2nd(a)']); ?>
        <div class="smb"><?php print render($page['social_media']); ?></div>
        </div>
      </aside>
        <!-- /#footer_2nd(a)-->
    <?php endif; ?>

        <?php if (!empty($page['footer_2nd(b)'])): ?>
      <aside class="col-sm-3 footer_2nd" role="complementary">
        <div id="">
        <?php print render($page['footer_2nd(b)']); ?>
        </div>
      </aside>
        <!-- /#footer_2nd(b) -->
    <?php endif; ?>

        <?php if (!empty($page['footer_2nd(c)'])): ?>
      <aside class="footer_2nd col-sm-3" role="complementary">
        <div id="">
        <?php print render($page['footer_2nd(c)']); ?>
        </div>
      </aside>
        <!-- /#footer_2nd(c) -->
    <?php endif; ?>

        <?php if (!empty($page['footer_2nd(d)'])): ?>
      <aside class="footer_2nd col-sm-3 " role="complementary">
        <div id="">
        <?php print render($page['footer_2nd(d)']); ?>
        </div>
      </aside>
        <!-- /#footer_2nd(d) -->
    <?php endif; ?>
  </div>
</div>
<?php if (!empty($page['footer_3rd'])): ?>
      <div class="footer_3rd">
    <?php print render($page['footer_3rd']); ?>
  </div>
<?php endif; ?>
<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>

