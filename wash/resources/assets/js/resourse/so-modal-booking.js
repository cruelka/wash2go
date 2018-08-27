(function( $ ){

    
    let timeApprove = false;

    function openBookingForm(){
        soModal.open('.so-modal__booking-form');
    };

    window.soBooking = {};
    window.soBooking.open = openBookingForm;

    function createDatePicker(){
        
    let dayinner = $('#booking-form__day');

    let date = new Date();

    let day = date.getDate();

    let month = Number(date.getMonth())+1;

    var array = [];

    for(i=0;i<7;i++){

        let dayS = day,
            monthS = month;
        

        if(String(day).length==1){
            dayS = '0'+ day;
        }

        if(String(month).length==1){
            monthS = '0'+ month;
        }

        
        let s = dayS+'/'+monthS;

        if(Number(day)>29){
            day = 1;
            

            if(Number(month)==12){
                month = 1;
            } else {
                month = month + 1;
            }
            
        } else {
            day = day +1;
        }

        
        
        
        array.push(s);
    }

    array.map(item => {
        dayinner.append(`<option>${item}</option>`)
    });

    };

    function createTimePicker(){
        let array = [10,11,12,13,14,15,16,17,18,19,20,21,22];

        let timeInner = $('#booking-form__time');

        array.map(item => {
            let timeS = item;
            if(String(timeS).length==1){
                timeS = '0'+ timeS;
            }
            let itemTime = timeS + ':00';
            timeInner.append(`<option>${itemTime}</option>`);
        });
    }

    function priceChange(item){
        let washingtype = $('#booking-form__washing-type');
        let inner = $('#booking-form__item-total');

        let thisvalue = Number($('#booking-form__washing-type').val());

        inner.empty().append(thisvalue);


        $(inner).each(function () {
            var $this = $(this);
            $({ Counter: 0 }).animate({ Counter: $this.text() }, {
              duration: 1000,
              easing: 'swing',
              step: function () {
                $this.text(Math.ceil(this.Counter));
              }
            });
          });
        

        

        


    }
    
    /*
    $(document).ready(function(){
        createDatePicker();
        createTimePicker();
    });
    */

    $('.booking-steps__card-item_body-type').click(function(){
        if($(this).hasClass('booking-steps__card-item_selected')){
            soBookingForm.changePage(5,'bodytype');
        } else {
            $('.booking-steps__card-item_body-type').removeClass('booking-steps__card-item_selected');
            $(this).addClass('booking-steps__card-item_selected');
        }

        

    });

    function changePage(page,required){

        if(required && required=='bodytype'){
            let checkSelection = 0;

            $('.booking-steps__card-item_body-type').each(function(){
                if($(this).hasClass('booking-steps__card-item_selected')){
                    checkSelection += 1;
                }
            });



            if(checkSelection==0){
                $('.booking-steps__validation.booking-steps__validation_bodytype').empty().append('No body types').show();   
                return false;
            }
    
        }

        if(required && required=='map'){
            if($('#pac-input').val()==''){
                $('.booking-steps__validation.booking-steps__validation_map').empty().append('No location').show();
                return false;
               
            }
        }

        if(required && required=='services'){
            if($('.booking-steps__list-item_service.booking-steps__list-item_selected').length==0){
                $('.booking-steps__validation.booking-steps__validation_services').empty().append('No order').show();
                return false;
               
            }

            
        }

        if(page==6){
            timeApprove==false;
            $('.booking-steps__time-errors').empty();
        }

        if(required && required=='checkTime'){
            checkTime();

            if(timeApprove!=true){
                return false;
            }
            
        }

        $('.booking-steps__validation').empty().hide();

        

        $('.booking-steps__item').hide();
        $('#booking-steps__item-'+page).show();
    };

    $('.booking-steps__list-item').click(function(){
        let priceInner = $('.booking-steps__list-lable-total-data');

        

        if($(this).attr('oneandonly')){

            let status = 0;

         
            if($(this).hasClass('booking-steps__list-item_selected')){
                status = 1;
                
            }

            let attr = $(this).attr('oneandonly');
            $('.'+attr).removeClass('booking-steps__list-item_selected');
            $('.'+attr).find('.booking-steps__list-item-checkbox').removeClass('booking-steps__list-item-checkbox_selected');
            
       
            if(status==0){
                $(this).addClass('booking-steps__list-item_selected');
                $(this).find('.booking-steps__list-item-checkbox').addClass('booking-steps__list-item-checkbox_selected');
            } else {
                $(this).removeClass('booking-steps__list-item_selected');
                $(this).find('.booking-steps__list-item-checkbox').removeClass('booking-steps__list-item-checkbox_selected');
            }
            
        } else {
            //$(this).addClass('booking-steps__list-item_selected');
            //$(this).find('.booking-steps__list-item-checkbox').addClass('booking-steps__list-item-checkbox_selected');
        }

        let steamcount = 0;
        let price = 0;
        let nosteamcount = 0;

        $('.booking-steps__list-item_steam').each(function(){
            if($(this).hasClass('booking-steps__list-item_selected')){
                steamcount += 1;
            }
            
        });

        $('.booking-steps__list-item_no-steam').each(function(){
            if($(this).hasClass('booking-steps__list-item_selected')){
                nosteamcount += 1;
            }
            
        });

        

        if(nosteamcount==2){
            priceInner.empty().append('40 AED - Discount 10');
        } else if(steamcount==2){
            priceInner.empty().append('70 AED - Discount 15');
        } else  {
            $('.booking-steps__list-item_selected').each(function(){
                price += Number($(this).attr('value'));
            });

            priceInner.empty().append(price);
        }

        

        

        
    });






    $(document).ready(function(){



        $(function () {
                    $('#datetimepicker2').datetimepicker({ 
                        format: 'DD.MM.YYYY',
                        minDate: moment().subtract(0, 'days').millisecond(0).second(0).minute(0).hour(0),
                        maxDate: moment().add('7','days'),
                        defaultDate: moment().toDate(),
                    }).on("dp.change", function(e) {
                        checkTime();
                    });
                });

                $(function () {
                    $('#datetimepicker3').datetimepicker({
                        format: 'LT',
                        stepping: 15,
                        enabledHours: [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18]
                    }).on("dp.change", function(e) {
                        checkTime();
                    });
                });
      });

    

      $('#datetimepicker2').find('.form-control').click(function(){
        $(this).parent().find('.input-group-addon').click();
      });

      $('#datetimepicker3').find('.form-control').click(function(){
        $(this).parent().find('.input-group-addon').click();
      });

      

      function getBookingData(){
        let obj = {};
        obj.where = $('.booking-steps__card-item_where.booking-steps__card-item_active').attr('value');
        obj.place = $('#pac-input').val();
        obj.bodyType = $('.booking-steps__card-item_body-type.booking-steps__card-item_selected img').attr('alt').trim();

        let services = [];
          
          $('.booking-steps__list-item_service.booking-steps__list-item_selected').each(function(){
            let obj = {};
            obj.name = $(this).text().trim();
            obj.price = $(this).attr('value');
            services.push(obj);
          });

        obj.services = services;

        obj.date = $('#datetimepicker2').find('input').val();
        obj.time = $('#datetimepicker3').find('input').val();
        obj.totalPrice = $('.booking-steps__list-lable-total-data').first().text().trim();
        

        
        return obj;
      }

      function drawBookingConfirm(){
          let data = getBookingData();
          setCookie('bookingform',JSON.stringify(data),7);


          let html = `
          <div class="booking-steps__confirm">
            <div class="booking-steps__confirm-heading">Booking Eco Car Wash</div>
            <div>Service information</div>
            <div class="booking-steps__confirm-item">
                <span class="booking-steps__confirm-lable">Where: </span>
                <span>${data.where}</span>
            </div>
            <div class="booking-steps__confirm-item">
                <span class="booking-steps__confirm-lable">When: </span>
                <span>${data.date} ${data.time}</span>
            </div>
            <div class="booking-steps__confirm-item">
                <span class="booking-steps__confirm-lable">Body Type: </span>
                <span>${data.bodyType}</span>
            </div>
            <div class="booking-steps__confirm-item">
                <span class="booking-steps__confirm-lable">Service: </span>
                <div>
                    ${data.services.map(item => {
                        let htmlService = '<span>'+item.name+'</span>';

                        return htmlService;
                    })}
                </div>
            </div>

     
            <div class="booking-steps__confirm-price">${data.totalPrice} AED</div>

          </div>
          `;



          $('#booking-steps__confirm-data').empty().append(html);
      }

      $('.booking-steps__card-item_where').click(function(){
        $('.booking-steps__card-item_where').removeClass('booking-steps__card-item_active');
          $(this).addClass('booking-steps__card-item_active');
      });


      //restore from cockie

      $(document).ready(function(){
        

        if(getCookie('bookingform')!=null){
            $('.booking-steps__restore').append(`
            <div class="booking-steps__restore-inner">
                Restore previous booking
            </div>
            `);
        }
      });

      $('.booking-steps__restore').click(function(){
        let data = JSON.parse(getCookie('bookingform'));
        console.log(data);

        $('.booking-steps__card-item_where').each(function(){
            if($(this).attr('value')==data.where){
                $(this).addClass('booking-steps__card-item_active');
            } else {
                $(this).removeClass('booking-steps__card-item_active');
            }
        });
        
        $('#pac-input').val(data.place);

        $('.booking-steps__card-item_body-type').removeClass('booking-steps__card-item_selected');
        $('.booking-steps__card-item_body-type').each(function(){
            
            if($(this).text().trim()==data.bodyType){
                $(this).addClass('booking-steps__card-item_selected');
            } 
        });


        data.services.map(item => {
            let name = item.name;

            $('.booking-steps__list-item_service').each(function(){
                if($(this).text().trim()==name){
                    $(this).click();
                } else {
                    //
                }
            });
        });

        
        $('#datetimepicker3 input').val(data.time);
        $('#datetimepicker2 input').val(data.date);

        $('.booking-steps__list-lable-total-data').empty().append(data.totalPrice);


        soBookingForm.changePage(6);
        soBookingForm.drawConfirm();
        
      });
      
    function postBooking(){

        $('#booking-form__errors').empty();

        let obj = JSON.parse(getCookie('bookingform'));

        obj.bename = $('#bookingname').val().trim();
        obj.email = $('#bookingmail').val().trim();
        obj.phone = $('#bookingphone').val().trim();

        if(obj.bename==''){
            $('#booking-form__errors').append('Sorry, we need your contact details for a booking');

            return false;
        }

        if(obj.email==''){
            $('#booking-form__errors').append('Sorry, we need your contact details for a booking');

            return false;
        }

        if(obj.phone==''){
            $('#booking-form__errors').append('Sorry, we need your contact details for a booking');

            return false;
        }

        

        let formData = new FormData();

        if (obj.where.trim()=='At Home'){
            obj.where = markers[0].position.lat();
            obj.where = obj.where + ',';
            obj.where = obj.where + markers[0].position.lng();
        }

        for(var key in obj) {
            if(key=='services'){
                let str = '';

                obj[key].map(item => {
                    str = str.trim() + item.name.trim() + ',';
                });

                str = str.substring(0,str.length-1);

                formData.append(key,str);

            } else {
                formData.append(key,obj[key]);
            }
             
        }

        let token = $('#booking-form').attr('data');

        $.ajax({
            type: "POST",
            url: '/booking',
            headers: {
                'X-CSRF-TOKEN': token,
            },
            data: formData,
            processData: false,
            contentType: false,
        });
        
    };

    function checkTime(){
        let formData = new FormData();

        formData.append('date',$('#datetimepicker2 input').val());

        formData.append('time',$('#datetimepicker3 input').val());

        let token = $('#booking-form').attr('data');

        

        $.ajax({
            type: "POST",
            url: '/check',
            headers: {
                'X-CSRF-TOKEN': token,
            },
            data: formData,
            processData: false,
            contentType: false,
            
        }).done(function(data) {
            if(data==1){
                timeApprove = true;
   
                $('.booking-steps__time-errors').empty().append('It is available time');
            } else {
                timeApprove = false;
      
                $('.booking-steps__time-errors').empty().append('This time busy, please take another one');
            }
            
        });
    }


    window.soBookingForm = {};
    window.soBookingForm.changePage = changePage;
    window.soBookingForm.priceChange = priceChange;

    window.soBookingForm.getData = getBookingData;
    window.soBookingForm.drawConfirm = drawBookingConfirm;

    window.soBookingForm.post = postBooking;

    window.soBookingForm.checkTime = checkTime;

    window.soBookingForm.timeApprove = timeApprove;


    timeApprove

    




})( jQuery );

