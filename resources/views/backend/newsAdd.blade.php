<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbars/">
    <link rel="stylesheet" href="/css/admin_head.css">
    <title>Navbar Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        html, body {
            background-color: #fff;
            color: #181819;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 90vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 50px;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>


</head>
<body>
<div class="container">
    @include('backend._header')
    <main role="main">
        <div>
            <form method="POST" action="/news/add" enctype="multipart/form-data">
                @csrf
                <div class="form-group offset-md-2 offset-ld-2 offset-0 col-md-8 col-lg-8 col-12">
                    <label for="fullname">Title</label>
                    <input class="form-control" type="text" id="fullname" name="title">
                </div>
                <div class="form-group">
                    <label for="title">Content</label>
                    <textarea class="form-control" name="area3" style="width: 100%; height : 500px;"></textarea>
                </div><div class="form-group offset-md-2 offset-ld-2 offset-0 col-md-8 col-lg-8 col-12">
                    <label for="fullname">First Name</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group offset-md-2 offset-ld-2 offset-0 col-md-8 col-lg-8 col-12">
                    <label for="fullname">Surname</label>
                    <input class="form-control" type="text" id="surname" name="surname">
                </div>
                <div class="form-group offset-md-2 offset-ld-2 offset-0 col-md-8 col-lg-8 col-12">
                    <div class="custom-file">
                        <input id="file" onchange="labelChange()" name="file" type="file" class="custom-file-input">
                        <label class="custom-file-label" id="file_label" for="file">Загрузите файл</label>
                    </div>
                </div>
                <div class="flex justify-content-center form-group offset-md-2 offset-ld-2 offset-0 col-md-8 col-lg-8 col-12">
                    <button type="sumbit" class="btn-info btn-lg btn">Отправить</button>
                </div>
            </form>
        </div>
    </main>
</div>
</body>
<script>
    function labelChange() {
        var name = $('#file')[0].files[0].name;
        $('#file_label').text(name);
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script type="text/javascript" src="{{asset('js/nicEdit.js')}}"></script>
<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
</html>