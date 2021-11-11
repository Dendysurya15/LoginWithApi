<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <title>Hello, world!</title>
</head>

<body>

    <br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h4>FORM LOGIN API</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" name="email" class="form-control mt-2" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter your email">
                                @if($errors->has('email'))
                                <div id="emailHelp" class="form-text  text-danger">{{$errors->first('email')}}</div>
                                @endif
                            </div>
                            <br>
                            <div class="form-group required">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control mt-2"
                                    id="exampleInputPassword1" placeholder="Password">
                                @if($errors->has('password'))
                                <div id="emailHelp" class="form-text  text-danger">{{$errors->first('password')}}</div>
                                @endif
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary col-2">LOGIN</button>
                        </form>

                        <br>

                        @if($errors->has('msg'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Login Gagal!</strong> {{$errors->first('msg')}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if(!empty($data))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Login Berhasil!</strong>
                            <p>Anda berhasil login dengan data sebagai berikut:</p>
                            <hr>
                            <p class="mb-0">Name : {{$data['nama']}} </p>
                            <p class="mb-0">Email : {{$data['email']}}</p>
                            <p class="mb-0">Jabatan : {{$data['jabatan']}} </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                    </div>
                </div>
                <br>




            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>