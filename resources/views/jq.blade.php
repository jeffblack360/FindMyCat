<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    <form>
    <p>
        Show list of:
        <select id="rjb">
            <option value="">select</option>
            <option value="good">Good Guys</option>
            <option value="bad">Bad Guys</option>
        </select>
    </p>
    <p id="rjbout"></p>
    </form>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script>
        $(document).ready(function (){
            
            $("#rjb").change(function(){
                if($(this).val() != '') {
                    var str = "";
                    str = $(this).val();

                    $.get(
                        'json-test',
                        {what: str },
                        function(data){
                            $("#rjbout").html(data)
                        });

                }
            });
        });
    </script>
    </body>
</html>
