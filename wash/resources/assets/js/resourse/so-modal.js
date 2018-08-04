
/*
if(!$('body .so-modal')){
    $('body').append('<div id="so-modal"></div>');
}
*/

(function( $ ){

    let content = $('#so-content');
    let modal = $('#so-modal');
    let shadow = $('#so-modal__shadow');
    let close = $('.so-modal__close');
    let body = $('body');
    let windows = [];
    let scrollTop = null;

    function scrollDefault(){
        content.css('margin-top',0);
        content.removeClass('so-content_windows-open');
        shadow.hide();
        $(window).scrollTop(scrollTop);
        return false;
    };

    function scrollModal(){
        scrollTop = $(window).scrollTop();
        content.css('margin-top',-scrollTop);
        content.addClass('so-content_windows-open');
        shadow.show();
        body.css('overflow-y','scroll');
        
        return false;
    };

    function checkModal(name){
        if($('*').is(name)===false || $(name).hasClass('so-modal__item')==false){
            console.log('There is no modal window with name:'+name);
            return false;
        } else {
            return true;
        }
    }

    function openModal(name){
        if(checkModal(name)==false){
            return false;
        }
        if(!$(content).hasClass('so-content_windows-open')){
            scrollModal();
            modal.show();
        }
        
        close.show();
        $(name).show();
        windows.push(name);
        return false;
    }

    function closeModal(name){
        if(name){
            if(checkModal(name)==false){
                return false;
            }
            $(name).hide();
            // windows.filter(name); Удалить из виндовс элемент с именем если есть предыдущий показать его
        } else {
            $('.so-modal__item').hide();
            windows = [];
        }
        
        modal.hide();
        scrollDefault();
        return false;
    }


    function add(){

    }

  
    window.soModal = {};
    window.soModal.open = openModal;
    window.soModal.close = closeModal;

})( jQuery );

//position: absolute;
//top: 50%;
//margin-top: -209px; добавить фикс по центру если блок короткий