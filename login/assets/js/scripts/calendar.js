$(document).ready(function(){$('#datetimepicker1').datetimepicker();$('#datetimepicker2').datetimepicker({locale:'ru'});$('#datetimepicker3').datetimepicker({format:'LT'});$('#datetimepicker4').datetimepicker({viewMode:'years'});$('#datecustom').bootstrapMaterialDatePicker({weekStart:0,time:false});$('#timecustom').bootstrapMaterialDatePicker({date:false});$('body').on('click','.eventColor > span',function(){$('.eventColor > span').removeClass('selected');$(this).addClass('selected');});$('#calendar').fullCalendar({header:{right:'month, agendaDay, agendaWeek',center:'title',left:'prev, today, next'},defaultDate:'2016-06-25',selectable:true,selectHelper:true,select:function(start,end,allDay){$('#startDay').val(start);$('#endDay').val(end);var modal=$('#eventModal').modal('show');$('body').on('click','#addEvent',function(){var evetName=$('#eventName').val();var eventColor=$('.eventColor > span.selected').attr('class');var eventData;if(evetName!=''){eventData={title:evetName,start:$('#startDay').val(),end:$('#endDay').val(),allDay:true,className:eventColor};$('#calendar').fullCalendar('renderEvent',eventData,true);$('#eventModal form')[0].reset();$('#eventModal').modal('hide');}
$('#calendar').fullCalendar('unselect');});},editable:true,eventLimit:true,events:[{title:'All Day Event',start:'2016-06-01',color:'#5CB71A'},{title:'Concert',start:'2016-06-07'},{title:'Pokemon GO',start:'2016-06-12'},{title:'Party',start:'2016-06-12',color:'#F44336'},{title:'Cinema',start:'2016-06-15',color:'#CDDC39'},{title:'My Birthday',start:'2016-06-24',color:'#009688'},{title:'Click for Google',url:'http://google.com/',start:'2016-06-28',color:'#FF9800'}]});});