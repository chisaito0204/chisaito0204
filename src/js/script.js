/*********************
 * index
 * -------------------
 * 0. common
 * 1. header / footer
 * 2. Swiper
 * 3. GSAP
 * 4. Lenis
 * 5. Muuri
 * 6. Luminous
 *********************/


/*********************
 * 0. common
 *********************/

/* マウスストーカー */
document.addEventListener('DOMContentLoaded', function () {
  // マウスストーカー
  const cursor = document.getElementById('js-cursor');
  const links = document.querySelectorAll("a , input");
  const articles = document.querySelectorAll(".blog__listInnerArticle");
  const header = document.querySelectorAll(".header__nav__item *");
  const sortBtns = document.querySelectorAll(".sort-btn li");


  // マウスを動かした時のイベント
  document.addEventListener('mousemove', function (e) {
    cursor.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
    cursor.style.opacity = '1';
  });

  // ホバーイベント
  if (links) {
    links.forEach(link => {
      link.addEventListener('mouseenter', () => {
        cursor.classList.add('js-hover');
      }, false);

      link.addEventListener('mouseleave', () => {
        cursor.classList.remove('js-hover');
      }, false);
    });
  }
  if (articles) {
    articles.forEach(article => {
      article.addEventListener('mouseenter', () => {
        cursor.classList.add('js-hover');
      }, false);

      article.addEventListener('mouseleave', () => {
        cursor.classList.remove('js-hover');
      }, false);
    });
  }
  if (sortBtns) {
    sortBtns.forEach(sortBtn => {
      sortBtn.addEventListener('mouseenter', () => {
        cursor.classList.add('js-hover');
      }, false);

      sortBtn.addEventListener('mouseleave', () => {
        cursor.classList.remove('js-hover');
      }, false);
    });
  }

  header.forEach(contents => {
    contents.addEventListener('mouseenter', () => {
      cursor.classList.add('js-hover-header');
    }, false);

    contents.addEventListener('mouseleave', () => {
      cursor.classList.remove('js-hover-header');
    }, false);
  });

  // 背景色が同じ色の場合は白にする

  const topAbout = document.querySelector('.top__about');
  if (topAbout) {
    topAbout.addEventListener('mouseenter', function (event) {
      cursor.style.backgroundColor = '#fff';
    });
    topAbout.addEventListener('mouseleave', function (event) {
      cursor.style.backgroundColor = '#FFCCCB';
    });
  }
  const footer = document.querySelector('.footer');
  footer.addEventListener('mouseenter', function (event) {
    cursor.style.backgroundColor = '#fff';
  });
  footer.addEventListener('mouseleave', function (event) {
    cursor.style.backgroundColor = '#FFCCCB';
  });

});

// articleタグ→aタグ処理
const articleLists = document.querySelectorAll('.blog__listInnerArticle');

articleLists.forEach(article => {
  const blogLink = article.querySelector('.blogLink');
  article.addEventListener('click', function () {
    const link = blogLink.getAttribute('href');
    window.location.href = link;
  });
});


/*********************
  * 1. header / footer
*********************/

// ヘッダー非表示・非表示
const headerElement = document.querySelector(".js-header");

if (headerElement) {
  let lastScrollPosition = 0;

  window.addEventListener("scroll", () => {
    const spMenuBtn = headerElement.querySelector(".header__spMenuBtn");
    if (spMenuBtn && spMenuBtn.classList.contains("is-open")) {
      return;
    }

    const currentScrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (currentScrollPosition - lastScrollPosition > 100) {
      headerElement.classList.remove("isShow");
      headerElement.classList.add("isHide");
      lastScrollPosition = currentScrollPosition;
    } else if (lastScrollPosition - currentScrollPosition > 100) {
      headerElement.classList.add("isShow");
      headerElement.classList.remove("isHide");
      lastScrollPosition = currentScrollPosition;
    }
  });
}


