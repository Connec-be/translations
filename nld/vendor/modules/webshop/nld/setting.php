<?php 
return [
  'save_settings' => 'Instelling opslaan',
  'general' => [
    'name' => 'Algemeen',
    'description' => 'Bekijk en update uw algemene instellingen',
  ],
  'currency' => [
    'name' => 'Valuta\'s',
    'description' => 'Valuta-instellingen bekijken en bijwerken',
    'currency_setting_description' => 'Bekijk en update valuta\'s via de website',
    'form' => [
      'enable_auto_detect_visitor_currency' => 'Schakel bezoekersvaluta automatisch detecteren in',
      'add_space_between_price_and_currency' => 'Voeg een spatie toe tussen prijs en valuta',
      'thousands_separator' => 'Scheidingsteken voor duizendtallen',
      'decimal_separator' => 'Decimaalscheidingsteken',
      'separator_period' => 'Periode (.)',
      'separator_comma' => 'Komma (,)',
      'separator_space' => 'Ruimte ( )',
      'api_key' => 'Sleutel voor API-wisselkoersen',
      'api_key_helper' => 'Ontvang de API-sleutel voor de wisselkoers op :link',
      'update_currency_rates' => 'Wisselkoersen bijwerken',
      'use_exchange_rate_from_api' => 'Gebruik de wisselkoers van de API',
      'clear_cache_rates' => 'Wis cachesnelheden',
      'auto_detect_visitor_currency_description' => 'Het detecteert de bezoekersvaluta op basis van de browsertaal. Het zal de standaardvalutaselectie overschrijven.',
      'exchange_rate' => [
        'api_provider' => 'API-provider',
        'select' => '-- Selecteer --',
        'none' => 'Geen',
        'provider' => [
          'api_layer' => 'API-laag',
          'open_exchange_rate' => 'Wisselkoersen openen',
        ],
        'open_exchange_app_id' => 'App-ID voor wisselkoersen openen',
      ],
    ],
  ],
  'product' => [
    'name' => 'Producten',
    'description' => 'Bekijk en update uw productinstellingen',
    'product_settings' => 'Productinstellingen',
    'product_settings_description' => 'Regels voor product configureren',
    'form' => [
      'show_number_of_products' => 'Toon het aantal producten in de productsingle',
      'show_out_of_stock_products' => 'Toon producten die niet op voorraad zijn',
      'how_to_display_product_variation_images' => 'Hoe productvariatieafbeeldingen worden weergegeven',
      'only_variation_images' => 'Alleen variatieafbeeldingen',
      'variation_images_and_main_product_images' => 'Variatieafbeeldingen en hoofdproductafbeeldingen',
      'enable_product_options' => 'Schakel productopties in',
      'auto_generate_product_sku' => 'Automatisch SKU genereren bij het maken van een product',
      'product_sku_format' => 'SKU-formaat',
      'product_sku_format_helper' => 'U kunt %s (1 tekenreeks) of %d (1 cijfer) in het formaat gebruiken om een ​​willekeurige tekenreeks te genereren. Bijv.: SKU-%s%s%s-HN-%d%d%d',
    ],
  ],
  'product_search' => [
    'name' => 'product zoeken',
    'description' => 'Bekijk en update de zoekinstellingen voor producten',
    'product_search_settings' => 'Product zoeken',
    'product_search_settings_description' => 'Configureer regels voor het zoeken naar producten',
    'form' => [
      'search_for_an_exact_phrase' => 'Zoek naar een exacte zin',
      'search_products_by' => 'Zoek producten op:',
      'enable_filter_products_by_brands' => 'Schakel filterproducten op merk in',
      'enable_filter_products_by_tags' => 'Schakel het filteren van producten op tags in',
      'enable_filter_products_by_attributes' => 'Schakel het filteren van producten op kenmerken in',
    ],
  ],
  'digital_product' => [
    'name' => 'Digitale producten',
    'description' => 'Bekijk en update de instellingen voor digitale producten',
    'digital_products_settings' => 'Digitale producten',
    'digital_products_settings_description' => 'Configureer regels voor digitale producten',
    'form' => [
      'enable_support_digital_product' => 'Is het mogelijk om digitale producten te ondersteunen?',
      'allow_guest_checkout_for_digital_products' => 'Sta het afrekenen van digitale producten door gasten toe',
    ],
  ],
  'product_review' => [
    'name' => 'Productrecensies',
    'description' => 'Bekijk en update uw instellingen voor productrecensies',
    'form' => [
      'enable_review' => 'Beoordeling inschakelen',
      'review' => [
        'max_file_size' => 'Controleer de maximale bestandsgrootte (MB)',
        'max_file_number' => 'Controleer het maximale bestandsnummer',
      ],
      'only_allow_customers_purchased_to_review' => 'Alleen klanten die het product hebben gekocht, kunnen het product beoordelen',
      'review_need_to_be_approved' => 'Recensies moeten worden goedgekeurd voordat ze op de productpagina worden weergegeven',
    ],
  ],
  'shopping' => [
    'name' => 'Winkelen',
    'description' => 'Bekijk en update uw winkelinstellingen',
    'general_setting' => 'Algemene instellingen',
    'return_settings' => 'Instellingen retourneren',
    'return_settings_description' => 'Configureer regels voor retourinstellingen',
    'form' => [
      'enable_cart' => 'Schakel winkelwagen in',
      'enable_wishlist' => 'Verlanglijst inschakelen',
      'enable_compare' => 'Schakel vergelijken in',
      'enable_order_tracking' => 'Schakel het volgen van bestellingen in',
      'enable_quick_buy_button' => 'Schakel de knop voor snel kopen in',
      'enable_order_auto_confirmed' => 'Bestelling automatisch bevestigen',
      'quick_buy_target' => 'Doelpagina voor snel kopen',
      'checkout_page' => 'Afrekenpagina',
      'cart_page' => 'Winkelwagenpagina',
      'cart_destroy_on_logout' => 'Vernietig winkelwagen bij uitloggen',
    ],
  ],
  'checkout' => [
    'name' => 'Uitchecken',
    'panel_description' => 'Bekijk en update de betaalinstellingen',
    'description' => 'Configureer regels voor afrekeninstellingen',
    'form' => [
      'display_bank_info_at_the_checkout_success_page' => 'Geef bankgegevens weer op de pagina met succes bij het afrekenen',
      'mandatory_form_fields_at_checkout' => 'Verplichte velden op de afrekenpagina:',
      'hide_form_fields_at_checkout' => 'Verberg klantvelden op de afrekenpagina:',
      'load_countries_states_cities_from_location_plugin' => 'Laad landen, staten, steden vanaf de plug-inlocatie',
      'load_countries_states_cities_from_location_plugin_placeholder' => 'Nadat u deze optie heeft gewijzigd, moet u alle adressen opnieuw bijwerken. Je moet het een keer instellen.',
      'minimum_order_amount' => 'Minimum bestelbedrag om een ​​bestelling te plaatsen (:valuta).',
      'zip_code_enabled' => 'Zet postcode aan',
      'billing_address_enabled' => 'Factuuradres inschakelen',
      'display_tax_fields_at_checkout_page' => 'Geef velden met belastinginformatie weer op de afrekenpagina',
      'use_city_field_as_field_text' => 'Gebruik het stadsveld als vrij tekstveld',
      'available_countries' => 'Beschikbare landen',
      'all' => 'Alle',
      'enable_guest_checkout' => 'Schakel afrekenen als gast in',
      'recently_viewed' => [
        'enable' => 'Schakel recent bekeken producten door klanten in',
        'max' => 'Maximaal aantal recent bekeken producten door klanten',
        'max_helper' => 'Als u 0 instelt, worden alle producten opgeslagen.',
      ],
    ],
  ],
  'return' => [
    'name' => 'Opbrengst',
    'description' => 'Configureer regels voor retourinstellingen',
    'panel_description' => 'Bekijk en update de retourinstellingen',
    'form' => [
      'is_enabled_order_return' => 'Is ingeschakeld om retour te sturen',
      'allow_partial_return' => 'Gedeeltelijke terugkeer toestaan',
      'allow_partial_return_description' => 'De klant kan een paar producten retourneren, maar hoeft niet alle producten in een bestelling te retourneren.',
      'returnable_days' => 'Herbruikbare dagen',
      'return_settings_helper' => 'Aantal dagen dat een klant een retour kan aanvragen nadat de bestelling is voltooid.',
    ],
  ],
  'invoice' => [
    'name' => 'Facturen',
    'description' => 'Bekijk en update uw factuurinstellingen',
    'company_settings' => 'Bedrijfsinstellingen',
    'company_settings_description' => 'Instellingen Bedrijfsgegevens voor facturatie',
    'form' => [
      'company_name' => 'Bedrijfsnaam',
      'company_address' => 'Bedrijfsadres',
      'company_zipcode' => 'Postcode bedrijf',
      'company_email' => 'E-mail van het bedrijf',
      'company_phone' => 'Bedrijfstelefoon',
      'company_logo' => 'Bedrijfslogo',
      'company_tax_id' => 'Bedrijfsbelastingnummer',
      'invoice_code_prefix' => 'Voorvoegsel factuurcode',
      'using_custom_font_for_invoice' => 'Aangepast lettertype gebruiken voor factuur',
      'invoice_font_family' => 'Lettertypefamilie voor facturen (werkt alleen voor de Latijnse taal)',
      'enable_invoice_stamp' => 'Factuurstempel inschakelen',
      'invoice_support_arabic_language' => 'Ondersteuning van Arabische taal op factuur',
      'disable_order_invoice_until_order_confirmed' => 'Schakel de orderfactuur uit totdat de bestelling is bevestigd',
    ],
  ],
  'tax' => [
    'name' => 'Belastingen',
    'description' => 'Bekijk en update uw belastinginstellingen',
    'tax_setting' => 'Belastinginstellingen',
    'tax_setting_description' => 'Configureer belastinginstellingen',
    'tax_management' => 'Belastingen beheer',
    'tax_management_description' => 'Bekijk en beheer uw belastingen',
    'form' => [
      'enable_tax' => 'Belasting inschakelen',
      'display_tax_fields_at_checkout_page' => 'Geef velden met belastinginformatie weer op de afrekenpagina',
      'default_tax_rate' => 'Standaard belastingtarief',
      'default_tax_rate_description' => 'Belangrijk: deze wordt toegepast als er geen belasting is geselecteerd in het product.',
      'select_tax' => '-- Selecteer --',
      'display_product_price_including_taxes' => 'Geef de productprijs inclusief belastingen weer',
    ],
  ],
  'customer' => [
    'name' => 'Klanten',
    'description' => 'Bekijk en update de instellingen van uw klanten',
    'customer_setting' => 'Klantinstellingen',
    'customer_setting_description' => 'Klantinstellingen configureren',
    'form' => [
      'verify_customer_email' => 'Controleer het e-mailadres van de klant',
      'enable_recaptcha_in_register_page' => 'Schakel Recaptcha in op de registratiepagina',
      'enable_math_captcha_in_register_page' => 'Schakel Math captcha in op de klantregistratiepagina',
      'enable_recaptcha_in_register_page_description' => 'Moet eerst Captcha instellen in Admin -> Instellingen -> Algemeen.',
      'login_using_phone' => 'Log in met telefoonnummer in plaats van e-mailadres',
    ],
  ],
  'shipping' => [
    'name' => 'Verzenden',
    'description' => 'Bekijk en update de verzendinstellingen',
    'shipping_rule' => 'Verzendregels',
    'shipping_rule_description' => 'Configureer regels om de verzendkosten te berekenen',
    'shipping_setting' => 'Verzendinstellingen',
    'shipping_setting_description' => 'Verzendinstellingen configureren',
    'form' => [
      'hide_other_shipping_options_if_it_has_free_shipping' => 'Verberg andere verzendopties als er gratis verzending in de lijst staat',
    ],
  ],
  'webhook' => [
    'name' => 'Webhook',
    'description' => 'Configureer webhookinstellingen',
    'webhook_setting' => 'Webhook',
    'webhook_setting_description' => 'Verzend webhook wanneer de bestelling is geplaatst',
    'form' => [
      'order_placed_webhook_url' => 'Bestelling geplaatste webhook-URL (methode: POST)',
      'order_placed_webhook_url_placeholder' => 'https://...',
    ],
  ],
  'store_locator' => [
    'name' => 'Winkelzoekers',
    'description' => 'Bekijk en update de lijsten van uw ketens',
    'store_locator_description' => 'Alle lijsten van uw ketens, belangrijkste winkels, filialen, enz. De locaties kunnen worden gebruikt om de verkopen bij te houden en om ons te helpen bij het configureren van de belastingtarieven die in rekening worden gebracht bij de verkoop van producten.',
    'form' => [
      'change_primary_store' => 'wijzig de standaard winkelzoeker',
      'add_location' => 'Voeg locatie toe',
      'edit_location' => 'Locatie bewerken',
      'delete_location' => 'Locatie verwijderen',
      'delete_location_confirmation' => 'Weet u zeker dat u deze locatie wilt verwijderen? Deze actie kan niet ongedaan worden gemaakt.',
      'change_primary_location' => 'Wijzig de primaire locatie',
      'save_location' => 'Locatie opslaan',
      'add_new' => 'Nieuw toevoegen',
    ],
  ],
  'tracking' => [
    'name' => 'Volgen',
    'description' => 'Bekijk en update trackinginstellingen',
    'manage_tracking' => 'Beheer tracking',
    'manage_tracking_description' => 'Beheer tracking: UTM, Facebook, Google Tag Manager...',
    'form' => [
      'enable_facebook_pixel' => 'Facebook-pixel inschakelen (metapixel)',
      'facebook_pixel_helper' => 'Ga naar https://developers.facebook.com/docs/meta-pixel om een ​​Facebook Pixel te maken.',
      'facebook_pixel_id' => 'Facebook Pixel-ID',
      'enable_google_tag_manager' => 'Schakel Google Tagmanager in',
      'google_tag_manager_helper' => 'Ga naar https://ads.google.com/aw/conversions om Google Ads-conversies aan te maken.',
      'google_tag_manager_code' => 'Google Tag Manager-code',
    ],
  ],
  'marketplace' => [
    'name' => 'Marktplaats',
    'description' => 'Marktplaatsinstellingen bekijken en bijwerken',
  ],
  'standard_and_format' => [
    'name' => 'Standaard formaat',
    'panel_description' => 'Bekijk en update standaard- en formaatinstellingen',
    'description' => 'Standaarden en formaten worden gebruikt om zaken als productprijzen, verzendgewichten en besteltijden te berekenen.',
    'form' => [
      'change_order_format' => 'Bestelcodeformaat bewerken (optioneel)',
      'change_order_format_description' => 'De standaard bestelcode begint bij: nummer. U kunt de begin- of eindtekenreeks wijzigen om de gewenste bestelcode aan te maken, bijvoorbeeld "DH-: nummer" of ": nummer-A"',
      'start_with' => 'Beginnen met',
      'end_with' => 'Eindigt met',
      'order_will_be_shown' => 'Uw bestelcode wordt weergegeven',
      'weight_unit' => 'Eenheid van gewicht',
      'height_unit' => 'Lengte/hoogte eenheid',
      'weight_unit_gram' => 'Gram (g)',
      'weight_unit_kilogram' => 'Kilogram (kg)',
      'weight_unit_lb' => 'Pond (lb)',
      'weight_unit_oz' => 'Ons (oz)',
      'height_unit_cm' => 'Centimeter (cm)',
      'height_unit_m' => 'Meter (m)',
      'height_unit_inch' => 'Duim',
    ],
  ],
  'sale_popup' => [
    'name' => 'Verkooppop-up',
    'description' => 'Pas uw verkooppop-upinstellingen eenvoudig aan',
  ],
  'flash_sale' => [
    'name' => 'Flash-uitverkoop',
    'description' => 'Bekijk en update de instellingen voor flash-uitverkoop',
    'enable' => 'Schakel flash-verkoop in',
    'show_sale_count_left' => 'Toon verkoopaantal links',
    'show_sale_count_left_description' => 'Deze optie toont het aantal producten dat nog in de flash-uitverkoop zit.',
  ],
  'payment_method_cod_minimum_amount' => 'Minimum bestelbedrag - :currency (optioneel)',
  'display_bank_info_at_the_checkout_success_page' => 'Bankgegevens weergeven op de pagina met succes bij het afrekenen?',
];