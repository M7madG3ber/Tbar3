@include("navbar")
<style>

b{
      color: #777;
      padding: ;
        font-size: 20px;
        
}
.img{
	border-radius: 50%;
	transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-duration: 167ms;
    display: inline-block;
    height: 50px;
    width: 50px;
    color: #c7d1d8;
    opacity: 1;
    position: relative;
    left: auto;
    top: -1px;
    margin-left: 0;
    -webkit-clip-path: none;
    clip-path: none;
    transform: scale(1);
}
</style>
<div class="container" style="padding:200px 20px;">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-6">
      <div class="panel panel-default" style='text-align: right;float: right;width: 100%;min-height: 250px'>
        <div class="panel-body">

           @foreach($data as $d)
           <div class="row">
               <div class="col-sm-10 "  style=" text-align: right;">
                 <a href="{{ url('/profile/'. $d->id )}}">
                   <span class="charity_name pull-right" style="font-size:11px"><b>{{$d->name}}</b></span>
                 </a>
               </div>
               <div class="col-sm-2 " style="padding-left: 5px;">
                 <a href="{{ url('/profile/'. $d->id )}}">
                   <img src="{{asset('avatar/'.$d->profile)}}" class="img-responsive img">
                 </a>
               </div>
         </div><br>
           @endforeach

       </div>
      </div>
    </div>
  </div>
</div>

@include("copy")
<script src="{{ url("/design/colo/js/jquery-3.2.1.min.js ")}}"></script>

<!-- For upload multiple images (fileinput plugin)-->
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ url("/design/colo/js/fileinput.js ") }}"></script>
<script src="{{ url("/design/colo/themes/fa/theme.js ") }}"></script>
