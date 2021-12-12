@extends('layouts.app')

@section('content')
    
    {{-- <main> --}}
    
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-white">Your Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label text-white">Your Message</label>
              <textarea class="form-control" id="exampleInputPassword1" style="height: 200px"></textarea>
            </div>
            
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </form>

    {{-- </main> --}}

@endsection