// SPヘッダーメニュー開閉
document.addEventListener('DOMContentLoaded', function () {
  var spMenuBtn = document.querySelector('.header__spMenuBtn');
  var bodyHtml = document.querySelectorAll('body, html');
  var spSideMenu = document.querySelector('.header__spSideMenu');

  if (spMenuBtn) {
    spMenuBtn.addEventListener('click', function () {

      bodyHtml.forEach(function (element) {
        element.animate({ scrollTop: 0 }, 100);
      });

      spMenuBtn.classList.toggle('is-open');
      if (spSideMenu) {
        spSideMenu.classList.toggle('is-open');
      }
    });
  }
});


/*********************
 * 2. Swiper
 *********************/

/*********************
 * 3. GSAP
 *********************/
/*!
 * GSAP 3.12.2
 * https://greensock.com
 *
 * @license Copyright 2008-2023, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for
 * Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
*/
/*!
 * ScrollToPlugin 3.12.2
 * https://greensock.com
 *
 * @license Copyright 2008-2023, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for
 * Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
*/
document.addEventListener('DOMContentLoaded', function () {
  window.matchMedia("(max-width: 959px)").matches;
  const getDeviceType = (tb = false) => {
    if (tb && window.matchMedia("(min-width: 960px) and (max-width: 1200px)").matches) {
      return "tb";
    } else if (window.matchMedia("(max-width: 959px)").matches) {
      return "sp";
    } else {
      return "pc";
    }
  };

  gsap.config({
    nullTargetWarn: false,
  });

  /* プログレスバー */
  gsap.to('.scrollBar', {
    value: 100,
    ease: 'none',
    scrollTrigger: {
      scrub: 0.3,
      end: "bottom bottom",
    }
  });

  /* タイトル表示 */
  const logo = gsap.timeline();
  SplitType.create('#ttl');
  logo.set(".char", {
    autoAlpha: 0,
    y: -20,
  });
  logo.set(".js-cLogo", {
    autoAlpha: 0,
    y: -20,
  });
  logo.to(".char", {
    autoAlpha: 1,
    y: 0,
    ease: 'none',
    stagger: {
      each: .1,
    },
  });
  logo.to(".js-cLogo", {
    autoAlpha: 1,
    y: 0,
    ease: 'none',
  });

  /* トップ */
  gsap.fromTo('.js-cLogo img',
    {
      yPercent: 0,
      y: 50,
    },
    {
      yPercent: -20,
      y: 0,
      ease: "none",
      scrollTrigger: {
        trigger: '.js-cLogo',
        start: "top bottom",
        end: "bottom top",
        scrub: 1,
      },
    }
  );

  gsap.set(".top__mainLogo__menu--txt", {
    autoAlpha: 0,
    y: -20,
  });
  gsap.to(".top__mainLogo__menu--txt", {
    autoAlpha: 1,
    y: 0,
    ease: 'none',
    stagger: {
      each: .3,
    },
  });

  /* 各タイトル フェードイン */
  const modTitles = document.querySelectorAll('.modTitle');
  modTitles.forEach(modTitle => {
    SplitType.create(modTitle);
    gsap.set(modTitle.querySelectorAll(".char"), {
      autoAlpha: 0,
      y: -20,
    });

    gsap.to(modTitle.querySelectorAll(".char"), {
      autoAlpha: 1,
      y: 0,
      ease: 'none',
      stagger: {
        each: .1,
      },
      scrollTrigger: {
        trigger: modTitle,
      },
    });
  });

  gsap.utils.toArray(".modSubTitle").forEach(target => {
    gsap.set(".modSubTitle", {
      opacity: 0,
      y: -20,
    });
    gsap.to(target, {
      opacity: 1,
      y: 0,
      ease: "power3.out",
      duration: 1,
      delay: 0.5,
      scrollTrigger: {
        trigger: target,
      },
    });
  });

  /* About */
  ScrollTrigger.matchMedia({
    "(min-width: 960px)": function () {
      gsap.to(".top__aboutBox__profile01", {
        ease: "none",
        scrollTrigger: {
          trigger: ".top__aboutBox",
          pin: ".top__aboutBox__profile01",
          start: "top top-=20%",
          scrub: true
          // markers: true,
        }
      });
    },
  });

  const aboutFlow = gsap.timeline();
  var element = document.querySelector('.top__about');
  aboutFlow.set(element, {
    clipPath: "polygon(0% 0%, 0% 0%, 0% 0%, 0% 0%)",
  });
  aboutFlow.set(".top__aboutBox__profile01--txt", {
    opacity: 0,
    y: -20,
  });
  aboutFlow.set(".top__aboutBox__profile01--img", {
    opacity: 0,
    y: -20,
  });
  aboutFlow.set(".top__aboutBox__profile02", {
    opacity: 0,
    y: -20,
  });

  aboutFlow.to(element, {
    clipPath: "polygon(100% 0, 0% calc(0% + 9vw), 0% calc(100% - 5vw), 100% 100%)",
    duration: 1,
    ease: 'power4.Out',
  });
  aboutFlow.to(".top__aboutBox__profile01--txt", {
    duration: 0.5,
    ease: 'none',
    opacity: 1,
    y: 0,
  });
  aboutFlow.to(".top__aboutBox__profile01--img", {
    duration: 0.5,
    ease: 'none',
    opacity: 1,
    y: 0,
  });
  aboutFlow.to(".top__aboutBox__profile02", {
    duration: 1,
    ease: 'none',
    opacity: 1,
    y: 0,
  });
  ScrollTrigger.create({
    trigger: ".top__about",
    animation: aboutFlow,
    // markers: true,
  });

  /* Works */
  gsap.set(".top__worksList", {
    autoAlpha: 0,
    y: -20,
  });
  gsap.to(".top__worksList", {
    autoAlpha: 1,
    y: 0,
    ease: 'none',
    scrollTrigger: {
      trigger: ".top__worksList",
    },
  });
  gsap.utils.toArray('.js-parallax').forEach(wrap => {
    const y = wrap.getAttribute('data-y') || -50;
    gsap.to(wrap, {
      y: y,
      scrollTrigger: {
        trigger: ".top__worksList--img",
        start: 'top bottom',
        end: 'bottom top',
        scrub: 0.5,
        //markers: true
      }
    })
  });

  /* Gallery */
  gsap.set(".top__galleryList--img", {
    autoAlpha: 0,
    y: -20,
  });
  gsap.to(".top__galleryList--img", {
    autoAlpha: 1,
    y: 0,
    ease: 'none',
    stagger: {
      each: .3,
    },
    scrollTrigger: {
      trigger: ".top__galleryList",
    },
  });

  /* Contact */
  gsap.to('.top__contactBg', {
    yPercent: -20,
    ease: "none",
    scrollTrigger: {
      trigger: '.top__contact',
      start: 'top bottom',
      end: 'bottom top',
      scrub: true
    }
  });

  /* はりねずみ歩く */
  gsap.set('.top__roll', {
    x: getDeviceType() === "sp" ? 250 : 500,
    ease: "none",
  }),
    gsap.to('.top__roll', {
      duration: getDeviceType() === "sp" ? 2.5 : 5,
      x: 0,
      ease: "none",
    });

  var tweens = [];
  tweens.push(
    gsap.to('.rollBody img', {
      rotation: 5,
      duration: 1,
      x: 1,
      yoyo: true,
      repeat: -1,
      ease: "none",
    }),
    gsap.to('.rollFront--f01 img', {
      rotation: 15,
      duration: 1,
      x: 5,
      yoyo: true,
      repeat: -1,
      ease: "none",
    }),
    gsap.to('.rollFront--f02 img', {
      rotation: -15,
      duration: 1,
      x: -5,
      yoyo: true,
      repeat: -1,
      ease: "none",
    }),
    gsap.to('.rollBack--b01 img', {
      rotation: 15,
      duration: 1,
      x: -5,
      delay: 1,
      yoyo: true,
      repeat: -1,
      ease: "none",
    }),
    gsap.to('.rollBack--b02 img', {
      rotation: -15,
      duration: 1,
      x: 5,
      delay: 1,
      yoyo: true,
      repeat: -1,
      ease: "none",
    })
  );
  const roll = document.querySelector('.top__roll');
  if (roll) {
    roll.addEventListener('mouseenter', function () {
      tweens.forEach(function (tween) {
        tween.pause();
      });
    });
  }
  if (roll) {
    roll.addEventListener('mouseleave', function () {
      tweens.forEach(function (tween) {
        tween.play();
      });
    });
  }

  /* Demo01 */
  const mainFlowanimation = gsap.timeline();
  mainFlowanimation.set(".demo01FlowText--txt01", {
    // opacity: 0,
    y: 0,
  });
  mainFlowanimation.set(".demo01FlowText--txt02", {
    opacity: 0,
    y: 0,
    color: "#000",
  });
  mainFlowanimation.set(".demo01Flow", {
    background: "#fff"
  });

  mainFlowanimation.to(".demo01FlowText--txt01", {
    opacity: 1,
    duration: getDeviceType() === "sp" ? 0.1 : 0.6,
  });
  mainFlowanimation.to(".demo01FlowText--txt01", {
    opacity: 0,
  });
  mainFlowanimation.to(".demo01Flow", {
    background: "#000"
  }, '<');
  mainFlowanimation.to(".demo01FlowText--txt02", {
    opacity: 1,
    duration: getDeviceType() === "sp" ? 0.1 : 0.6,
    color: "#fff",
  });
  ScrollTrigger.create({
    trigger: ".demo01FlowText",
    animation: mainFlowanimation,
    start: getDeviceType() === "sp" ? "top top" : "top top",
    end: getDeviceType() === "sp" ? "bottom top-=150%" : "bottom top-=200%",
    pin: ".demo01FlowInner",
    scrub: true,
    paused: true,
    // markers: true,
  });

  const items01 = gsap.utils.toArray(".js-trigger01");
  items01.forEach((item01) => {
    gsap.fromTo(
      item01.querySelector("img"),
      {
        // opacity: 0,
        y: 100,
      },
      {
        opacity: 1,
        y: 0,
        ease: "power4.Out",
        scrollTrigger: {
          trigger: item01,
          start: "top top+=30%",
          end: "bottom top+=30%",
          scrub: true,
        },
      }
    );
  });
});



