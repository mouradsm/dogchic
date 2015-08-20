$(document).ready(function(){
    $(".button-collapse").sideNav({
        menuWidth: 240, // Default is 240
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });

    $('.search-fixed').pushpin({top: 1});
});

