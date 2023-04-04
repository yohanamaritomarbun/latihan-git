@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div  class="container-fluid" >

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1  class="h3 mb-0 text-gray-800"> Let's Find Your Favorite Books . . .</h1>
                    </div>
                    <div>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <tiitle></tiitle>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>

<table bgcolor="tomato" width="100%" >
    <tr height="150px">
        <th colspan="3"><img src="{{asset('img/YOHANALIBRARY.png')}}" width="100%" height="250px"></th>   
    </tr>
    <tr height="50px">
        <td colspan="3" bgcolor="tomato"><center> 
                        <button><a href="file:///C:/Users/Lenovo/Documents/Pemrograman%20Web/Proweb/Proweb.html">
                            <font face="Impact">HOME</font></a></button>
                        <button><a href="file:///C:/Users/Lenovo/Documents/Pemrograman%20Web/Proweb/Aboutus.html">
                            <font face="Impact">About Me</font></a></button>
                        <button><a href="file:///C:/Users/Lenovo/Documents/Pemrograman%20Web/Proweb/Contact.html">
                            <font face="Impact">Contact</font></a></center></button>
        </td>
    </tr>
    <tr height="500px">
        <td bgcolor="tomato" width="200px">
          <main>
            <center>
            <section>
              <h1 color="tomato"><font face="Algerian">C A T E G O R I E  S</Em></Em></I></font></h1>
          </section>
                <i class="fas fa-bars" id="btn"></i>
                <i class="fa fa-arrow-right" id="open"></i>
            </label>
            <div class="sidebar">
                <div class="top">
                
                </div>  
                <ul>
                    
                  
                  <button><a><font size="5">ROMANCE</font></a></button> </br>
                  <button><a><font size="3.5">NON-FICTION</font</a></button> </br>
                  <button><a><a><font size="3">HISTORICAL</font></a></button></br> 
                  <button><a><font size="4">FANTASY</font></a></button> </br>
                  <button><a><font size="3.8">FICTION</font></a></button></ul></br>
                  <button><a><font size="4">SCI-FI</font></a></button> </br>
                  <button><a><font size="2">HORROR</font></a></button> </br>

                </ul>
            </div>
          </center> 
        </main>
    
          

        </td>
        <td colspan="2" bgcolor ="tomato">
       

            <style type="text/css">


                *{
                 margin: 0px;
                 padding: 0px;
                }
                body{
                 font-family: arial;
                }
                .main{
                
                 margin: 2%;
                }
                
                .card{
                     width: 20%;
                     display: inline-block;
                     box-shadow: 2px 2px 20px black;
                     border-radius: 5px; 
                     margin: 2%;
                    }
                
                .image img{
                  width: 100%;
                  border-top-right-radius: 5px;
                  border-top-left-radius: 5px;
                  
                
                 
                 }
                
                .title{
                 
                  text-align: center;
                  padding: 10px;
                  
                 }
                
                h1{
                  font-size: 20px;
                 }
                
                .des{
                  padding: 3px;
                  text-align: center;
                 
                  padding-top: 10px;
                        border-bottom-right-radius: 5px;
                  border-bottom-left-radius: 5px;
                }
                button{
                  margin-top: 40px;
                  margin-bottom: 10px;
                  background-color: pink;
                  border: 1px solid black;
                  border-radius: 5px;
                  padding:10px;
                }
                button:hover{
                  background-color: black;
                  color: tomato;
                  transition: .5s;
                  cursor: pointer;
                }
                
                </style>
                <body>
                
                <div class="main">
                
                 <!--cards -->
                
                <div class="card">
                
                <div class="image">
                   <img src="https://cdn.gramedia.com/uploads/items/9786020333175_rich-dad-poor-dad-_edisi-revisi_.jpg"width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
                RICH DAD POOR DAD       </h1>
                </div>
                <div class="des">
                 <p> Robert T. Kiyosaki(1997) </p>
                <button>Read More...</button>
                </div>
                </div>
                <!--cards -->
                
                
                <div class="card">
                
                <div class="image">
                   <img src="https://m.media-amazon.com/images/I/41r6F2LRf8L._AC_SY780_.jpg " width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
                    <font size="3">The Psychology of Money</font><br></h1>
                </div>
                <div class="des">
                 <p> Morgan Housel (2020)</p>
                <button>Read More...</button>
                </div>
                </div>
                <!--cards -->
                
                
                <div class="card">
                
                <div class="image">
                   <img src="https://ebooks.gramedia.com/ebook-covers/7996/big_covers/ID_MIZ2013MTH09TDVC_B.jpg"width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
                The Da Vinci Code</h1>
                </div>
                <div class="des">
                 <p>Dan Brown(2003)</p>
                <button>Read More...</button>
                </div>
                </div>
                <!--cards -->
                
                
                <div class="card">
                
                <div class="image">
                   <img src="https://images-na.ssl-images-amazon.com/images/I/51kfFS5-fnL._SX332_BO1,204,203,200_.jpg"width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
                The Lord of the Rings</h1>
                </div>
                <div class="des">
                </p>J.R.R. Tolkien (1954)</p>
                <button>Read More...</button>
                </div>
                </div>
                <!--cards -->
                
                
                <div class="card">
                
                <div class="image">
                   <img src="https://kbimages1-a.akamaihd.net/215c2387-ece1-4c7c-961b-34d97cb2949a/1200/1200/False/ps-i-love-you-the-emotional-heartbreaking-romantic-fiction-book-from-the-number-one-best-selling-author-of-postscript.jpg"width="50px" height="250px" >
                </div>
                <div class="title">
                 <h1>
                PS, I Love You</h1>
                </div>
                <div class="des">
                 <p>Cecelia Ahem (2004)</p>
                <button>Read More...</button>
                </div>
                </div>
                <!--cards -->
                
                <div class="card">
                
                <div class="image">
                   <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2022/05/09035206/image001-6.jpg"width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
                    <font size="2">7 Habits of Highly Effective People</font><br></h1>
                </div>
                <div class="des">
                 <p>YStephen R. Covey(2004)</p>
                <button>Read More...</button>
                </div>
                </div>
                <!--cards -->
                
                <div class="card">
                
                <div class="image">
                   <img src="https://images-na.ssl-images-amazon.com/images/I/51-nXsSRfZL._SX328_BO1,204,203,200_.jpg"width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
                Atomic Habits</h1>
                </div>
                <div class="des">
                 <p>James Clear (2018)</p>
                <button>Read More...</button>
                
                </div>
                </div>
                <!--cards -->
                
                
                <div class="card">
                
                <div class="image">
                   <img src="https://images-na.ssl-images-amazon.com/images/I/714rLgEiybL.jpg"width="50px" height="250px">
                </div>
                <div class="title">
                 <h1>
               Own Your Anxiety</h1>
                </div>
                <div class="des">
                 <p>Julian Brass (2019)</p>
                <button>Read More...</button>
                </div>
                </div>
            
                </div>
          
    



        </td>
    </tr>
    <tr height="30px">
        <td colspan="3" bgcolor="tomato"><p center="left"><font face="Impact">CONTACT ME :</font></p>
             
        <p center="left">

             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/800px-WhatsApp.svg.png" width="50px" height="50px">
             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png"  width="40px" height="40px"> 
             <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/1200px-Twitter-logo.svg.png" width="40px" height="40px">
                
         </p>       
                
           
            <footer>
            <p align="center"><font face="Impact">Copyright @ 2022</font></p>
            <p align="center"> <font face="Impact">Yohana Marito Marbun</font></p>
            </footer>
        </td>
    </tr>
</table>
  
    
</body>

                    
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection('content')