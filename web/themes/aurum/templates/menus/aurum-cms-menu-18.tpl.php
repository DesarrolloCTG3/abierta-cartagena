<div class="pi-header">
  <div class="pi-section-w pi-shadow-bottom  <?php print $menu_color; ?>">
    <div class="pi-section pi-row-lg">

      <!-- Logo -->
      <div class="pi-row-block pi-row-block-logo">
        <a href="<?php print url('<front>'); ?>"><img src="<?php print $logo; ?>" alt=""></a>
      </div><!-- End logo -->

      <!-- Text -->
      <?php if(variable_get('site_slogan', '')): ?>
        <div class="pi-row-block pi-row-block-txt pi-big-font pi-italic pi-text-<?php print $text_color; ?> pi-hidden-2xs">
          <?php print variable_get('site_slogan', ''); ?>
        </div>  
      <?php endif; ?>
      <!-- Text -->

      <?php if(theme_get_setting('menu_social')): ?>
        <div class="pi-row-block pi-pull-right pi-hidden-2xs">
          <ul class="pi-social-icons-simple pi-small pi-colored">
            <?php foreach(explode("\n", theme_get_setting('menu_social')) as $item): list($icon, $link) = explode("|", $item);  ?>
              <li>
                <a href="<?php print $link; ?>" class="pi-social-<?php print $icon; ?>"><i class="<?php print $icon; ?>"></i></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Text -->
        <div class="pi-row-block pi-row-block-txt pi-pull-right pi-hidden-xs"><?php print t('Follow Us:'); ?></div>
        <!-- End text -->
      <?php endif; ?>

    </div>
  </div>
    
  <div class="pi-header-sticky">

    <!-- Header row -->
    <div class="pi-section-w pi-row-reducible pi-section-base pi-border-top-light ">
      <div class="pi-section pi-row-sm">


        <div class="pi-row-block">
          <ul class="pi-menu pi-has-hover-border pi-items-have-double-borders pi-full-height pi-hidden-xs">
            <?php if(module_exists('tb_megamenu')) {
                print theme('tb_megamenu', array('menu_name' => 'main-menu'));
              }
              else {
                $main_menu_tree = module_exists('i18n_menu') ? i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu')) : menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                print drupal_render($main_menu_tree);
              }
            ?>
          </ul>
        </div>

        <div class="pi-row-block pi-pull-right pi-hidden-sm">
          <?php
            if(module_exists('search')) {
              $search_form_box = module_invoke('search', 'block_view');
              $search_form_box['content']['search_block_form']['#field_prefix'] = '<div class = "pi-input-inline" style = "margin-right: 1px;">';
              $search_form_box['content']['search_block_form']['#field_suffix'] = '</div><button type="submit" class="btn pi-btn pi-btn-base-2 pi-btn-no-border"><i class="icon-search-1"></i></button>';
              $search_form_box['content']['search_block_form']['#attributes']['class'][] = 'pi-input-wide';
              unset($search_form_box['content']['search_block_form']['#nd_icon'], $search_form_box['content']['actions']);
              $search_form_box['content']['#attributes']['class'] = array('form-inline', 'pi-form-short');
              print render($search_form_box);
            }
          ?>
        </div>

        <!-- Mobile menu button -->
        <div class="pi-row-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only pi-hidden-sm-only">
          <button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
            <i class="icon-menu pi-text-center"></i>
          </button>
        </div><!-- End mobile menu button -->

        <!-- Mobile menu -->
        <div id="pi-main-mobile-menu" class="pi-section-menu-mobile-w pi-section-dark">
          <div class="pi-section-menu-mobile">
            <?php
              if(module_exists('search')) {
                $search_form_box = module_invoke('search', 'block_view');
                $search_form_box['content']['search_block_form']['#attributes']['class'][] = 'pi-input-wide';
                unset($search_form_box['content']['actions']);
                $search_form_box['content']['#attributes']['class'] = array('form-inline', 'pi-search-form-wide', 'ng-pristine', 'ng-valid');
                print render($search_form_box);
              }
            ?>
            <ul class = "pi-menu-mobile pi-items-have-borders pi-menu-mobile-dark">
              <?php
                $tree = menu_build_tree(variable_get('menu_main_links_source', 'main-menu'));
                print aurum_mobile_menu($tree);
              ?>
            </ul>
          </div>
        </div><!-- End mobile menu -->

      </div>
    </div>
  </div><!-- End header -->
</div>