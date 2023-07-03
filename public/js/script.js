
    $(document).ready(function() {
      $(".card").hover(
        function() {
          $(this).find(".card-body").removeClass("slide-left").addClass("slide-right");
        },
        function() {
          $(this).find(".card-body").removeClass("slide-right").addClass("slide-left");
        }
        
      );
      
    });
    

