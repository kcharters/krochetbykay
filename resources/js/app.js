import './bootstrap';


import '../sass/app.scss';

$(".dropdown toggle").on( "click", function() {
$(".dropdown-menu").toggle(
    function() {
        $( this ).show();
      }, function() {
        $( this ).hide();
      }

);
});
