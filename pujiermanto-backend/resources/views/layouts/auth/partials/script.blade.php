  <script src="{{ asset('/assets/dashboard/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/assets/dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!--  Charts Plugin -->
  <script src="{{ asset('/assets/dashboard/js/chartist.min.js') }}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{asset('/assets/dashboard/js/bootstrap-notify.js')}}"></script>

  <!--  Google Maps Plugin    -->
  {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="{{ asset('/assets/dashboard/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="{{ asset('/assets/dashboard/js/demo.js') }}"></script>

  <script type="text/javascript">
   $(document).ready(function(){

     demo.initChartist();

     $.notify({
       icon: 'pe-7s-gift',
       message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

     },{
      type: 'info',
      timer: 4000
    });

   });
 </script>
