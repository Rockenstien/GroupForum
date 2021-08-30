@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-2">
        <div class="col-md-10">
            <div class="cover-image">
                <img src="https://png.pngtree.com/background/20210711/original/pngtree-c4d-neon-cool-background-picture-image_1113037.jpg" alt="cover image">
            </div>
            <div class="jumbotron">
                <div class="group-icon">
                    <img src="https://styles.redditmedia.com/t5_2qrzu/styles/communityIcon_9uqx3fcjr4g51.jpeg" alt="group icon">
                </div>
                <h4 class="display-5">g/Astronomy</h4>
                <p class="lightweight_p" style="margin-left: 41px;">503 Subscriptions</p>
                <hr class="my-4">
                <p>(Used for group description) It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Subscribe</a>
                  <a class="btn btn-primary btn-lg" href="#" role="button">Create a Post</a>
                </p>
                <div id="make-post">
                  <textarea name="ed" id="ed" class="feature-editor" cols="50" rows="50"></textarea>
                  <button class="btn btn-primary mt-2">Post</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-2">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fab fa-hotjar"></i> Hot</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-sun"></i> New</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-fist-raised"></i> Best</a>
            </li>
        </ul>
    </div>
    <x-post />
    <x-post_modal />
</div>
@endsection
