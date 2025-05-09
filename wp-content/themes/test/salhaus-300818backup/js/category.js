//category
// $(function() { 
//     $('.cat-list li').on('click', function() {
//         $('.cat-list li').removeClass('current');
//         $(this).addClass('current');
//         filter = $(this).attr('gallery-filter');

//         $('.category li').each( function() {
//             if (filter == 'all') {
//                 $(this).fadeIn(); 
//             } else {
//                 $(this).hide();
//                 if ($(this).attr('filter-category') == filter) {
//                     $(this).fadeIn();
//                 }
//             }
//         });
//     });
// });

// category-list
$(function() {
     $(".category-list-sp").hide();
        $(".category-close").hide();
        $(".cat-menu").click(function(){
            $(".category-list-sp").slideToggle("slow");
            $(this).find(".category-close, .category-select").toggle();
        });
        $('.cat-list li').click(function(){
        	$(".category-list-sp").slideUp("slow");
        	$(".category-close").hide();
        	$(".category-select").show();
        });
});
