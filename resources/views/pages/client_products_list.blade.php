@extends('layouts.App')

@section('title', 'Shop')

@section('shopify-section-main')

        @include('blocks.products-main')
@endsection

@section('scripts')
<script>
            document.querySelector('.imgs').classList.add("active");
            $('.imgs').bind('click', function (e) {
                e.preventDefault();
                let value = $(this).attr('data-image');
                let element = $(this).closest('.proBoxImage').find('.img-responsive');
                document.querySelectorAll('.imgs').forEach(element =>{
                       element.classList.remove("active");
                }); 
               $(this).get(0).classList.add("active"); 
                element.attr('src',value);
                });

    </script>
@endsection