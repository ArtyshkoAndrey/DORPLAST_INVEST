/*
 * Copyright (c) 2021. All code files are the property of the Fulliton Creator.
 * No one has the right to modify files without the consent of the creator.
 * The code is completely open and copyable is allowed.
 * GitHub https://github.com/ArtyshkoAndrey/
 */

$(document).ready(function(){
  let lastId,
    topMenu = $(".navbar-default #menu-links #links .col-auto"),
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function () {
      let item = $($(this).attr("href"));
      if (item.length) {
        return item;
      }
    });
  menuItems.click(function (e) {
    let deltaH
    if (window.innerWidth <= 992) {
      deltaH = 130;
    } else if (window.innerWidth <= 768) {
      deltaH = 90;
    } else {
      deltaH = 180;
    }
    let href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top - deltaH;
    $('html, body').stop().animate({
      scrollTop: offsetTop
    }, 500);
    e.preventDefault();
  });
  $(window).scroll(function () {
    let deltaH
    if (window.innerWidth <= 992) {
      deltaH = 130;
    } else if (window.innerWidth <= 768) {
      deltaH = 90;
    } else {
      deltaH = 180;
    }

    let fromTop = $(this).scrollTop();
    let cur = scrollItems.map(function () {
      if ($(this).offset().top - deltaH - 1 <= fromTop)
        return this;
    });
    cur = cur[cur.length - 1];
    let id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
      lastId = id;
      menuItems.removeClass("active")
      menuItems.filter("[href='#" + id + "']").addClass("active");
    }
  });
});
