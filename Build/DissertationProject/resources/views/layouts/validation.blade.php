{{--used to call in the validation errors within each of the forms--}}
{{--counts to see if any errors have been picked up by the controller--}}
@if (count($errors))
     <div class="alert">
             <h2 class="alert_heading align ">
                 Problems when submitting form
             </h2>


         <ul class="alert_ul">
             {{--for each used to assign each error with a li style element--}}
             @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
             @endforeach
         </ul>
    </div>
@endif