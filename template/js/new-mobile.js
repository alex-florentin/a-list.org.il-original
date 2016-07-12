$(document).ready(function(){




   var windowWidth = $(window).width();
   if (windowWidth < 768) {
      var index = $('#index');
      var featured = $('#index .featured').remove();
      var pagination = $('#index #pagination_num').remove();
      //permanently removed
      var facebookIcon = $('#index .social-icons .facebook-page').remove();
      var usersList = $('#index main #content').remove();
      var getInTouch = $('#index .get-in-touch').remove();
      var footer = $('#index footer').detach();
      var logo = $('.logo').remove();

      var topBar = $('.top-bar');
      var topBarRight = $('.top-bar .right');
      var shareBox = $('#hidden-share-box');
      var loader = $('.loader');
      var mobileDescription = $('.mobile-description');
      var catButton = $('.cat-button');
      var categoriesContainer = $('.h-categories');
      var liButton = $('#header_form ul li');
      var menuButton = $('.toggle-menu-button');
      var shareIcon = $('.social-icons button');
      var bottomBar = $('.bottom-bar');
      var searchBox = $('.search-box');
      var logoSlim = $('.logo-slim');


      index.css({
         'overflow': 'hidden',
         'background-image': 'url("../wp-content/themes/alist_template_v2/img/index_bg.png")'
      });
      topBar.css({
         'padding': '10px 0',
         'height': 'auto'
      });
      topBarRight.css('float', 'right');
      logoSlim.css({
         'display': 'inline-block',
         'margin-top': '0px'
      });
      menuButton.css({
         'margin-left': '15px',
         'margin-top': '0'
      });

      shareBox.addClass('hidden-share-box-mobile');
      shareIcon.css('margin-top', '3px');
      mobileDescription.css('display', 'inline-block');
      bottomBar.css({
         'margin-top': '150px',
         'background-color': 'rgba(255,255,255,.7)',
         'padding': '30px 0'

      });
      searchBox.addClass('search-box-mobile');

      // ON CLICK >>> ON CLICK >>> ON CLICK >>> ON CLICK >>>ON CLICK >>> ON CLICK >>> ON CLICK >>> ON CLICK >>>


      catButton.click(function(){
         bottomBar.toggleClass('bottom-bar-actived');
         categoriesContainer.css('top', '100px');
         mobileDescription.toggleClass('mobile-description-desactived');
      });

      // ON CLICK >>> ON CLICK >>> ON CLICK >>> ON CLICK >>>ON CLICK >>> ON CLICK >>> ON CLICK >>> ON CLICK >>>

      liButton.click(function(){
         index.css({
            'background-image': '',
            'overflow': ''
         });
         usersList.appendTo('main');
         getInTouch.appendTo('main');
         facebookIcon.appendTo('.social-icons');
         logo.appendTo('.logo-container');
         footer.appendTo('body');
         topBar.css({
            'padding': '',
            'height': ''
         });
         logoSlim.remove();
         topBarRight.css('float', '');
         shareBox.removeClass('hidden-share-box-mobile');
         shareIcon.css({
            'background-color': '',
            'color': ''
         });
         bottomBar.css({
            'margin-top': '',
            'background-color': '',
            'padding': ''

         });
         searchBox.removeClass('search-box-mobile');
         mobileDescription.css('display', 'none');
         catButton.click(function(){
            bottomBar.toggleClass('bottom-bar-actived');
            categoriesContainer.css('top', '');
            mobileDescription.css('top', '');
         });
         menuButton.css({
            'margin-left': '',
            'margin-top': ''
         });

         loader.css({
            'top': '0',
            'left': '0',
            'width': '100%',
            'height': '100%',
            'text-align': 'center',
            'padding-top': '200px',
            'background-color': '#fff'
         });
      });




   }




});
