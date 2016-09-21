<!DOCTYPE html>
<html>
    <head>
        <title>ORARI | KABUPATEN BERAU</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset("bower_components/w2ui/w2ui-1.4.3.min.css") }}">
        <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bower_components/w2ui/w2ui-1.4.3.min.js') }}"></script>
        <style>
            html, body {
                height: 90%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;               
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 23px;
                margin-bottom: 40px;
            }
           
        </style>
    </head>
    <body>        
        <div class="container">
            <div class="content">
                <div style="text-align: center; margin-bottom: 20px; margin-top: 40px;">                    
                    <img src="{{ asset('img/logo.gif') }}" style="width:60px"/>                    
                </div>
                <div class="title">ORARI | KABUPATEN BERAU</div>
                <div id="frmLogin" style="width: 450px;"></div>
            </div>
        </div>

        
        <script type="text/javascript">
            $(function () {
                $('#frmLogin').w2form({ 
                    name   : 'form',
                    header : 'Login',
                    url    : '{{ url("auth/login") }}',
                    fields : [
                        { field: 'name', type: 'text', required: true, html: { caption: 'Username', attr: 'style="width: 200px"' } },
                        { field: 'password',  type: 'password', required: true, html: { caption: 'Password', attr: 'style="width: 200px"' } }
                    ],
                    actions: {
                        'Login': function () {                           
                            this.save(function(data){
                               if(data.status == 'success'){
                                    window.location.href = "{{ url('home') }}";
                               }
                            });
                        },
                        'Clear': function (event) {                           
                            this.clear();
                        },
                    }
                });
            });
        </script>
    </body>
</html>
