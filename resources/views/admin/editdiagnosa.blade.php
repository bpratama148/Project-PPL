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
                                    
                                    <li >
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
                                            <li class="nav-active">
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
                        <h2>Data Diagnosa</h2>
                    
                       
                    </header>

                    <section class="panel">
                            
                            <header class="page-header">
                        <h2>Edit</h2>
                    
                        
                    </header>
     

         
                     <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="panel-body">
                      <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                 
                                </div>

                                    
                                        <h2 class="panel-title">Edit Data Diagnosa</h2>
                                    </header>
                                    </header>

                            <div class="panel-body">
                                
                                    
                                     <form class="form-horizontal form-bordered"  method="POST" action="/diagnosa/{{$diagnosa->id}}/update" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="judul" >Diagnosa</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  id="nama"  value="{{$diagnosa->nama}}" 
                                                     name="nama" >
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Value</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="value"
                                                     value="{{$diagnosa->value}}"  name="value">
                                                </div>
                                            </div>
                                       
                                           
                                          
                                           
                                            

                                                <div class="form-group">
                                                <footer class="col-md-9 control-label">
                                        <button class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </footer>
                                     </div> 
                                    
                                </form>
                                </div>
                                </section>
                        </section>
                 @endsection