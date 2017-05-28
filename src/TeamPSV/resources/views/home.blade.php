@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    You are logged in!<br>
                    Your Role is: {{\Illuminate\Support\Facades\Auth::user()->role->type}} <br>
                </div>

                <div class="panel-body">

                    CHOOSE CATEGORY:<br><br>

                    <!--<input type="radio" id="rad1" name="radioDugme" value="text">&nbsp;Text Tutorials<br>-->
                    <!--<input type="radio" id="rad2" name="radioDugme" value="video">&nbsp;Video Tutorials<br><br>-->

                    <div class="col-md-10">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td align="center">C++</td>
                                <td align="center">Java</td>
                                <td align="center">PHP</td>
                                <td align="center">XML</td>
                            </tr>
                            <tr>
                                <td><a href="#cppModal" role="button" data-toggle="modal"><img src="img/c.png" class="img-responsive img-rounded"></a></td>
                                <td><a href="#javaModal" role="button" data-toggle="modal"><img src="img/java.jpg" class="img-responsive img-rounded"></a></td>
                                <td><a href="#phpModal" role="button" data-toggle="modal"><img src="img/php.png" class="img-responsive img-rounded"></a></td>
                                <td><img src="img/xml.png" class="img-responsive img-rounded"></td>
                            </tr>
                            <tr>
                                <td align="center">JavaScript</td>
                                <td align="center">Node JS</td>
                                <td align="center">HTML</td>
                                <td align="center">JQuery</td>
                            </tr>
                            <tr>
                                <td><img src="img/javascript.png" class="img-responsive img-rounded"></td>
                                <td><img src="img/nodejs.png" class="img-responsive img-rounded"></td>
                                <td><img src="img/html.png" class="img-responsive img-rounded"></td>
                                <td><img src="img/jquery.png" class="img-responsive img-rounded"></td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="modal fade" id="cppModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Choose tutorials:</h3>
                                    </div>

                                    <!-- body (form) -->
                                    <div class="modal-body">
                                        <a href="text-posts/cat/1">Text Tutorials</a><br>
                                        <a href="video-posts/cat/1">Video Tutorials</a>
                                    </div>
                                    <!-- button -->
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="javaModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Choose tutorials:</h3>
                                    </div>

                                    <!-- body (form) -->
                                    <div class="modal-body">
                                        <a href="text-posts/cat/2">Text Tutorials</a><br>
                                        <a href="video-posts/cat/2">Video Tutorials</a>
                                    </div>
                                    <!-- button -->
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="phpModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Choose tutorials:</h3>
                                    </div>

                                    <!-- body (form) -->
                                    <div class="modal-body">
                                        <a href="text-posts/cat/3">Text Tutorials</a><br>
                                        <a href="video-posts/cat/3">Video Tutorials</a>
                                    </div>
                                    <!-- button -->
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
