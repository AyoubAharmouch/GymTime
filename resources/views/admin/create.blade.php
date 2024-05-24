



@extends('adminlte::page')

@section('title', 'add new subscriber')

@section('content_header')
@stop

@section('content')
<div class="form">
    
    <div class="container justify-content-center mt-3">
        @include('incs.flash')
    </div>
    
    <form action="{{ route('store') }}" method="post">
        <h2 class='text-center mb-5 mt-2 '>Add new subscriber </h2>  <hr>

        @csrf
        <fieldset>
            <legend >Fill in the personal information  </legend>
        <div class="bb">
            <div class="input-group my-1 ">
                <span class="input-group-text cont" id="basic-addon3">Last Name</span>
            <input  id='en' type="text" class="form-control " name="last_name" placeholder="Last name" value="{{ old('last_name') }}" required>
            </div>
            
            @error('last_name')
            <div class='text-danger a '>
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="bb ">
            <div class="input-group my-1">
            <span class="input-group-text cont" id="basic-addon3">First Name</span>  
                <input id="ice" type="text" class="form-control " name="first_name" placeholder="first name" value="{{ old('first_name') }}" required>
            </div>
            @error('first_name')
            <div class='text-danger a '>
                {{ $message }}
                <div class="item"></div>
            </div>
            @enderror
        </div>
        
        <div class="bb">
            <div class="input-group my-1 ">
                <span class="input-group-text cont" id="basic-addon3">sex</span>
                <input type="radio" class="form-radio" name="sex" id="" value="F">Female
                <input type="radio" class="form-radio" name="sex" id="" value="M">Male
            </div>
            
            @error('sex')
            <div class='text-danger a '>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="bb">
            <div class="input-group my-1 ">
                <span class="input-group-text cont" id="basic-addon3">  CIN</span>
            <input  id='en' type="text" class="form-control " name="cin" placeholder="K12****" value="{{ old('cin') }}" required>
            </div>
            
            @error('cin')
            <div class='text-danger a '>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="bb">
            <div class="input-group my-1 ">
                <span class="input-group-text cont" id="basic-addon3">date of birth</span>
            <input  id='en' type="date" class="form-control " name="birth" placeholder="23/05/2003" value="{{ old('birth') }}" required>
            </div>
            
            @error('birth')
            <div class='text-danger a '>
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="bb">
            <div class="input-group my-1">
                <span class="input-group-text cont" id="basic-addon3">Email</span>
            <input id="mail"  type="email" class="form-control " placeholder="email@gmail.com" name="email" value="{{old('email')  }}" required>
            </div>
             @error('email')
            <div class='text-danger a '>
                {{ $message }}
            </div><br>
            @enderror
            
        </div>
        <div class="bb">
            <div class="input-group my-1">
            <span class="input-group-text cont" id="basic-addon3  tell">Phone Number</span>

            <input id='tel' type="text" class="form-control " placeholder="0********/+212*****" name="phone" value="{{ old('phone') }}"
            oninput="this.value = this.value.replace(/[^0-9+]/g, '')" required>
            </div>
            @error('phone')
            <div class='text-danger a '>
                {{ $message }}
            </div><br>
            @enderror
        </div>
        <div class="bb">
            <div class="input-group my-1">
            <span class="input-group-text cont" id="basic-addon3">Adresse </span>
            <input id='ville' type="text" class="form-control" placeholder="rue numero ...." name="address" value="{{ old('address') }}" required>
            
            </div>@error('ville')
            <div class='text-danger a '>
                {{ $message }}
            </div><br>
            @enderror

        </div>
        <div class="bb">
            <div class="input-group my-1">
            <span class="input-group-text cont" id="basic-addon3">Type of abonement: </span>
            <select name="abonement" id="abonement" class="form-control status-select edit" value="{{ old('abonement') }}" required>
                <option value="Monthly">Monthly</option>
                <option value="3 Month">3 Month</option>
                <option value="6 Month">6 Month</option>
                <option value="Yearly">Yearly</option>
            </select>
            
            </div>@error('ville')
            <div class='text-danger a '>
                {{ $message }}
            </div><br>
            @enderror

        </div>
        
        <button class="button">Add </button>
    

</fieldset>
        
    </form>
</div>
@stop

@section('css')
<style>
    /* Hide the increment/decrement arrows */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield; /* Firefox */
    }
    button a{
        text-decoration: none;
        color:black;
    }
    .input-group-text{
        width: 30%;
    }

    .button {
  display: inline-block;
  position: relative;
  padding: 13px 20px;
  border: none;
  background: rgb(0, 57, 142);
  color: #ffffff;
  font-family: Arial, sans-serif;
  font-size: 16px;
  text-transform: uppercase;
  cursor: crosshair;
  overflow: hidden;
  border-radius: 8px;
}

.button:before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(to right, rgba(255, 255, 255, 0.14) 0%, rgba(255, 255, 255, 0.14) 50%, transparent 100%);
  transition: left 0.3s ease;
}

.button:hover:before {
  left: 100%;
}



</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')

@stop



