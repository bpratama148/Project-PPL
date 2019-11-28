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
                                            <li class="nav-active" >
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
                        <h2>Data Gejala</h2>
                    
                       
                    </header>

                    <section class="panel">
                            
                            <header class="page-header">
                        <h2>Tambah</h2>
                    
                        
                    </header>
     

         
                     <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="panel-body">
                      <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                 
                                </div>

                                    
                                        <h2 class="panel-title">Tambah Data Gejala</h2>
                                    </header>
                                    </header>

                            <div class="panel-body">
                                
                                    
                                     <form class="form-horizontal form-bordered"  method="POST" action="/gejalacrud" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="nama" >Gejala</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  id="nama"   
                                                     name="nama" >
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Jenis Gejala</label>
                                                <div class="col-md-6">
                                                    <select class="custom-select" name="jenis">
                                             <optgroup label="Letak Gejala">
                                                 <option selected>Pilih...</option>
                                                 <option value="Sisik">Sisik </option>
                                                 <option value="Sirip dan Ekor ">Sirip dan Ekor </option>
                                                 <option value="Kondisi dan Bentuk Tubuh">Kondisi dan Bentuk Tubuh</option>
                                                 <option value="Sikap">Sikap</option>
                                                 <option value="Mata">Mata</option>
                                                 <option value="Gejala Lain">Gejala Lain</option>
                                             </optgroup>
                                             </select>
                                                </div>
                                            </div>
                                         
                                          
                                              <div class="form-group">
                                                <label class="col-md-3 control-label" >Value</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" id="value"
                                                     name="value"  > 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >foto</label>
                                                <div class="col-md-6">
                                                  <input type="file" class="form-control" id="foto"
                                                     name="foto"  >  
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