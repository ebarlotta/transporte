<head>
   <style>
      h1{
        text-align: center;
        color: #333333;
    }
    .cardcontainer{
        width: 350px;
        height: 500px;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        transition: 0.3s;
    }
    .cardcontainer:hover{
        box-shadow: 0 0 45px gray;
    }
    .photo{
        height: 300px;
        width: 100%;
    }
    .photo img{
        height: 100%;
        width: 100%;
    }
    .txt1{
        margin: auto;
        text-align: center;
        font-size: 17px;
    }
    .content{
        width: 80%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        top: -33px;
    }
    .photos{
        width: 90px;
        height: 30px;
        background-color: #E74C3C;
        color: white;
        position: relative;
        top: -30px;
        padding-left: 10px;
        font-size: 20px;
    }
    .txt4{
        font-size:27px;
        position: relative;
        top: 33px;
    }
    .txt5{
        position: relative;
        top: 18px;
        color: #E74C3C;
        font-size: 23px;
    }
    .txt2{
        position: relative;
        top: 10px;
    }
    .cardcontainer:hover > .photo{
        height: 200px;
        animation: move1 0.5s ease both;
    }
    @keyframes move1{
        0%{height: 300px}
        100%{height: 200px}
    }
    .cardcontainer:hover > .content{
        height: 200px;
    }
    .footer{
        width: 80%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        position: relative;
        top: -15px;
    }
    .btn{
        position: relative;
        top: 20px;
    }
    #heart{
        cursor: pointer;
    }
    .like{
        float: right;
        font-size: 22px;
        position: relative;
        top: 20px;
        color: #333333;
    }
    .fa-gratipay{
        margin-right: 10px;
        transition: 0.5s;
    }
    .fa-gratipay:hover{
        color: #E74C3C;
    }
    .txt3{
        color: gray;
        position: relative;
        top: 18px;
        font-size: 14px;
    }
    .comments{
        float: right;
        cursor: pointer;
    }
    .fa-clock, .fa-comments{
        margin-right: 7px;
    }
   </style>
</head>
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
   <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
       style="background-color: beige; ">
       <div class="fixed inset-0 transition-opacity">
           <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
       </div>

       <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
       <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
           role="dialog" aria-modal="true" aria-labelledby="modal-headline">
           <form class="h-100">
               <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                   <div class="mb-4 d-flex flex-wrap">
                       <div class="col-12 m-2">
                           
<div class="container">
   <h1>News Card</h1>
   <div class="cardcontainer">
       <div class="photo">
           <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500" width="100px" height="100px">
           <div class="photos">Photos</div>
       </div>
       <div class="content">
           <p class="txt4">City Lights In Newyork</p>
           <p class="txt5">A city that never sleeps</p>
           <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
       </div>
       <div class="footer">
           <p><a class="waves-effect waves-light btn" href="#">Read More</a><a id="heart"><span class="like"><i class="fab fa-gratipay"></i>Like</span></a></p>
           <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p>
       </div>
   </div>
</div>

<div class="table-responsive-sm">
   <table class="table">
     <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
     </tr>
   </table>
 </div>
 
 <div class="table-responsive-md">
   <table class="table">
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
        </tr>   
   </table>
 </div>
 
 <div class="table-responsive-lg">
   <table class="table">     
      <tr>
         <td>1</td>
         <td>2</td>
         <td>3</td>
     </tr>
   </table>
 </div>
 
 <div class="table-responsive-xl">
   <table class="table">
     ...
   </table>
 </div>
                       </div>
                   </div>
                   <button class="btn btn-default" wire:click="isModalConsultar(0)">Cerrar</button>
                   <a wire:click="delete()" class="btn btn-default bg-red-400"><span class="glyphicon glyphicon-plus"
                      aria-hidden="true"></span>Eliminar</a>
               </div>
           </form>
       </div>
   </div>

   <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

       <a wire:click="isModalCreateChange()" class="btn btn-default"><span class="glyphicon glyphicon-plus"
               aria-hidden="true"></span> Cerrar</a>
       {{-- <x-guardar></x-guardar>
              <x-cerrar></x-cerrar> --}}
   </div>
</div>