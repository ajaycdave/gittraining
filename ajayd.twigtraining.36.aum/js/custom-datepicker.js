$(function () {

    /*var unavailableDates = ["31-3-2020","5-4-2020","8-4-2020","11-4-2020","14-4-2020","15-4-2020","16-4-2020",
                            "20-4-2020","21-4-2020","3-5-2020","4-5-2020","6-5-2020","7-5-2020","9-5-2020"];*/
var unavailableDates=[];

setInterval(function(){ 
	unavailableDates=[];
$.ajax({
  url: 'datedisable.php',
  type: 'post',
  data: 'json',
  success: function(data) {
          $.each(data,function(index,itemData){
                unavailableDates.push(itemData);
          });
  },
  error: function(e) {

  }
});                   

},500);
  
 function unavailable(date) {
    dmy=date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear(); 
     if ($.inArray(dmy, unavailableDates) == -1) {
        return [true, ""];
    }
     else {
        return [false, "", "Unavailable"];
    }
}
 $("#txtFrom").click(function(){
   setTimeout(function(){
            $('.ui-state-active').css('background-color','green');
            },100);   
});
 $("#txtTo").click(function(){
    setTimeout(function(){
            $('.ui-state-active').css('background-color','yellow');
            },100);   
}); 
    $("#txtFrom").datepicker({
      minDate:1,
      showButtonPanel:true,
     // beforeShowDay: unavailable,
      beforeShowDay:unavailable,
      onSelect: function (selected,date) {
          datepicker_selected_date=selected;
            var selected=dateFormateChange(selected);
            
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtTo").datepicker("option", "minDate", dt);
           
        }
    });
    $("#txtTo").datepicker({
            minDate:1,
             showButtonPanel:true,
             beforeShowDay: unavailable,
            onSelect: function (selected,date) {

                  setTimeout(function(){
                    date.dpDiv.find('.ui-datepicker-current-day a').css('background-color','yellow');
                    },1000);
            var selected=dateFormateChange(selected);
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtFrom").datepicker("option", "maxDate", dt);
        }
    });
   $("#txtspFrom").datepicker({
    minDate:firstOfPreMonth(1),
    maxDate:firstOfNextMonth(1),
     onSelect: function (selected) {
            
            var selected=dateFormateChange(selected);
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtspTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtspTo").datepicker({
             minDate:firstOfPreMonth(1),
             maxDate:firstOfNextMonth(1),
            onSelect: function (selected) {
            var selected=dateFormateChange(selected);
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtspFrom").datepicker("option", "maxDate", dt);
        }
    }); 
     $("#txtsuFrom").datepicker({
    minDate:NextMonth(2),
    maxDate:NextMonth(5),
     onSelect: function (selected) {
            
            var selected=dateFormateChange(selected);
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtsuTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtsuTo").datepicker({
            minDate:NextMonth(2),
            maxDate:NextMonth(5),
            onSelect: function (selected) {
            var selected=dateFormateChange(selected);
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtsuFrom").datepicker("option", "maxDate", dt);
        }
    }); 


    $('#shippingDate').datepicker({
        minDate:"1d"
    });

    $('#txtBirthdate').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '-50:+0',
            maxDate:'d'
          });


  /* Common date picker property set  here  */
  
        $.datepicker.setDefaults({
            numberOfMonths:1,
            dateFormat: "dd.mm.yy",
            startDate: new Date(),
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            showWeek: true,
        });

/* Common date picker property set  here  */
     function firstOfNextMonth(noofmonth) {
            var d = new Date();
            d.setMonth(d.getMonth()+noofmonth,31);
            return d;
        }
        function firstOfPreMonth(noofmonth) {
            var d = new Date();
            d.setMonth(d.getMonth()-noofmonth, 1);
            return d;
        }
        function NextMonth(noofmonth) {
            var d = new Date();
            d.setMonth(d.getMonth()+noofmonth, 1);
            return d;
        }
    function dateFormateChange(date_Val){
    var parts = date_Val.split('.');
    var dmyDate = parts[1] + '/' + parts[0] + '/' + parts[2];
    return dmyDate;
    }    

});

