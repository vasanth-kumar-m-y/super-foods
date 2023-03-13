 @extends('layout')
@section('title') Super Foods @endsection
@section('keywords')   @endsection
@section('description')   @endsection
@section('content')
<div align="center" style="background:#1CD5E8;padding:20px;"> 
         <h3  class="black-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}">Admin Dashboard</a></h3>

        <p class="white-text" style="font-weight:bold;"> 

            <a href="{{url('admin-products')}}" class="badge badge-pill btn-outline-green     px-3 py-2">  <i class="fas fa-file-powerpoint"></i>  &nbsp; Show All Products</a> 
        
            <a href="{{url('admin-add-product')}}" class="badge badge-pill btn-outline-dark   px-3 py-2">   <i class="fas fa-plus"></i>  &nbsp; Add New Product</a> 
            <a href="{{url('admin-bin-products')}}" class="badge badge-pill btn-outline-danger px-3 py-2"><i class="fas fa-dumpster"></i> Recycle Bin</a>

        </p>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
  

</div>

 

<div class="container py-5">
    <p align="left">
        <i class="fas fa-edit"></i> Edit the Product
   </p>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
              <form method="POST" action="{{url('admin-product-update/'.$Products->id)}}" enctype="multipart/form-data">
                  @csrf
                  {{method_field('PUT')}}
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                      aria-selected="true">Home</a>
                  </li>
                   
                  <li class="nav-item">
                      <a class="nav-link" id="Images-tab" data-toggle="tab" href="#Images" role="tab" aria-controls="Images"
                        aria-selected="false">Images</a>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" id="SEO-tab" data-toggle="tab" href="#SEO" role="tab" aria-controls="SEO"
                      aria-selected="false">SEO</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="pstatus-tab" data-toggle="tab" href="#pstatus" role="tab" aria-controls="pstatus"
                        aria-selected="false">Delivery Charges & Product Status</a>
                    </li>
                  <li class="nav-item">
                      <a class="nav-link" id="Additional_Information-tab" data-toggle="tab" href="#Additional_Information" role="tab" aria-controls="Additional_Information"
                        aria-selected="false">Additional Information</a>
                    </li>
                  <!--  <li class="nav-item">
                      <a class="nav-link"     data-toggle="modal" data-target="#fullHeightModalRight">Product Attributes</a>
                    </li>-->
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                      <div class="row" style="padding: 30px;">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label> Product Name</label>
                                  <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$Products->name}}">
                              </div>
                          </div>
                          

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label> Custom URL(Slug)</label>
                                  <input type="text" class="form-control" name="url" placeholder="Custom URL" value="{{$Products->url}}">
                              </div>
                          </div>

                          <div class="col-md-12">
                              <div class="form-group">
                                  <label>Small Description</label>
                                  <textarea rows="4" class="form-control"  name="small_description" placeholder="Small Description About Product">{{$Products->description}}</textarea>
                              </div>
                          </div>

                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label>Priority</label>
                                  <input type="number" name="priority" min="0" class="form-control" value="{{$Products->priority}}">
                              </div>
                          </div>


                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label> Price</label>
                                  <input type="text" name="price" min="0" class="form-control" value="{{$Products->price}}">
                              </div>
                          </div>
                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label>Discount ( in terms of %)</label>
                                  <input type="number" name="Discount" min="0" class="form-control" value="{{$Products->discount}}">
                              </div>
                          </div>
  
                          <div class="col-md-6">
                            <div class="form-group">
                                <label>Rating</label>
                                <select class="form-control" name="rating">
                                    <option value="{{$Products->rating}}" disabled>{{$Products->rating}}</option>
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                      <option value="3">3</option>
                                       <option value="4">4</option>
                                        <option value="5">5</option>
                                </select> 
                            </div>
                        </div>
                          <div class="col-md-12">
                              <div class="form-group">
                              <button type="submit" class="btaobtn btaobtn-success">Update</button>
                              </div>
                          </div>



                      </div>



                  </div>
                

                 <div class="tab-pane fade" id="Images" role="tabpanel" aria-labelledby="Images-tab">
                     <div class="row px-5 py-3">
                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label>Product Image I</label>
                                  <input type="file" name="image1" class="form-control">
                                  <img src="{{asset('Uploads/Products/'.$Products->image1)}}" width="50px;"  alt="{{$Products->image1}}" />
                              </div>
                          </div>
                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label>Product Image II</label>
                                  <input type="file" name="image2" class="form-control">
                                  
                                  <img src="{{asset('Uploads/Products/'.$Products->image2)}}" width="50px;"  alt="{{$Products->image2}}" />
                              </div>
                          </div>
                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label>Product Image III</label>
                                  <input type="file" name="image3" class="form-control">
                                  
                                  <img src="{{asset('Uploads/Products/'.$Products->image3)}}" width="50px;"  alt="{{$Products->image3}}" />
                              </div>
                          </div>
                          <div class="col-md-6"   >
                              <div class="form-group">
                                  <label>Product Image IV</label>
                                  <input type="file" name="image4" class="form-control">
                                  
                                  <img src="{{asset('Uploads/Products/'.$Products->image4)}}" width="50px;"  alt="{{$Products->image4}}" />
                              </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                            <button type="submit" class="btaobtn btaobtn-success">Update</button>
                            </div>
                        </div>
                     </div>

                 </div>

                 <div class="tab-pane fade" id="SEO" role="tabpanel" aria-labelledby="SEO-tab">
                      <div class="row" style="padding:30px;">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Meta Title</label>
                              <textarea rows="4" class="form-control"  name="meta_title" placeholder="Meta Title">{{$Products->title}}</textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">

                              <label>Meta Description</label>
                              <textarea rows="4" class="form-control"  name="meta_description" placeholder="Meta Description">{{$Products->meta_description}}</textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">

                              <label>Meta Keywords</label>
                              <textarea rows="4" class="form-control"  name="meta_keyword" placeholder="Meta Keywords">{{$Products->keywords}}  </textarea>
                          </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                        <button type="submit" class="btaobtn btaobtn-success">Update</button>
                        </div>
                    </div>

                      </div>
                  </div>
                   <div class="tab-pane fade" id="pstatus" role="tabpanel" aria-labelledby="pstatus-tab">

                      <div class="row" style="padding:30px;">

                         
                               <div class="col-md-6">
                              <div class="form-group">
                                  <label> Delivery Charges</label>
                                  <input type="number" class="form-control" name="delivery_charges"  required min="1" placeholder="Delivery Charges " value="{{$Products->delivery_charges}}">
                              </div>
                          </div>
                            
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Shop/Hide</label>
                                      @if($Products->status==1)
                                         <input type="checkbox"  name="status"  checked>
                                      @else
                                         <input type="checkbox"  name="status" >
                                      @endif
                                     
                                  </div>
                                  <p>
                                      Note: If you check mark then, the product will be displayed to the public
                                  </p>
                              </div>
                            
                              <div class="col-md-12">
                                <div class="form-group">
                                <button type="submit" class="btaobtn btaobtn-success">Update</button>
                                </div>
                            </div>
                      </div>
                  </div>
                    <div class="tab-pane fade" id="Additional_Information" role="tabpanel" aria-labelledby="Additional_Information-tab">
                        <div class="row" style="padding:30px;">
                            <p>The following content will be displated in the product page</p>
                             <div class="page-wrapper box-content">

                                <textarea class="content" name="additional_info">{{$Products->additional_info}}</textarea>
                    
                            </div>
                            <div class="col-md-12">
                             <button type="submit" class="btaobtn btaobtn-success">Update</button>
                             </div>
                    
                            <script>
                            $(document).ready(function() {
                                $('.content').richText();
                            });
                            </script>
                        </div>
                    </div>
                     


                </div>



                              </form>

              </div>
        </div>
    </div>
</div>
<hr>
@endsection