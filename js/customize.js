// 自行加入的JS請寫在這裡
$(function() {
    // lazyload
    //可以指定你想要的元素做lazyload
    $("img").lazyload({ effect: "fadeIn" });
    //請放置customize.js
    $('.dataSlider').slick({
        dots: true,
        arrow: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        fade: true,
        cssEase: 'ease'
    });
    // 首頁輪播
    $('.mpSlider').slick({
        dots: true,
        arrow: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        fade: true,
        cssEase: 'ease'
    });
    //燈箱slick+lightBox組合
    $('.cp_slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        pauseOnHover: true,
        pauseOnFocus: true,
        focusOnSelect: true,
        accessibility: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
        }, {
            breakpoint: 545,
            settings: {
                arrows: true,
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
            }
        }]
    });
    $('.cp_slider').slickLightbox({
        caption: 'caption',
        useHistoryApi: 'true',
        lazy: true
    });
    // cp_photo
    $('.Slider-for').on('init reInit afterChange', function(event, slick, currentSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $('.controls').html(i + '/' + slick.slideCount);
    });
    $('.Slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.Slider-nav',
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true
    });
    $('.Slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.Slider-for',
        dots: true,
        arrows: true,
        focusOnSelect: true,
        infinite: true,
        centerMode:true
    });
    // 懶人包
    $('.lazy ul').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        pauseOnHover: true,
        arrow: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows: true,
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }]
    });
    // 影片
    $('.video ul').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        pauseOnHover: true,
        arrow: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }]
    });
    // 照片
    $('.photo ul').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        pauseOnHover: true,
        arrow: true,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true,
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
            }
        }]
    });
    // 國際事務
    $('.international ul').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        // autoplay: true,
        pauseOnHover: true,
        arrow: true,
        // centerMode: true,
        centerPadding: '20px',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true,
                // centerMode: true,
                centerPadding: '0px'
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                // centerMode: true,
                centerPadding: '0px'
            }
        }, {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                // centerMode: true,
                centerPadding: '0px'
            }
        }]
    });
    $(window).on("load resize", function(e) {
        var WindowWidth = $(window).outerWidth();
        var cellDiv1 = $(".tool_box").find('.item');
        if (WindowWidth >= 768) {
            $(".tool_box").each(function() {
                var highestBox = 0;
                $(cellDiv1, this).each(function() {
                    if ($(this).height() > highestBox) {
                        highestBox = $(this).height();
                    }
                });
                $(cellDiv1, this).height(highestBox);
            });
        }
    });
});
// lp 進階查詢
$(function(){
    $('.advanced_search_block .advanced_search').hide();
    $('.btn_advanced_search').off().click(function(event) {
        $('.advanced_search_block .advanced_search').stop().slideToggle();
    });
});
$(function(){
    var _category = $('.category');
    _category.find('li').has('ul').addClass('hasChild');
    var liHasChild = _category.find('li.hasChild'),
    liHasChild_level1 = $('.category ul').children('li.hasChild');
    // 無障礙tab設定
    _category.find('ul ul').hide();
    liHasChild.keyup(function() {
        $(this).children('ul').fadeIn();
        $(this).siblings().focus(function() {
            $(this).hide();
        });
    });
    _category.find('li').keyup(function() {
        $(this).siblings().children('ul').hide();
    });
    _category.find('li:last-child>a').focusout(function() {
        _category.find('li ul').hide();
    });
    liHasChild.on({
        mouseenter: function() {
            $(this).children('ul').stop(true, false).fadeIn();
        },
        mouseleave: function() {
            $(this).parent().siblings('ul').hide();
            $(this).children('ul').stop(true, false).fadeOut();
        }
    });
    liHasChild.off('click');
    $(document).on('touchend click', function(e) {
        var target = e.target;
        if (!$(target).is('.category li a')) {
            $('.category').find('li ul').hide();
        }
    });
})

