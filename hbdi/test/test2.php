<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("theButton").click(function () {
                let test = document.getElementById('theButton').innerHTML;
                $.ajax({
                    method: 'POST',
                    url: 'test3.php',
                    data: {
                        test: test
                    },
                    success: function (data) {
                        console.log(data)
                    };

                });
            });
        })

    </script>
</head>


<button id="theButton" value="TTTTT">
    Send an HTTP POST request to a page and get the result back
</button>

