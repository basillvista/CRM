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
        @livewireStyles
    </style>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cart-container{
             width: 70%;
             height: 85%;
             background-color: #ffffff;
             border-radius: 20px;
             box-shadow: 0px 25px 40px #1687d933;
         }

        .header{
            margin: auto;
            width: 90%;
            height: 15%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .heading{
            font-size: 20px;
            font-family: ‘Open Sans’;
            font-weight: 700;
            color: #2F3841;
        }
        .action{
            font-size: 14px;
            font-family: ‘Open Sans’;
            font-weight: 600;
            color: #E44C4C;
            cursor: pointer;
            border-bottom: 1px solid #E44C4C;
        }

        .Cart-Items{
            margin: auto;
            width: 90%;
            height: 30%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .image-box{
            width: 15%;
            text-align: center;
        }
        .about{
            height: 100%;
        }
        .title{
            padding-top: 5px;
            line-height: 10px;
            font-size: 32px;
            font-family: ‘Open Sans’;
            font-weight: 800;
            color: #202020;
        }
        .subtitle{
            line-height: 10px;
            font-size: 18px;
            font-family: ‘Open Sans’;
            font-weight: 600;
            color: #909090;
        }
        .counter{
            width: 15%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .btn{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
            top: 20px;
            font-size: 20px;
            font-family: ‘Open Sans’;
            font-weight: 900;
            color: #202020;
            cursor: pointer;
        }
        .count{
            font-size: 20px;
            font-family: ‘Open Sans’;
            font-weight: 900;
            color: #202020;
        }

        .prices{
            height: 100%;
            text-align: right;
        }
        .amount{
            padding-top: 20px;
            font-size: 26px;
            font-family: ‘Open Sans’;
            font-weight: 800;
            color: #202020;
        }
        .save{
            padding-top: 5px;
            font-size: 14px;
            font-family: ‘Open Sans’;
            font-weight: 600;
            color: #1687d9;
            cursor: pointer;
        }
        .remove{
            padding-top: 5px;
            font-size: 14px;
            font-family: ‘Open Sans’;
            font-weight: 600;
            color: #E44C4C;
            cursor: pointer;
        }

        hr{
            width: 66%;
            float: right;
            margin-right: 5%;
        }
        .checkout{
            float: right;
            margin-right: 5%;
            width: 28%;
        }
        .total{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .Subtotal{
            font-size: 22px;
            font-family: ‘Open Sans’;
            font-weight: 700;
            color: #202020;
        }
        .items{
            font-size: 16px;
            font-family: ‘Open Sans’;
            font-weight: 500;
            color: #909090;
            line-height: 10px;
        }
        .total-amount{
            font-size: 36px;
            font-family: ‘Open Sans’;
            font-weight: 900;
            color: #202020;
        }
        .button{
            margin-top: 5px;
            width: 100%;
            height: 40px;
            border: none;
            background: linear-gradient(to bottom right, #B8D7FF, #8EB7EB);
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            font-family: ‘Open Sans’;
            font-weight: 600;
            color: #202020;
        }

    </style>

</head>

<body>



<div class="cart-container">
    <div class="header">
        <div class="heading">Shopping Cart</div>
        <div class="action"><a href="">Remove All</a></div>
    </div>
    @if(session('cart'))
        <?php $total=0;?>
        @foreach(session('cart') as $cartId=> $cart)
<?php $total+=$cart['quantity']*$cart['price']; ?>
            @if($cart['quantity'] > 0)
    <div class="Cart-Items">
        <div class="about">
            <h1 class="title">{{$cart['name']}}</h1>
{{--            <h3 class="subtitle"></h3>--}}
        </div>
        <div class="counter">
            <livewire:counter :cartId="$cartId" :wire:key="$cartId"/>
        </div>
        <div class="prices">
            <div class="amount">{{ $cart['quantity'] }}</div>
        </div>
    </div>
    @endif
        @endforeach

<hr>
    <div class="checkout">
        <div>
            <form method="POST" action="{{ route('discount') }}">
                @csrf
                <label>Coupon</label>
                <input type="text" name="coupon">
                <input type="hidden" value="{{$total}}" name="total">
                <input type="submit" name="submit">
            </form>
{{--            <a href="{{ route('deleteDiscount') }}">X</a>--}}
            <form method="GET" action="{{ route('deleteDiscount') }}">
              @csrf
                <button type="submit">X</button>
            </form>
        </div>
        <div class="total">
            <div>
                @if(session('discount'))
{{--                    @if(session()->has('discoount')['DiscountedPrice'])--}}
                @if(session('discount')['discountedPrice'])
                <div class="Subtotal">sub-total</div>
                    <div class="items">${{ session('discount')['discountedPrice']}}</div>
                    @endif
                @else
                    <div class="Subtotal">sub-total</div>
                    <div class="items">${{$total}}</div>
                @endif

            </div>
            <div class="total-amount"></div>
        </div>
        <button class="button">Checkout</button>
    </div>

</div>
@endif
</body>
@livewireScripts
</html>




