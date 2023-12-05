<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="justify-content-center d-flex col-lg-12 px-5 py-5">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="card-title">FORGET PASSWORD</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Ubah Password</h6>
                        </div>
                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif

                        <x-jet-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="block">
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-jet-button class="btn btn-danger">
                                    {{ __('Send Reset Password') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>

</html>