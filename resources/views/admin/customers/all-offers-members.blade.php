
  @extends('layouts.admin')


  @section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All Offers Members</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque 
                            a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">Food Items</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Members</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">I.D</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">E-Mail</th>
                                                 <th scope="col">Phone #</th>
                                                <th scope="col">Date Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                 <th scope="row">1</th>
                                                <td>Shavar Anson</td>
                                                <td>shav@burger.com</td>
                                                <td>214-340-9987</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                   </div>
               
           
  @endsection 





 