/*********************
 * 4.  Lenis ※慣性スクロール
*********************/
const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);


/*********************
 * 5. Muuri ギャラリー切り替え
*********************/
document.addEventListener('DOMContentLoaded', function () {
  // .grid 要素が存在するかを確認
  var gridElement = document.querySelector('.grid');
  if (gridElement !== null) {
    // .grid 要素が存在する場合のみ、Muuriの設定を実行
    var grid = new Muuri('.grid', {
      // Muuriの設定
      showDuration: 600,
      showEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
      hideDuration: 600,
      hideEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
      visibleStyles: {
        opacity: '1',
        transform: 'scale(1)'
      },
      hiddenStyles: {
        opacity: '0',
        transform: 'scale(0.5)'
      }
    });

    // 並び替えボタンの設定
    $('.sort-btn li').on('click', function () {
      $(".sort-btn .active").removeClass("active");
      var className = $(this).attr("class");
      className = className.split(' ');
      $("." + className[0]).addClass("active");
      if (className[0] == "sort00") {
        grid.show('');
      } else {
        grid.filter("." + className[0]);
      }
    });
  } else {
  }
});


/*********************
 * 6. Luminous
*********************/
document.addEventListener('DOMContentLoaded', function () {
  new LuminousGallery(document.querySelectorAll('.luminous'));
});