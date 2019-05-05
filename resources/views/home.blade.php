@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1>Internet Programming Blog</h1>
    <p>Do your job, get A+</p>
  </div>
</div>
<h1 class="sofia">SVG animation</h1>
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
<g>

	<path id="greenphone" class="phone" d="M25.302,0H9.698c-1.3,0-2.364,1.063-2.364,2.364v30.271C7.334,33.936,8.398,35,9.698,35h15.604
		c1.3,0,2.364-1.062,2.364-2.364V2.364C27.666,1.063,26.602,0,25.302,0z M15.004,1.704h4.992c0.158,0,0.286,0.128,0.286,0.287
		c0,0.158-0.128,0.286-0.286,0.286h-4.992c-0.158,0-0.286-0.128-0.286-0.286C14.718,1.832,14.846,1.704,15.004,1.704z M17.5,33.818
		c-0.653,0-1.182-0.529-1.182-1.183s0.529-1.182,1.182-1.182s1.182,0.528,1.182,1.182S18.153,33.818,17.5,33.818z M26.021,30.625
        H8.979V3.749h17.042V30.625z"/>
</g>
<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="360 8.4 9.5" to="0 8.4 9.5" dur="3s" additive="sum" repeatCount="indefinite" />
<animateTransform attributeName="transform"
             type="scale"
             additive="sum" 
             from="0.2 0.2"
             to="1 1"
             begin="0s"
             dur="10s"
             repeatCount="indefinite"
        /></svg>
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
<g>

	<path id="redphone" class="phone" d="M25.302,0H9.698c-1.3,0-2.364,1.063-2.364,2.364v30.271C7.334,33.936,8.398,35,9.698,35h15.604
		c1.3,0,2.364-1.062,2.364-2.364V2.364C27.666,1.063,26.602,0,25.302,0z M15.004,1.704h4.992c0.158,0,0.286,0.128,0.286,0.287
		c0,0.158-0.128,0.286-0.286,0.286h-4.992c-0.158,0-0.286-0.128-0.286-0.286C14.718,1.832,14.846,1.704,15.004,1.704z M17.5,33.818
		c-0.653,0-1.182-0.529-1.182-1.183s0.529-1.182,1.182-1.182s1.182,0.528,1.182,1.182S18.153,33.818,17.5,33.818z M26.021,30.625
        H8.979V3.749h17.042V30.625z"/>
</g>
<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="360 8.4 9.5" to="0 8.4 9.5" dur="3s" additive="sum" repeatCount="indefinite" />
<animateTransform attributeName="transform"
             type="scale"
             additive="replace" 
             from="0.2 0.2"
             to="1 1"
             begin="0s"
             dur="10s"
             repeatCount="indefinite"
        /></svg>
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="200px" height="200px" viewBox="0 0 35 35" style="enable-background:new 0 0 35 35;" xml:space="preserve">
<g>

	<path id="bluephone" class="phone" d="M25.302,0H9.698c-1.3,0-2.364,1.063-2.364,2.364v30.271C7.334,33.936,8.398,35,9.698,35h15.604
		c1.3,0,2.364-1.062,2.364-2.364V2.364C27.666,1.063,26.602,0,25.302,0z M15.004,1.704h4.992c0.158,0,0.286,0.128,0.286,0.287
		c0,0.158-0.128,0.286-0.286,0.286h-4.992c-0.158,0-0.286-0.128-0.286-0.286C14.718,1.832,14.846,1.704,15.004,1.704z M17.5,33.818
		c-0.653,0-1.182-0.529-1.182-1.183s0.529-1.182,1.182-1.182s1.182,0.528,1.182,1.182S18.153,33.818,17.5,33.818z M26.021,30.625
        H8.979V3.749h17.042V30.625z"/>
</g>
<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 8.4 9.5" to="360 8.4 9.5" dur="3s" additive="sum" repeatCount="indefinite" />
<animateTransform attributeName="transform"
             type="scale"
             additive="sum" 
             from="0.2 0.2"
             to="1 1"
             begin="0s"
             dur="10s"
             repeatCount="indefinite"
        /></svg>
<h1>Backend API</h1>
<img src={{ $json }}>
<h1>Frontend API</h1>
<div id="root"></div>
@endsection
