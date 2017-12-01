var db = {};
(function($){
$("document").ready(function(){
    // $("body").append('<link rel="stylesheet" type="text/css" href="assets/peri_styles.css">');
    // $(".bg_popup_container").hide();

    var dataURL = $("#CSV_LINK").html().replace(/<(?:.|\n)*?>/gm, '');
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

                $("#s" + val.Spot).attr('data-csscontent', val.Spot);
            });

            var category_list = [];

            $.each(db, function(key, val){
                category_list.push(val.Category);
            });

            category_list = $.uniqueSort(category_list)
            $("#cat_list").html("")

            $.each(category_list, function(key, val){
                var $cat_item = $("<div>", {id: val, "class": "category-list-item"}).html(val);
                $cat_item.mouseenter(function(){
                    $("."+val).addClass("cat-highlight");
                }).mouseleave(function(){
                    $("."+val).removeClass("cat-highlight");
                });
                $("#cat_list").append($cat_item);
            });


            console.log("Finished");
        }
    });


    
    
});



var openPanel = function(id) {

    $(".bg_popup_container").show();

    console.log(db[id]);

    var category = db[id].Category;
    $("#card").addClass(category);
    $("#title").html(db[id].Game);
    $("#category_name").html(category);
    $("#description").html("<span>"+db[id].Description.substr(0,1)+"</span>"+db[id].Description.substr(1));
    $("#play_time").html(db[id].Time + "<span>minutes</span>");
    $("#players").html(db[id].Players);
    $("#ages").html(db[id].Age);
    if (db[id].Review_Link != "") {
        $("#affiliate").show()
        $("#affiliate").html("<a style=target='_blank' href='"+((db[id].Review_Link != '')?db[id].Review_Link:"#")+"'>Read Full Review</a>");
    } else {
        $("#affiliate").hide()
    }
    $("#featured_image img").attr("src", "assets/img/"+db[id].Img_name);
    $("#az_regPrice").html(db[id].List_Price);
    $("#az_nowPrice").html(db[id].Amazon_Price);
    $("#amazon").attr('href',db[id].Amazon_Link);


    var solidStar = '<i class="fa fa-star" aria-hidden="true"></i>'
    var halfStar = '<i class="fa fa-star-half-o" aria-hidden="true"></i>'
    var antiStar = '<i class="fa fa-star-o" aria-hidden="true"></i>'

    var maxStars = 5
    var rateLeft = db[id].Amazon_Rating;
    var ratingOutStr = "";

    for (var i = maxStars - 1; i >= 0; i--) {
        if (rateLeft >= 1) {
            ratingOutStr += solidStar;
        } else if (rateLeft > 0) {
            ratingOutStr += halfStar;
        } else {
            ratingOutStr += antiStar;
        }
        rateLeft--;
    }

    $("#az_stars").html(ratingOutStr);


    setTimeout(function(){
        $(".bg_popup_container").addClass("ready");

        $(".bg_popup_container").click(function(){
            $(".bg_popup_container").removeClass('open');
            $(this).off("click");

            setTimeout(function(){ 
                $("#featured_image img").attr("src", "assets/img/placeholder.png");
                $("#card").removeClass(category);
                $(".bg_popup_container").hide(); 
                $(".bg_popup_container").removeClass("ready");
            }, 500);

        });

    }, 500);

    

    setTimeout(function(){ 
        $(".bg_popup_container").addClass('open'); 
    }, 0);
}   

})(jQuery);


