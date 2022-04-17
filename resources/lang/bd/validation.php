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


    'accepted' => ':attribute গ্রহণ করা আবশ্যক।',
    'accepted_if' => ':attribute অবশ্যই গ্রহণ করতে হবে যখন :other সমান :value হয়।',
    'active_url' => 'এই :attribute একটি বৈধ URL নয়।',
    'after' => ':date অবশ্যই :attribute এর পরের একটি তারিখ হতে হবে।',
    'after_or_equal' => ':attribute টি অবশ্যই :date এর সাথে মিল অথবা এর পরের একটি তারিখ হতে হবে।',
    'alpha' => ':attribute শুধুমাত্র অক্ষর থাকতে পারে।',
    'alpha_dash' => ':attribute শুধুমাত্র অক্ষর, সংখ্যা, এবং ড্যাশ থাকতে পারে।',
    'alpha_num' => ':attribute শুধুমাত্র বর্ণ ও সংখ্যা থাকতে পারে।',
    'array' => ':attribute একটি অ্যারে হতে হবে।',
    'before' => ':date অবশ্যই :attribute এর আগের একটি তারিখ হতে হবে।',
    'before_or_equal' => ':attribute টি অবশ্যই :date এর সাথে মিল অথবা এর আগের একটি তারিখ হতে হবে।',
    'between' => [
        'array' => ':min এবং :max আইটেম :attribute মধ্যে হতে হবে।',
        'file' => ':min এবং :max কিলোবাইট :attribute মধ্যে হতে হবে।',
        'numeric' => ':min এবং :max :attribute মধ্যে হতে হবে।',
        'string' => ':min এবং :max অক্ষর :attribute মধ্যে হতে হবে।',
    ],
    'boolean' => ':attribute স্থানে  সত্য বা মিথ্যা হতে হবে।',
    'confirmed' => ':attribute নিশ্চিতকরণ এর  সাথে মিলছে না।',
    'current_password' => 'পাসওয়ার্ডটি ভুল ।',
    'date' => ':attribute একটি বৈধ তারিখ নয়।',
    'date_equals' => ':attribute সমান তারিখ হতে হবে :date.',
    'date_format' => ':attribute, :format এর সাথে বিন্যাস মিলছে না।',
    'different' => ':attribute এবং :other আলাদা হতে হবে।',
    'digits' => ':attribute :digits অবশ্যই একটি সংখ্যার ডিজিট হতে হবে।',
    'digits_between' => ':attribute অবশ্যই :min এবং :max ডিজিট এর মধ্যে হতে হবে।',
    'dimensions' => ':attribute অবৈধ ইমেজ মাত্রা রয়েছে।',
    'distinct' => ':attribute এর স্থানে একটি নকল মান আছে।',
    'email' => ':attribute একটি বৈধ ইমেইল ঠিকানা হতে হবে।',
    'ends_with' => ':attribute নিম্নলিখিত এক সঙ্গে শেষ করতে হবে: :values.',
    'exists' => 'নির্বাচিত :attribute টি অবৈধ।',
    'file' => ':attribute একটি ফাইল হতে হবে।',
    'filled' => ':attribute স্থানটি পূরণ করতে হবে।',
    'gt' => [
        'array' => ':attribute এ অবশ্যই :value আইটেমের থেকে বেশি থাকতে হবে ।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে বেশি হতে হবে ।',
        'numeric' => ':attribute অবশ্যই :value-এর থেকে বড় হতে হবে ৷',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় হতে হবে ।',
    ],
    'gte' => [
        'array' => ':attribute-এর অবশ্যই :value আইটেম বা তার বেশি থাকতে হবে ।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের থেকে বড় বা সমান হতে হবে ।',
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে বড় বা সমান হতে হবে ।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে বড় বা সমান হতে হবে ।',
    ],
    'image' => ':attribute একটি ইমেজ হতে হবে।',
    'in' => 'নির্বাচিত :attribute টি অবৈধ।',
    'in_array' => ':attribute উপাদানটি :other এ খুঁজে পাওয়া যায়নি।.',
    'integer' => ':attribute একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ':attribute একটি বৈধ  IP address হতে হবে।',
    'ipv4' => ':attribute টি একটি বৈধ IPv4 address হতে হবে।',
    'ipv6' => ':attribute টি একটি বৈধ IPv6 address হতে হবে।',
    'json' => ':attribute একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'lt' => [
        'array' => ':attribute এর থেকে কম :value আইটেম থাকতে হবে ।',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের চেয়ে কম হতে হবে ।',
        'numeric' => ':attribute অবশ্যই :value এর চেয়ে কম হতে হবে ।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে কম হতে হবে ।',
    ],
    'lte' => [
        'array' => ':attribute এ অবশ্যই :value আইটেমের বেশি থাকা উচিত নয় ৷',
        'file' => ':attribute অবশ্যই :value কিলোবাইটের থেকে কম বা সমান হতে হবে ।',
        'numeric' => ':attribute অবশ্যই :value এর থেকে কম বা সমান হতে হবে ।',
        'string' => ':attribute অবশ্যই :value অক্ষরের চেয়ে কম বা সমান হতে হবে ।',
    ],
    'max' => [
        'array' => ':attribute এর মান :max টি উপাদানের চেয়ে বড় হতে পারেনা।',
        'file' => ':attribute এর মান :max কিলোবাইট এর চেয়ে বড় হতে পারেনা।',
        'numeric' => ' :attribute এর মান :max এর চেয়ে বড় হতে পারেনা।',
        'string' => ':attribute এর মান :max অক্ষর এর চেয়ে বড় হতে পারেনা।',
    ],
    'mimes' => ':attribute এর একটি ফাইল হতে হবে: :values।',
    'mimetypes' => ':attribute এর একটি ফাইল হতে হবে: :values।',
    'min' => [
        'array' => ':attribute অবশ্যই :min উপাদানের চেয়ে ছোট হতে হবে।',
        'file' => ':attribute অবশ্যই :min কিলোবাইট এর চেয়ে ছোট হতে হবে।',
        'numeric' => ':attribute অবশ্যই :min এর চেয়ে ছোট হতে হবে।',
        'string' => ':attribute অবশ্যই :min অক্ষর এর চেয়ে ছোট হতে হবে।',
    ],
    'multiple_of' => ':attribute একটি একাধিক হতে হবে :value',
    'not_in' => 'নির্বাচিত :attribute অবৈধ।',
    'not_regex' => ':attribute বিন্যাস অবৈধ.',
    'numeric' => ':attribute একটি সংখ্যা হতে হবে।',
    'password' => 'পাসওয়ার্ড ভুল.',
    'present' => ':attribute ক্ষেত্র উপস্থিত থাকা আবশ্যক।',
    'prohibited' => ':attribute ক্ষেত্রের নিষিদ্ধ.',
    'prohibited_if' => 'এই :attribute ক্ষেত্র নিষিদ্ধ করা হয়, যখন :other হয় :value.',
    'prohibited_unless' => 'এই :attribute ক্ষেত্র নিষিদ্ধ করা হয়, যদি না, :other হয় :values.',
    'prohibits' => ':attribute ক্ষেত্রটি :other ে উপস্থিত হতে নিষেধ করে ৷',
    'regex' => ':attribute বিন্যাস অবৈধ।',
    'required' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক।',
    'required_if' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যেখানে :other হল :value।',
    'required_unless' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যদি না :other, :values তে উপস্থিত থাকে।',
    'required_with' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন  :values উপস্থিত।',
    'required_with_all' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন :values উপস্থিত।',
    'required_without' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন :values অনুপস্থিত।',
    'required_without_all' => ':attribute স্থানটি পূরণ করা বাধ্যতামূলক যখন সকল :values অনুপস্থিত।',
    'same' => ':attribute এবং :other অবশ্যই মিলতে হবে।',
    'size' => [
        'array' => ':attribute অবশ্যই :size আইটেম হতে হবে।',
        'file' => ':attribute অবশ্যই :size কিলোবাইট হতে হবে।',
        'numeric' => ':attribute অবশ্যই :size হতে হবে।',
        'string' => ':attribute অবশ্যই :size অক্ষর হতে হবে।',
    ],
    'starts_with' => ':attribute নিম্নলিখিত এক সঙ্গে শুরু হবে: :values.',
    'string' => ':attribute একটি স্ট্রিং হতে হবে।',
    'timezone' => ':attribute একটি বৈধ সময় অঞ্চল হতে হবে।',
    'unique' => ':attribute ইতিমধ্যেই নেওয়া হয়েছে।',
    'uploaded' => ':attribute আপলোড করতে ব্যর্থ হয়েছে।',
    'url' => ':attribute বিন্যাস অবৈধ।',
    'uuid' => ':attribute একটি বৈধ ইউইউআইডি হতে হবে.',
    'minlength' => ':attribute, :limit অক্ষরের চেয়ে বেশি হওয়া উচিত নয়',
    'maxlength' => ':attribute, :limit অক্ষরের থেকে কম হওয়া উচিত নয়',
    'phonenumber' => ':attribute অবশ্যই বৈধ (01xxxxxxxx) ফর্ম্যাট থাকতে হবে।',
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

    'attributes' => [],

];
