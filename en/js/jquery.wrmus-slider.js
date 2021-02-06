function print(str){
    console.log(str);
}
function loadSlide(slide){
    if (slide!=null && !slide.hasClass('loaded')){
        imgsrc = slide.data('imgsrc');
        slide.html("<img src='"+imgsrc+"' />");
        slide.addClass('loaded');
    }
}
function changeSlide(currentslide, nextslide, ondeck){
    // make sure the next will be shown when thge current one fades
    loadSlide(nextslide);
    nextslide.css('z-index',50);

    // get the caption id
    currentcap = $('.slide-caption.active');
    currentcapid = currentcap.index();
    newcapid = nextslide.data('cap-id');

    if (newcapid != currentcapid){
        newcap = $($('.slide-caption')[newcapid]);
        currentcap.fadeOut(500);
        newcap.fadeIn(500);
        currentcap.removeClass('active');
        newcap.addClass('active');
    }

    // fade out to reveal the slide below
    currentslide.fadeOut(500, function(){
        $(this).removeClass('active');
        // set back to default z-index
        $(this).css('z-index',1);

        nextslide.addClass('active');
        nextslide.css('z-index',100);

        loadSlide(ondeck);
        // make visible again
        $(this).show();
    });
}

function changeButton(current, next){
    current.removeClass('active');
    next.addClass('active');
}


$(document).ready(function(){

    $('#slider-right').click(function(){
        // fade the current slide to reveal the one beneath it
        // if the one after (still hidden) isn't loaded, add it
        currentslide = $('.slide.active');

        currentbutton = $('.slider-button.active');
        currentbuttonwrap = currentbutton.parent();

        if (currentslide.is($('.slide').last())){
            nextslide = $('.slide').first();
            nextbutton = $('#slider-control li .slider-button').first();
        }
        else{
            nextslide = currentslide.next();
            nextbutton = currentbuttonwrap.next().children('.slider-button');
        }
        ondeck = nextslide.next();

        changeSlide(currentslide, nextslide, ondeck);
        changeButton(currentbutton, nextbutton);
        
    });
    $('#slider-left').click(function(){
        currentslide = $('.slide.active');

        currentbutton = $('.slider-button.active');
        currentbuttonwrap = currentbutton.parent();

        // check to see if it's the first slide
        if (currentslide.is($('.slide').first())){
            nextslide = $('.slide').last();
            nextbutton = $('#slider-control li .slider-button').last();
        }
        else{
            nextslide = currentslide.prev();
            nextbutton = currentbuttonwrap.prev().children('.slider-button');
        }
        ondeck = nextslide.prev();

        changeSlide(currentslide, nextslide, ondeck);
        changeButton(currentbutton, nextbutton);
    });

    $('.slider-button').click(function(){
        id = $(this).data('slide-id');
        nextslide = $($('.slide')[id])
        if(nextslide.hasClass('active')){
            return false;
        }
        currentslide = $('.slide.active');
        changeSlide(currentslide, nextslide, null);
        changeButton( $('.slider-button.active'), $(this) );

        return false;
    });

});