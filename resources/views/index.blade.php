
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
          
            /* background: rgb(131,58,180); */
            /* background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%); */

        }
        .heading{
            padding:2rem 0 1rem 0;
            text-align:center;
            color:#bf0ab3;
            font-style:italic;
            font-size:45px;
        }
        .content{
            padding:4rem 8%;
            display:flex;
            flex-wrap:wrap;
            gap:30px;
        }
        .content .news{
            border:1px solid black;
            border-radius:15px;
            flex:1 1 20rem;
            position: relative;
        }
        .content .news h1{
            color:rgb(131,58,180);
            margin-top:20px;
            padding:1rem;
           
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
            box-shadow:0 0 30px black;
        }
        .header{
            background: rgb(131,58,180);
            color:white;
            display:flex;
            justify-content:space-between;
            align-items :center;
            padding:.7rem 9%;
        }
        .header a{
            text-decoration:none;
            color:white;
            font-size:24px;
            cursor: pointer;
        }
        .header a:hover{
            text-shadow:0 0 10px white;

        }
    </style>
</head>
<body>
      <div  class='header'>

      <a href="techNews">Tech News</a>
      <a href="gamingNews">Gaming News</a>
      <a href="webNews">Web Stories News</a>
      <a href="tvNews">TV News</a>

      </div>

<!-- Tech News -->
<h1 class="heading">Tech News</h1>
<div class="content">
@foreach($tech as $d)

<div class="news">
    <h1>{{$d['title']}}</h1>
    <h5>{{$d['date']}}</h5>
    <p>{{$d['description']}}</p>
    
</div>

@endforeach

<br>
<!-- Game News -->
<br>
<h1 class="heading">Game News</h1>
<div class="content">
@foreach($game as $d)

<div class="news">
    <h1>{{$d['title']}}</h1>
    <h5>{{$d['date']}}</h5>
    <p>{{$d['description']}}</p>
    
</div>

@endforeach

<br>
<h1 class="heading">web News</h1>
<div class="content">
@foreach($web as $d)

<div class="news">
    <h1>{{$d['title']}}</h1>
    <h5>{{$d['date']}}</h5>
    <p>{{$d['description']}}</p>
    
</div>

@endforeach

<br>

<h1 class="heading">TV News</h1>
<div class="content">
@foreach($tv as $d)

<div class="news">
    <h1>{{$d['title']}}</h1>
    <h5>{{$d['date']}}</h5>
    <p>{{$d['description']}}</p>
    
</div>

@endforeach
</body>
</html>