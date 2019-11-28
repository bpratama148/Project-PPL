@extends('Layout/admin')

@section('container')
<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                    <li >
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
                                            <li>
                                               <a href="/admin-diagnosa">
                                                     Data Diagnosa
                                                </a>
                                            </li>
                                                                                   
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-active"   >
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
                        <h2>Data Post Gallery</h2>
                    
                       
                    </header>

                    <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Gallery</h2>
                            </header>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-md" >
                                           
                                            </div>
                                           <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                    
                                    
                                        <tr>
                                            <th>Id Forum</th>
                                            <th>Id Pengguna</th>
                                            <th>Nama Pengguna</th>
                                         
                                            <th>Deskripsi</th> 
                                            <th>Gambar</th> 
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach( $galeri as $galeri)     
                                        <tr class="gradeX">
                                            <td>{{ $galeri->id }} </td>
                                            <td>{{ $galeri->id_pengguna }}</td>
                                            <td>{{ $galeri->nama }}</td>
                                           
                                            <td>{{ $galeri->deskripsi }}</td>
                                            <td>{{ $galeri->gambar }}</td> 
                                            <td class="actions">
                                                          
                                                 <a href="/galeri/{{$galeri->id}}/delete" ><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        </section>
                        
                        


                    @endsection
                        
                        


                  