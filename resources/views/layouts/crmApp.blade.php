<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        /* (A) GLOBAL */
        * {
            font-family: arial, sans-serif;
            box-sizing: border-box;
        }
        body {
            display: flex;
            min-height: 100vh;
            padding: 0; margin: 0;
        }

        /*form Styles*/

        .form {
            background-color: black;
            border-radius: 20px;
            box-sizing: border-box;
            height: 500px;
            padding: 20px;
            width: 320px;
            justify-content: center;
            position:absolute;
            left:40%;
            right:50%;
            /*display: flex;*/

        }
        /*.form-container{*/
        /*  position:absolute;*/
        /*    left:50%;*/
        /*    right:50%;*/
        /*}*/

        .title {
            color: #eee;
            font-family: sans-serif;
            font-size: 36px;
            font-weight: 600;
            margin-top: 30px;
        }

        .subtitle {
            color: #eee;
            font-family: sans-serif;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }

        .input-container {
            height: 50px;
            position: relative;
            width: 100%;
        }

        .ic1 {
            margin-top: 40px;
        }

        .ic2 {
            margin-top: 30px;
        }

        .input {
            background-color: black;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            font-size: 18px;
            height: 100%;
            outline: 0;
            padding: 4px 20px 0;
            width: 100%;
        }

        .input-select {
            background-color: black;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            font-size: 18px;

            outline: 0;
            padding: 4px 20px 0;
            width: 100%;
        }

        .cut {
            background-color: #15172b;
            border-radius: 10px;
            height: 20px;
            position: absolute;
            top: -20px;
            transform: translateY(0);
            transition: transform 200ms;
            width: 76px;
        }

        .cut-short {
            width: 50px;
        }

        .input:focus ~ .cut,
        .input:not(:placeholder-shown) ~ .cut {
            transform: translateY(8px);
        }

        .placeholder {
            color: #65657b;
            font-family: sans-serif;
            left: 20px;
            line-height: 14px;
            pointer-events: none;
            position: absolute;
            transform-origin: 0 50%;
            transition: transform 200ms, color 200ms;
            top: 20px;
        }

        .input:focus ~ .placeholder,
        .input:not(:placeholder-shown) ~ .placeholder {
            transform: translateY(-30px) translateX(10px) scale(0.75);
        }

        .input:not(:placeholder-shown) ~ .placeholder {
            color: #808097;
        }

        .input:focus ~ .placeholder {
            color: #dc2f55;
        }

        .submit {
            background-color: black;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            cursor: pointer;
            font-size: 18px;
            height: 50px;
            margin-top: 38px;
        // outline: 0;
            text-align: center;
            width: 100%;
        }

        .submit:active {
            background-color: #06b;
        }


        /* (B) SIDEBAR */
        /* (B1) SIDEBAR ITSELF */
        #pgside {
            width: 200px;
            transition: width 0.2s;
            background: #283039;
        }

        /* (B2) USER OR BRANDING */
        #pgside #pguser {
            display: flex;
            align-items: center;
            padding: 10px 5px;
        }
        #pgside #pguser img {
            width: 50px;
            margin-right: 5px;
            border-radius: 50%
        }

        /* (B3) SIDEBAR ITEMS */
        #pgside, #pgside a { color: #fff; }
        #pgside a {
            display: block;
            padding: 20px;
            width: 100%;
            text-decoration: none;
            cursor: pointer;
        }
        #pgside a.current { background: #7c1919; }
        #pgside a:hover { background: #9b2323; }

        /* (B4) SIDEBAR ICONS & TEXT */
        #pgside i.ico, #pgside i.txt { font-style: normal; }
        #pgside i.ico {
            font-size: 1.1em;
            margin-right: 10px;
        }

        /* (B5) SMALL SCREEN TRANSFORMATION */
        @media screen and (max-width:768px) {
            #pgside { width: 70px; }
            #pgside #pguser { justify-content: center; }
            #pgside a {
                text-align: center;
                padding: 20px 0;
            }
            #pgside i.ico {
                font-size: 1.5em;
                margin-right: 0;
            }
            #pgside i.txt { display: none; }
        }

        /* (C) MAIN CONTENTS */
        #pgmain {
            flex-grow: 1;
            padding: 20px;
            background: #f2f2f2;
        }

        .table {
            width:100%;
            border:1px solid;
        }

        .table-header {
            display:flex;
            width:100%;
            background:#000;
        }

        .table-row {
            display: flex;
            width: 100%;
        }


        .table-data, .header__item {
            flex: 1 1 20%;
            text-align:center;
        }

        .header__item a{
            text-transform:uppercase;
            display: inline-block;
            padding-right: 40px;
            color: white;
        }

        .filter__link {
            color: white;
            text-decoration: none;
            position: relative;
            display: inline-block;
        }
    /**/
    /**/
    /**/
        .form-style-8{
                                  font-family: 'Open Sans Condensed', arial, sans;
                                  width: 1500px;
                                  padding: 30px;
                                  background: #FFFFFF;
                                  margin: 50px auto;
                                  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                                  -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
                                  -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

                              }
        .form-style-8 h2{
            background: #4D4D4D;
            text-transform: uppercase;
            font-family: 'Open Sans Condensed', sans-serif;
            color: #797979;
            font-size: 18px;
            font-weight: 100;
            padding: 20px;
            margin: -30px -30px 30px -30px;
        }


         /*table*/
        .table {
            width:100%;
            border:1px solid;
        }

        .table-header {
            display:flex;
            width:100%;
            background:#000;
        }

        .table-row {
            display: flex;
            width: 100%;
        }


        .table-data, .header__item {
            flex: 1 1 20%;
            text-align:center;
        }

        .header__item a{
            text-transform:uppercase;
            display: inline-block;
            padding-right: 40px;
            color: white;
        }
        /**/
         .form-style-8 input[type="text"],
        .form-style-8 input[type="11date"],
        .form-style-8 input[type="datetime"],
        .form-style-8 input[type="email"],
        .form-style-8 input[type="number"],
        .form-style-8 input[type="search"],
        .form-style-8 input[type="time"],
        .form-style-8 input[type="url"],
        .form-style-8 input[type="password"],
        .form-style-8 textarea,
        .form-style-8 select
        {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            outline: none;
            display: block;
            width: 100%;
            padding: 7px;
            border: none;
            border-bottom: 1px solid #ddd;
            background: transparent;
            margin-bottom: 10px;
            font: 16px Arial, Helvetica, sans-serif;
            height: 45px;
        }
        .form-style-8 textarea{
            resize:none;
            overflow: hidden;
        }
        .form-style-8 input[type="button"],
        .form-style-8 input[type="submit"]{
            -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
            -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
            box-shadow: inset 0px 1px 0px 0px #45D6D6;
            background-color: #2CBBBB;
            border: 1px solid #27A0A0;
            display: inline-block;
            cursor: pointer;
            color: #FFFFFF;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 14px;
            padding: 8px 18px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .form-style-8 input[type="button"]:hover,
        .form-style-8 input[type="submit"]:hover {
            background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
            background-color:#34CACA;
        }
    </style>
</head>
<body class="antialiased">

<div id="pgside">
    <!-- (A1) BRANDING OR USER -->
    <!-- LINK TO DASHBOARD OR LOGOUT -->
    <div id="pguser">
        <i class="txt">CRM</i>
    </div>

    <!-- (A2) MENU ITEMS -->
    <a href="" class="current">
        <i class="ico">&#9733;</i>
        <i class="txt">Dashboard</i>
    </a>
    <a href="">
        <i class="ico">&#9728;</i>
        <i class="txt">Users</i>
    </a>
    <a href="{{ route('clients.index') }}">
        <i class="ico">&#9737;</i>
        <i class="txt">Clients</i>
    </a>
    <a href="{{ route('projects.index') }}">
        <i class="ico">&#9737;</i>
        <i class="txt">Projects</i>
    </a>
    <a href="{{ route('tasks.index') }}">
        <i class="ico">&#9737;</i>
        <i class="txt">Tasks</i>
    </a>
</div>

<!-- (B) MAIN -->
<main id="pgmain">
@yield('clients')
@yield('clientsIndex')
@yield('users')
@yield('usersIndex')
@yield('projects')
@yield('projectsIndex')
</main>

{{--    @else--}}
{{--    echo'sss';--}}

{{--@endif--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--<script type="text/javascript" src="https//code.jquery.com/jquery-1.11.0.min.js"></script>--}}
{{--<script type="text/javascript" src="https//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>--}}
{{--<script type="text/javascript" src="slick/slick.min.js"></script>--}}

</body>
</html>
