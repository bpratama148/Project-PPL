@extends('Layout/admin')

@section('container')
<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                    <li  >
                                        <a href="/admin">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                            <span>Data Forum</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a href="/koi-admin">
                                            
                                            <i class="fa fa-drupal" aria-hidden="true"></i>
                                            <span>Data Koi</span>
                                        </a>
                                    </li>
                                   
                                    <li class="nav-active" >
                                        <a href="/admin-pengguna">
                                            <i class="fa  fa-user" aria-hidden="true"></i>
                                            <span>Data Pengguna</span>
                                        </a>
                                            
                                    </li>
                                    <li  class="nav-parent">
                                        <a>
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                            <span>Data Analisa Penyakit Koi </span>
                                        </a>
                                        <ul class="nav nav-children">
                                            
                                             <li>
                                                <a href="/admin-gejala">
                                                     Data Gejala
                                                </a>
                                            </li>
                                            <li>
                                               <a href="/admin-diagnosa">
                                                     Data Diagnosa
                                                </a>
                                            </li>
                                                                           
                                        </ul>
                                    </li>
                                    
                                    <li  >
                                        <a href="/admin-galeri">
                                            <i class="fa  fa-file-image-o" aria-hidden="true"></i>
                                            <span>Data Postingan Galeri</span>
                                        </a>
                                        
                                    </li>
                                    
                                    
                                    
                                </ul>
                            </nav>
                
                            
                
                </aside>
               <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Data Pengguna</h2>
                    
                       
                    </header>

                    <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Data Pengguna</h2>
                            </header>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-md" >
                                           
                                            </div>
                                           <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                    
                                    
                                        <tr>
                                            
                                            <th>Id Pengguna</th>
                                            <th>Nama Pengguna</th>
                                            <th>Email</th>
                                            <!-- <th>Password</th>  -->
                                            <!-- <th>Created_at</th>  -->
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach( $pengguna as $pengguna)     
                                        <tr class="gradeX">
                                            <td>{{ $pengguna->id }} </td>
                                           
                                            <td>{{ $pengguna->name }}</td>
                                            <td>{{ $pengguna->email }}</td>
                                            <!-- <td>{{ $pengguna->password }}</td> -->
                                            <!-- <td>{{ $pengguna->created_at }}</td>  -->
                                         
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        </section>
                        
                        


                    @endsection
                        
                        


                  