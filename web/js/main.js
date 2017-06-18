// /**
//  * Created by Maslov on 27.03.2017.
//  */
//
// $(document).ready(function(){
//
//     $('.news-card__share > a').on('click', function(e){
//         e.preventDefault() // prevent default action - hash doesn't appear in url
//         $(this).parent().find( 'div' ).toggleClass( 'news-card__social--active' );
//         $(this).toggleClass('share-expanded');
//     });
//
//     $('img.team-gallery__img').hover(function () {
//         $(this).toggleClass("mdl-shadow--4dp");
//     })
//
//     $("#matches-sl").owlCarousel({
//         items: 2,
//         startPosition:1,
//         nav:true,
//         navText:["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"]
//     });
//     $("#tours-sl").owlCarousel({
//         items: 1,
//         startPosition:0,
//         nav:true,
//         navText:["<i class='fa fa-chevron-circle-left fa-2x'></i>","<i class='fa fa-chevron-circle-right fa-2x'></i>"]
//     });
// });

$(document).ready(function() {
	$("#contactform-phone").mask('(000) 000-0000');
});

$(document).on('beforeSubmit', 'form#commentForm', function () {
    var form = $(this);
    var submit = $('.form-card__actions > button');
    if (form.find('.has-error').length) {
        return false;
    }
    $.ajax({
        url: form.attr('action'),
        type: 'post',
        data: form.serialize(),
        beforeSend: function() {
            submit.attr('disabled', 'disabled');
        },
        success: function (data) {
            var item = $(data).hide().fadeIn(800);
            $('.comments__list').append(data);
            $('#noComments').hide();
            var num = +$("#comments__count").html() + 1;
            alert(num);
            $("#comments__count").html(num);
            submit.removeAttr('disabled');
        }
    });
    return false;
});

// lightGallery(document.getElementById('team-gallery'), {
//     thumbnail: true
// });