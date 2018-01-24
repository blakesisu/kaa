import $ from 'jquery';

const $menuBtn = $('.site-header__menu-btn');
const $siteNav = $('.site-nav');
const $closeBtn = $siteNav.find('.site-nav__close');
const $navLinks = $siteNav.find('.site-nav__link');
const $utilities = $siteNav.find('.site-nav__utilities');

const openNav = function () {
  $siteNav.addClass('is-open');

  setTimeout(() => {
    $utilities.addClass('is-open');
    $navLinks.each((i, el) => {
      setTimeout(() => {
        $(el).addClass('is-visible');
      }, i * 100);
    });
  }, 600);
};

const closeNav = function () {
  // reverse the links
  $($siteNav.find('.site-nav__link').get().reverse()).each((i, el) => {
    setTimeout(() => {
      $(el).removeClass('is-visible');
    }, i * 100);
  });

  setTimeout(() => {
    $siteNav.removeClass('is-open');
    $utilities.removeClass('is-open');
  }, 100 * $navLinks.length);
};

$menuBtn.click((e) => {
  e.preventDefault();
  openNav();
});

$closeBtn.click((e) => {
  e.preventDefault();
  closeNav();
});
