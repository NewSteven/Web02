
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Datatables</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Ejemplo DataTable Programacion Bajo Web</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="clientes" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>identificacion</td>
                                    <td>nombre</td>  
                                    <td>apellido</td>

                                    
                               </tr>  
                          </thead>  
                                                    
                              
                                   <tr>                                     
                                    <td> 1065234234 </td>  
                                    <td> ana maria  </td>  
                                    <td> melo  </td>  


                                     </tr> 

                                   <tr>
                                     
                                      <td> 1065848314 </td>  
                                    <td> angy  </td>  
                                    <td> de los reyes  </td>  

                                   </tr>



                                   <tr>
                                     
                                      <td> 1065848314 </td>  
                                    <td> jose ivan  </td>  
                                    <td> ortiz peña  </td>  

                                   </tr>



                                   <tr>
                                     
                                      <td> 1065848314 </td>  
                                    <td> arnold  </td>  
                                    <td> fragoso  </td>  

                                   </tr>
                                      
                             
                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#clientes').DataTable();

 });  
 </script>  