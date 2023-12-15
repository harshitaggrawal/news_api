<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;

        }
        body{
            padding:4rem 8%;
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);

        }
        .heading{
            padding:2rem 0;
            text-align:center;
            color:white;
            font-style:italic;
            font-size:45px;
        }
        .content{
            display:flex;
            flex-wrap:wrap;
            gap:30px;
        }
        .content .news{
            border:1px solid white;
            border-radius:15px;
            flex:1 1 20rem;
            position: relative;
        }
        .content .news h1{
            margin-top:20px;
            padding:1rem;
            color:white;
            font-size:20px;
        }
        .content .news h5{
            position: absolute;
            background: rgb(131,58,180);
            padding:.3rem 1rem;
            top:0px ;
            right:0px;
            color:white;
            border-top-right-radius:15px;
        }
        .content .news p{
            color:#121010;
            font-size:20px;
            padding:1rem;

        }
        .content .news:hover{
            box-shadow:0 0 30px white;
        }
    </style>
</head>
<body> 
    <h1 class="heading">Today News</h1>
<div class="content">
@foreach($data as $d)

<div class="news">
    <h1>{{$d['title']}}</h1>
    <h5>{{$d['pubDate']}}</h5>
    <p>{{$d['description']}}</p>
    
</div>

@endforeach
</div>
</body>
</html>
