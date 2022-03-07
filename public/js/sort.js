
function showProducts(minPrice, maxPrice) {
    $("#products li").hide().filter(function() {
        var price = parseInt($(this).data("price"), 10);


        return price >= minPrice || price <= maxPrice;
    }).show();
}



$(function(){
  var options = {
      range:true,
      min:0,
      max:114000,
      values:[500,12000],
      slide:function (event,ui) {
         var min =ui.values[0],
             max =ui.values[1];

         $(".max-price").text("تومان "+max);
          $(".min-price").text("تومان"+min);

         showProducts(max,min);
      }
  },min,max;

  $("#slider-range").slider(options);
  min=$("#slider-range").slider("values",0);
  max=$("#slider-range").slider("values",1);
    $(".max-price").text("تومان " +max );
    $(".min-price").text("تومان"+ min);
    showProducts(max,min);
});