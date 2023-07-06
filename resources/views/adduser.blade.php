<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPEKA | Sistem Informasi Pelaksanaan Kompensasi Elektro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<style>
    .main{
        height: 100vh;
        box-sizing: border-box;
    }

    .login-box{
        width: 500px;
        border: solid 1px;
        padding: 20px;
    }

    form div{
        margin-bottom: 15px;
    }

</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box">
            <form action="" method="POST">
                @csrf
                <div>
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" required>
                </div>
                
                <div>
                    <label for="role_id" class="form-label">Sebagai</label>
                    <select class="form-select" name="role_id">
                        <option selected disabled>Pilih role</option>
                        @foreach ($roles as $role)
                            <option value="{{$role->id}}">
                                {{$role->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

