<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'bool' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'item_has_product' => ':item has :value',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'item'  => 'category',
        'value' => 'product'
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    'attributes' => [
        'id' => 'id',
        'h1' => 'h1',
        'to' => 'to',

        'day' => 'day',
        'ssl' => 'ssl',
        'url' => 'url',
        'img' => 'img',
        'end' => 'end',
        'qty' => 'quantity',
        'tax' => 'tax',
        'tag' => 'tag',
        'key' => 'key',
        'faq' => 'faq',

        'open' => 'open',
        'path' => 'path',
        'uuid' => 'uuid',
        'rate' => 'rate',
        'type' => 'type',
        'host' => 'host',
        'port' => 'port',
        'mime' => 'mime',
        'size' => 'size',
        'role' => 'role',
        'name' => 'name',
        'body' => 'body',
        'note' => 'note',
        'sort' => 'sort',
        'data' => 'data',
        'date' => 'date',
        'text' => 'text',
        'area' => 'area',
        'from' => 'from',
        'read' => 'read',

        'group' => 'group',
        'price' => 'price',
        'bonus' => 'bonus',
        'title' => 'title',
        'value' => 'value',
        'start' => 'start',
        'phone' => 'phone',
        'input' => 'input',
        'email' => 'email',
        'brand' => 'brand',
        'model' => 'model',
        'color' => 'color',
        'cause' => 'cause',
        'addon' => 'addon',
        'month' => 'month',

        'status' => 'status',
        'active' => 'active',
        'locale' => 'locale',
        'symbol' => 'symbol',
        'number' => 'number',
        'online' => 'online',
        'faq_id' => 'faq',
        'answer' => 'answer',
        'robots' => 'robots',
        'weight' => 'weight',
        'rating' => 'rating',
        'gender' => 'gender',
        'avatar' => 'avatar',
        'tag_id' => 'tag',

        'current' => 'current',
        'sandbox' => 'sandbox',
        'unit_id' => 'unit',
        'qr_code' => 'qr code',
        'min_qty' => 'min qty',
        'max_qty' => 'max qty',
        'shop_id' => 'shop',
        'user_id' => 'user',
        'blog_id' => 'blog',
        'address' => 'address',
        'default' => 'default',
        'from_to' => 'from to',
        'subject' => 'subject',
        'send_to' => 'send to',
        'payload' => 'payload',
        'comment' => 'comment',
        'api_key' => 'api key',
        'content' => 'content',
        'cart_id' => 'cart',

        'lastname' => 'lastname',
        'birthday' => 'birthday',
        'referral' => 'referral',
        'table_id' => 'table',
        'end_date' => 'end date',
        'calories' => 'calories',
        'servings' => 'servings',
        'username' => 'username',
        'order_id' => 'order',
        'brand_id' => 'brand',
        'bar_code' => 'bar code',
        'max_time' => 'max time',
        'end_time' => 'end time',
        'owner_id' => 'owner',
        'stock_id' => 'stock',
        'quantity' => 'quantity',
        'discount' => 'discount',
        'location' => 'location',
        'keywords' => 'keywords',
        'position' => 'position',
        'password' => 'password',
        'alt_body' => 'alt body',
        'question' => 'question',
        'backward' => 'backward',
        'model_id' => 'model',
        'seo_text' => 'seo text',
        'priority' => 'priority',
        'price_to' => 'price to',
        'logo_img' => 'logo img',
        'disabled' => 'disabled',
        'provider' => 'provider',
        'addon_id' => 'addon',

        'file_urls' => 'file urls',
        'firstname' => 'firstname',
        'client_id' => 'client',
        'secret_id' => 'secret',
        'banner_id' => 'banner',
        'clickable' => 'clickable',
        'parent_id' => 'parent',
        'coupon_id' => 'coupon',
        'smtp_auth' => 'smtp auth',
        'from_site' => 'from site',
        'canonical' => 'canonical',
        'show_type' => 'show type',

        'payment_id' => 'payment',
        'product_id' => 'product',
        'receipt_id' => 'receipt',
        'percentage' => 'percentage',
        'total_time' => 'total time',
        'price_from' => 'price from',
        'visibility' => 'visibility',
        'min_amount' => 'min amount',
        'secret_key' => 'secret key',
        'service_id' => 'service',
        'payable_id' => 'payable',
        'likable_id' => 'likable',
        'created_by' => 'created by',
        'created_at' => 'created',
        'updated_at' => 'updated',
        'deleted_at' => 'deleted at',
        'short_desc' => 'short desc',
        'expired_at' => 'expired at',
        'start_time' => 'start time',
        'smtp_debug' => 'smtp debug',
        'model_type' => 'model type',
        'ip_address' => 'ip address',
        'booking_id' => 'booking',
        'start_date' => 'start date',

        'approved_by' => 'approved by',
        'shop_tag_id' => 'shop tag',
        'description' => 'description',
        'button_text' => 'button text',
        'total_price' => 'total price',
        'category_id' => 'category',
        'currency_id' => 'currency',
        'loadable_id' => 'load',
        'change_freq' => 'change freq',
        'deliveryman' => 'deliveryman',
        'discount_id' => 'discount',
        'active_time' => 'active time',
        'referral_id' => 'referral',
        'order_limit' => 'order limit',
        'with_report' => 'with report',
        'chair_count' => 'chair count',
        'status_note' => 'status note',
        'provider_id' => 'provider',
        'wallet_uuid' => 'wallet uuid',
        'my_referral' => 'my referral',
        'refund_time' => 'refund time',

        'payable_type' => 'payment type',
        'perform_time' => 'perform time',
        'published_at' => 'published',
        'bonusable_id' => 'bonus',
        'user_cart_id' => 'user cart',
        'likable_type' => 'like type',
        'delivery_fee' => 'delivery fee',
        'origin_price' => 'origin price',
        'nutrition_id' => 'nutrition',
        'min_quantity' => 'min quantity',
        'price_per_km' => 'price per km',
        'countable_id' => 'product',
        'verify_token' => 'verify token',

        'loadable_type' => 'loadable type',
        'delivery_date' => 'delivery date',
        'delivery_time' => 'delivery time',
        'delivery_type' => 'delivery type',
        'discount_type' => 'discount type',
        'reviewable_id' => 'review',
        'assignable_id' => 'assign',
        'product_limit' => 'product limit',

        'countable_type' => 'countable type',
        'extra_value_id' => 'extra value',
        'payment_sys_id' => 'payment sys',
        'payment_trx_id' => 'payment trx',
        'firebase_token' => 'firebase token',
        'remember_token' => 'remember token',
        'bonus_quantity' => 'bonus quantity',
        'bonus_stock_id' => 'bonus stock',
        'bonusable_type' => 'bonus type',
        'extra_group_id' => 'extra group',
        'commission_fee' => 'commission fee',
        'total_discount' => 'total discount',
        'discount_price' => 'discount price',
        'background_img' => 'background img',
        'transaction_id' => 'transaction',

        'notification_id' => 'notification',
        'reviewable_type' => 'review type',
        'shop_section_id' => 'shop section',
        'subscription_id' => 'subscription',
        'assignable_type' => 'assign type',

        'email_setting_id' => 'email setting',

        'term_condition_id' => 'term condition',
        'email_verified_at' => 'email verified',
        'phone_verified_at' => 'phone verified',
        'type_of_technique' => 'type of technique',
        'privacy_policy_id' => 'privacy policy',

        'status_description' => 'status description',

    ],

];
