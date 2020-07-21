@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{'updatePost'}}" method="post">

                        <div class="card-header">Content manager

                            <input type="submit" class="btn btn-dark float-right" title="Save content changes"
                                   value="Save">

                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                        </div>
                        @csrf
                        <div class="col-md-12">
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input name="index" type="checkbox"
                                               data-toggle="toggle" {{$post->index?"checked":""}}>
                                        Content no-index
                                    </label>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>

                                <textarea class="description" name="description">{{$post->description}}</textarea>
                                <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
                                <script>
                                    tinymce.init({
                                        selector: 'textarea.description',
                                        height: 300,
                                        plugins: "link",
                                    });
                                </script>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Meta title</span>
                                    </div>
                                    <input name="meta_title" type="text" class="form-control" placeholder="title"
                                           aria-describedby="basic-addon1" value="{{$post->meta_title}}">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Meta Desc</span>
                                    </div>
                                    <input name="meta_description" type="text" class="form-control"
                                           placeholder="Description" aria-describedby="basic-addon1"
                                           value="{{$post->meta_description}}">
                                </div>
                                {{--                            <div class="form-group">--}}
                                {{--                                <label for="comment">Facebook advertising pixel:</label>--}}
                                {{--                                <textarea class="form-control" rows="5" id="comment"></textarea>--}}
                                {{--                            </div>--}}
                                {{--                            <div class="form-group">--}}
                                {{--                                <label for="comment">Google analystic tag:</label>--}}
                                {{--                                <textarea class="form-control" rows="5" id="comment"></textarea>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <form action="{{'updateSetting'}}" method="post">
                        <div class="card-header">Portal setting

                            <input type="submit" class="btn btn-dark float-right" title="Save portal setting"
                                   value="Save">

                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                        </div>
                        @csrf
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email (contact us)</span>
                                </div>
                                <input name="email_contact" type="text" class="form-control" placeholder="Email"
                                       aria-describedby="basic-addon1" value="{{$setting->email_contact}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Facebook account</span>
                                </div>
                                <input name="facebook_id" type="text" class="form-control" placeholder="Facebook"
                                       aria-describedby="basic-addon1" value="{{$setting->facebook_id}}">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Twitter account</span>
                                </div>
                                <input name="twitter_id" type="text" class="form-control"
                                       placeholder="Twitter" aria-describedby="basic-addon1"
                                       value="{{$setting->twitter_id}}">
                            </div>
                            <div class="form-group">
                                <label for="comment">Facebook advertising pixel:</label>
                                <textarea name="facebook_pixel" class="form-control" rows="5" id="comment">{{$setting->facebook_pixel}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="comment">Google analystic tag:</label>
                                <textarea name="google_analytics" class="form-control" rows="5" id="comment">{{$setting->google_analytics}}</textarea>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
