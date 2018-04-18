{{--used to call in the validation errors within each of the forms--}}
{{--counts to see if any errors have been picked up by the controller--}}
@if (count($errors))
     <div class="alert alert-danger">
         <ul>
             {{--for each used to assign each error with a li style element--}}
             @foreach($errors->all() as $error)
                 <li>{{$error}}</li>
             @endforeach
         </ul>
    </div>
@endif