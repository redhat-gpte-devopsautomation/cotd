
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

        var favourite = $(this).attr("id");
        $( document ).on( "swiperight", page, function() {
            alert("You have chosen " + $(this).attr("id") + " as your favourite.");
            console.log("Favourite --> " + $(this).attr("id") );
            location.href=$( this ).attr( "id" ) + ".php?favorite=" + $(this).attr("id");
        });

        // $( ".control .prev", page ).addClass( "ui-disabled" );
        // $( ".control .next", page ).addClass( "ui-disabled" );
        $( ".control .next", page ).on( "click", function() {
            $.mobile.changePage( next + ".php", { transition: "slide" } );
        });

        $( ".control .prev", page ).on( "click", function() {
            alert("You have chosen " + favourite + " as your favourite.");
            console.log("Favourite --> " + favourite );
            location.href= favourite + ".php?favorite=" + favourite;
        });

});
