<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
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
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
<script src="/js/jquery/jquery.js"></script>
    <script src="/js/pusher/pusher.js"></script>
    <script>
        (function(){
            var pusher = new Pusher('2ce06618e0eadb3de9af');
            var channel = pusher.subscribe('test');
            window.App= {};

            App.Listeners = {};

            App.Notifier = function(){
                this.notify = function (message){
                    alert(message);
                }
            }

            App.Listeners.Post = {
                    whenPostWasPublished : function(data){


                            (new App.Notifier).notify(data);
                    }
            };

            channel.bind('userliked',App.Listeners.Post.whenPostWasPublished);

        })();
    </script>


</html>
