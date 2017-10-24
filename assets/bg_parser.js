var db = {};
(function($){
$("document").ready(function(){
    // $("body").append('<link rel="stylesheet" type="text/css" href="assets/peri_styles.css">');
    $(".bg_popup_container").hide();

    var dataURL = $("#CSV_LINK").html();
    $("#CSV_LINK").remove();

    Papa.parse(dataURL, {
        header: true,
        download: true,
        complete: function(results) {
            $.each(results.data,function(index, val){
                db[val.Spot] = val;

                $("#s" + val.Spot).html(val.Abbreviation).addClass(val.Category).click(function(){
                    openPanel(val.Spot);
                });
            });

            console.log("Finished");
        }
    });
});



var openPanel = function(id) {

    $(".bg_popup_container").show();
    //$("body").append('<div class="bg_popup_container"><div class="bg_popup">' + getData(id) + '</div></div>');

    console.log(db[id]);

    var category = db[id].Category;
    $("#card").addClass(category);
    $("#title").html(db[id].Game);
    $("#category_name").html(category);
    $("#description").html("<span>"+db[id].Description.substr(0,1)+"</span>"+db[id].Description.substr(1));
    $("#play_time").html(db[id].Time + "<span>minutes</span>");
    $("#players").html(db[id].Players);
    $("#ages").html(db[id].Age);
    $("#affiliate").html("<a style='font-size: 34%;' target='_blank' href='"+((db[id].Review_Link != '')?db[id].Review_Link:"#")+"'>[Review Link]</a>");
    $("#featured_image img").attr("src", "assets/img/"+db[id].Img_name);

    $(".bg_popup_container").click(function(){
        $("#featured_image img").attr("src", "assets/img/placeholder.png");
        $("#card").removeClass(category);
        $(this).hide();
    });
}

})(jQuery);


