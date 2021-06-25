<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body class="fix-header fix-sidebar">



<div class="container">
    <div class="row m-5">
        <div class="col-md-10">
            <form action=""  class="loginForm" >
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input name="user-name" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter UserName">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="user-psw" value="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input  type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

</div>

</div>
</div>

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/axios.min.js')}}"></script>
<script type="text/javascript">
    $('.loginForm').on('submit',function(event){

        event.preventDefault();

        let formData= $(this).serializeArray();

        let userName = formData[0]['value'];
        let password = formData[1]['value'];
        console.log(userName + password);

        let url = '/onLogin';

        axios.post(url,{

            userName:userName,
            psw:password

        }).then(function(response){

            if(response.status==200 && response.data==1){

                window.location.href = "/";

            }else{
                toastr.error('Login fail! Try again');
            }

        })
            .catch(function(error){

            });

    });
</script>

</body>
</html>
