import './bootstrap';


import '../sass/app.scss';

$(document).on('click','.dropdown-toggle',function(e) {
  //handler code here
  $('.dropdown-menu').toggle(".dropdown-menu" );
  
});