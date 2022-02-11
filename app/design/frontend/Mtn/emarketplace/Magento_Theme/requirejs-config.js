var config = {

  // When load 'requirejs' always load the following files also
  
//  deps: [
////    "Magento_Theme/js/bootstrap.min",
//    "Magento_Theme/js/jquery.jcarousel.min",
//    "Magento_Theme/js/jquery.jcarousel-swipe",
//    "Magento_Theme/js/jcarousel.responsive",
//    "Magento_Theme/js/tab"
//  ],
  shim: {
        "Magento_Theme/js/custom": {
            deps: ['jquery']
        },
        'Magento_Theme/js/jquery.jcarousel.min':['jquery'],
        'Magento_Theme/js/jquery.jcarousel-swipe':['jquery'],
        'Magento_Theme/js/jcarousel.responsive':['jquery'],
        'Magento_Theme/js/tab':['jquery']
    }

};