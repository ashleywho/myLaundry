  <footer class="main-footer">
    <strong>Copyright &copy; Acap.   
  Page rendered in <strong>{elapsed_time}</strong> seconds. 
    <div class="float-right d-none d-sm-inline-block">
      <b>AdminLTE Version</b> 3.0.5
      <?php echo  (ENVIRONMENT === 'development') ?  '<b>CodeIgniter Version</b> <strong>' . CI_VERSION . '</strong>' : '' ?>
    </div>
  </footer>

  
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/mylaundry/resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/mylaundry/resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="/mylaundry/resources/dist/js/adminlte.js"></script>
<!-- Select2 -->
<script src="/mylaundry/resources/plugins/select2/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="/mylaundry/resources/plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="/mylaundry/resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/mylaundry/resources/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- DatePicker -->
<script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
<!-- Toastr -->
<script src="/mylaundry/resources/plugins/toastr/toastr.min.js"></script>
<!-- DataTables -->
<script src="/mylaundry/resources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/mylaundry/resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/mylaundry/resources/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/mylaundry/resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/mylaundry/resources/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/mylaundry/resources/plugins/raphael/raphael.min.js"></script>
<script src="/mylaundry/resources/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/mylaundry/resources/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/mylaundry/resources/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/mylaundry/resources/dist/js/pages/dashboard2.js"></script>

<!-- fullCalendar 2.2.5 -->
<script src="/mylaundry/resources/plugins/fullcalendar/main.min.js"></script>
<script src="/mylaundry/resources/plugins/fullcalendar-daygrid/main.min.js"></script>
<script src="/mylaundry/resources/plugins/fullcalendar-timegrid/main.min.js"></script>
<script src="/mylaundry/resources/plugins/fullcalendar-interaction/main.min.js"></script>
<script src="/mylaundry/resources/plugins/fullcalendar-bootstrap/main.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        console.log(eventEl);
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      'themeSystem': 'bootstrap',
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>

<script type="text/javascript">

    $(document).ready(function(){

      //Initialize Select2 Elements
    $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

      $('.toastrDefaultSuccess').click(function() {
        console.log('entering function toastr');
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.');
      });
      //tab memory
      // wire up shown event
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          //console.log("tab shown...");
          localStorage.setItem('activeTab', $(e.target).attr('href'));
      });

      // read hash from page load and change tab
      var activeTab = localStorage.getItem('activeTab');
      if(activeTab){
          $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
      }

      $('[data-toggle="tooltip"]').tooltip();

      if( $('.has-datetimepicker').length ) 
      {
        $('.has-datetimepicker').datetimepicker({format: 'YYYY-MM-DD'});
      }
      
      if( $('.has-datepicker').length )
      {
        $('.has-datepicker').datetimepicker({format: 'YYYY-MM-DD'});
      } 
      

      $( document ).on( 'focus', ':input', function(){
          $( this ).attr( 'autocomplete', 'off' );
      });

      //set createdby, createddate, modifiedby, modifieddate
      // Select input which name attribute value is exactly 'email'
      if (!$('input[name="CreatedDate"]').val()){
        $('input[name="CreatedBy"]')
            .prop("readonly", true)
            .val(localStorage.getItem("currentUser"));
          $('input[name="CreatedDate"]')
            .prop("readonly", true)
            .val('<?=date("Y-m-d")."T".date("H:i:s")?>');
      }else{
        $('input[name="CreatedBy"]')
            .prop("readonly", true);
        $('input[name="CreatedDate"]')
            .prop("readonly", true);

      }

        $('input[name="ModifiedBy"]')
            .prop("readonly", true)
            .val(localStorage.getItem("currentUser"));
          $('input[name="ModifiedDate"]')
            .prop("readonly", true)
            .val('<?=date("Y-m-d")."T".date("H:i:s")?>');
          $('label[for*="Is"] , input[name*="Is"]')
            .attr("hidden",true); 
      $( ".overlay" ).remove(); 

      /*$(".table").DataTable({
      "responsive": true,
      "autoWidth": false,
      });*/       
    });

 </script>

