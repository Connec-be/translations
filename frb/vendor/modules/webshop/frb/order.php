<?php 
return [
  'statuses' => [
    'pending' => 'En attente',
    'processing' => 'Traitement',
    'completed' => 'Complété',
    'canceled' => 'Annulé',
    'partial_returned' => 'Partiellement retourné',
    'returned' => 'Revenu',
    'grouped' => 'Groupé',
  ],
  'return_statuses' => [
    'pending' => 'En attente',
    'processing' => 'Traitement',
    'completed' => 'Complété',
    'canceled' => 'Annulé',
    'backorder' => 'Commande différée',
    'ready_for_picking' => 'prêt à cueillir',
    'picking' => 'cueillette',
    'ready_for_packing' => 'prêt à emballer',
    'on_hold' => 'en attente',
    'attention_needed' => 'attention nécessaire',
  ],
  'menu' => 'Ordres',
  'create' => 'Créer une commande',
  'cancel_error' => 'La commande est en cours de livraison ou n\'est pas finalisée',
  'cancel_success' => 'Vous annulez la commande avec succès',
  'return_error' => 'La commande est en cours de livraison ou n\'est pas finalisée',
  'return_success' => 'Le(s) produit(s) demandé(s) sont retournés avec succès !',
  'incomplete_order' => 'Commandes incomplètes',
  'order_id' => 'numéro de commande',
  'product_id' => 'Identifiant du produit',
  'customer_label' => 'Client',
  'tax_amount' => 'Montant de la taxe',
  'shipping_amount' => 'Montant de l\'expédition',
  'payment_method' => 'Mode de paiement',
  'payment_status_label' => 'Statut de paiement',
  'manage_orders' => 'Gérer les commandes',
  'order_intro_description' => 'Une fois que votre magasin aura des commandes, c\'est ici que vous traiterez et suivrez ces commandes.',
  'create_new_order' => 'Créer une nouvelle commande',
  'manage_incomplete_orders' => 'Gérer les commandes incomplètes',
  'incomplete_orders_intro_description' => 'Une commande incomplète est une commande créée lorsqu\'un client ajoute un produit au panier, procède au remplissage des informations d\'achat mais ne termine pas le processus de paiement.',
  'invoice_for_order' => 'Facture pour la commande',
  'created' => 'Créé',
  'invoice' => 'Facture',
  'return' => 'Demande de retour de commande',
  'is_return' => 'Case à cocher Retour',
  'total_refund_amount' => 'Montant total du remboursement',
  'total_amount_can_be_refunded' => 'Le montant total peut être remboursé',
  'refund_reason' => 'Raison du remboursement',
  'products' => 'des produits)',
  'default' => 'Défaut',
  'system' => 'Système',
  'new_order_from' => 'Nouvelle commande :order_id à partir de :customer',
  'confirmation_email_was_sent_to_customer' => 'L\'e-mail de confirmation a été envoyé au client',
  'address_name_required' => 'Il est requis de compléter le champ correspondant au nom.',
  'address_phone_required' => 'Le champ téléphone est obligatoire.',
  'address_email_required' => 'Le champ email est obligatoire.',
  'address_email_unique' => 'Le client avec cet e-mail existe, veuillez choisir un autre e-mail ou vous connecter avec cet e-mail !',
  'address_state_required' => 'Le champ état est obligatoire.',
  'address_city_required' => 'Le champ ville est obligatoire.',
  'address_country_required' => 'Le champ pays est obligatoire.',
  'address_address_required' => 'Le champ d\'adresse est obligatoire.',
  'address_zipcode_required' => 'Le champ du code postal est obligatoire.',
  'address_street_required' => 'Le champ Nom de la rue est obligatoire.',
  'address_number_required' => 'Le champ Numéro de rue est obligatoire.',
  'address_bus_required' => 'Le champ bus est obligatoire.',
  'create_order_from_payment_page' => 'La commande a été créée à partir de la page de paiement',
  'create_order_from_admin_page' => 'La commande a été créée à partir de la page d\'administration',
  'order_was_verified_by' => 'La commande a été vérifiée par %user_name%',
  'new_order' => 'Nouvelle commande :order_id',
  'payment_was_confirmed_by' => 'Le paiement a été confirmé (montant :money) par %user_name%',
  'edit_order' => 'Modifier la commande :code',
  'confirm_order_success' => 'Confirmez la commande avec succès !',
  'error_when_sending_email' => 'Il y a une erreur lors de l\'envoi de l\'e-mail',
  'sent_confirmation_email_success' => 'E-mail de confirmation envoyé avec succès !',
  'order_was_sent_to_shipping_team' => 'La commande a été envoyée à l\'équipe d\'expédition',
  'by_username' => 'par %user_name%',
  'shipping_was_created_from' => 'L\'expédition a été créée à partir de la commande %order_id%',
  'shipping_was_canceled_success' => 'L\'expédition a été annulée avec succès !',
  'shipping_was_canceled_by' => 'L\'expédition a été annulée par %user_name%',
  'update_shipping_address_success' => 'Mettre à jour l\'adresse de livraison avec succès !',
  'order_was_canceled_by' => 'La commande a été annulée par %user_name%',
  'order_was_returned_by' => 'La commande a été retournée par %user_name%',
  'confirm_payment_success' => 'Confirmez le paiement avec succès !',
  'refund_amount_invalid' => 'Le montant du remboursement doit être inférieur ou égal :price',
  'number_of_products_invalid' => 'Le remboursement du nombre de produits n\'est pas valable !',
  'cannot_found_payment_for_this_order' => 'Impossible de trouver le paiement pour cette commande !',
  'refund_success_with_price' => 'Succès du remboursement :price',
  'refund_success' => 'Remboursement réussi !',
  'order_is_not_existed' => 'La commande n\'existe pas !',
  'reorder' => 'Réorganiser',
  'sent_email_incomplete_order_success' => 'Envoyé un e-mail pour rappeler une commande incomplète avec succès !',
  'applied_coupon_success' => 'Coupon ":code" appliqué avec succès !',
  'new_order_notice' => 'Vous avez <span class="bold">:count</span> nouvelle(s) commande(s)',
  'view_all' => 'Voir tout',
  'cancel_order' => 'Annuler la commande',
  'order_canceled' => 'Commande annulée',
  'order_was_canceled_at' => 'La commande a été annulée à',
  'return_order' => 'Commande de retour',
  'order_returned' => 'Commande retournée',
  'order_was_returned_at' => 'La commande a été retournée à',
  'completed' => 'Complété',
  'uncompleted' => 'Inachevé',
  'sku' => 'UGS',
  'warehouse' => 'Entrepôt',
  'sub_amount' => 'Sous-montant',
  'coupon_code' => 'Code promo : ":code"',
  'shipping_fee' => 'Frais d\'expédition',
  'tax' => 'Impôt',
  'refunded_amount' => 'Montant remboursé',
  'amount_received' => 'Le montant effectivement reçu',
  'download_invoice' => 'Télécharger la facture',
  'print_invoice' => 'La facture d\'impression',
  'add_note' => 'Ajouter une note...',
  'order_was_confirmed' => 'La commande a été confirmée',
  'confirm_order' => 'Confirmer la commande',
  'confirm' => 'Confirmer',
  'order_was_canceled' => 'La commande a été annulée',
  'order_was_returned' => 'La commande a été retournée',
  'pending_payment' => 'En attente de paiement',
  'payment_was_accepted' => 'Le paiement :money a été accepté',
  'payment_was_refunded' => 'Le paiement a été remboursé',
  'confirm_payment' => 'Confirmer le paiement',
  'refund' => 'Remboursement',
  'all_products_are_not_delivered' => 'Tous les produits ne sont pas livrés',
  'delivery' => 'Livraison',
  'history' => 'Histoire',
  'order_number' => 'Numéro de commande',
  'from' => 'depuis',
  'status' => 'Statut',
  'successfully' => 'Avec succès',
  'transaction_type' => 'Type de transaction',
  'staff' => 'Personnel',
  'refund_date' => 'Date de remboursement',
  'n_a' => 'N / A',
  'payment_date' => 'Date de paiement',
  'payment_gateway' => 'Passerelle de paiement',
  'transaction_amount' => 'Montant de la transaction',
  'resend' => 'Renvoyer',
  'default_store' => 'Magasin par défaut',
  'update_address' => 'Mettre à jour l\'adresse',
  'have_an_account_already' => 'Avoir déjà un compte',
  'dont_have_an_account_yet' => 'Vous n\'avez pas encore de compte',
  'mark_payment_as_confirmed' => 'Marquer <span>:method</span> comme confirmé',
  'resend_order_confirmation' => 'Renvoyer la confirmation de commande',
  'resend_order_confirmation_description' => 'L\'e-mail de confirmation sera envoyé à <strong>:email</strong> ?',
  'send' => 'Envoyer',
  'update' => 'Mise à jour',
  'cancel_shipping_confirmation' => 'Annuler la confirmation d\'expédition ?',
  'cancel_shipping_confirmation_description' => 'Annuler la confirmation d\'expédition ?',
  'cancel_order_confirmation' => 'Annuler la confirmation de commande ?',
  'cancel_order_confirmation_description' => 'Êtes-vous sûr de vouloir annuler cette commande ? Cette action ne peut pas être annulée',
  'return_order_confirmation' => 'Confirmation de commande de retour ?',
  'return_order_confirmation_description' => 'Êtes-vous sûr de vouloir retourner cette commande ? Cette action ne peut pas être annulée',
  'confirm_payment_confirmation_description' => 'Traité par <strong>:method</strong>. Avez-vous reçu un paiement en dehors du système ? Ce paiement ne sera pas enregistré dans le système et ne pourra pas être remboursé',
  'save_note' => 'Enregistrer la note',
  'order_note' => 'Bon de commande',
  'order_note_placeholder' => 'Remarque concernant la commande, par exemple : délai ou instructions d\'expédition.',
  'order_amount' => 'Montant de la commande',
  'additional_information' => 'Informations Complémentaires',
  'notice_about_incomplete_order' => 'Avis de commande incomplète',
  'notice_about_incomplete_order_description' => 'Un e-mail de rappel concernant la commande non finalisée sera-t-il envoyé à <strong>:email</strong> ?',
  'incomplete_order_description_1' => 'Une commande incomplète se produit lorsqu\'un client potentiel place des articles dans son panier et accède à la page de paiement, mais ne finalise pas la transaction.',
  'incomplete_order_description_2' => 'Si vous avez contacté des clients et qu\'ils souhaitent continuer à acheter, vous pouvez les aider à finaliser leur commande en suivant le lien :',
  'send_an_email_to_recover_this_order' => 'Envoyer un email au client pour récupérer cette commande',
  'see_maps' => 'Voir les cartes',
  'one_or_more_products_dont_have_enough_quantity' => 'Un ou plusieurs produits ne sont pas en quantité suffisante !',
  'cannot_send_order_recover_to_mail' => 'L\'e-mail est introuvable et ne peut donc pas envoyer d\'e-mail de récupération au client.',
  'payment_info' => 'Information de paiement',
  'payment_method_refund_automatic' => 'Votre client sera remboursé automatiquement en utilisant :method.',
  'order' => 'Commande',
  'order_information' => 'Informations sur la commande',
  'create_a_new_product' => 'Créer un nouveau produit',
  'out_of_stock' => 'En rupture de stock',
  'products_available' => 'produit(s) disponible(s)',
  'no_products_found' => 'Aucun produit trouvé !',
  'note' => 'Note',
  'note_for_order' => 'Remarque pour la commande...',
  'amount' => 'Montant',
  'add_discount' => 'Ajouter une réduction',
  'discount' => 'Rabais',
  'add_shipping_fee' => 'Ajouter des frais d\'expédition',
  'shipping' => 'Expédition',
  'total_amount' => 'Montant total',
  'confirm_payment_and_create_order' => 'Confirmer le paiement et créer la commande',
  'paid' => 'Payé',
  'pay_later' => 'Payer plus tard',
  'customer_information' => 'Informations client',
  'create_new_customer' => 'Créer un nouveau client',
  'no_customer_found' => 'Aucun client trouvé !',
  'customer' => 'Client',
  'orders' => 'ordres)',
  'shipping_address' => 'adresse de livraison',
  'billing_address' => 'adresse de facturation',
  'see_on_maps' => 'Voir sur les cartes',
  'name' => 'Nom',
  'price' => 'Prix',
  'product_name' => 'Nom du produit',
  'total' => 'Total',
  'action' => 'Action',
  'add_product' => 'Ajouter un produit',
  'enter_free_text' => 'Saisir du texte libre',
  'promotion_discount_amount' => 'Montant de la promotion',
  'add' => 'Ajouter',
  'store' => 'Magasin',
  'please_choose_product_option' => 'Veuillez choisir l\'option du produit',
  'sku_optional' => 'SKU (facultatif)',
  'with_storehouse_management' => 'Avec la gestion des entrepôts ?',
  'quantity' => 'Quantité',
  'allow_customer_checkout_when_this_product_out_of_stock' => 'Autoriser le paiement du client lorsque ce produit est en rupture de stock ?',
  'address' => 'Adresse',
  'phone' => 'Téléphone',
  'country' => 'Pays',
  'state' => 'État',
  'city' => 'Ville',
  'zip_code' => 'Code postal',
  'discount_based_on' => 'Remise basée sur',
  'or_coupon_code' => 'Ou un code promo',
  'description' => 'Description',
  'how_to_select_configured_shipping' => 'Comment sélectionner l\'expédition configurée ?',
  'please_add_customer_information_with_the_complete_shipping_address_to_see_the_configured_shipping_rates' => 'Veuillez ajouter les informations client avec l\'adresse de livraison complète pour voir les tarifs d\'expédition configurés',
  'please_products_and_customer_address_to_see_the_shipping_rates' => 'Veuillez ajouter les produits et les informations client avec l\'adresse de livraison complète pour voir les tarifs d\'expédition configurés.',
  'shipping_method_not_found' => 'Méthode d\'expédition introuvable',
  'free_shipping' => 'Livraison gratuite',
  'custom' => 'Coutume',
  'email' => 'E-mail',
  'create_order' => 'Créer une commande',
  'close' => 'Fermer',
  'confirm_payment_is_paid_for_this_order' => 'Confirmer que le paiement est payé pour cette commande',
  'payment_status_of_the_order_is_paid_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Le statut de paiement de la commande est Payé. Une fois la commande créée, vous ne pouvez plus modifier le mode de paiement ni le statut.',
  'select_payment_method' => 'Sélectionnez le mode de paiement',
  'cash_on_delivery_cod' => 'Paiement à la livraison (COD)',
  'bank_transfer' => 'virement',
  'paid_amount' => 'Montant payé',
  'confirm_that_payment_for_this_order_will_be_paid_later' => 'Confirmez que le paiement de cette commande sera effectué ultérieurement',
  'payment_status_of_the_order_is_pending_once_the_order_has_been_created_you_cannot_change_the_payment_method_or_status' => 'Le statut de paiement de la commande est En attente. Une fois la commande créée, vous ne pouvez plus modifier le mode de paiement ni le statut.',
  'pending_amount' => 'Montant en attente',
  'update_email' => 'Mettre à jour l\'e-mail',
  'save' => 'Sauvegarder',
  'cancel' => 'Annuler',
  'create_a_new_order' => 'Créer une nouvelle commande',
  'search_or_create_new_product' => 'Rechercher ou créer un nouveau produit',
  'search_or_create_new_customer' => 'Rechercher ou créer un nouveau client',
  'discount_description' => 'Description de la remise',
  'cant_select_out_of_stock_product' => 'Impossible de sélectionner un produit en rupture de stock !',
  'referral' => 'Référence',
  'return_order_unique' => 'Le même :attribute existe déjà dans une demande de retour précédente.',
  'total_return_amount' => 'Montant total du retour',
  'change_return_order_status' => 'Modifier le statut de la commande de retour',
  'return_reason' => 'Raison du retour',
  'referral_data' => [
    'ip' => 'IP',
    'landing_domain' => 'Domaine d\'atterrissage',
    'landing_page' => 'Page de destination',
    'landing_params' => 'Paramètres d\'atterrissage',
    'gclid' => 'Gclid',
    'fclid' => 'Fclid',
    'utm_source' => 'Source UTM',
    'utm_campaign' => 'Campagne UTM',
    'utm_medium' => 'Support UTM',
    'utm_term' => 'Terme UTM',
    'utm_content' => 'Contenu UTM',
    'referral' => 'Référence',
    'referrer_url' => 'URL de référence',
    'referrer_domain' => 'Domaine de référence',
  ],
  'order_address_types' => [
    'shipping_address' => 'Adresse de livraison',
    'billing_address' => 'Adresse de facturation',
  ],
  'order_return_reasons' => [
    'damaged' => 'Produit endommagé',
    'defective' => 'Défectueux',
    'incorrect_item' => 'Article incorrect',
    'arrived_late' => 'Arrivé en retard',
    'not_as_described' => 'Pas comme décrit',
    'no_longer_want' => 'Je ne veux plus',
    'other' => 'Autre',
  ],
  'order_return_reason' => 'Raison du retour',
  'notices' => [
    'update_return_order_status_error' => 'Impossible de mettre à jour le statut de la commande de retour ! Peut-être que le statut de la commande de retour n\'est pas valide.',
    'update_return_order_status_success' => 'Mettez à jour le statut de la commande de retour avec succès !',
  ],
  'order_return' => 'Retours de commande',
  'edit_order_return' => 'Modifier le retour de commande :code',
  'order_return_items_count' => 'Article(s) du produit',
  'new_order_notifications' => [
    'new_order' => 'nouvel ordre',
    'view' => 'Voir',
    'description' => ':customer commandé :quantity :product',
  ],
  'confirm_payment_notifications' => [
    'confirm_payment' => 'Confirmer le paiement',
    'description' => 'Commande :order Le paiement a été confirmé (montant :amount) par :by',
  ],
  'update_shipping_status_notifications' => [
    'update_shipping_status' => 'Mettre à jour le statut d\'expédition',
    'description' => 'La commande :order avait changé le statut d\'expédition :description',
  ],
  'cancel_order_notifications' => [
    'cancel_order' => 'Annuler la commande',
    'description' => 'La commande :order a été annulée par le client :customer',
  ],
  'return_order_notifications' => [
    'return_order' => 'Commande de retour',
    'description' => ':customer a demandé le retour de produits',
  ],
  'order_completed_notifications' => [
    'order_completed' => 'Commande terminée',
    'description' => 'La commande :order a été complétée',
  ],
  'street' => 'Rue',
  'number' => 'Nombre',
  'bus' => 'Bus',
  'ws_credit' => 'Budget',
  'search_for_product' => 'Rechercher un produit',
  'place_order' => 'Passer la commande',
  'not_enough_credit' => 'Désolé, vous ne disposez pas de suffisamment de budget pour couvrir cette commande.',
  'add_address_first' => 'Veuillez ajouter au moins une adresse avant de commander, vous pouvez gérer vos adresses <a href="https://www.burocad.tech/admin/system/users/profile/0#tab_webshop_plugin_addresses"><b style="color:black ">ICI</b></a>',
  'select_one' => 'sélectionnez-en un',
  'gg_disabled' => 'GG est désactivé',
  'xml_files' => 'Dans la pièce jointe, vous trouverez la liste des fichiers Excel pour le numéro de commande :',
  'download_xml_files' => 'Télécharger Excel(s)',
  'shipping_invoices' => 'en pièce jointe vous trouverez la liste des commandes avec factures d\'envoi impayées',
  'company_tax_code_required' => 'Le numéro BTW de l’entreprise est requis.',
  'company_name_required' => 'Le nom de l’entreprise est requis.',
  'company_country_required' => 'Le pays de l’entreprise est requis.',
  'company_state_required' => 'L’état de l’entreprise est requis.',
  'company_number_required' => 'Le numéro d’adresse de l’entreprise est requis.',
  'company_street_required' => 'La rue de l’entreprise est obligatoire.',
  'company_city_required' => 'La ville de l’entreprise est obligatoire.',
  'company_zip_code_required' => 'Le code postal de l’entreprise est requis.',
  'order_not_confirmed' => 'La commande n\'est pas encore confirmée !!',
  'already_reserved' => 'Nous sommes désolés mais quelqu\'un d\'autre a été plus rapide à réserver cette heure, veuillez revenir à votre panier et choisir une autre heure.',
];