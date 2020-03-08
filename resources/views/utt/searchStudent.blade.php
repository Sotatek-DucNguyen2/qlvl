<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/animate.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/aos.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/ionicons.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/jquery.timepicker.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset_css/css/style.css') }}">
</head>
<body>
  


<section class="ftco-section bg-light">
 <div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <!--             <span class="subheading">Công việc mới</span> -->
      <h2 class="mb-4"><span>DANH SÁCH SINH VIÊN</span></h2>
    </div>
  </div>
  <div class="row">
   <div class="container-fluid">
  @foreach($student as $s)
<!-- khối này sẽ có 4 column với width bằng nhau và = 25% -->
 <div class="row">
  <div class="col"><h2 class="mr-3 text-black h3">{{$s -> student -> name_student }}</h2></div>
  <div class="col"><span class="bg-primary text-white badge py-2 px-3">{{$s-> skill_student}}</span></div>
  <div class="col"><span class="bg-primary text-white badge py-2 px-3">{{$s-> student -> jobtype_student}}</span></div>
  <div class="col"><span class="icon-layers"></span>Kinh nghiệm:{{$s-> experience_student}} năm <a href="#"></a></div>
  <div class="col"><span class="icon-my_location"></span> <span>{{$s-> address_student}}</span></div>
    <div class="col"><a href="infoStudent{{$s -> id}}" class="btn btn-primary py-2 mr-1">Chi tiết</a></div>
 </div> 
 @endforeach

</div>



</div>
</section>

</body>
</html>