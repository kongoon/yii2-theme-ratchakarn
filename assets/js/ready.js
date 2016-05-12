$(document).ready(function(){	
    //console.log($.cookie('left-content'));
    //กำหนดความสูงเริ่มต้นของ #separator
    $(function(){
        if($("#left-content").height() === 0){
            $("#separator").css('height', '250px');
        }else{
            $("#separator").css('height', $("#left-content").height() + 'px');
        }
        
    });
    
    var leftMenu = $('#left-menu');
    var leftContent = $('#left-content');
    var mainContent = $('#main-content');
    
    //function แสดงเมนูซ้าย
    function showLeftContent(){
        leftMenu.addClass('left-content-active');
        leftMenu.removeClass('left-content-hide'); 
        leftContent.removeClass('col-md-0');
        leftContent.addClass('col-md-2');
        mainContent.removeClass('col-md-12');
        mainContent.addClass('col-md-10');
        $.cookie('left-content', 'show', {expires: 1});
    }
    //function ซ่อนเมนูซ้าย
    function hideLeftContent(){
        leftMenu.removeClass('left-content-active'); 
        leftMenu.addClass('left-content-hide'); 
        leftContent.removeClass('col-md-2');
        leftContent.addClass('col-md-0');
        mainContent.removeClass('col-md-10');
        mainContent.addClass('col-md-12');
        $.cookie('left-content', 'hide', {expires: 1});
    }
    //เมื่อมีการคลิก separator
    var menuButton = $('#menu-button');
    menuButton.click(function(e){
        e.preventDefault();
        //console.log(leftContent.hasClass('left-content-active'));
        if($.cookie('left-content') === null || $.cookie('left-content') === 'hide'){
            showLeftContent();
        }else if($.cookie('left-content') === 'show'){
            hideLeftContent();
        }
        //console.log($.cookie('left-content'));
        //console.log(leftContent.hasClass('left-content-active'));
    });
    //หาก cookie เป็น null ให้แสดงเมนูขวา
    if($.cookie('left-content') === null || $.cookie('left-content') === 'hide'){
        leftMenu.removeClass('left-content-active'); 
        leftMenu.addClass('left-content-hide'); 
        leftContent.removeClass('col-md-2');
        leftContent.addClass('col-md-0');
        mainContent.removeClass('col-md-10');
        mainContent.addClass('col-md-12');
    }
    if($.cookie('left-content') === 'show'){
        leftMenu.addClass('left-content-active');
        leftMenu.removeClass('left-content-hide'); 
        leftContent.removeClass('col-md-0');
        leftContent.addClass('col-md-2');
        mainContent.removeClass('col-md-12');
        mainContent.addClass('col-md-10');
    }
    //////////////////////////////////////

});
	