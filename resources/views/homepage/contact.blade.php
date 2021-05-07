@extends('homepage.base')
@section('content')

<div class="conatiner mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card bg-light">
            <div class="card-header">
                    <h3 class="text-center">Conatct Us </h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" class="form-control" name="contact">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Submit" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
