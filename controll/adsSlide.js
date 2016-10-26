$("#ads > div:gt(0)").hide();

setInterval(function() { 
  $('#ads > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#ads');
},  3000);