@extends('sock.master')

@section('content')

       <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="images/basketball.png" alt="img"/></figure>
                    <h3> $<strong class="price_text">50</strong></h3>
                     <h4>basket ball</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="images/t-shirt.png" alt="img"/ ></figure>
                    <h3> $<strong class="price_text">50</strong></h3>
                     <h4> T-Shirt</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                  <div class="sport_product">
                     <figure><img src="images/game.png" alt="img"/></figure>
                     <h3> $<strong class="price_text">50</strong></h3>
                     <h4>Game</h4>
                  </div>
               </div>
               
               <section>
                  <div class = "container tm-position-relative">
                      <div class = "row">
                          <table class = "table table-bordered">
                              <thead>
                                  <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Desc</th>
                                      <th scope="col">Price ($)</th>
                                  </tr>
                              </thead>
                              <tbody>
                                      @foreach ($daftar as $d)
                                      <tr>
                                          <td>{{$d ->id}}</td>
                                          <td>{{$d ->name}}</td>
                                          <td>{{$d ->desc}}</td>
                                          <td>{{$d ->price}}</td>
                                      </tr>
                                      @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </section>
            
            </div>
          </div>
         </div>
      <!-- end plant -->

@endsection