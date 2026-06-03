 <!DOCTYPE html>
 <html>

 <head>
     <title>Tutorial Laravel - www.malasngoding.com</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
 </head>

 <body>
     <div class="container-fluid">
         <form action="/formulir/proses" method="post">
             <div class="row">
                 <div class="col-3">
                     Nama :
                 </div>
                 <div class="col-9 ">
                     <input class="form-control" type="text" name="nama">
                 </div>
             </div>

             <form action="/formulir/proses" method="post">
    @csrf
             <div class="row">
                 <div class="col-3">
                     Umur :
                 </div>
                 <div class="col-9 ">
                     <input class="form-control" type="number" name="umur ">
                 </div>
             </div>


             <div class="row">
                 <div class="col-3">
                     Alamat :
                 </div>
                 <div class="col-9 ">
                     <input class="form-control" type="text" name="alamat">
                 </div>
             </div>

              <div class="row">
                 <div class="col-12">

             <input class="btn btn-primary"  type="submit" value="Simpan">
                 </div>
              </div>
         </form>
     </div>
 </body>

 </html>
