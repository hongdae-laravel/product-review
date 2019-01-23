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
                    <div class="row mb-3">
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
                    <div class="row">
                        <div class="card m-2">
                            <div class="card-header">
                                <h2>Review</h2>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3 mb-3">
                                    <form>
                                        <h3>Write your review</h3>
                                        <div class="form-group">
                                            <label for="formTitleInput">Title</label>
                                            <input type="text" class="form-control" id="formTitleInput" placeholder="Example input">
                                        </div>
                                        <div class="form-group">
                                            <label for="formContentInput">Content</label>
                                            <textarea class="form-control" id="formContentInput" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </form>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <h3>Reviews</h3>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-md-2">
                                        <img src="https://picsum.photos/240/162/?random" alt="image" style="max-width: 100%;">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="col-md-12">
                                            <span class="uname">Jane</span>
                                            <span class="stars">★★★★☆</span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Edit</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos, non consectetur voluptates nostrum tenetur! Eius voluptas iste quae ab eaque blanditiis. Tenetur debitis possimus, quam tempore voluptate quisquam officia!</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img src="https://picsum.photos/240/164/?random" alt="image" style="max-width: 100%;">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="col-md-12">
                                            <span class="uname">Jane</span>
                                            <span class="stars">★★★★☆</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos, non consectetur voluptates nostrum tenetur! Eius voluptas iste quae ab eaque blanditiis. Tenetur debitis possimus, quam tempore voluptate quisquam officia!</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-2">
                                        <img src="https://picsum.photos/240/158/?random" alt="image" style="max-width: 100%;">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="col-md-12">
                                            <span class="uname">Jane</span>
                                            <span class="stars">★★★★☆</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dignissimos, non consectetur voluptates nostrum tenetur! Eius voluptas iste quae ab eaque blanditiis. Tenetur debitis possimus, quam tempore voluptate quisquam officia!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection