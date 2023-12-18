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
         .header{
            background: rgb(131,58,180);
            color:white;
            display:flex;
            justify-content:space-between;
            align-items :center;
            padding:.7rem 10%;
            flex-wrap:wrap;
            gap:20px;
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

        /* .header .active{
            color:white;
            border-bottom:1px solid white;
        } */
    </style>
</head>
<body>

<div  class='header' id="headerOptions">
      <a class="nav-links active" href="/">Home</a>
      <a class="nav-links" href="techNews">Tech News</a>
      <a class="nav-links" href="gamingNews">Gaming News</a>
      <a class="nav-links" href="webNews">Web Stories News</a>
      <a class="nav-links" href="tvNews">TV News</a>

      </div>


      <!-- <script>
       let links = document.querySelectorAll('.nav-links');
console.log(links);
for (let i = 0; i < links.length; i++) {
   
    links[i].addEventListener('click', (event) => {
        event.preventDefault();

        // Remove 'active' class from all links
        for (let j = 0; j < links.length; j++) {
            links[j].classList.remove('active');
        }

        // Add 'active' class to the clicked link
        links[i].classList.add('active');
    });
}
      </script> -->

</body>
</html>