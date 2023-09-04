<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
   <style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .custom-products{
        position: relative;
        left: 200px;
        height: 600px;
        width: 1200px;
        border-radius: 50px;
        margin-top: 20px;
    }
    img.slider-img{
        height:300px;
        box-shadow: 10px 10px 20px 2px whitesmoke;
        border-radius: 50px;
    }
  .trending-img{
    height:100px;
    border-radius: 40px;
  }
  .trending-item{
    float: left;
    width:20%;
  }
  .trending-wrapper{
    margin:20px;
    padding: 10px 10px;
    margin-top: 50px;
  }
  .detail-img{
    height: 200px;
    border-radius: 40px;
  }
  .details{
    position: relative;
        left: 200px;
        width: 1200px;
        border-radius: 50px;
        margin-top: 20px;
        height: 600px;
  }
  .search-box{
    width: 500px;
  }
  .custom-search{
    display: flex;
    align-content: center;
    height:600px;
  }
  a{
    text-decoration: none;
    color: rgb(26, 23, 23);
  }
  .cart-list-divider{
   border-bottom: 1px solid #ccc;
   margin-bottom: 20px;
   padding:20px;
  }
   </style>
</html>