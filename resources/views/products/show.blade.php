@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-5">
                <div class="card-header">
                    <h1>Product name</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="https://picsum.photos/240/160/?random" alt="image" style="max-width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>informatin 01</li>
                                <li>informatin 02</li>
                                <li>informatin 03</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-5">
                <div class="card-header">
                    <h2>Reviews</h2>
                </div>

                <div class="card-body">
                    <div class="row mt-3 mb-3">
                        <div class="col-md-2">
                            <img src="https://picsum.photos/240/160/?random" alt="image" style="max-width: 100%;">
                        </div>
                        <div class="col-md-10">
                            <p class="uname"><span>Jane</span> <span>★★★★☆</span></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos, non consectetur voluptates nostrum tenetur! Eius voluptas iste quae ab eaque blanditiis. Tenetur debitis possimus, quam tempore voluptate quisquam officia!</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <img src="https://picsum.photos/240/156/?random" alt="image" style="max-width: 100%;">
                        </div>
                        <div class="col-md-10">
                            <p class="uname"><span>Jane</span> <span>★★★★☆</span></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos, non consectetur voluptates nostrum tenetur! Eius voluptas iste quae ab eaque blanditiis. Tenetur debitis possimus, quam tempore voluptate quisquam officia!</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <img src="https://picsum.photos/240/162/?random" alt="image" style="max-width: 100%;">
                        </div>
                        <div class="col-md-10">
                            <p class="uname"><span>Jane</span> <span>★★★★☆</span></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos, non consectetur voluptates nostrum tenetur! Eius voluptas iste quae ab eaque blanditiis. Tenetur debitis possimus, quam tempore voluptate quisquam officia!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection