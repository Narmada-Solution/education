<?php
$id = Auth::user()->id;
$name = Auth::user()->name;
?>

@extends('layouts.masteruser')

@section('content')
   <main>
   <span class="flex items-center mb3 ba b--black-10 pa3 flex-grow-1">
   <span alt="Jignesh Desai" class="flex br-100 w3 h3 flex-shrink-0 overflow-hidden relative" style="background-color: indigo;color: white !important;padding-left: 13px;font-size: 34px;width: 45px;height: 45px;background-repeat: no-repeat;margin-right: 5px;padding-top: 5px;">{{ substr($name,0,1) }}</span>
   <a class="ba b--black-10 pa2 flex-grow-1 silver text pointer" data-toggle="modal" data-target="#myModal" >Create a post....</a>
   </span>
   </main>
@endsection

  
@section('script')
@endsection 