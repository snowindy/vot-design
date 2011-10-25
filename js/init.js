jQuery(function( $ ){
    $.localScroll.defaults.axis = 'x';
    var speed = 300;
    
    function onAfterSlide( anchor, settings ){
            if (currentSlide >= indexMapLen - 1){
                $('.next-slide').fadeOut(speed);
            }else{
                $('.next-slide').fadeIn(speed);
            }
            
            if (currentSlide <= 0){
                $('.prev-slide').fadeOut(speed);
            }else{
                $('.prev-slide').fadeIn(speed);
            }
        }
    
    $.localScroll({
        queue:true,
        duration:700,
        hash:true,
        onAfter: onAfterSlide
    });
    
    
    
    function setCurrentSlideNumber(num){
        currentSlide = num;
    }
    
    var indexMap = {};
    var indexMapLen = 0;
    
    $('#menu a').each(function(index, domElement){
        var el = $(domElement);
        
        indexMap[el.text()] = index;
    });
    
    indexMapLen = $('#menu a').size() - 1;
    
    var currentSlide = 0;
    
    $('#menu a').click(function(ev){
        var el =$(this);
        setCurrentSlideNumber(indexMap[el.text()]);
    });
    
    $('.next-slide').click(function(){
        $('#menu a').eq(currentSlide+1).click();    
    });
    $('.prev-slide').click(function(){
        $('#menu a').eq(currentSlide-1).click();    
    });
    
   
});