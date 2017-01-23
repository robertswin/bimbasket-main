
    $("#playlist li").on("click", function() {
		
		console.log('click')
        $("#audioarea").attr({
            "src": $(this).attr("songurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#audioarea").attr({
        "src": $("#playlist li").eq(0).attr("songurl"),
        "poster": $("#playlist li").eq(0).attr("moviesposter")
    })
