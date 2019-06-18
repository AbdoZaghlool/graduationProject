$(".post-content").niceScroll({
    cursorcolor:"#00000052",
    cursorwidth:"9px",

  });
  $('').niceScroll({
    cursorcolor:"#333",
    cursorwidth:"10px",

  });

  document.querySelector(".checkLang").addEventListener("keyup", function() {
    if (/^[a-zA-Z]+$/.test(this.value)) {
      
      document.querySelector(".checkLang").style.direction ="ltr";
    } else {
     
      document.querySelector(".checkLang").style.direction ="rtl";
      
      
    }
  });
  