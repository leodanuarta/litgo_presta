<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__c57c733f0e2dc0417213d9cc3928c8030ac89000375e44f5c4feaffea849bd83 */
class __TwigTemplate_a0179b67b753538c26bfe9aee6e9731f390fcd2737a1f0ce103961833f3f5b22 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/litgo_presta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/litgo_presta/img/app_icon.png\" />

<title>Orders > Order BVCZSTNEH from Leo Danuarta • Litgo</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.8.10';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '3c724164a3ef09cab14219a50e2626a4';
    var token_admin_orders = tokenAdminOrders = '3c724164a3ef09cab14219a50e2626a4';
    var token_admin_customers = '35f69b60ebf3f1a24fcd6f3a80c7cab4';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '1f92f48756cbc688ee43d11b61eb7a2b';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = 'a28d07389c7af2d85bdcc3a3899a1d0b';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/litgo_presta/admin924z3q7ci/index.php/improve/modules/catalog/recommended?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg';
    var admin_notification_get_link = '/litgo_presta/admin924z3q7ci/index.php/common/notifications?_tok";
        // line 42
        echo "en=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg';
    var admin_notification_push_link = adminNotificationPushLink = '/litgo_presta/admin924z3q7ci/index.php/common/notifications/ack?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/litgo_presta/admin924z3q7ci/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/admin924z3q7ci/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/modules/ybc_themeconfig/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/modules/ybc_widget/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/modules/ybc_blog_free/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/litgo_presta/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/litgo_presta\\/admin924z3q7ci\\/\";