$(function(){
    $(".result_bar .percent").each(function(){
        var aa =$(this).text();
        $(this).prev("td").find(".barbg").append("<span class='bar' style='width:" + aa + "'></span>");
    });
})
$(function(){
    $('.left_block .left_menu').find('li').has('ul').addClass('hasChild');
    $('.left_block .left_menu ul>li ul').hide();
    $('.left_block .left_menu ul').children('li.hasChild').click(function(e){
        $(this).siblings("li").children('ul').slideUp();
        $(this).children('ul').slideDown();
        e.preventDefault();
    });
    $('.left_block .left_menu ul').children('li.hasChild').keyup(function(){
        $(this).siblings().children('ul').slideUp();
        $(this).children('ul').slideDown();
        $(this).siblings().focus(function() {
            $(this).hide();
        });
    });
})
$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

    });
})
$(function(){
    $(".nation ul li a,.nation2 ul li a").hover(function() {
        var nation_index = $(this).parents("li").index();
        $("svg .mapblock").addClass('focus');
        $("svg .mapblock").eq(nation_index).removeClass('focus');
    }, function() {
        $("svg .mapblock").removeClass('focus');
    });

    $(".nation ul li a,.nation2 ul li a").focus(function() {
        var nation_index = $(this).parent("li").index();
        $("svg .mapblock").addClass('focus');
        $("svg .mapblock").eq(nation_index).removeClass('focus');
    });

    $(".nation ul li a,.nation2 ul li a").blur(function() {
        $("svg g").removeClass('focus');
    });
    $(".nation .singapore").hover(function() {
        $(".sg_map").fadeIn()
    }, function() {
        $(".sg_map").fadeOut()
    });
    $(".nation .singapore").focus(function() {
        $(".sg_map").fadeIn()
    });

    $(".nation .singapore").blur(function() {
        $(".sg_map").fadeOut()
    });

    $(".mapblock").hover(function() {
        var map_index = $(this).index();
        $(".nation ul li,.nation2 ul li").eq(map_index).find("a").addClass('active');
    }, function() {
        $(".nation ul li,.nation2 ul li").find("a").removeClass('active');
    });
});








function jsSlideDown(element, time) {
    let ele = window.getComputedStyle(element);
    let display = ele.display;
    let speed = time || 200;
    element.style.display = display;
    if (display === 'none') {
      element.style.display = 'block';
      element.style.overflow = 'hidden';
      let totalHeight = element.offsetHeight;
      element.style.height = '0px';
      element.style.transitionProperty = 'height';
      element.style.transitionDuration = `${speed}ms`;
      setTimeout(() => {
        element.style.height = `${totalHeight}px`;
      }, 10);
      setTimeout(() => {
        element.style.removeProperty('height');
        element.style.removeProperty('overflow');
        element.style.removeProperty('transition-duration');
        element.style.removeProperty('transition-property');
      }, speed);
    }
  }

  function jsSlideUp(element, time) {
    let ele = window.getComputedStyle(element);
    let display = ele.display;
    let speed = time || 200;
    element.style.display = display;
    if (display !== 'none') {
      let totalHeight = element.offsetHeight;
      element.style.overflow = 'hidden';

      element.style.height = `${totalHeight}px`;
      element.style.transitionProperty = 'height';
      element.style.transitionDuration = `${speed}ms`;
      setTimeout(() => {
        element.style.height = `0px`;
      }, 10);
      setTimeout(() => {
        element.style.display = 'none';
        element.style.removeProperty('height');
        element.style.removeProperty('overflow');
        element.style.removeProperty('transition-duration');
        element.style.removeProperty('transition-property');
      }, speed);
    }
  }
  function jsSlideToggle(element, time) {
    let ele = window.getComputedStyle(element);
    let display = ele.display;
    let speed = time || 200;
    element.style.display = display;
    if (display === 'none') {
      element.style.display = 'block';
      let totalHeight = element.offsetHeight;
      element.style.overflow = 'hidden';
      element.style.height = '0px';
      element.style.transitionProperty = 'height';
      element.style.transitionDuration = `${speed}ms`;
      setTimeout(() => {
        element.style.height = `${totalHeight}px`;
      }, 10);
      setTimeout(() => {
        element.style.removeProperty('height');
        element.style.removeProperty('overflow');
        element.style.removeProperty('transition-duration');
        element.style.removeProperty('transition-property');
      }, speed);
    } else {
      let totalHeight2 = element.offsetHeight;
      element.style.overflow = 'hidden';
      element.style.height = `${totalHeight2}px`;
      element.style.transitionProperty = 'height';
      element.style.transitionDuration = `${speed}ms`;
      setTimeout(() => {
        element.style.height = `0px`;
      }, 10);
      setTimeout(() => {
        element.style.display = 'none';
        element.style.removeProperty('height');
        element.style.removeProperty('overflow');
        element.style.removeProperty('transition-duration');
        element.style.removeProperty('transition-property');
      }, speed);
    }
  }


