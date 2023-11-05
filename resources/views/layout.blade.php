<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <style>
            *{
                font-family: Helvetica, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                color: black;
            }
            html {
             --scrollbarBG: #465E66;
             --thumbBG: #FDC807;
            }
            body::-webkit-scrollbar {
             width: 11px;
            }
            body{
                scrollbar-width: thin;
                scrollbar-color: var(--thumbBG) var(--scrollbarBG);
            }
            body::-webkit-scrollbar-track {
             background: var(--scrollbarBG);
            }
            body::-webkit-scrollbar-thumb {
            background-color: var(--thumbBG) ;
             border-radius: 6px;
            border: 3px solid var(--scrollbarBG);
            }
            nav{
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 1rem;
                background-color: #FDC807;
                height: 80px;
                padding: 0 3rem;
                color: #465E66;
            }
            nav h1{
                color: #9a4f46;
            }
            nav div{
                display: flex;
                gap: 3rem;
            }
            nav div a{
                background-color: #C16358;
                color: white;
                padding: 20px 40px;
                border-radius: 10px;
                font-size: 16px;
                cursor: pointer;
            }
            nav div a:hover{
                background-color: #9a4f46;
            }
            .hero h1{
                font-size: 70px;
                line-height: 1.1;
                margin-bottom: 1rem;
                color: #465E66;
            }
            .hero p{
                font-size: 24px;
                color: #465E66;
            }
            .hero button{
                border: none;
                background-color: #FDC807;
                color: white;
                padding: 20px 40px;
                border-radius: 10px;
                font-size: 24px;
                margin-top: 1rem;
                cursor: pointer;
            }
            .hero button:hover{
                background-color: #D6A714;
            }
            .hero{
                width: 1024px;
                height: calc(100vh - 80px);
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 0 auto;
            }
            .hero img{
                animation: anime 1s ease infinite;
            }
            a{
                text-decoration: none;

            }
            table{
                border-collapse: collapse;
            }
           
            td{
                border: 1px solid black;
                padding: 1rem;

            }
            .image{
                width: 80px;
                height: 80px;
                overflow: hidden;
            }
            .image img{
                width: 100%;
                object-fit: cover;
            }
            table{
                width: 1024px;
                margin: 5rem auto;
            }
            thead{
                background-color: #F2E2AB;
            }
            table button{
                border: none;
                background-color: #FDC807;
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                font-size: 1.2rem;
                cursor: pointer;
            }
            table button:hover{
                background-color: #D6A714;
            }
            td, th {
             border: 2px solid #D6A714;
             text-align: left;
             padding: 8px;
             font-size: 1.3rem;
            }

            tr:hover {
              background-color: #F2E2AB;
            }
            .pic{
                width: 1024px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 0 auto;
            }
            .form{
                width: 1024px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin: 1rem auto;
            }
            input{
                width: 100%;
                padding: 1rem 2rem;
                margin-bottom: 1rem;
                border: 1px solid #FDC807;
                border-radius: 10px;
                font-size: 1rem;
            }
            input:focus{
                outline: 1px solid #9a4f46;
            }
            .form button{
                border: none;
                background-color: #FDC807;
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                font-size: 1.2rem;
                cursor: pointer;
                width: 100%;
            }
            @keyframes anime {
                0%{
                    transform: translateY(0);
                }
                50%{
                    transform: rotate(10deg);
                }
                100%{
                    transform: translateY(15px);
                }
            }
        </style>
</head>
<body>
    <nav>
        <h1>MobileHub</h1>
        <div>
            <a href="{{url('/')}}">ALL Phone Collection</a>
            <a href="{{url('create')}}">Add new product</a>
        </div>
    </nav>

     @yield('the-body')
</body>
</html>
