@extends('main')

@section('title','Data Harga')


    

@section('content')
<div class="row m-2">
    <!-- /# column -->
    <div class="col-lg-12">
        <h4 class="text-center">Harga Bitcoint Hari Ini</h4> 
        <br>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <span class="text-primary"></span>       
                </div>
              
                <div class="table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Uang</th>
                                <th>Harga Beli Bitcoint</th>
                                <th>Harga Jual Bitcoint</th>
            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $dataharga)     
                        <tr>
                            <th scope="row">1</th>
                            <td>Dolar Australia</td>
                            <td>{{$dataharga['buy']}}</td>
                            <td>{{$dataharga['sell']}}</td>
                         
                        </tr>
                        @endforeach   
                        @foreach ($data2 as $dataharga2)     
                        <tr>
                            <th scope="row">2</th>
                            <td>Euro Eropa</td>
                            <td>{{$dataharga2['buy']}}</td>
                            <td>{{$dataharga2['sell']}}</td>
                         
                        </tr>
                        @endforeach  
                        @foreach ($data3 as $dataharga3)     
                        <tr>
                            <th scope="row">3</th>
                            <td>Poundsterlling Inggris</td>
                            <td>{{$dataharga3['buy']}}</td>
                            <td>{{$dataharga3['sell']}}</td>
                           
                          
                        </tr>
                        @endforeach  
                        @foreach ($data4 as $dataharga4)     
                        <tr>
                            <th scope="row">4</th>
                            <td>Yen Jepang</td>
                            <td>{{$dataharga4['buy']}}</td>
                            <td>{{$dataharga4['sell']}}</td>
                          
                           
                        </tr>
                        @endforeach  
                        @foreach ($data5 as $dataharga5)     
                        <tr>
                            <th scope="row">5</th>
                            <td>Dolar Amerika</td>
                            <td>{{$dataharga5['buy']}}</td>
                            <td>{{$dataharga5['sell']}}</td>
                           
                          
                        </tr>
                        @endforeach  
                        </tbody>
                    </table>
                </div>
            
                

                    
                    
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>
@endsection
