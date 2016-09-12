
$( document ).on( "pageinit", "[data-role='page'].demo-page", function() {
        var page = "#" + $( this ).attr( "id" ),

        // Get the filename of the next page that we stored in the data-next attribute
        next = $( this ).jqmData( "next" ),
        // Get the filename of the previous page that we stored in the data-prev attribute
        prev = $( this ).jqmData( "prev" );

        // Prefetch the next page
        //$.mobile.loadPage( next + ".php" );

        // Navigate to next page on swipe left
        $( document ).on( "swipeleft", page, function() {
            $.mobile.changePage( next + ".php", { transition: "slide" });
        });

        $( document ).on( "swiperight", page, function() {
            alert("You have chosen " + $(this).attr("id") + " as your favourite.");
            console.log("Favourite --> " + $(this).attr("id") );
            // set this back on server side for logging, causes a reload
            $.mobile.changePage( $( this ).attr( "id" ) + ".php?favorite=" + $(this).attr("id"));
        });

        $( ".control .next", page ).addClass( "ui-disabled" );
        $( ".control .prev", page ).addClass( "ui-disabled" );

});
