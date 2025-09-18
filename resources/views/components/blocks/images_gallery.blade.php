<<<<<<< HEAD
<<<<<<< HEAD
=======
@php
>>>>>>> 0238e98d (.)
=======
@php
>>>>>>> da8a6bc2 (.)
    $data=Arr::get($block,'data.gallery.0',null);
    if($data==null){
      return ;
    }    
@endphp

<div>
  @include('ui::components.blocks.'.$tpl.'.'.$data['version'])
</div>
