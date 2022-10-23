<?php

namespace App\Helpers;


class AppSetting
{


    static $allLanguageCode = ['ar','en', 'es', 'fr', 'hi', 'zh'];
    static $allLanguage = ['Arabic','English', 'Spanish', 'France', 'Hindi', 'Chinese'];

    static $currencySign = "$";
    static $currencyCode = "USD";

    //--- set timezone ----------//

    //static $timezone = "UTC";
    static $timezone = "GMT+5:30";


    //-------------------------- Minimum Application Version ----------------------------//
    static $MINIMUM_APPLICATION_VERSION        = 200;



    //----------------- Google Map Api Key (Set a key if you enable billing at https://developers.google.com/maps) -------------------------//
    //TODO : add your google map api key
    static $GOOGLE_MAP_API_KEY = "AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI";


    //--------- Stripe API (https://dashboard.stripe.com/) ----------//
    //TODO : add your own Stripe payment keys
    static $STRIPE_PUBLIC_KEY = "pk_test_51LkDJuLDOB0jGLXJRz52oR9qyCtEDc9FAKuxiqoAic4KENlNqlSIF4oSfIZJJF1nf9M91UznKCw91aH0C4Ttlngt00CAiLhciQ";
    static $STRIPE_SECRET_KEY = "sk_test_51LkDJuLDOB0jGLXJYC0ksIjCJAgq72bYMDcj7h2dJyAppDEUf0E2os7IgetmCaj5AQxJaTV34B6MuHOQAPyvCiL500iStAngzu";



    //--------- Razorpay API (https://dashboard.razorpay.com/app/dashboard) ----------//
    //TODO : add your own razorpay payment keys
    static $RAZORPAY_ID = "rzp_test_2ty3GUIFfnxolb";
    static $RAZORPAY_SECRET = "H8IhgqY7foqfQF4nSalxrOsa";


    //--------- Pay stack API (https://dashboard.paystack.com/) ----------//
    //TODO : add your own razorpay payment keys
    static $PAYSTACK_PUBLIC_KEY = "pk_test_e433b54a88c97d5a88a29d6c256fc39795d9b95e";
    static $PAYSTACK_SECRET_KEY = "sk_test_fe3b1d3052ff56bb4e1e04b0954060852415f82a";
    static $PAYSTACK_EMAIL_ADDRESS = "paystack@coderthemes.com";



    //Firebase Cloud Messaging (FCM) Server key
    //TODO: add your own Firebase Cloud Messaging developer key
    static $FCM_SERVER_KEY = "AAAA7YCN8mc:APA91bHXLF9zd-M4zldvg_bSJrY9iSn6V9Ekq9CLUBUnjZk81jT4Z6BXAfX9ygsFIU3qIGE6tRJ7URM1ANIVeHsaNeaURdr6Riu29zIYbZAlEzJyfb8F35s6ySa-W24_AVh8P2-Rbjql";

}