function randomFloor(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }

  // 亂數英文字
  function randomLetter(max) {
    let text = '';
    let letter = 'abcdefghijklmnopqrstuvwxyz';

    for (let i = 0; i < max; i++) text += letter.charAt(Math.floor(Math.random() * letter.length));
    return text;
  }

function accordionFunction(obj) {
    'use strict';
    const accordion = document.querySelector(obj.target);
    const autoClose = obj.autoClose;
    const openSwitch = obj.openSwitch;
    const openFirst = obj.openFirst;
    const { open, close } = obj.info;

    if (accordion) {
      let id = [];
      let accordionState;
      const accordionList = accordion.querySelectorAll('.accordionList');
      const accordionBtn = accordion.querySelectorAll('.accordionBtn');
      const accordionContent = accordion.querySelectorAll('.accordionContent');

      const count = accordionList.length;
      let nowIndex = obj.index === null ? null : obj.index <= count ? obj.index : count;
      const lastTab = accordionList[accordionList.length - 1];

      for (let i = 0; i < accordionList.length; i++) {
        id.push(`accordion_${randomLetter(3)}${randomFloor(0, 999)}`);
      }

      const init = () => {
        accordionList.forEach((content) => content.classList.remove('active'));
        // 增加無障礙設置
        accordionList.forEach((item, index) => {
          accordionBtn[index].insertAdjacentHTML('beforeend', `<span class="accordionState">${open}</span>`);
          accordionBtn[index].insertAdjacentHTML('beforeend', `<span class="accordionArrow"></span>`);
          accordionBtn[index].setAttribute('aria-expanded', 'false');
          accordionBtn[index].setAttribute('aria-controls', id[index]);
          accordionBtn[index].setAttribute('role', 'button');
          accordionContent[index].setAttribute('id', id[index]);
          accordionContent[index].setAttribute('aria-labelledby', id[index]);
          accordionState = accordion.querySelectorAll('.accordionState');
        });

        if (nowIndex !== null) {
          accordionList[nowIndex].classList.add('active');
          accordionBtn[nowIndex].setAttribute('aria-expanded', 'true');
          jsSlideDown(accordionContent[nowIndex]);
          accordionState[nowIndex].textContent = close;
        }
      };

      init();

      // 預先展開模式
      function openCheck() {
        if (!openFirst && nowIndex !== null) {
          const siblings = Array.prototype.filter.call(accordionContent[nowIndex].parentElement.parentElement.children, (child) => {
            return child !== accordionContent[nowIndex].parentElement;
          });
          siblings.forEach((item) => jsSlideUp(item.querySelector('.accordionContent')));
        } else if (!openFirst && nowIndex === null) {
          accordionContent.forEach((item) => jsSlideUp(item));
        } else {
          accordionState.forEach((item) => (item.textContent = close));
          accordionContent.forEach((item) => jsSlideDown(item));
          // 預先展開模式
          openFirst ? accordionList.forEach((item) => item.classList.add('active')) : null;
        }
      }
      openCheck();

      accordionList.forEach((item, index) => {
        const itemAllTarget = accordionContent[index].querySelectorAll('a,button,input,textarea,select');
        const firstItem = [...itemAllTarget][0];
        const lastItem = [...itemAllTarget][itemAllTarget.length - 1];
        const prevItemAllTarget = accordionContent[index - 1]?.querySelectorAll('a,button,input,textarea,select');
        const siblings = Array.prototype.filter.call(accordionList[index].parentElement.children, (child) => {
          return child !== accordionList[index];
        });

        // 點擊
        if (openSwitch) {
          accordionBtn[index].addEventListener('click', (e) => {
            e.preventDefault();
            handleToggle(index);
          });

          // 鍵盤
          accordionBtn[index].addEventListener('keydown', function (e) {
            if (e.which === 13) { // Enter 鍵
              e.preventDefault();
              handleToggle(index);
            }

            if (e.which === 9 && !e.shiftKey) { // Tab 鍵
              e.preventDefault();
              handleTab(index, firstItem, true);
            } else if (e.which === 9 && e.shiftKey) { // Shift + Tab 鍵
              e.preventDefault();
              handleTab(index, lastItem, false);
            }
          });

          // 處理展開或收合的邏輯
          function handleToggle(index) {
            const siblings = Array.prototype.filter.call(accordionList[index].parentElement.children, (child) => {
              return child !== accordionList[index];
            });

            accordionList[index].classList.toggle('active');
            jsSlideToggle(accordionContent[index]);
            accordionState[index].textContent === close ? (accordionState[index].textContent = open) : (accordionState[index].textContent = close);

            nowIndex = index;

            if (autoClose) {
              siblings.forEach((con) => {
                jsSlideUp(con.querySelector('.accordionContent'));
                con.classList.remove('active');
                con.querySelector('.accordionBtn').setAttribute('aria-expanded', 'false');
              });
            }
          }

          // 處理 Tab 鍵邏輯
          function handleTab(index, item, isForward) {
            accordionList[index].classList.add('active');
            accordionState[index].textContent = close;
            nowIndex = index;

            if (autoClose & !openFirst) {
              const siblings = Array.prototype.filter.call(accordionList[index].parentElement.children, (child) => {
                return child !== accordionList[index];
              });
              siblings.forEach((con) => {
                siblings.forEach((content) => content.classList.remove('active'));
                jsSlideUp(con.querySelector('.accordionContent'));
                con.querySelector('.accordionState').textContent = open;
                con.classList.remove('active');
              });
            }

            jsSlideDown(accordionContent[index]);
            if (itemAllTarget.length > 0) {
              item.focus();
            } else if (itemAllTarget.length === 0) {
              if (isForward) {
                accordionList[index + 1]?.focus();
              } else {
                accordionBtn[index - 1]?.focus();
              }
            }
          }
        }



        // 內容鍵盤遊走
        itemAllTarget.forEach((n, i) => {
          if (n) {
            n.addEventListener('keydown', function (e) {
              if (e.which === 9 && e.shiftKey) {
                if (e.target === firstItem) {
                  accordionBtn[index]?.focus();
                } else if (itemAllTarget.length === 0) {
                  accordionBtn[index - 1]?.focus();
                }
              }
            });
          }
        });
      });
    }
  }
  window.addEventListener('load', () => {
    // 手風琴功能
    accordionFunction({
      target: '.applyAccordion',
      openFirst: false, // 預設先展開所有內容，鍵盤的自動開合功能無效
      autoClose: false, // 點擊時自動關閉已展開的項目，若需要此功能需要關閉openFirst
      openSwitch: true, // 是否可開合
      index: 0, // 預設開啟第幾個
      info: {
        open: '展開', // 收合時顯示
        close: '收合', // 展開時顯示
      },
    });
  });
