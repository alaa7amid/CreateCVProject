<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
  
    <title>AzalProCV </title>
    <link rel="icon" href="{{ asset('2.png') }}" type="image/x-icon">

  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/bootstrap.css') }}" />
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="{{ asset('front-end/css/style.css') }}" rel="stylesheet" />
    
    <!-- Responsive style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="{{ asset('front-end/css/responsive.css') }}" rel="stylesheet" />

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('front-end/css/rtl.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/ltr.css') }}">
    @endif

    <style>
        .info_logo {
  position: relative; /* لجعل التنسيق مرنًا */
}

.info_logo i {
  font-size: 24px; /* حجم الأيقونة */
  transform: rotate(15deg); /* إمالة الأيقونة بزاوية 15 درجة */
  transition: transform 0.3s; /* تأثير حركة عند التمرير */
}

.info_logo i:hover {
  transform: rotate(0deg); /* تعيد الأيقونة لوضعها الأصلي عند التمرير */
}

    </style>
</head>