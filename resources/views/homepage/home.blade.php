@extends('homepage.base')
@section('content')
    
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('mk3.jpg')}}" class="d-block w-100"  height="500px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('mk4.jpg')}}" class="d-block w-100" height="500px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('mk5.jpg')}}" class="d-block w-100" height="500px" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-5">
<div class="row">
<div class="col-lg-3">
 <div class="card bg-light rounded-2 border-danger ">
     <div class="card-header text-dark">
         <h4 class="text-center">Contact details</h4>
     </div>
     <div class="card-body ">
         <h5>Name:- MAnish Kumar</h5>
         <h5>Contact:- 7050543175</h5>
         <h5>Email:- manishkr.tal@gmail.com</h5>
         <a href="" class="btn btn-success w-100">View</a>
     </div>
 </div>

</div>
<div class="col-lg-3">
 <div class="card bg-light rounded-2 border-danger ">
     <div class="card-header text-dark">
         <h4 class="text-center">Contact details</h4>
     </div>
     <div class="card-body ">
         <h5>Name:- MAnish Kumar</h5>
         <h5>Contact:- 7050543175</h5>
         <h5>Email:- manishkr.tal@gmail.com</h5>
         <a href="" class="btn btn-success w-100">View</a>
     </div>
 </div>

</div>
<div class="col-lg-3">
 <div class="card bg-light rounded-2 border-danger ">
     <div class="card-header text-dark">
         <h4 class="text-center">Contact details</h4>
     </div>
     <div class="card-body ">
         <h5>Name:- MAnish Kumar</h5>
         <h5>Contact:- 7050543175</h5>
         <h5>Email:- manishkr.tal@gmail.com</h5>
         <a href="" class="btn btn-success w-100">View</a>
     </div>
 </div>

</div>
<div class="col-lg-3">
 <div class="card bg-light rounded-2 border-danger ">
     <div class="card-header text-dark">
         <h4 class="text-center">Contact details</h4>
     </div>
     <div class="card-body ">
         <h5>Name:- MAnish Kumar</h5>
         <h5>Contact:- 7050543175</h5>
         <h5>Email:- manishkr.tal@gmail.com</h5>
         <a href="" class="btn btn-success w-100">View</a>
     </div>
  
 </div>

</div>
</div>
<div class="row mt-5">
 <div class="col-lg-12 mx-auto">
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Adddress</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>manish kumar</td>
            <td>7050543175</td>
            <td>manishk15800@gmail.com</td>
            <td>purnea</td>
           <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>manish kumar</td>
            <td>7050543175</td>
            <td>manishk15800@gmail.com</td>
            <td>purnea</td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>manish kumar</td>
            <td>7050543175</td>
            <td>manishk15800@gmail.com</td>
            <td>purnea</td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>manish kumar</td>
            <td>7050543175</td>
            <td>manishk15800@gmail.com</td>
            <td>purnea</td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        <tr>
            <td>5</td>
            <td>manish kumar</td>
            <td>7050543175</td>
            <td>manishk15800@gmail.com</td>
            <td>purnea</td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
       
    </table>

 </div>
</div>

<br>
<br>
</div>
@endsection