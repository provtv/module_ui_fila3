<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
@php
>>>>>>> 0238e98d (.)
=======
@php
>>>>>>> da8a6bc2 (.)
=======
@php
>>>>>>> d3afd1fe (.)
    $data=Arr::get($block,'data.gallery.0',null);
    if($data==null){
      return ;
    }    
@endphp

<div>
  @include('ui::components.blocks.'.$tpl.'.'.$data['version'])
</div>