var baseDir = \"\\/litgo_presta\\/\";
var changeFormLanguageUrl = \"\\/litgo_presta\\/admin924z3q7ci\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Indonesian Rupiah";
        // line 65
        echo "\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/litgo_presta/admin924z3q7ci/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/js/admin.js?v=1.7.8.10\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/admin924z3q7ci/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/js/tools.js?v=1.7.8.10\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/admin924z3q7ci/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/litgo_presta/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript";
        // line 84
        echo "\" src=\"/litgo_presta/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/litgo_presta/admin924z3q7ci/index.php/common/notifications?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminorders\"
  data-base-url=\"/litgo_presta/admin924z3q7ci/index.php\"  data-token=\"r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminDashboard&amp;token=bd4bcf9f5bab5278ca3e5e6eeecc5d8c\"></a>
      <span id=\"shop_version\">1.7.8.10</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=df7d99094d2d069ca0c5a2787dc4db31\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php/improve/modules/manage?token=f71c596ff842685e46fad161f1585d02\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php/sell/catalog/categories/new?token=f71c596ff842685e46fad161f1585d02\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php/sell/catalog/products/new?token=f71c596ff842685e46fad161f1585d02\"
                 data-item=\"New product\"
      >New produ";
        // line 137
        echo "ct</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=9223c68b3dc158d2bf89ef97bed8fa6f\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminOrders&amp;token=3c724164a3ef09cab14219a50e2626a4\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"164\"
        data-icon=\"icon-AdminParentOrders\"
        data-method=\"add\"
        data-url=\"index.php/sell/orders/9/view?&-G_fwKkUUOnWgSeFg\"
        data-post-link=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminQuickAccesses&token=b575129445f2891a73890f5c44f7f33b\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Orders - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminQuickAccesses&token=b575129445f2891a73890f5c44f7f33b\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/litgo_presta/admin924z3q7ci/index.php?controller=AdminSearch&amp;token=173a7a5b5b47b7e0534c1b2b29af4637\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_qu";
        // line 176
        echo "ery\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules";
        // line 190
        echo "</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/litgo_presta/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
        ";
        // line 248
        echo "  </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9037f574d8fa4ece628a650af41a84f4\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_";
        // line 295
        echo "paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/litgo_presta/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Litgo</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/employees/1/edit?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-";
        // line 333
        echo "icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminLogin&amp;logout=1&amp;token=3eed8058619f1c715c4db054932d6e82\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/employees/toggle-navigation?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminDashboard&amp;token=bd4bcf9f5bab5278ca3e5e6eeecc5d8c\" class=\"link\" >
                <i class=\"material-icons\"";
        // line 362
        echo ">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/orders/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/orders/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                             ";
        // line 400
        echo "               
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/orders/invoices/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/orders/credit-slips/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/orders/delivery-slips/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCarts&amp;token=9037f574d8fa4ece628a650af41a84f4\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                       ";
        // line 430
        echo "                                                       </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/catalog/products?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/catalog/products?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/catalog/categories?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> C";
        // line 459
        echo "ategories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/catalog/monitoring/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminAttributesGroups&amp;token=ec2052fa43ba29669213162f68313519\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/catalog/brands/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"su";
        // line 490
        echo "btab-AdminAttachments\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/attachments/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCartRules&amp;token=9223c68b3dc158d2bf89ef97bed8fa6f\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/stocks/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/customers/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                     ";
        // line 521
        echo " Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/customers/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/addresses/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCustome";
        // line 551
        echo "rThreads&amp;token=1f92f48756cbc688ee43d11b61eb7a2b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCustomerThreads&amp;token=1f92f48756cbc688ee43d11b61eb7a2b\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/sell/customer-service/order-messages/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
               ";
        // line 581
        echo "                 <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminReturn&amp;token=860bdae78307e94b36b0e94ecae80fb9\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/metrics/legacy/stats?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/metrics/legacy/stats?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
               ";
        // line 612
        echo "                                             
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/metrics?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/addons/modules/catalog?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 648
        echo "48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/addons/modules/catalog?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/modules/manage?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/design/themes/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"co";
        // line 677
        echo "llapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/design/themes/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/addons/themes/catalog?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/design/mail_theme/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                           ";
        // line 706
        echo "     <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/design/cms-pages/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/design/modules/positions/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminImages&amp;token=61947f562d2b3242ea54603f4bd18102\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/modules/link-widget/list?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                      ";
        // line 736
        echo "                        
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCarriers&amp;token=955a2eb02a96ef89c8db474ee16e8eae\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminCarriers&amp;token=955a2eb02a96ef89c8db474ee16e8eae\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/shipping/preferences/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Preferences
                                </a>
                         ";
        // line 765
        echo "     </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/payment/payment_methods?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/payment/payment_methods?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/pa";
        // line 796
        echo "yment/preferences?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/international/localization/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/international/localization/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                   ";
        // line 828
        echo "           <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/international/zones/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/international/taxes/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/improve/international/translations/settings?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"142\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminPsfacebookModule&amp;token=5b74aed6e29b6b6aec34fe50db9a0224\" class=\"link\">
                 ";
        // line 857
        echo "     <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-142\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminPsfacebookModule&amp;token=5b74aed6e29b6b6aec34fe50db9a0224\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=3aa00f4d742802d0b77c5a4ad53c9759\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                                            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-s";
        // line 890
        echo "ubmenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/preferences/preferences?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/preferences/preferences?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/order-preferences/?_tok";
        // line 921
        echo "en=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/product-preferences/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/customer-preferences/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/contacts/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                    ";
        // line 952
        echo "          <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/shop/seo-urls/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminSearchConf&amp;token=ac008a11f0f4e286c46a7dd8fd860924\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/system-information/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"c";
        // line 981
        echo "ollapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/system-information/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/performance/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/administration/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/litgo_presta/adm";
        // line 1010
        echo "in924z3q7ci/index.php/configure/advanced/emails/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/import/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/employees/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/sql-requests/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
              ";
        // line 1041
        echo "                <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/logs/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/webservice-keys/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/litgo_presta/admin924z3q7ci/index.php/configure/advanced/feature-flags/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">45%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role";
        // line 1076
        echo "=\"progressbar\" style=\"width:45.454545454545%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Orders</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
        
<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\">#9</strong>
    <strong>BVCZSTNEH</strong>
  </h1>

  <p class=\"lead d-inline\">
    from

          Leo
      Danuarta
      </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    Rp22,002.00
  </span>

  <p class=\"lead d-inline\">
    11/19/2023
    <span class=\"text-muted\">
      at

      17:32:47
    </span>
  </p>
</div>

  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/litgo_presta/admin924z3q7ci/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D1.7.8.10%2526country%253Den/Help?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
    ";
        // line 1161
        echo "  <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/litgo_presta/admin924z3q7ci/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D1.7.8.10%2526country%253Den/Help?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Boost sales',
        'description': \"Get new customers and keep them coming back.<br>\\n                Here\\'s a selection of modules,<\\strong> compatible with your store<\\/strong>, to help you achieve your goals.\",
        'Close': 'Close',
      },
      recommendedModulesUrl: '/litgo_presta/admin924z3q7ci/index.php/modules/addons/modules/recommended?tabClassName=AdminOrders&_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 45.454545454545%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 45.454545454545%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=";
        // line 1211
        echo "\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 45.454545454545%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 45.454545454545%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 45.454545454545%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(5, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\n    <p>You will discover a few essential steps before you can launch your shop:\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Let's get started!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/litgo_presta\\/admin924z3q7ci\\/index.php?controller=AdminDashboard&token=bd4bcf9f5bab5278ca3e5e6eeecc5d8c\"}]},{\"name\":\"product\",\"ti";
        // line 1238
        echo "tle\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\/litgo_presta\\/admin924z3q7ci\\/index.php\\/sell\\/catalog\\/products\\/new?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\/litgo_presta\\/admin924z3q7ci\\/index.php\\/improve\\/design\\/themes\\/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\",\"selector\":\"#form_shop_logos_header_logo, #form_";
        echo "header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\/litgo_presta\\/admin924z3q7ci\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\/litgo_presta\\/admin924z3q7ci\\/index.php\\/improve\\/payment\\/payment_methods?_token=r8cP8JOVOxWZULaQzgqW1FhgW_-G_fwKkUUOnWgSeFg\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/localhost\\/litgo_presta\\/admin924z3q7ci\\/index.php?controller=AdminCarriers&token=955a2eb02a96ef89c8db474ee16e8eae\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          You've seen the essential, but there's a lot more to explore.<br \\/>\\n          Some resources can help you go further:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"f";
        echo "inal-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Starter Guide<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Training<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Video tutorial<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/localhost\\/litgo_presta\\/admin924z3q7ci\\/index.php?controller=AdminDashboard&token=bd4bcf9f5bab5278ca3e5e6eeecc5d8c\"}]}]}, 1, \"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminWelcome&token=c65fe200db521e11fc2514192cd81c9c\", baseAdminDir);

          onBoarding.addT";
        // line 1240
        echo "emplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1278
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://localhost/litgo_presta/admin924z3q7ci/index.php?controller=AdminDashboard&amp;token=bd4bcf9f5bab5278ca3e5e6eeecc5d8c\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=litgoproteinbar%40gmail.com&amp;firstname=Litgo&amp;lastname=Protein+Bar&amp;website=http%3A%2F%2Flocalhost%2Flitgo_presta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/litgo_presta/admin924z3q7ci/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<d";
        // line 1327
        echo "iv class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=litgoproteinbar%40gmail.com&amp;firstname=Litgo&amp;lastname=Protein+Bar&amp;website=http%3A%2F%2Flocalhost%2Flitgo_presta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary b";
        // line 1366
        echo "tn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1386
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1278
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1386
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__c57c733f0e2dc0417213d9cc3928c8030ac89000375e44f5c4feaffea849bd83";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1552 => 1386,  1535 => 1278,  1526 => 101,  1517 => 1386,  1495 => 1366,  1454 => 1327,  1399 => 1278,  1359 => 1240,  1353 => 1238,  1324 => 1211,  1272 => 1161,  1185 => 1076,  1148 => 1041,  1115 => 1010,  1084 => 981,  1053 => 952,  1020 => 921,  987 => 890,  952 => 857,  921 => 828,  887 => 796,  854 => 765,  823 => 736,  791 => 706,  760 => 677,  729 => 648,  691 => 612,  658 => 581,  626 => 551,  594 => 521,  561 => 490,  528 => 459,  497 => 430,  465 => 400,  425 => 362,  394 => 333,  354 => 295,  305 => 248,  245 => 190,  229 => 176,  188 => 137,  147 => 101,  128 => 84,  107 => 65,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c57c733f0e2dc0417213d9cc3928c8030ac89000375e44f5c4feaffea849bd83", "");
    }
}
