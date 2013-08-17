  $(document).ready ->

    $(window).konami({
      cheat: ->
        alert('fired')
        $("body").append('<img id="ed-the-pug" src="/assets/img/pug.jpg" />')
    })
