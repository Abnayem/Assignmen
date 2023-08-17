@extends('layout')

    <h1 class="mb10">Manage Contact</h1>
    <a href="{{url('admin/size')}}">
        <button type="button" class="btn btn-success">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{route('size.manage_size_process')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="size" class="control-label mb-1">Name</label>
                                                <input id="size" value="{{$size}}" name="size" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('size')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="control-label mb-1">Email</label>
                                                <input id="email" value="{{$email}}" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('email')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="massage" class="control-label mb-1">Massage</label>
                                                <input id="massage" value="{{$massage}}" name="massage" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                @error('massage')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}		
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    Submit
                                                </button>
                                            </div>
                                            <input type="hidden" name="id" value="{{$id}}"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                            
                            
                            
                            
                        </div>
                        
        </div>
    </div>
                        
